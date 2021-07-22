<?php

namespace App\Http\Controllers;

use App\Lead;
use App\Boiler;
use App\Boilerchoise;
use App\LeadQuotation;
use App\Boltschoosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class BoilerController extends Controller
{
    //
    public function index($id)
    {
        $lead = Lead::find($id);
        $unq=uniqid();
        Session::put('unq', $unq);
        return view('boiler.index',compact('lead'));
    }


    public function create()
    {
        return view('boiler.create');
    }


    public function store(Request $request)
    {
         DB::table('boilers')->insert(
             ['name' => $request->name]
         );
         return redirect()->back();
    }


    public function choice()
    {
        $boilers = Boiler::all();
        return view('boiler.choice',compact('boilers'));
    }


    public function choicestore(Request $request)
    {
        Boilerchoise::create([
            'name' => $request->name,
            'boiler_id' => $request->boiler_id
            ]);
            $notification = array(
                'message' => 'boiler choice addedd',
                'alert-type' => 'success'
                );
        return redirect()->back()->with($notification);
    }


    public function editid($id,$leadid){
      $dboiler=LeadQuotation::find($id);
      $tleadid=$leadid;
      return view('boiler.indexEdit',compact('id','dboiler','tleadid'));
    }

    public function update(Request $request){
      $id = $request->input('editId');
      $data=LeadQuotation::find($id);
      $data->current_boiler_type=$request->input('current_boiler_type');
      $data->current_boiler_location=$request->input('current_boiler_location');
      $data->current_flue=$request->input('current_flue');
      $data->existing_shower=$request->input('existing_shower');
      $data->new_fuel_type=$request->input('new_fuel_type');
      $data->new_boiler_yype=$request->input('new_boiler_yype');
      $data->new_boiler_location=$request->input('new_boiler_location');
      $data->new_flue=$request->input('new_flue');
      $data->new_flue_location=$request->input('new_flue_location');
      $data->condensate_termination=$request->input('condensate_termination');
      $data->new_controls=$request->input('new_controls');
      $data->is_the_new_boiler_being_fitted_in_a_cupboard=$request->input('is_the_new_boiler_being_fitted_in_a_cupboard');
      $data->is_the_newboiler_status=$request->input('is_the_newboiler_status');
      $data->chemical_system_treatment=$request->input('chemical_system_treatment');
      $data->gas_supply_requirements=$request->input('gas_supply_requirements');
      $data->gas_supply_length=$request->input('gas_supply_length');
      $data->asbestos_containing_materials=$request->input('asbestos_containing_materials');
      $data->parking_requirements=$request->input('parking_requirements');
      $data->sixty_hundred_mm_flue_kit=$request->input('sixty_hundred_mm_flue_kit');
      $data->gchoice=$request->input('gchoice');
      $data->magnetic_system_filter=$request->input('magnetic_system_filter');
      $data->condensate_components=$request->input('condensate_components');
      $data->vented_cylinder_dimensions=$request->input('vented_cylinder_dimensions');
      $data->how_many_days_of_engineer_labour=$request->input('how_many_days_of_engineer_labour');
      $data->additional_notes=$request->input('additional_notes');
      $data->notes_to_officer_engineer=$request->input('notes_to_officer_engineer');
      $data->boiler_1_guide_price=$request->input('boiler_1_guide_price');
      $data->boiler_2_guide_price=$request->input('boiler_2_guide_price');
      $data->boiler_3_guide_price=$request->input('boiler_3_guide_price');
      $data->boiler_1_Amend=$request->input('boiler_1_Amend');
      $data->boiler_2_Amend=$request->input('boiler_2_Amend');
      $data->boiler_3_Amend=$request->input('boiler_3_Amend');
      $data->deposit_required=$request->input('deposit_required');
      $data->email_quote_to_customer_now=$request->input('email_quote_to_customer_now');
      $data->user_id=auth()->user()->id;
      $data->save();
      return redirect('/lead/'.$request->input('tleadid'));

    }

    public function choosenboltsstore(Request $request){

      if($request->input('action') == 'Addition'){
       
         $data = new Boltschoosen();
         $data->unique_id = $request->input('unique_id');
         $data->boltsid = $request->input('boltsid');
         $data->value = $request->input('value');
         $data->qty = $request->input('qty');
         $data->total_price = $request->input('value')*$request->input('qty');
         $data->save();
         
         return 'success';

      }


      if($request->input('action') == 'Removeval'){
       
          $data = Boltschoosen::where('unique_id',$request->input('unique_id'))->where('boltsid',$request->input('boltsid'))->delete();
          return 'unchecked';

      }
    

    }
}
