<?php

namespace App\Http\Controllers;

use App\Lead;
use Illuminate\Http\Request;
use DB;
use App\User;

class ReportingController extends Controller
{
    //

    public function monthlyreport()
    {
    	return view('reporting.index');
    }

    public function getmonthlyreport(Request $request)
    {

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
        $red = Lead::with('tasks','tasks.status','assignes')->oRwhere('userAssign_id',$leadowner)->oRwhere('leadsource','LIKE','%'.$leadsource.'%')->whereBetween('created_at',[$start_date, $end_date])->get();
        $chartDatas = Lead::select([
                DB::raw('DATE(created_at) AS date'),
                DB::raw('COUNT(id) AS count'),
                    ])
             ->whereBetween('created_at', [$start_date, $end_date])
             ->groupBy('date')
             ->orderBy('date', 'ASC')
             ->get()
             ->toArray();
    	return response()->json(array('graph' => $chartDatas, 'dat' => $red));
    }

    public function getweeklymonthlyleadreport(Request $request){
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
          $count = Lead::where('userAssign_id',$val->userAssign_id)->count();
          $data = array(
          "label"=>$name, "y"=>$count
          );
          array_push($dataPoints,$data);
        }
        return $dataPoints;
    }

    public function getwymyleadreport(Request $request){
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

    $dataPoints2 = array();
    $leadsource = Lead::select('leadsource')->whereBetween('created_at',[$start_date, $end_date])->distinct()->get();
    foreach($leadsource as $key => $val){
      $name = $val->leadsource;
      $count = Lead::where('leadsource',$val->leadsource)->count();

      $data = array(
      "label"=>$name, "y"=>$count
      );
      array_push($dataPoints2,$data);
    }
     return $dataPoints2;
  }
        public function getrangereportfilter(Request $request)
        {
            $start_date = $request->start_date;
            $end_date = $request->end_date;
            $leadsource = $request->leadsource;

                $fileName = 'monthly-report-'.date('d-m-Y:H:i:s').'.csv';
                $fileads = Lead::with('tasks','tasks.status','assignes')->whereBetween('created_at',[$start_date, $end_date])->where('leadsource','LIKE','%'.$leadsource.'%')->get();

                   $headers = array(
                "Content-type"        => "text/csv",
                "Content-Disposition" => "attachment; filename=$fileName",
                "Pragma"              => "no-cache",
                "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
                "Expires"             => "0"
            );

            $columns = array('Name', 'Email', 'Contact', 'Address', 'Lead source', 'Lead Owner', 'status');
            //$columns = array('Name', 'Email', 'Contact');

            $callback = function() use($fileads, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($fileads as $filead) {
                $row['name']  = $filead->firstname.' '.$filead->surname;
                $row['email']    = $filead->email;
                $row['contact']    = $filead->mobilenumber;
                $row['address']    = $filead->address.','.$filead->town.','.$filead->country;
                $row['leadsource']    = $filead->leadsource;
                for($i =0; $i<count($filead->assignes); $i++)
                {
                    $row['leadowner']  = $filead->assignes[$i]->name;
                }
                $row['status'] = $filead->status;
                        fputcsv($file, array($row['name'], $row['email'], $row['contact'],$row['address'],$row['leadsource'],$row['leadowner'],$row['status']));
                    }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);

                }
}
