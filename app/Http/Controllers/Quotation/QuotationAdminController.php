<?php

namespace App\Http\Controllers\Quotation;

use App\Http\Controllers\Controller;
use App\Selectradiocheckboxchoice;
use Illuminate\Http\Request;

class QuotationAdminController extends Controller
{
    //

    public function index()
    {
    	return view('quotation.index');
    }

    public function postingcehckradio(Request $request)
    {

    	$select = $request->select;

    	if($select == 1)
    	{
    		Selectradiocheckboxchoice::where('select',0)->delete();
    		Selectradiocheckboxchoice::create($request->all());
    	}
    	else
    	{
    		Selectradiocheckboxchoice::where('select',1)->delete();
    		Selectradiocheckboxchoice::create($request->all());
    	}


    }
}
