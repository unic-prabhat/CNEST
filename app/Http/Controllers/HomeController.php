<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ContactList;
use App\User;
use App\Lead;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
             return view('crm_new.dashboard');
        // return view('home');

        // if(Auth::user()->admin_type == 'Super Admin'){

        //             $todos = Lead::all()->where('generated_by',auth()->user()->username);
        //       //$todos = ContactList::all()->where('generated_by', Auth::user()->username);
        //       $todos = Lead::latest()->paginate(6);
        //       // return view('UserSuperAdmin.home')->with('datas',$todos);


        //     //   $todos = DB::table('contact_lists')->orderBy('id', 'desc')->paginate(10);
        //     //   return view('UserSuperAdmin.home', ['datas' => $todos]);
        //     $users = User::get();
        //       return view('crm_new.index',compact('users','todos'));


        // }elseif(Auth::user()->admin_type == 'Admin'){
        //       return view('UserAdmin.home');
        // }else{

        //       $username = Auth::user()->username;
        //       $data = DB::table('contact_lists')->where('generated_by', $username)->get();
        //       return view('User.home')->with('datas',$data);
        // }
        // echo Auth::user()->id;




    }

    public function allLeads()
    {
        if(auth()->user()->isAdmin == 1)
        {
        $leads = Lead::latest()->get();
        return view('crm_new.index',compact('leads'));
        }
        else
        {
            $leads = Lead::latest()->where('user_id',auth()->user()->id)->get();
            return view('crm_new.index',compact('leads'));
        }
    }


     public function fetchpopupcall($id){


      $todo = Lead::where('id',$id)->first();
      return view('crm_new._fetchCallPopup',compact('todo'));

    }



    public function weeklylead(){
      $wleads = Lead::whereBetween('created_at', [Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()])->get();
      return view('crm_new.index',compact('wleads'));
    }

    public function lastmonthlead(){
      // $lastmlead = Lead::where('created_at', '>=', Carbon::now()->firstOfMonth()->toDateTimeString())->get();
      $lastmlead = Lead::whereMonth('created_at', '=', Carbon::now()->subMonth()->month)->get();

      return view('crm_new.index',compact('lastmlead'));
    }

    public function getallLeadData()
    {
        return $leads = Lead::with('user')->latest()->get();
    }

    public function deleteleadnow($id){
      $delId=Lead::find($id)->delete();
      return redirect('leads')->with(['success-message'=>'Delete success','success-message-details'=>'Lead has been deleted successfully!']);
    }
       public function leadFilter(Request $request)
        {
            //dd($request->all());
            //return $request->all();
            $clear = 1;
        $name = $request->name;
        $email = $request->email;
        $contact = $request->contact;
        $address = $request->address;
        $leadsource = $request->leadSource;
        $leadowner = $request->leadOwner;
        $status = $request->leadStatus;
        if(isset($name) || isset($status) || isset($email) || isset($leadsource) || isset($leadowner) || isset($contact) || isset($address))
        {
        // $search = Lead::where('firstname','LIKE','%'.$name.'%')->
        // orWhere('email','LIKE','%'.$email.'%')->orWhere('mobilenumber','LIKE','%'.$contact.'%')
        // ->orWhere('address','LIKE','%'.$address.'%')->orWhere('leadsource','LIKE','%'.$leadsource.'%')
        // ->orWhere('userAssign_id','LIKE','%'.$leadowner.'%')
        // ->get();
        return $search = Lead::with('user')->where('firstname', 'LIKE', '%' . $name . '%')
    ->where('email', 'LIKE', '%' . $email . '%')->where('mobilenumber','LIKE','%'.$contact.'%')->where('status','LIKE','%'.$status.'%')->where('leadsource','LIKE','%'.$leadsource.'%')->where('userAssign_id','LIKE','%'.$leadowner.'%')->where('address','LIKE','%'.$address.'%')
    // etc
    ->get();
            // when($name, function($query) use ($name){

            //     $query->orWhere('firstname','LIKE','%'.$name.'%');
            // })->when($status, function($query) use ($status){

            //     $query->orWhere('status','LIKE','%'.$status.'%');
            // })->when($email, function($query) use ($email){

            //     $query->orWhere('email','LIKE','%'.$email.'%');
            // })
            // ->when($leadsource, function($query) use ($leadsource){

            //     $query->orWhere('leadsource','LIKE','%'.$leadsource.'%');
            // })->when($contact, function($query) use ($contact){

            //         $query->orWhere('mobilenumber','LIKE','%'.$contact.'%');
            // })->when($address, function($query) use ($address){

            //         $query->orWhere('address','LIKE','%'.$address.'%');
            // })->get();

            return view('crm_new.index',compact('search','clear'));
        }
    else
    {
        return $this->getallLeadData();
    }

}
}
