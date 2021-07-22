<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ContactList;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AllCompanyController extends Controller
{
    public function showAllCompany(){
      $username = Auth::user()->username;

      $data = DB::table('contact_lists')
                  ->select(DB::raw('count(*) as tot, company_name'))
                  ->groupBy('company_name')
                  ->where('generated_by', $username)
                  ->get();

      return view('User.allCompanyList')->with('datas',$data);
    }

    public function showAllLeads(){
      $username = Auth::user()->username;
      $leads = DB::table('contact_lists')->whereNotNull('contact_lead_status')->where('generated_by', $username)->get();
      return view('User.allLeadsList')->with('myleads',$leads);
    }

    public function viewCompany($company_name){
        $username = Auth::user()->username;
        $data = DB::table('contact_lists')->where('company_name', $company_name)->where('generated_by', $username)->get();
        return view('User.allLeadsList')->with('myleads',$data);
      // return 123;
    }
}
