<?php

namespace App\Http\Controllers\UserSales\Lead;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Scheduletask;
use App\Lead;
use Carbon\Carbon;
use DB;

class LeadController extends Controller
{
  public function calender()
  {

    //$ss =Scheduletask::orderBy('date','desc')->paginate(10);
    $date = Carbon::now();
    $currentdate=$date->toDateString();
    // $ss = Scheduletask::whereDate('created_at', $currentdate)->get();
    $ss = Scheduletask::whereDate('created_at', $currentdate)->groupBy('user_id')->select('user_id', DB::raw('count(*) as total'))->get();

    // return view('crm_new.lead.calender',compact('ss'));
    // $ss =Scheduletask::orderBy('date','desc')->paginate(10);
   return view('UserSales.Lead.calender',compact('ss'));

  }

  public function show($id)
  {
      $lead = Lead::find($id);
      return view('UserSales.Lead.show',compact('lead'));
  }

}
