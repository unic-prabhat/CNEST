@extends('layouts.master')
@section('content')
<div class="page-content-tab">
  <div class="container-fluid">
    <div class="row">
       <div class="col-sm-12">
         <div class="card">
           <div class="card-body">
             <h2>Edit Quote</h2>

             <br><br>
             <h4 class="mb-0 header-title">CURRENT SYSTEM CONFIGURATION</h4>
             <form name="quoteupdatefrm" id="quoteupdatefrm" method="POST" action="{{URL::to('/boiler/update')}}">
               @csrf
               <input type="hidden" name="tleadid" value="{{$tleadid}}">
             <div class="row">
               <div class="col-md-4">
                  <div class="form-group mb-0" style="padding-right:20px;">
                     <label for="example-password-input" class="col-form-label text-left">Current Boiler Type*</label>
                     <input type="hidden" name="editId" value="{{$id}}">

                     <select class="form-control" name="current_boiler_type">
                        <option value="">Please select</option>
                        @foreach(App\CurrentBoilerType::all() as $bt)
                        <option value="{{$bt->name}}" @if($dboiler->current_boiler_type === $bt->name) selected @endif>{{$bt->name}}</option>
                        @endforeach
                     </select>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group mb-0" style="padding-right:20px;">
                     <label for="example-password-input" class="col-form-label text-left">Current Boiler Location*</label>
                     <select class="form-control" name="current_boiler_location">
                        <option value="">Please select</option>
                        @foreach(App\CurrentBoilerLocation::all() as $bt)
                        <option value="{{$bt->name}}" @if($dboiler->current_boiler_location === $bt->name) selected @endif>{{$bt->name}}</option>
                        @endforeach
                     </select>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group mb-0" >
                     <label for="example-password-input" class="col-form-label text-left">Current Flue*</label>
                     <select class="form-control" name="current_flue">
                        <option value="">Please select</option>
                        @foreach(App\CurrentFlue::all() as $bt)
                        <option value="{{$bt->name}}" @if($dboiler->current_flue === $bt->name) selected @endif>{{$bt->name}}</option>
                        @endforeach
                     </select>
                  </div>
               </div>
            </div>
            <div class="row mt-2">
               <div class="col-lg-6">
                  <label for="example-password-input" class="col-form-label text-left">Existing Shower?*</label>
                  <div class="form-group mb-0">
                     <select class="form-control" name="existing_shower">
                        <option value="">None</option>
                        @foreach(App\ExistingShower::all() as $bt)
                        <option value="{{$bt->name}}" @if($dboiler->current_flue === $bt->name) selected @endif>{{$bt->name}}</option>
                        @endforeach
                     </select>
                  </div>
               </div>
            </div>

            <br><br>
            <h4 class="mb-0 header-title">NEW SYSTEM CONFIGURATION</h4>
            <div class="row">
              <div class="col-md-4">
                 <div class="form-group" style="padding-right:20px;">
                    <label for="example-password-input" class="col-form-label text-left">New Fuel Type*</label>
                    <select class="form-control" name="new_fuel_type">
                       <option value="">None</option>
                       @foreach(App\newfuleType::all() as $bt)
                       <option value="{{$bt->name}}" @if($dboiler->new_fuel_type === $bt->name) selected @endif>{{$bt->name}}</option>
                       @endforeach
                    </select>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="form-group" style="padding-right:20px;">
                    <label for="example-password-input" class="col-form-label text-left">New Boiler Type*</label>
                    <select class="form-control medium gfield_select" name="new_boiler_yype">
                       <option value="">None</option>
                       @foreach(App\NewBoilerType::all() as $bt)
                       <option value="{{$bt->name}}" @if($dboiler->new_boiler_yype === $bt->name) selected @endif>{{$bt->name}}</option>
                       @endforeach
                    </select>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="form-group" >
                    <label for="example-password-input" class="col-form-label text-left">New Boiler Location*</label>
                    <select class="form-control" name="new_boiler_location">
                       <option value="">Please select</option>
                       @foreach(App\CurrentBoilerLocation::all() as $bt)
                       <option value="{{$bt->name}}" @if($dboiler->new_boiler_location === $bt->name) selected @endif>{{$bt->name}}</option>
                       @endforeach
                    </select>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-md-4">
                 <div class="form-group" style="padding-right:20px;">
                    <label for="example-password-input" class="col-form-label text-left">New Flue*</label>
                    <select class="form-control" name="new_flue">
                       <option value="">Please select</option>
                       @foreach(App\NewFlue::all() as $bt)
                       <option value="{{$bt->name}}" @if($dboiler->new_flue === $bt->name) selected @endif>{{$bt->name}}</option>
                       @endforeach
                    </select>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="form-group" style="padding-right:20px;">
                    <label for="example-password-input" class="col-form-label text-left">New Flue Location*</label>
                    <select class="form-control" name="new_flue_location">
                       <option value="">Please select</option>
                       @foreach(App\NewFlueLocation::all() as $bt)
                       <option value="{{$bt->name}}" @if($dboiler->new_flue_location === $bt->name) selected @endif>{{$bt->name}}</option>
                       @endforeach
                    </select>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="form-group" >
                    <label for="example-password-input" class="col-form-label text-left">Condensate Termination*</label>
                    <select class="form-control" name="condensate_termination">
                       <option value="">Please select</option>
                       @foreach(App\CondensateTermination::all() as $bt)
                       <option value="{{$bt->name}}" @if($dboiler->condensate_termination === $bt->name) selected @endif>{{$bt->name}}</option>
                       @endforeach
                    </select>
                 </div>
              </div>
              <div class="col-lg-6">
                 <label for="example-password-input" class="col-form-label text-left">New Controls*</label>
                 <div class="form-group">
                    <select class="form-control" name="new_controls">
                      @foreach(App\NewControls::all() as $bt)
                      <option value="{{$bt->name}}" @if($dboiler->new_controls === $bt->name) selected @endif>{{$bt->name}}</option>
                      @endforeach
                    </select>
                 </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                    <label>Is the New Boiler Being Fitted in a Cupboard?*</label>
                    <select class="form-control alter" name="is_the_new_boiler_being_fitted_in_a_cupboard" onchange="return boilerBeingFitted(this.value);">
                      <option value="" @if($dboiler->is_the_new_boiler_being_fitted_in_a_cupboard === '') selected @endif>Please select</option>
                      <option value="Yes" @if($dboiler->is_the_new_boiler_being_fitted_in_a_cupboard === "Yes") selected @endif>Yes</option>
                      <option value="No" @if($dboiler->is_the_new_boiler_being_fitted_in_a_cupboard === "No") selected @endif>No</option>
                    </select>
                </div>
              </div>
              <div id="willCupBoardNeed" class="col-lg-12 @if($dboiler->is_the_new_boiler_being_fitted_in_a_cupboard === null) d-none @endif">
                 <div class="form-group">
                    <label>Will the Cupboard Need Altering*</label>
                    <select class="form-control" name="is_the_newboiler_status">
                       <option value="" selected="selected" class="gf_placeholder">Please select</option>
                       @foreach(App\CupboardNeedAlt::all() as $bt)
                         <option value="{{$bt->name}}" @if($dboiler->is_the_newboiler_status === $bt->name) selected @endif>{{$bt->name}}</option>
                       @endforeach
                    </select>
                 </div>
              </div>
              <script type="text/javascript">
                function boilerBeingFitted(a){
                  // alert(a);
                  if(a=='Yes'){
                    $('#willCupBoardNeed').removeClass('d-none').addClass('d-block');
                  }else{
                    $('#willCupBoardNeed').removeClass('d-block').addClass('d-none');
                  }
                  return flase;
                }
              </script>
            </div>




            <br><br>
            <h4 class="mb-0 header-title">INSTALLATION REQUIREMENTS</h4>
              <div class="row">
                <div class="col-lg-6">
                   <div class="form-group" style="padding-right:20px;">
                      <label for="example-password-input" class="col-form-label text-left">Chemical System Treatment</label>
                      <select class="form-control" name="chemical_system_treatment">
                         <option value="" class="gf_placeholder">Please select</option>
                         @foreach(App\ChemicalSystemTreatment::all() as $bt)
                         <option value="{{$bt->name}}" @if($dboiler->chemical_system_treatment === $bt->name) selected @endif>{{$bt->name}}</option>
                         @endforeach
                      </select>
                   </div>
                </div>
                <div class="col-lg-6">
                   <div class="form-group">
                      <label for="example-password-input" class="col-form-label text-left">Gas Supply Requirements*</label>
                      <select class="form-control" name="gas_supply_requirements" onchange="return GasSupplyRequirements(this.value);">
                         <option value="">Please select</option>
                         @foreach(App\GasSupplyRequirements::all() as $bt)
                         <option value="{{$bt->name}}" @if($dboiler->gas_supply_requirements === $bt->name) selected @endif>{{$bt->name}}</option>
                         @endforeach
                      </select>
                   </div>
                   <div id="supplylength" class="@if($dboiler->gas_supply_length == null) d-none @endif">
                      <label>Gas Supply Length*</label>
                      <select class="form-control" name="gas_supply_length">
                         <option value="">Please select</option>
                         @foreach(App\GasSupplyLength::all() as $bt)
                         <option value="{{$bt->name}}" @if($dboiler->gas_supply_length === $bt->name) selected @endif>{{$bt->name}}</option>
                         @endforeach
                      </select>
                   </div>
                   <script type="text/javascript">
                     function GasSupplyRequirements(a){
                       if(a==''){
                         $('#supplylength').removeClass('d-block').addClass('d-none');
                       }else{
                         $('#supplylength').removeClass('d-none').addClass('d-block');
                       }
                       return false;
                     }
                   </script>
                </div>
              </div>
              <div class="row">
                 <div class="col-lg-12">
                    <div class="form-group">
                       <label for="example-password-input" class="col-form-label text-left">Asbestos Containing Materials (ACM) Identified?*</label>
                       <select class="form-control" name="asbestos_containing_materials">
                          <option value="">Please select</option>
                          @foreach(App\ACM::all() as $bt)
                          <option value="{{$bt->name}}" @if($dboiler->asbestos_containing_materials === $bt->name) selected @endif>{{$bt->name}}</option>
                          @endforeach
                       </select>
                    </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-lg-6">
                    <div class="form-group" style="padding-right:20px;">
                       <label for="example-password-input" class="col-form-label text-left">Parking Requirements*</label>
                       <select class="form-control" name="parking_requirements">
                          <option value="">Please select</option>
                          @foreach(App\ParkingRequirement::all() as $bt)
                          <option value="{{$bt->name}}" @if($dboiler->parking_requirements === $bt->name) selected @endif>{{$bt->name}}</option>
                          @endforeach
                       </select>
                    </div>
                 </div>
              </div>



              <br><br>
              <h4 class="mb-0 header-title">NEW INSTALLATION MATERIALS</h4>
              <div class="row">
                 <div class="col-lg-6">
                    <div class="form-group" style="padding-right:20px;">
                       <label for="example-password-input" class="col-form-label text-left">60/100mm Flue Kit*</label>
                       <select class="form-control" name="sixty_hundred_mm_flue_kit" onchange="return flueKit(this.value);">
                          <option value="">Please select</option>
                          @foreach(App\FlueKit::all() as $bt)
                          <option value="{{$bt->name}}" @if($dboiler->sixty_hundred_mm_flue_kit === $bt->name) selected @endif>{{$bt->name}}</option>
                          @endforeach
                       </select>
                       <div id="fluekitdetails" class="@if($dboiler->sixty_hundred_mm_flue_kit === null) d-none @endif">
                          <div class="ginput_container ginput_container_checkbox">
                             <ul class="gfield_checkbox" id="input_230_414">
                                @foreach(App\FlueKitDetails::all() as $bt)
                                <li class="gchoice">
                                   <input name="gchoice" type="checkbox" value="{{$bt->price}}" id="{{$bt->id}}">
                                   <label for="{{$bt->id}}" id="{{$bt->id}}" price=" +£ 20.79">{{$bt->name}}</label>
                                </li>
                                @endforeach
                             </ul>
                          </div>
                       </div>
                       <script type="text/javascript">
                          function flueKit(a){
                            if(a==''){
                              $('#fluekitdetails').removeClass('d-block').addClass('d-none');
                            }else{
                              $('#fluekitdetails').removeClass('d-none').addClass('d-block');
                            }
                            return false;
                          }
                       </script>
                    </div>
                 </div>
                 <div class="col-lg-6">
                    <div class="form-group">
                       <label for="example-password-input" class="col-form-label text-left">Magnetic System Filter*</label>
                       <select class="form-control" name="magnetic_system_filter">
                         @foreach(App\MagneticSystemFilter::all() as $bt)
                         <option value="{{$bt->name}}" @if($dboiler->magnetic_system_filter === $bt->name) selected @endif>{{$bt->name}}</option>
                         @endforeach
                       </select>
                    </div>
                 </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                   <div class="form-group">
                      <label class="col-form-label">Condensate Components*</label>
                      <select class="form-control" name="condensate_components" onchange="return condesnateCompo(this.value);">
                         <option value="">Please select</option>
                         <option value="Required" @if($dboiler->condensate_components === "Required") selected @endif>Required</option>
                         <option value="Not Required" @if($dboiler->condensate_components === "Not Required") selected @endif>Not Required</option>
                      </select>
                      <div class="@if($dboiler->additional_condensate_components === null) d-none @endif" id="condesnate">
                         <div class="form-group">
                            <label> Additional Condensate Components*</label>
                            <ul class="gfield_checkbox" id="input_230_309">
                               <li class="gchoice_230_309_1">
                                  <input name="additional_condensate_components[]" type="checkbox" value="(1x) Condense Pump|0" id="choice_230_309_1">
                                  <label for="choice_230_309_1" id="label_230_309_1" price="">(1x) Condense Pump</label>
                               </li>
                               <li class="gchoice_230_309_2">
                                  <input name="additional_condensate_components[]" type="checkbox" value="(1x) Soakaway|0" id="choice_230_309_2">
                                  <label for="choice_230_309_2" id="label_230_309_2" price="">(1x) Soakaway</label>
                               </li>
                            </ul>
                         </div>
                      </div>
                      <script type="text/javascript">
                        function condesnateCompo(a){
                          if(a=='Required'){
                            $('#condesnate').removeClass('d-none').addClass('d-block');
                          }else{
                            $('#condesnate').removeClass('d-block').addClass('d-none');
                          }
                          return false;
                        }
                      </script>
                   </div>
                </div>
                <div class="col-lg-6">
                   <div class="form-group" style="padding-right:20px;">
                      <label for="example-password-input" class="col-form-label text-left">Vented Cylinder Dimensions*</label>
                      <select class="form-control" name="vented_cylinder_dimensions">
                         <option value="">Please select</option>
                         @foreach(App\VentedCylinderDimension::all() as $bt)
                         <option value="{{$bt->name}}" @if($dboiler->vented_cylinder_dimensions === $bt->name) selected @endif>{{$bt->name}}</option>
                         @endforeach
                      </select>
                   </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6">
                   <div class="form-group">
                      <label for="example-password-input" class="col-form-label text-left">How many days of engineer labour?*</label>
                      <select class="form-control" name="how_many_days_of_engineer_labour">
                         <option value="">Please select</option>
                         <option value="1 Day Engineer Labour" @if($dboiler->how_many_days_of_engineer_labour === "1 Day Engineer Labour") selected @endif>1 Day Engineer Labour</option>
                         <option value="2 Days Engineer Labour" @if($dboiler->how_many_days_of_engineer_labour === "2 Days Engineer Labour") selected @endif>2 Days Engineer Labour</option>
                         <option value="3 Days Engineer Labour" @if($dboiler->how_many_days_of_engineer_labour === "3 Days Engineer Labour") selected @endif>3 Days Engineer Labour</option>
                         <option value="4 Days Engineer Labour" @if($dboiler->how_many_days_of_engineer_labour === "4 Days Engineer Labour") selected @endif>4 Days Engineer Labour</option>
                         <option value="5 Days Engineer Labour" @if($dboiler->how_many_days_of_engineer_labour === "5 Days Engineer Labour") selected @endif>5 Days Engineer Labour</option>
                         <option value="6 Days Engineer Labour" @if($dboiler->how_many_days_of_engineer_labour === "6 Days Engineer Labour") selected @endif>6 Days Engineer Labour</option>
                         <option value="7 Days Engineer Labour" @if($dboiler->how_many_days_of_engineer_labour === "7 Days Engineer Labour") selected @endif>7 Days Engineer Labour</option>
                         <option value="8 Days Engineer Labour" @if($dboiler->how_many_days_of_engineer_labour === "8 Days Engineer Labour") selected @endif>8 Days Engineer Labour</option>
                         <option value="9 Days Engineer Labour" @if($dboiler->how_many_days_of_engineer_labour === "9 Days Engineer Labour") selected @endif>9 Days Engineer Labour</option>
                         <option value="10 Days Engineer Labour" @if($dboiler->how_many_days_of_engineer_labour === "10 Days Engineer Labour") selected @endif>10 Days Engineer Labour</option>
                      </select>
                   </div>
                </div>
              </div>



              <br><br>
              <h4 class="mb-0 header-title">Installation Notes and Photographs</h4>
              <div class="row">
                 <div class="col-lg-6">
                    <div class="form-group" style="padding-right:20px;">
                       <label class="col-form-label text-left">Additional Notes</label>
                       <textarea class="form-control" name="additional_notes">{{$dboiler->additional_notes}}</textarea>
                    </div>
                 </div>
                 <div class="col-lg-6">
                    <div class="form-group">
                       <label class="col-form-label text-left">Notes to Office / Engineer</label>
                       <textarea class="form-control" name="notes_to_officer_engineer" placeholder="If you have included any electrical labour on this job, be sure to describe here what task the electrician would be completing in the property. If the job requires scaffolding, then include the information here.">{{$dboiler->notes_to_officer_engineer}}</textarea>
                    </div>
                 </div>
              </div>


              <br><br>
              <div class="row">
                 <div class="col-lg-4">
                    <div class="form-group">
                       <label>Boiler 1 Guide Price</label>
                       <input class="form-control" name="boiler_1_guide_price" type="text" id="guideone" value="{{$dboiler->boiler_1_guide_price}}"/>
                    </div>
                 </div>
                 <div class="col-lg-4">
                    <div class="form-group">
                       <label>Boiler 2 Guide Price</label>
                       <input class="form-control" type="text" name="boiler_2_guide_price" id="guidetwo" value="{{$dboiler->boiler_2_guide_price}}"/>
                    </div>
                 </div>
                 <div class="col-lg-4">
                    <div class="form-group">
                       <label>Boiler 3 Guide Price</label>
                       <input class="form-control" type="text" name="boiler_3_guide_price" id="guidethree" value="{{$dboiler->boiler_3_guide_price}}"/>
                    </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-lg-4">
                    <div class="form-group">
                       <label>Boiler 1 Amend*</label>
                       <input class="form-control" name="boiler_1_Amend" type="text" id="amendone" value="{{$dboiler->boiler_1_Amend}}"/>
                    </div>
                 </div>
                 <div class="col-lg-4">
                    <div class="form-group">
                       <label>Boiler 2 Amend*</label>
                       <input class="form-control" name="boiler_2_Amend" type="text" id="amendtwo" value="{{$dboiler->boiler_2_Amend}}"/>
                    </div>
                 </div>
                 <div class="col-lg-4">
                    <div class="form-group">
                       <label>Boiler 3 Amend*</label>
                       <input class="form-control" name="boiler_3_Amend" type="text" id="amendthree" value="{{$dboiler->boiler_3_Amend}}"/>
                    </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-lg-12">
                    <div class="form-group">
                       <label>Deposit Required*</label>
                       <input class="form-control" name="deposit_required" type="text" value="{{$dboiler->deposit_required}}"/>
                    </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-lg-12">
                    <div class="form-group">
                       <label>Email Quote to Customer Now?*</label>
                       <select class="form-control" name="email_quote_to_customer_now">
                          <option value="" selected="selected" class="gf_placeholder">Please select</option>
                          <option value="Yes" @if($dboiler->email_quote_to_customer_now === "Yes") selected @endif>Yes</option>
                          <option value="No" @if($dboiler->email_quote_to_customer_now === "No") selected @endif>No</option>
                       </select>
                    </div>
                 </div>
              </div>
              <button type="submit" name="quoteupdate" id="quoteupdate" class="btn btn-primary">UPDATE</button>
              </form>
              </div>
            </div>
           </div>
         </div>
       </div>
    </div>
@endsection
@section('js')

@endsection
