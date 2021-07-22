<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;
use App\LeadQuotation;
use App\Boltschoosen;
use App\QtnOptionalDescription;

class NewQuotationBoilerController extends Controller
{

  // **STEP1
  public function index($id)
  {

      $euids=date("mdis");
      $uniqueId='MPH'.$euids;

      $addquotation = new LeadQuotation();
      $addquotation->main_uniqid = $uniqueId;
      $addquotation->lead_id = $id;
      $addquotation->save();
      return redirect('/generate-quotation/step1/'.$id.'/'.$uniqueId);
  }
  public function step1($id,$uniqid){
  	$lead = Lead::find($id);
    $lead_quotation = LeadQuotation::where('main_uniqid',$uniqid)->first();
  	return view('NewQgenaration.index',compact('lead','uniqid','lead_quotation'));
  }

  public function step1post(Request $request, $uniqueid){
  	$data = LeadQuotation::where('main_uniqid',$uniqueid)->first();
  	$data->fill($request->all())->save();
  	return redirect('/generate-quotation/step2/'.$data->lead_id.'/'.$data->main_uniqid);
  }


  // **STEP2

  public function step2($id,$uniqid){
  	$lead = LeadQuotation::where('main_uniqid',$uniqid)->first();
  	return view('NewQgenaration.index2',compact('uniqid','lead'));
  }

  public function step2post(Request $request, $uniqueid){
  	$data = LeadQuotation::where('main_uniqid',$uniqueid)->first();
  	$data->fill($request->all())->save();
  	return redirect('/generate-quotation/step3/'.$data->lead_id.'/'.$data->main_uniqid);
  }

    // **STEP3

    public function step3($id,$uniqid){
      $lead = LeadQuotation::where('main_uniqid',$uniqid)->first();
      return view('NewQgenaration.index3',compact('uniqid','lead'));
    }

    public function step3post(Request $request, $uniqueid){
      $data = LeadQuotation::where('main_uniqid',$uniqueid)->first();
      $data->fill($request->all())->save();
      return redirect('/generate-quotation/step4/'.$data->lead_id.'/'.$data->main_uniqid);
    }

    // **STEP4

    public function step4($id,$uniqid){
      $lead = LeadQuotation::where('main_uniqid',$uniqid)->first();
      return view('NewQgenaration.index4',compact('uniqid','lead'));
    }

    public function step4post(Request $request, $uniqueid){
      $lastdata = LeadQuotation::where('main_uniqid',$uniqueid)->first();
      $lastdata->fill($request->all())->save();
      return redirect('/pdfgenerate/'.$lastdata->id);
    }

    public function step4back(Request $request){
      $lastdata = LeadQuotation::where('main_uniqid',$request->main_uniqid)->first();
      $lastdata->fill($request->all())->save();
      echo 'success';
    }



    public function showblockregular($uniqueid){
      $lead_quotation = LeadQuotation::where('main_uniqid',$uniqueid)->first();
      return view('NewQgenaration._blockRegular',compact('lead_quotation'));
    }
    public function showblocksystem($uniqueid){
      $lead_quotation = LeadQuotation::where('main_uniqid',$uniqueid)->first();
      return view('NewQgenaration._blockSystem',compact('lead_quotation'));
    }
    public function showbloccombir($uniqueid){
      $lead_quotation = LeadQuotation::where('main_uniqid',$uniqueid)->first();
      return view('NewQgenaration._blockCombi',compact('lead_quotation'));
    }
    public function showblelectriclar($uniqueid){
      $lead_quotation = LeadQuotation::where('main_uniqid',$uniqueid)->first();
      return view('NewQgenaration._blockElectric',compact('lead_quotation'));
    }
    public function showblockoil($uniqueid){
      $lead_quotation = LeadQuotation::where('main_uniqid',$uniqueid)->first();
      return view('NewQgenaration._blockOil',compact('lead_quotation'));
    }

    public function showblockallboilercontroller($uniqueid){
      $lead_quotation = LeadQuotation::where('main_uniqid',$uniqueid)->first();
      return view('NewQgenaration._blockallboilerController',compact('lead_quotation'));
    }

    public function showblockallboltsonoption($uniqueid){
      $lead_quotation = LeadQuotation::where('main_uniqid',$uniqueid)->first();
      $boltsonoption = Boltschoosen::where('unique_id',$uniqueid)->get();
      return view('NewQgenaration._blockallboltson',compact('lead_quotation','boltsonoption'));
    }


    public function showblockcupboard($uniqueid){
      $lead_quotation = LeadQuotation::where('main_uniqid',$uniqueid)->first();
      return view('NewQgenaration._blockCupboard',compact('lead_quotation'));
    }

    public function showblocksupplylength($uniqueid){
      $lead_quotation = LeadQuotation::where('main_uniqid',$uniqueid)->first();
      return view('NewQgenaration._blockSupplylength',compact('lead_quotation'));
    }

    public function showblockmaterialcheck($uniqueid){
      $lead_quotation = LeadQuotation::where('main_uniqid',$uniqueid)->first();
      return view('NewQgenaration._blockMaterialcheck',compact('lead_quotation'));
    }


     public function showblockadditionalcondesnate($uniqueid){
      $lead_quotation = LeadQuotation::where('main_uniqid',$uniqueid)->first();
      return view('NewQgenaration._blockadditionalcondesnate',compact('lead_quotation'));
    }

    public function showblockextraoptions($uniqueid){
      $lead_quotation = QtnOptionalDescription::where('uniqid',$uniqueid)->first();
      return view('NewQgenaration._fetchOptionalExtras',compact('lead_quotation'));
    }

    public function quotdelete($id){

       $data = LeadQuotation::find($id)->delete();
       echo 'success';
    }



}
