<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scheduletask;
use App\Lead;
use App\Notification;
use App\Cmodel;
use App\User;
use Auth;

class ScheduletaskController extends Controller
{
    //

    public function store(Request $request)
    {

        $this->validate($request,[

                'title' => 'required'

            ]);


            // $scheduleunqid=uniqid();

            $schedule = Scheduletask::create([


                'title' => $request->title,
                'date' => $request->date,
                'time' => $request->time,
                'note' => $request->note,
                'user_id' => $request->user_id,
                'lead_id' => $request->lead_id,
                'type' => $request->type,
                'assigned_user_id' => $request->assigned_user_id,
                'status' => 'upcoming'
                ]);
            Cmodel::create(

                [
                    'title' => $request->title,
                    'date' =>  $request->date,
                    'note' =>  $request->note,
                    'user_id' => $request->user_id,
                    'lead_id' => $request->lead_id,
                    'type' => $request->type,
                    'schedule_id'=>$schedule->id,
                    'status' => 'upcoming'
                ]
            );
            Notification::create(

                [

                    'lead_id' => $schedule->lead_id,
                    'user_id' => $schedule->user_id,
                    'created_by' => auth()->user()->id,
                    'notificationType' => 'meeting'
                ]

            );

          $schedule['username'] = $schedule->user->name;
          return response()->json($schedule);
    }

    public function statusUpdate(Request $request)
    {
        $id = $request->status;
        $update = Scheduletask::find($id);
        $ss = $update->update([

            'status' => 'completed'

            ]);
        return response()->json($ss);
    }

    public function getSchedulle($id)
    {
        $allschedule = Scheduletask::orderByRaw("FIELD(id,'upcoming') ASC")->orderBy('status','DESC')->paginate(6);
        return response()->json($allschedule);
    }

    public function getEventsByuser($userid)
    {

        session()->put('userid', $userid);
        return redirect('/lead/calender');

    }

    public function getEvents()
    {

      if(auth()->user()->userrole==1){
        //ADMIN

        if(session()->has('userid')){
          if(session()->get('userid') == 'all'){
            $all = Scheduletask::all();
          }else{

            $all = Scheduletask::where('user_id',session()->get('userid'))->get();
          }
        }else{
          $all = Scheduletask::all();
        }

          $data = [];
          // $data['call'] = $all->note;
          foreach($all as $note)
          {
              if($note->type == 'meeting')
              {

              $totaladdress = Lead::where('id',$note->lead_id)->first()->address.','.Lead::where('id',$note->lead_id)->first()->town.','.Lead::where('id',$note->lead_id)->first()->postcode;
              $laedfullname = Lead::where('id',$note->lead_id)->first()->firstname.' '.Lead::where('id',$note->lead_id)->first()->surname;
              $new = array(
                  'id' => $note->id,
                  'leadid' => $note->lead_id,
                  'leadname' => $laedfullname,
                  'address' => $totaladdress,
                  'titles' => $note->title,
                  'type' => $note->type,
                  'name' => User::where('id',$note->user_id)->first()->name,
                  'color' => User::where('id',$note->user_id)->first()->colortype,
                  'start' =>  $note->date,
                  'status' => $note->status,
                  'className' => 'bg-soft-pink'

              );
              array_push($data, $new);
          }



          }
          return response()->json($data);

      }else{
        //SALES

         $allu = Scheduletask::where('user_id',auth()->user()->id)->get();

         $datasu = [];
          // $data['call'] = $all->note;
          foreach($allu as $notes)
          {
              if($notes->type == 'meeting')
              {

              $totaladdress = Lead::where('id',$notes->lead_id)->first()->address.','.Lead::where('id',$notes->lead_id)->first()->town.','.Lead::where('id',$notes->lead_id)->first()->postcode;
              $laedfullname = Lead::where('id',$notes->lead_id)->first()->firstname.' '.Lead::where('id',$notes->lead_id)->first()->surname;
              $new = array(
                  'id' => $notes->id,
                  'leadid' => $notes->lead_id,
                  'leadname' => $laedfullname,
                  'address' => $totaladdress,
                  'titles' => $notes->title,
                  'type' => $notes->type,
                  'name' => User::where('id',$notes->user_id)->first()->name,
                  'color' => User::where('id',$notes->user_id)->first()->colortype,
                  'start' =>  $notes->date,
                  'status' => $notes->status,
                  'className' => 'bg-soft-pink'

              );
              array_push($datasu, $new);
          }



          }
          return response()->json($datasu);




      }



    }

    public function leadDetailsLoad($id)
    {

       $leadgen = Scheduletask::where('id',$id)->first()->lead_id;

       $leadgen2=Scheduletask::find($id);

       $lead=Lead::with('scheduletasks')->find($leadgen);

       // $scheduletasks=


       $datav = array();
       $data=array(
           "id"=> $lead->id,
           "firstname"=> $lead->firstname,
           "surname"=> $lead->surname,
           "address"=> $lead->address,
           "postcode"=> $lead->postcode,
           "town"=> $lead->town,
           "country"=> $lead->country,
           "email"=> $lead->email,
           "mobilenumber"=> $lead->mobilenumber,
           "landlinenumber"=> $lead->landlinenumber,
           "leadsource"=> $lead->leadsource,
           "userAssign_id"=> $lead->userAssign_id,
           "status"=> $lead->status,
           "user_id"=> $lead->user_id,
           "created_at"=> $lead->created_at,
           "updated_at"=> $lead->updated_at,
           "new_note"=>$leadgen2->note,
           "new_title"=>$leadgen2->title,
           "new_status"=>$leadgen2->status,
           "userrole" => auth()->user()->userrole,
           "scheduletasks"=>Scheduletask::where('lead_id',$leadgen)->get(),
           "new_leadids_id"=>$leadgen2->lead_id,
           "new_time"=>$leadgen2->date
       );
      array_push($datav,$data);

      return $datav[0];

      // return $datav;
    }

    public function updateCompleted($id)
    {

        $upd = Scheduletask::where('id',$id)->update(['status'=> 'completed']);

    }

    public function deleteMetting($id)
    {
        return $id;
        $delemet = Scheduletask::find($id)->delete();
        if($delemet)
        {
            return 1;
        }
    }


    public function getupdatedevent(Request $request){

      $id=$request->input('id');
      $update=$request->input('updateddate');

     $data = Scheduletask::find($id);
     $data->date=$request->input('updateddate');
     $data->created_at=$request->input('updateddate');
     $data->updated_at=$request->input('updateddate');
     $data->save();
     echo 'success';

    }


}
