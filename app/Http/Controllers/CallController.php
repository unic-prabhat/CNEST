<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Call;
use App\Cmodel;
use App\Notification;
use App\Scheduletask;
use DB;

class CallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }



    public function fetch_data(Request $request)
    {

        //return response()->json($request->all());
        //return $request->get('page');
            if($request->ajax())
            {
                $data = Call::latest()->paginate(5);
                return response()->json(array($data));
            }
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
       $data = $request->all();
       $call = (new Call)->callStore($data);
      $callCretae = Cmodel::create([
          'calls' => $call->call_status,
          'duration' => $call->duration,
          'user_id' => $call->user_id,
          'lead_id' => $call->lead_id,
          'call_id'=>$call->id,
          'type'=>'call'
          ]);

        Notification::create(

            [
                'user_id' => auth()->user()->id,
                'lead_id' => $callCretae->lead_id,
                'notificationType' => 'call',
                'created_by' => auth()->user()->id
            ]
        );

       return response()->json(array('message'=>$call));

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

    public function all_call_note(Request $request)
    {
        $all_fet = Cmodel::latest()->with('user')->where('lead_id',$request->lead_id)->orderBy('created_at','DESC')->get();
        //$all_fet['username'] = $all_fet->user()->name;
        return response()->json($all_fet);
    }

    public function cmodelUpdate(Request $request)
    {
       $id = $request->id;
       $status = Cmodel::find($id);
       $status->status = 'completed';
       $status->save();
    }

    public function updateNotification(Request $request)
    {
        $idd = $request->idd;
        Notification::find($idd)->update([
            'status' => 1,
            'update_user' => auth()->user()->id
        ]);
    }

    public function removeAllcall($id)
    {
        $iss = Call::find($id)->delete();

        if($iss)
        {
            return 1;
        }
    }

}
