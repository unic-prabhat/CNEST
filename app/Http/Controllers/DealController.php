<?php

namespace App\Http\Controllers;

use App\Deal;
use App\Notification;
use Illuminate\Http\Request;
use App\Cmodel;
use Illuminate\Support\Facades\File; 

class DealController extends Controller
{
    //

    public function deal()
    {
    	return view('deal.index');
    }

    public function create(Request $request)
    {	
    	Deal::create([

    			'deal' => $request->deal,
    			'deal_price' => $request->deal_price,
    			'user_id' => auth()->user()->id

    	]);
   
    	notify()->success('Deal Created!');
    	return redirect()->back();
    }

    public function dealUpdate(Request $request)
    {

    	$deals = Deal::all();
    	 foreach ($deals as $deal) {
            //$task->timestamps = false; // To disable update_at field updation
            $id = $deal->id;

            foreach ($request->order as $order) {

            	//return $order;
                if ($order['id'] == $id) {
                    $deal->update(['order' => $order['position']]);
                }
            }
        }


    }

    public function dealRowUpdate(Request $request)
    {

    	$target = $request->target;
    	$value = $request->value;
    	$deal_id = $request->deal_id;
    	$source_id = $request->source_id;
    	$sid = $request->s_id;
    	$update_value_source = $request->update;
    	$sourid = $request->sourid;

    	// foreach($sourid as $value)
    	// {
    	// 	foreach($update_value_source as $mn)
    	// 	{
    	// 		$deals = Deal::where('user_id',auth()->user()->id)->where('id',$value)->update([

    	// 			'deal' => $mn
    	// 		]);
    	// 	}
    	// }

    	if($target == 1)
    	{
    		return "idealproposal";
    	}
    	elseif($target == 2)
    	{
    		return Deal::where('id',$deal_id)->update([

    				'followup' => $value
    		]);

    	}
    	elseif($target == 3)
    	{
    			return Deal::where('id',$deal_id)->update([

    				'negotation' => $value
    		]);
    	}
    	elseif($target == 4)
    	{
    			return Deal::where('id',$deal_id)->update([

    				'lost' => $value
    		]);
    	}
    	elseif($target == 5)
    	{
    			return Deal::where('id',$deal_id)->update([

    				'won' => $value
    		]);
    	}
    }

    public function dealUpdateRowUpdate(Request $request)
    {
    		$cid = $request->cid;
    		$did = $request->did;

    			if($cid == 1)
    			{
    					Deal::where('id',$did)->where('user_id',auth()->user()->id)->update([

    							'deal' => NULL
    					]);
    			}
    				if($cid == 2)
    			{
    					Deal::where('id',$did)->where('user_id',auth()->user()->id)->update([

    							'idealproposal' => NULL
    					]);
    			}
    				if($cid == 3)
    			{
    					Deal::where('id',$did)->where('user_id',auth()->user()->id)->update([

    							'followup' => NULL
    					]);
    			}
    				if($cid == 4)
    			{
    					Deal::where('id',$did)->where('user_id',auth()->user()->id)->update([

    							'negotation' => NULL
    					]);
    			}
    				if($cid == 5)
    			{
    					Deal::where('id',$did)->where('user_id',auth()->user()->id)->update([

    							'lost' => NULL
    					]);
    			}
    					if($cid == 6)
    			{
    					Deal::where('id',$did)->where('user_id',auth()->user()->id)->update([

    							'won' => NULL
    					]);
    			}
    		
    		
    }


    public function removeattachments(Request $request){

            
            $data = Cmodel::find($request->id);
            $data->delete();
            echo 'success';

    }
}
