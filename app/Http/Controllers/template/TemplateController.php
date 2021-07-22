<?php

namespace App\Http\Controllers\template;

use App\Folder;
use App\Campaign;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    //

	public function create()
	{
		$data = Folder::with('campaigns')->get();
		$df = Campaign::where('folder_id','=', NULL)->get();
		return view('template.create',compact('data','df'));
	}
    public function store(Request $request)
    {
    	$folder = Folder::create($request->all());
    	notify()->success('Folder Created Successfully');
    	return redirect()->back();
    }

}
