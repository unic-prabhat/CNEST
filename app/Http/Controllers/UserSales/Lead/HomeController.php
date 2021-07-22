<?php

namespace App\Http\Controllers\UserSales\Lead;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lead;

class HomeController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }


    public function index()
    {
    return view('UserSales.Lead.dashboard');
    }

    public function allLeads()
    {
        if(auth()->user()->isAdmin == 1)
        {
        $leads = Lead::latest()->get();
        return view('UserSales.Lead.index',compact('leads'));
        }
        else
        {
            $leads = Lead::latest()->where('user_id',auth()->user()->id)->get();
            return view('UserSales.Lead.index',compact('leads'));
        }
    }

    public function getallLeadData()
    {
        return $leads = Lead::with('user')->latest()->get();
    }


    public function leadFilter(Request $request)
     {

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

         return $search = Lead::with('user')->where('firstname', 'LIKE', '%' . $name . '%')
 ->where('email', 'LIKE', '%' . $email . '%')->where('mobilenumber','LIKE','%'.$contact.'%')->where('status','LIKE','%'.$status.'%')->where('leadsource','LIKE','%'.$leadsource.'%')->where('userAssign_id','LIKE','%'.$leadowner.'%')->where('address','LIKE','%'.$address.'%')
 ->get();


         return view('UserSales.Lead.index',compact('search','clear'));
     }else{
      return $this->getallLeadData();
     }

   }

}
