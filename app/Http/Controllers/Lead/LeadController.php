<?php

namespace App\Http\Controllers\Lead;

use App\Lead;
use App\User;
use App\Cmodel;
use App\Status;
use App\Task;
use App\Scheduletask;
use App\Postcode;
use App\Notification;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LeadRequest;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use DB;


class LeadController extends Controller
{
    //

            public function leadstore(Request $request)
            {
                $validator = Validator::make($request->all(),[

                    'firstname' => 'required',
                    'surname' => 'required',
                    'address' => 'required',
                    'postcode' => 'required',
                    'town' => 'required',
                    'country' => 'required',
                    'mobilenumber' => 'required',
                    'leadsource' => 'required'
                    ]);
                    if($validator->fails())
                    {
                        //notify()->success('all fields are required');
                        connectify('error', 'All fields required', "Lead can't be generated");
                        return redirect()->back();
                    }
                    else
                    {
                    $newlead = Lead::create([

                        'firstname' => $request->firstname,
                        'surname' => $request->surname,
                        'address' => $request->address,
                        'postcode' => $request->postcode,
                        'town' => $request->town,
                        'country' => $request->country,
                        'email' => $request->email,
                        'mobilenumber' => $request->mobilenumber,
                        'landlinenumber' => $request->landlinenumber,
                        'leadsource' => $request->leadsource,
                        'user_id' => $request->user_id,
                        'userAssign_id' => $request->user_id,
                        'status' => "New Lead"

            ]);
                   Notification::create(

                    [
                        'lead_id' => $newlead->id,
                        'user_id' => $newlead->userAssign_id,
                        'notificationType' => 'lead'
                    ]
                   );
                    notify()->success('Lead Created Successfully');
                    return redirect()->back();
                    }
            }
            public function show($id)
            {
                //$lead = Lead::where('user_id', '!=', auth()->user()->id)->find($id);
                $lead = Lead::find($id);
                return view('crm_new.lead.show',compact('lead'));
            }

            public function fetcheditablelead(Request $request)
            {
                $con = [];
                $users = User::all('id','name');
                foreach($users as $u)
                {
                    array_push($con,array('value' => $u->id, 'text' => $u->name));
                }
                return response()->json($con);
            }

            public function leadUpdate()
            {
                  
                if(isset($_GET['name']) && isset($_GET['value']) && isset($_GET['pk'])){

                    if($_GET['name'] == 'landlinenumber'){

                        $data = Lead::find($_GET['pk']);
                        $data->landlinenumber = $_GET['value'];
                        $data->save(); 
                        return redirect()->back();

                    }else if($_GET['name'] == 'mobilenumber'){

                        $data = Lead::find($_GET['pk']);
                        $data->mobilenumber = $_GET['value'];
                        $data->save();
                        return redirect()->back();

                    }else if($_GET['name'] == 'email'){  

                        $data = Lead::find($_GET['pk']);
                        $data->email = $_GET['value'];
                        $data->save();
                        return redirect()->back();

                    }else if($_GET['name'] == 'user_id'){

                        $data = Lead::find($_GET['pk']);
                        $data->userAssign_id = $_GET['value'];
                        $data->user_id = $_GET['value'];
                        $data->save();
                        return redirect()->back();
                        
                    }else if($_GET['name'] == 'leadsource'){

                        $data = Lead::find($_GET['pk']);
                        $data->leadsource = $_GET['value'];
                        $data->save();
                        return redirect()->back();

                    }      


                }  

            }

         public function uploadAttachment(Request $request)
         {

             $filename = $request->file('attachment_file')->hashName();
             $format = $request->file('attachment_file')->getClientOriginalExtension();
             $filename = $request->file('attachment_file')->getClientOriginalName();
             $request->file('attachment_file')->move(public_path('attachment'),$filename);

             $attachment = Cmodel::create([

                 'attachment_file' => $filename,
                 'format' => $format,
                 'user_id' => $request->user_id,
                 'filename' => $filename,
                 'lead_id' => $request->lead_id

                 ]);
                 $attachment['username'] = $attachment->user->name;
                 return response()->json($attachment);


         }

         public function updateAddress(Request $request)
         {
                $leadupdate = Lead::find($request->lead_id);
                $leadupdate->address = $request->address;
                $leadupdate->town = $request->town;
                $leadupdate->country = $request->country;
                $leadupdate->postcode = $request->postcode;

                $leadupdate->save();
                return response()->json(array('message'=> 'address updated successfully'));

         }

         public function showReminder(Request $request)
         {
             //return $request;
             $upcoming = Scheduletask::where('user_id',$request->user_id)->where('status','upcoming')->get();
             return response()->json($upcoming);
         }

		 public function ajaxUpdateScheduleTask(Request $request)
		 {
			 $id = $request->id;

			 $updat = Scheduletask::find($id);
			 $updat->status = 'overdue';
			 $updat->save();
			 return response()->json($id);
		 }

         public function calender()
         {
          //$ss =Scheduletask::orderBy('date','desc')->paginate(10);
          $date = Carbon::now();
          $currentdate=$date->toDateString();
          // $ss = Scheduletask::whereDate('created_at', $currentdate)->get();
          $ss = Scheduletask::whereDate('created_at', $currentdate)->groupBy('assigned_user_id')->select('assigned_user_id', DB::raw('count(*) as total'))->get();

          return view('crm_new.lead.calender',compact('ss'));
         }

         public function getText($text)
         {
            if($text !='')
            {
            return Postcode::where('postcode','LIKE', "%$text%")->get();
        }
            else
            {
            return '';
            }
        }

        public function updateLeadStatus(Request $request)
        {
            $leadid = $request->leadid;

            $lead = Lead::where('id',$leadid)->update(['status'=>$request->htm]);
        }

        public function leadfilters(Request $request)
        {
            return $request->all();
        }

        public function scheduletaskdelete($id){

          $data = Scheduletask::find($id)->delete();

          return redirect()->back();
        }

}
