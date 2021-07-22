<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ContactList;
use App\User;
use Illuminate\Support\Facades\DB;

class AllCompanyController extends Controller
{
    public function showAllCompany(){
        $data = DB::table('contact_lists')
                     ->select(DB::raw('count(*) as tot, company_name'))
                     ->groupBy('company_name')
                     ->paginate(15);
        return view('UserSuperAdmin.allCompanyList')->with('datas',$data);
    }

    public function showAllLeads(){
      $leads = DB::table('contact_lists')->whereNotNull('contact_lead_status')->get();
      return view('UserSuperAdmin.allLeadsList')->with('myleads',$leads);
    }

    public function viewCompany($company_name){
        $data = DB::table('contact_lists')->where('company_name', $company_name)->get();
        return view('UserSuperAdmin.home')->with('datas',$data);
    }
}
