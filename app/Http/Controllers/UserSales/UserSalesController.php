<?php

namespace App\Http\Controllers\UserSales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lead;
use App\User;
use App\Deal;
use App\Task;
use App\Cmodel;
use App\LeadQuotation;


class UserSalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('UserSales.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function salesreport(Request $request){

      if($request->leadsource !='' || $request->leadowner !='')
      {
         $leadsource = $request->leadsource;
         $leadowner = (int)$request->leadowner;
      }
      else
      {
         $leadsource = '';
         $leadowner = '';
      }
    $start_date = $request->start_date;
    $end_date = $request->end_date;
    $dataPoints = array();
    $leadsource = Lead::select('userAssign_id')->whereBetween('created_at',[$start_date, $end_date])->distinct()->get();
    foreach($leadsource as $key => $val){
      $id=$val->userAssign_id;
      $name = User::find($id)->name;
      $counts = Lead::where('userAssign_id',$val->userAssign_id)->count();
      $data = array(
      "label"=>$name,"y"=>$counts
      );

    array_push($dataPoints,$data);

    }

    return $dataPoints;

    }

public function getfiltersalesreport(Request $request){

  if($request->leadsource !='' || $request->leadowner !='')
  {
     $leadsource = $request->leadsource;
     $leadowner = (int)$request->leadowner;
  }
  else
  {
     $leadsource = '';
     $leadowner = '';
  }
$start_date = $request->start_date;
$end_date = $request->end_date;
$dataPointse = array();
$leadsource = Lead::select('userAssign_id')->whereBetween('created_at',[$start_date, $end_date])->distinct()->get();
foreach($leadsource as $key => $val){
  $id=$val->userAssign_id;
  $name = User::find($id)->name;
  $count = Lead::where('userAssign_id',$val->userAssign_id)->count();
  $totaldeal = Task::where('user_id',$val->userAssign_id)->count();
  $quote=LeadQuotation::where('user_id',$val->userAssign_id)->count();
  $totaldealamount = Task::where('user_id',$val->userAssign_id)->sum('amount');
  $totalsalesclosed = Task::where('user_id',$val->userAssign_id)->where('status_id',5)->sum('amount');
  $mettingschedule = Cmodel::where('user_id',$val->userAssign_id)->count();
  $data = array(
      "id"=>$id, "name"=>$name, "lead"=>$count, "totaldeal"=>$totaldeal,"quote"=>$quote, "totaldealamount"=>$totaldealamount , "totalsalesclosed"=>$totalsalesclosed,"mettingschedule"=>$mettingschedule
    );

  array_push($dataPointse,$data);
}

return $dataPointse;

}


public function mettingschedule(Request $request){
    if($request->leadsource !='' || $request->leadowner !='')
      {
         $leadsource = $request->leadsource;
         $leadowner = (int)$request->leadowner;
      }
      else
      {
         $leadsource = '';
         $leadowner = '';
      }
    $start_date = $request->start_date;
    $end_date = $request->end_date;
    $dataPoints = array();
    $leadsource = Cmodel::select('user_id')->whereBetween('created_at',[$start_date, $end_date])->distinct()->get();
    foreach($leadsource as $key => $val){
      $id=$val->user_id;
      $name = User::find($id)->name;
      $count = Cmodel::where('user_id',$val->user_id)->count();
      $data = array(
      "label"=>$name, "y"=>$count
      );
      array_push($dataPoints,$data);
    }
    return $dataPoints;
}


public function salesclosed(Request $request){

  if($request->leadsource !='' || $request->leadowner !='')
    {
       $leadsource = $request->leadsource;
       $leadowner = (int)$request->leadowner;
    }
    else
    {
       $leadsource = '';
       $leadowner = '';
    }
  $start_date = $request->start_date;
  $end_date = $request->end_date;
  $dataPoints = array();
  $leadsource = Task::select('user_id')->whereBetween('created_at',[$start_date, $end_date])->distinct()->get();
  foreach($leadsource as $key => $val){
    $id=$val->user_id;
    $name = User::find($id)->name;
    $count = Task::where('user_id',$val->user_id)->sum('amount');
    $data = array(
    "label"=>$name, "y"=>$count
    );
    array_push($dataPoints,$data);
  }
  return $dataPoints;

}





    public function getweeklymonthlysalesreport(Request $request){

    if($request->leadsource !='' || $request->leadowner !='')
      {
         $leadsource = $request->leadsource;
         $leadowner = (int)$request->leadowner;
      }
      else
      {
         $leadsource = '';
         $leadowner = '';
      }
    $start_date = $request->start_date;
    $end_date = $request->end_date;

    $dataPointing = array();

    $leadsourcing = Lead::select('userAssign_id')->whereBetween('created_at',[$start_date, $end_date])->distinct()->get();
    foreach($leadsourcing as $key => $val){
      $id=$val->userAssign_id;
      $name = User::find($id)->name;
      $count = Lead::where('userAssign_id',$val->userAssign_id)->count();
      $data = array(
      "label"=>$name, "y"=>$count
      );
      array_push($dataPointing,$data);
    }

    return $dataPointing;
    }


}
