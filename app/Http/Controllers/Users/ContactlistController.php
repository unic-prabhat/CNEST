<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ContactList;
use App\User;
use Ap\Notification;

class ContactlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('User.createContact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
       'first_name'=>'required|max:8',
       'last_name'=>'required',
       'email'=>'required',
       'phone_number'=>'required',
       'company_name'=>'required'
     ]);


    $user = new ContactList;
    $user->email= $request->input('email');
    $user->first_name= $request->input('first_name');
    $user->last_name= $request->input('last_name');
    $user->phone_number= $request->input('phone_number');
    $user->website_url= $request->input('website_url');
    $user->company_name= $request->input('company_name');
    $user->country= $request->input('country');
    $user->generated_by= $request->input('generated_by');
    $user->lead_owner= $request->input('lead_owner');
    return $user->save();

    return redirect('/User')->with('message','User Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $todo = ContactList::find($id);
      return view('User.viewContact')->with('data', $todo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $todo = ContactList::find($id);
      return view('User.editContact')->with('data', $todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $user = ContactList::find($id);
      $user->email= $request->input('email');
      $user->first_name= $request->input('first_name');
      $user->last_name= $request->input('last_name');
      $user->phone_number= $request->input('phone_number');
      $user->website_url= $request->input('website_url');
      $user->company_name= $request->input('company_name');
      $user->country= $request->input('country');
      $user->contact_lead_status= $request->input('contact_lead_status');
      // $user->generated_by= $request->input('generated_by');
      // $user->lead_owner= $request->input('lead_owner');
      $user->save();

      return redirect('/User')->with('message','Successfully Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = ContactList::find($id);
      $user->delete();

      return redirect('/User')->with('message','Successfully Deleted.');
    }
}
