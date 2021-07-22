<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Task;
use App\Lead;
use App\Status;
use App\Notification;

class TaskController extends Controller
{
    //

    public function index($lead_id)
    {

        //$tasks = Lead::find($lead_id)->statuses()->with('tasks')->get();
        $tasks = Status::all();
        //return $price = Task::with('status')->where('lead_id',$lead_id)->select('amount')->get();
        return view('deal.index',compact('tasks','lead_id'));
    }

    public function store(Request $request)
    {
        $newDeal = Task::create([

            'title' => $request->title,
            'description' => $request->description,
            'amount' => $request->amount,
            'status_id' => $request->status,
            'user_id' => auth()->user()->id,
            'lead_id' => $request->lead_id,
            'userAssign_id'=>$request->userAssign_id

            ]);
             Notification::create(
            [

                'deal_id' => $newDeal->id,
                'lead_id' => $newDeal->lead_id,
                'user_id' => $newDeal->user_id,
                'created_by' => auth()->user()->id,
                'notificationType' => 'deal',
                'userAssign_id'=>$newDeal->userAssign_id
            ]
        );
        notify()->success('Deal has been created');
        return redirect()->back();
    }

    public function sync(Request $request)
    {
            $changeto = $request->changeTo;
            $prev = $request->status;
            $rowid = $request->rowid;

            $up = Task::find($rowid);
        $tasks = $up->update([

                'status_id' => $changeto
                ]);
                return Task::find($rowid)->first();
                //return $this->index();

    }

    public function deleteTask(Request $request)
    {
        $lead_id = $request->lead_id;
        $task_id = $request->task_id;
        return $tasks = Task::where('id',$task_id)->where('lead_id',$lead_id)->delete();
    }

    public function dealGet()
    {
        //$tasks = Lead::find($lead_id)->statuses()->with('tasks')->get();
        //return $price = Task::with('status')->where('lead_id',$lead_id)->select('amount')->get();
        //$all_lead = Lead::with('statuses','tasks')->get();
        //return $all_lead = auth()->user()->statuses()->with('tasks')->get();
        $all_leads = Status::all();
        return view('deal.all', compact('all_leads'));
    }


 


}
