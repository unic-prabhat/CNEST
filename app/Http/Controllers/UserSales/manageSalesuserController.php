<?php

namespace App\Http\Controllers\UserSales;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;

class manageSalesuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('UserSales.allsalesuser');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      return view('UserSales.addsalesuser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      if(User::where('colortype',$request->input('colortype'))->first()){

        return redirect()->back()->with('colorflash', 'This Color Already exist')->withInput();;

      }else if(User::where('email',$request->input('email'))->first()){

         return redirect()->back()->with('emailflash', 'This Email Already exist, Try Another')->withInput();;

      }else{

        $data=new User();
        $data->name=$request->input('name');
        $data->username=$request->input('username');
        $data->email=$request->input('email');
        $data->isAdmin=1;
        $data->userrole=$request->input('userrole');
        $data->colortype=$request->input('colortype');
        $data->acinstatus=$request->input('acinstatus');
        $data->password=Hash::make($request->input('password'));
        $data->save();
        return redirect('manageuser');

      }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $alluser=User::find($id);
      return view('UserSales.viewallsalesuser',compact('alluser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user=User::find($id);
      return view('UserSales.editsalesuser',compact('user'));
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
     $data=User::find($id);
     $pass=$request->input('password');
     $colortype=$request->input('colortype');
     
     if($pass==''){
       $data->name=$request->input('name');
       $data->username=$request->input('username');
       $data->email=$request->input('email');
       $data->userrole=$request->input('userrole');
       $data->acinstatus=$request->input('acinstatus');
       $data->save();

     }else{

       $data->name=$request->input('name');
       $data->username=$request->input('username');
       $data->email=$request->input('email');
       $data->userrole=$request->input('userrole');
       $data->password=Hash::make($request->input('password'));
       $data->acinstatus=$request->input('acinstatus');
       $data->save();

     }

     return redirect('manageuser');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function deletenow($id){
      $delId=User::find($id)->delete();
      $msg='Success';
      return redirect('manageuser');
    }

    public function activeinactive($id){
      echo $id;
    }
}
