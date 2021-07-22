<?php

namespace App\Http\Controllers\Campaign;

use App\Campaign;
use App\Template;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CampaignController extends Controller
{
    //

    public function store(Request $request)
    {
    		$data['folder_id'] = $request->folder_id;
    		$data['campaign_name'] = $request->campaign_name;
    		$data['slug'] = Str::slug($request->campaign_name);

    		$campaignCreate = Campaign::create($data);
    		notify()->success('campaign has been created');
    		return redirect()->back();
    }

    public function getTemplate($slug)
    {
    	
    	$alltemplates = Template::where('pslug',$slug)->get();
    	return view('template.campaign',compact('slug','alltemplates'));
    }

    public function template(Request $request)
    {
    	$data = array();

    	$data['publish'] = 0;
    	$data['title'] =  $request->title;
    	$data['body'] = $request->template;
    	$data['pslug'] = $request->slug;

    	$temp = Template::create($data);
    	notify()->success('Template created successfully');
    	return redirect()->route('template.create');
    }

}
