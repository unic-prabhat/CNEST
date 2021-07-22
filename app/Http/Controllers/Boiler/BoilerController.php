<?php

namespace App\Http\Controllers\Boiler;

use App\Boilerchoise;
use App\Boiler;
use App\Boilertype;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BoilerController extends Controller
{
    //

    public function store(Request $request)
    {
    		$data = array();
    	foreach($request->except('_token') as $key => $val)
    	{
    		
    		if($key == 'regular')
    		{
    			foreach($val as $v)
    			{
    				Boilerchoise::create([

    						'boiler_id' => $request->boiler_id,
    						'name' => $v

    				]);

    			}

    			return redirect()->back();
    		}
    		else if($key == 'combi')
    		{
    			foreach($val as $v)
    			{
    				Boilerchoise::create([

    						'boiler_id' => $request->boiler_id,
    						'name' => $v

    				]);
    			}
    			return redirect()->back();
    		}
    		else if($key == 'system')
    		{
    			foreach($val as $v)
    			{
    				Boilerchoise::create([

    						'boiler_id' => $request->boiler_id,
    						'name' => $v

    				]);
    			}
    			return redirect()->back();
    		}
    		else if($key == 'electric')
    		{
    			foreach($val as $v)
    			{
    				Boilerchoise::create([

    						'boiler_id' => $request->boiler_id,
    						'name' => $v

    				]);
    			}
    			return redirect()->back();
    		}

    	}

    }

    public function fetchparentone(Request $request)
    {
        $id = $request->id;
        return $all = Boilerchoise::with('boiler')->where('boiler_id',$id)->get();
    }

    public function createBoilerAdd(Request $request)
    {
        $data = array();
        $data['boilertype'] = $request->boilerstype;
        $data['price'] = $request->price;
        $data['boilerchoise_id'] = $request->mainId;
        if($data['price'] == null)
        {
           $data['price'] = number_format('0',2); 
        }
        return $boilertypeCreated = Boilertype::create($data);

    }

    public function fetchbyid($id)
    {

        $alltypes = Boilertype::where('boilerchoise_id',$id)->get();
        return $alltypes;
    }
}
