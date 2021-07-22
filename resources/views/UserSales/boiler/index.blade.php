@extends('UserSales.layouts.master')
@section('content')
<style media="screen">
.form-control:disabled, .form-control[readonly] {
  background-color: #ffffff;
  opacity: 1;
  border: 0px;
}
</style>

<div class="page-content-tab">
<div class="container-fluid">
<!-- Page-Title -->
<div class="row">
   <div class="col-sm-12 mt-5">
       <!--<form method="post" action="{{route('pdf.genearted')}}">-->
        <form method="post" action="{{URL::to('pdfgenerate')}}">

         @csrf
         <input type="hidden" name="main_uniqid" value="{{Session::get('unq')}}" id="main_uniqid">
         <div id="smartwizard">
            <ul class="nav">
               <li>
                  <a class="nav-link" href="#step-1">
                  Step 1
                  </a>
               </li>
               <li>
                  <a class="nav-link" href="#step-2">
                  Step 2
                  </a>
               </li>
               <li>
                  <a class="nav-link" href="#step-3">
                  Step 3
                  </a>
               </li>
               <li>
                  <a class="nav-link" href="#step-4">
                  Step 4
                  </a>
               </li>
            </ul>
            <div class="tab-content">
               <div id="step-1" class="tab-pane" role="tabpanel">
                  <div class="row">
                     <div class="col-lg-12 ss">
                        <!--<h4 class="mt-0 header-title">Textual inputs</h4>-->
                        <!--<p class="text-muted mb-3">Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each-->
                        <!--    textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.-->
                        <!--</p>-->
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="form-group row">
                                 <label for="example-text-input" class="col-sm-4 col-form-label text-left">Boiler Type Required*</label>

                                 <div class="col-sm-8">
                                    <select class="form-control" name="boiler_id" required>
                                       <option value="">Select Boiler</option>
                                       @foreach(App\Boiler::all() as $boil)
                                       <option value="{{$boil->id}}">{{$boil->name}}</option>
                                       @endforeach
                                    </select>
                                 </div>


                              </div>
                           </div>
                        </div>
                        <div class="row mt-5" id="getboiler">
                        </div>
                        <div class="row show_next mt-5" id="choice_get_control" name="">

                           <div class="col-lg-4 rr">
                              <label>First Boiler Controls*</label>

                              <select class="form-control" name="first_boiler_controls" onchange="return firstregularboilercontroller(this);">
                                 <option value="" selected="selected" class="gf_placeholder">Please select</option>
                                 @foreach(App\BoilerControls::all() as $bc)
                                 <option value="{{$bc->price}}">{{$bc->pack}}</option>
                                 @endforeach
                              </select>
                           </div>
                           <div class="col-lg-4 rr">
                              <label>Second Boiler Controls*</label>
                              <select class="form-control" name="second_boiler_controls" onchange="return secondregularboilercontroller(this);">
                                <option value="" selected="selected" class="gf_placeholder">Please select</option>
                                @foreach(App\BoilerControls::all() as $bc)
                                <option value="{{$bc->price}}">{{$bc->pack}}</option>
                                @endforeach
                              </select>
                           </div>
                           <div class="col-lg-4 rr">
                              <label>Third Boiler Controls*</label>
                              <select class="form-control" name="third_boiler_controls" onchange="return thirdregularboilercontroller(this);">
                                <option value="" selected="selected" class="gf_placeholder">Please select</option>
                                @foreach(App\BoilerControls::all() as $bc)
                                <option value="{{$bc->price}}">{{$bc->pack}}</option>
                                @endforeach
                              </select>
                           </div>
                        </div>
                        <div class="row mt-4 show_next" id="bolts">
                           <div class="col-lg-12 bolts">
                              <label>Bolt Ons</label>
                              <ul>
                                @foreach(App\BoltOns::all() as $bto)
                                <li>
                                  <input type="checkbox" class="form-control check" name=boltson[]" id="boltsonall{{$bto->id}}" value="{{$bto->value}}" onchange="return onbold{{$bto->id}}()">
                                  <label>{{$bto->name}}</label>

                                <input type="number" class="mynumshow" name="boltsonnum[]" id="boltsonnum{{$bto->id}}"></li>

                                <script type="text/javascript">
                                  var calculatebolt = '';
                                  function onbold{{$bto->id}}(){
                                    var numbers = [];
                                    var boltson = $('#boltsonall{{$bto->id}}').val();
                                    var boltsonnum = $('#boltsonnum{{$bto->id}}').val();
                                    var globalid = {{$bto->id}};
                                    var uniqueid = $('#main_uniqid').val();
                                    numbers.push(uniqueid,globalid,boltson,boltsonnum);

                                    $.ajax({
                                      type:'POST',
                                      url:'{{URL::to("/choosenboltsstore")}}',
                                      data:{
                                        "_token": "{{ csrf_token() }}",
                                        allvals:numbers
                                      },
                                      success:function(data){
                                        //alert("success")
                                      },
                                      error:function(data){
                                        alert('error');
                                      }
                                    });

                                    return false;
                                  }
                                </script>

                                @endforeach
                              </ul>
                           </div>
                        </div>
                        <div class="row mt-4">
                           <div class="col-lg-6 rr">
                              <h4 class="mt-0 header-title">Customer Details</h4>
                              <div class="form-group row">
                                 <label for="example-email-input" class="col-sm-4 col-form-label text-left">First Name</label>
                                 <div class="col-sm-8">
                                    <input class="form-control" type="text" id="example-email-input" value="{{$lead->firstname}}" disabled required><input type="hidden" name="cus_firstname" value="{{$lead->firstname}}">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="example-tel-input" class="col-sm-4 col-form-label text-left">Sure Name</label>
                                 <div class="col-sm-8">
                                    <input class="form-control" type="text" name="cus_surname" value="{{$lead->surname}}" disabled required><input type="hidden" name="cus_surname" value="{{$lead->surname}}">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="example-password-input" class="col-sm-4 col-form-label text-left">Email</label>
                                 <div class="col-sm-8">
                                    <input class="form-control" type="email" name="email" value="{{$lead->email}}" required>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-6 rr">
                              <h4 class="mt-0 header-title">Property Details</h4>
                              <div class="form-group row">
                                 <label for="example-email-input" class="col-sm-4 col-form-label text-left">Installation Address</label>
                                 <div class="col-sm-8">
                                    <input class="form-control" type="text" id="example-email-input" value="{{$lead->address}}" disabled required><input type="hidden" name="cus_installation_address" value="{{$lead->address}}">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="example-tel-input" class="col-sm-4 col-form-label text-left">Street Address</label>
                                 <div class="col-sm-8">
                                    <input class="form-control" type="text" value="{{$lead->town}}" disabled required><input type="hidden" name="cus_street_address" value="{{$lead->town}}">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="example-password-input" class="col-sm-4 col-form-label text-left">ZIP / Postal Code
                                 </label>
                                 <div class="col-sm-8">
                                    <input class="form-control" type="text" value="{{$lead->postcode}}" disabled required><input type="hidden" name="cus_postal_code" value="{{$lead->postcode}}">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--end col-->
                  </div>
               </div>
               <div id="step-2" class="tab-pane" role="tabpanel">
                  <div class="row">
                     <div class="col-lg-6">
                        <h4 class="mt-2 header-title mb-0">Current System Configuration</h4>
                     </div>
                  </div>
                  <div class="row rr">
                     <div class="col-md-4">
                        <div class="form-group mb-0" style="padding-right:20px;">
                           <label for="example-password-input" class="col-form-label text-left">Current Boiler Type*</label>
                           <select class="form-control" name="current_boiler_type">
                              <option value="">Please select</option>
                              @foreach(App\CurrentBoilerType::all() as $bt)
                              <option>{{$bt->name}}</option>
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
                              <option>{{$bt->name}}</option>
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
                              <option>{{$bt->name}}</option>
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
                              <option>{{$bt->name}}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="row mt-4">
                     <div class="col-lg-6">
                        <h4 class="mt-2 header-title mb-0">New System Configuration</h4>
                     </div>
                  </div>
                  <div class="row rr">
                     <div class="col-md-4">
                        <div class="form-group mb-0" style="padding-right:20px;">
                           <label for="example-password-input" class="col-form-label text-left">New Fuel Type*</label>
                           <select class="form-control" name="new_fuel_type">
                              <option value="">None</option>
                              @foreach(App\newfuleType::all() as $bt)
                              <option>{{$bt->name}}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group mb-0" style="padding-right:20px;">
                           <label for="example-password-input" class="col-form-label text-left">New Boiler Type*</label>
                           <select class="form-control medium gfield_select" name="new_boiler_yype">
                              <option value="">None</option>
                              @foreach(App\NewBoilerType::all() as $bt)
                              <option>{{$bt->name}}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group mb-0" >
                           <label for="example-password-input" class="col-form-label text-left">New Boiler Location*</label>
                           <select class="form-control" name="new_boiler_location">
                              <option value="" selected="selected" class="gf_placeholder">Please select</option>
                              @foreach(App\CurrentBoilerLocation::all() as $bt)
                              <option>{{$bt->name}}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="row rr">
                     <div class="col-md-4">
                        <div class="form-group mb-0" style="padding-right:20px;">
                           <label for="example-password-input" class="col-form-label text-left">New Flue*</label>
                           <select class="form-control" name="new_flue">
                              <option value="" selected="selected" class="gf_placeholder">Please select</option>
                              @foreach(App\NewFlue::all() as $bt)
                              <option>{{$bt->name}}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group mb-0" style="padding-right:20px;">
                           <label for="example-password-input" class="col-form-label text-left">New Flue Location*</label>
                           <select class="form-control" name="new_flue_location">
                              <option value="" selected="selected" class="gf_placeholder">Please select</option>
                              @foreach(App\NewFlueLocation::all() as $bt)
                              <option>{{$bt->name}}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group mb-0" >
                           <label for="example-password-input" class="col-form-label text-left">Condensate Termination*</label>
                           <select class="form-control" name="condensate_termination">
                              <option value="" selected="selected" class="gf_placeholder">Please select</option>
                              @foreach(App\CondensateTermination::all() as $bt)
                              <option>{{$bt->name}}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="row mt-2">
                     <div class="col-lg-6">
                        <label for="example-password-input" class="col-form-label text-left">New Controls*</label>
                        <div class="form-group mb-0" style="padding-right:20px;">
                           <select class="form-control" name="new_controls">
                             @foreach(App\NewControls::all() as $bt)
                             <option>{{$bt->name}}</option>
                             @endforeach
                           </select>
                        </div>
                     </div>
                  </div>
                  <!-- <div class="row show_next mt-4" id="conventional">
                     <label>New Cylinder Required?*</label>
                     <select class="form-control">
                        <option value="" selected="selected" class="gf_placeholder">Please select</option>
                        <option value="No">No</option>
                        <option value="Yes - Vented Cylinder">Yes - Vented Cylinder</option>
                        <option value="Yes - Unvented Cylinder">Yes - Unvented Cylinder</option>
                     </select>
                  </div> -->
                  <!-- <div class="row show_next mt-4" id="combi">
                     <label>Incoming Flow Rate (Litres/Min)*</label>
                     <select class="form-control">
                        <option value="" selected="selected" class="gf_placeholder">Please select</option>
                        <option value="Unable to Check">Unable to Check</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                     </select>
                  </div> -->
                  <div class="row mt-4">
                     <div class="col-lg-12">
                        <div class="form-group">
                           <label>Is the New Boiler Being Fitted in a Cupboard?*</label>
                           <select class="form-control alter" name="is_the_new_boiler_being_fitted_in_a_cupboard">
                              <option value="">Please select</option>
                              <option value="Yes">Yes</option>
                              <option value="No">No</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="row mt-3 show_next" id="altering">
                     <div class="col-lg-12">
                        <div class="form-group">
                           <label>Will the Cupboard Need Altering*</label>
                           <select class="form-control" name="will_the_cupboard_need_altering">
                              <option value="" selected="selected" class="gf_placeholder">Please select</option>
                              @foreach(App\CupboardNeedAlt::all() as $bt)
                              <option>{{$bt->name}}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="row mt-4">
                     <div class="col-lg-12">
                        <h4 class="mt-2 mb-1 header-title">Decommission and Removal</h4>
                        <p class="text-muted mb-3">We include the decommission and removal of all redundant materials wherever it is safe to do so.We consider customer safety our highest priority. If the tanks in your loft are suspected to be comprised of Asbestos Containing
                           Materials and require cutting to pieces to remove, then the company reserves the right to leave the tanks in their current location.
                        </p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <label for="example-password-input" class="col-form-label text-left">Removals</label>
                        <select class="form-control" multiple name="removals[]">
                            @foreach(App\Removals::all() as $bt)
                            <option>{{$bt->name}}</option>
                            @endforeach
                        </select>
                     </div>
                  </div>
               </div>
               <div id="step-3" class="tab-pane" role="tabpanel">
                  <div class="row">
                     <div class="col-lg-6">
                        <h4 class="mt-2 header-title mb-0">Installation Requirements</h4>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="form-group" style="padding-right:20px;">
                           <label for="example-password-input" class="col-form-label text-left">Chemical System Treatment</label>
                           <select class="form-control" name="chemical_system_treatment">
                              <option value="" selected="selected" class="gf_placeholder">Please select</option>
                              @foreach(App\ChemicalSystemTreatment::all() as $bt)
                              <option>{{$bt->name}}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group">
                           <label for="example-password-input" class="col-form-label text-left">Gas Supply Requirements*</label>
                           <select class="form-control" name="supply_change">
                              <option value="" selected="selected" class="gf_placeholder">Please select</option>
                              @foreach(App\GasSupplyRequirements::all() as $bt)
                              <option>{{$bt->name}}</option>
                              @endforeach
                           </select>
                        </div>
                        <div id="supplylength" class="show_next">
                           <label>Gas Supply Length*</label>
                           <select class="form-control" name="gas_supply_length">
                              <option value=""  class="gf_placeholder">Please select</option>
                              @foreach(App\GasSupplyLength::all() as $bt)
                              <option>{{$bt->name}}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="form-group" style="padding-right:20px;">
                           <label for="example-password-input" class="col-form-label text-left">Electrical Work Required*</label>
                           <select class="form-control" multiple name="electrical_work_required">
                              @foreach(App\ElectricalWorkRequired::all() as $bt)
                              <option>{{$bt->name}}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group">
                           <label for="example-password-input" class="col-form-label text-left">Asbestos Containing Materials (ACM) Identified?*</label>
                           <select class="form-control" name="asbestos_containing_materials">
                              <option value="" class="gf_placeholder">Please select</option>
                              @foreach(App\ACM::all() as $bt)
                              <option>{{$bt->name}}</option>
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
                              <option value="" selected="selected" class="gf_placeholder">Please select</option>
                              @foreach(App\ParkingRequirement::all() as $bt)
                              <option>{{$bt->name}}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-6">
                        <h4 class="mt-2 header-title mb-0">New Installation Materials</h4>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="form-group" style="padding-right:20px;">
                           <label for="example-password-input" class="col-form-label text-left">60/100mm Flue Kit*</label>
                           <select class="form-control" name="materials_check">
                              <option value="" selected="selected" class="gf_placeholder">Please select</option>
                              @foreach(App\FlueKit::all() as $bt)
                              <option>{{$bt->name}}</option>
                              @endforeach

                           </select>
                           <div id="materials_check" class="show_next">
                              <div class="ginput_container ginput_container_checkbox">
                                 <ul class="gfield_checkbox" id="input_230_414">

                                    @foreach(App\FlueKitDetails::all() as $bt)
                                    <li class="gchoice">
                                       <input name="" type="checkbox" value="{{$bt->price}}" id="{{$bt->id}}">
                                       <label for="{{$bt->id}}" id="{{$bt->id}}" price=" +£ 20.79">{{$bt->name}}</label>
                                    </li>
                                    @endforeach

                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group">
                           <label for="example-password-input" class="col-form-label text-left">Magnetic System Filter*</label>
                           <select class="form-control" name="magnetic_system_filter">
                             @foreach(App\MagneticSystemFilter::all() as $bt)
                             <option>{{$bt->name}}</option>
                             @endforeach
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="form-group" style="padding-right:20px;">
                           <label for="example-password-input" class="col-form-label text-left">Additional Central Heating Parts*</label>
                           <select class="form-control" name="additional_central_heating_parts">
                              <option value="" class="gf_placeholder">Please select</option>
                              <option value="Required|0">Required</option>
                              <option value="Not Required|0" selected="selected">Not Required</option>
                           </select>
                           <div id="cenral_heating" class="show_next">
                              <ul class="gfield_checkbox" id="input_230_335">
                                 <li class="gchoice_230_335_1">
                                    <input name="input_335.1" type="checkbox" value="(1x) Grundfos UPS2 15-50/60 Pump|89.99" id="choice_230_335_1">
                                    <label for="choice_230_335_1" id="label_230_335_1" price=" +£ 89.99">(1x) Grundfos UPS2 15-50/60 Pump</label>
                                 </li>
                                 <li class="gchoice_230_335_2">
                                    <input name="input_335.2" type="checkbox" value="(1x) Grundfos UPS2 25-80 Pump|221.69" id="choice_230_335_2">
                                    <label for="choice_230_335_2" id="label_230_335_2" price=" +£ 221.69">(1x) Grundfos UPS2 25-80 Pump</label>
                                 </li>
                                 <li class="gchoice_230_335_3">
                                    <input name="input_335.3" type="checkbox" value="(1x) Honeywell 2 Port (22mm)|56.99" id="choice_230_335_3">
                                    <label for="choice_230_335_3" id="label_230_335_3" price=" +£ 56.99">(1x) Honeywell 2 Port (22mm)</label>
                                 </li>
                                 <li class="gchoice_230_335_4">
                                    <input name="input_335.4" type="checkbox" value="(2x) Honeywell 2 Port (22mm)|113.98" id="choice_230_335_4">
                                    <label for="choice_230_335_4" id="label_230_335_4" price=" +£ 113.98">(2x) Honeywell 2 Port (22mm)</label>
                                 </li>
                                 <li class="gchoice_230_335_5">
                                    <input name="input_335.5" type="checkbox" value="(1x) Honeywell 2 Port (28mm)|77.77" id="choice_230_335_5">
                                    <label for="choice_230_335_5" id="label_230_335_5" price=" +£ 77.77">(1x) Honeywell 2 Port (28mm)</label>
                                 </li>
                                 <li class="gchoice_230_335_6">
                                    <input name="input_335.6" type="checkbox" value="(1x) Honeywell 3 Port (22mm)|75.57" id="choice_230_335_6">
                                    <label for="choice_230_335_6" id="label_230_335_6" price=" +£ 75.57">(1x) Honeywell 3 Port (22mm)</label>
                                 </li>
                                 <li class="gchoice_230_335_7">
                                    <input name="input_335.7" type="checkbox" value="(1x) Honeywell 3 Port (28mm)|99.05" id="choice_230_335_7">
                                    <label for="choice_230_335_7" id="label_230_335_7" price=" +£ 99.05">(1x) Honeywell 3 Port (28mm)</label>
                                 </li>
                                 <li class="gchoice_230_335_8">
                                    <input name="input_335.8" type="checkbox" value="(1x) Honeywell L641A Cylinder Thermostat|17.18" id="choice_230_335_8">
                                    <label for="choice_230_335_8" id="label_230_335_8" price=" +£ 17.18">(1x) Honeywell L641A Cylinder Thermostat</label>
                                 </li>
                                 <li class="gchoice_230_335_9">
                                    <input name="input_335.9" type="checkbox" value="(1x) Honeywell CS92A Wireless Cylinder Thermostat|68.59" id="choice_230_335_9">
                                    <label for="choice_230_335_9" id="label_230_335_9" price=" +£ 68.59">(1x) Honeywell CS92A Wireless Cylinder Thermostat</label>
                                 </li>
                                 <li class="gchoice_230_335_11">
                                    <input name="input_335.11" type="checkbox" value="(1x) Drayton 2 Port (22mm)|39.99" id="choice_230_335_11">
                                    <label for="choice_230_335_11" id="label_230_335_11" price=" +£ 39.99">(1x) Drayton 2 Port (22mm)</label>
                                 </li>
                                 <li class="gchoice_230_335_12">
                                    <input name="input_335.12" type="checkbox" value="(1x) Drayton 2 Port (28mm)|86" id="choice_230_335_12">
                                    <label for="choice_230_335_12" id="label_230_335_12" price=" +£ 86.00">(1x) Drayton 2 Port (28mm)</label>
                                 </li>
                                 <li class="gchoice_230_335_13">
                                    <input name="input_335.13" type="checkbox" value="(1x) Drayton 3 Port (22mm)|59.99" id="choice_230_335_13">
                                    <label for="choice_230_335_13" id="label_230_335_13" price=" +£ 59.99">(1x) Drayton 3 Port (22mm)</label>
                                 </li>
                                 <li class="gchoice_230_335_14">
                                    <input name="input_335.14" type="checkbox" value="(1x) Drayton 3 Port (28mm)|119.76" id="choice_230_335_14">
                                    <label for="choice_230_335_14" id="label_230_335_14" price=" +£ 119.76">(1x) Drayton 3 Port (28mm)</label>
                                 </li>
                                 <li class="gchoice_230_335_15">
                                    <input name="input_335.15" type="checkbox" value="(1x) Auto Bypass (22mm)|21.53" id="choice_230_335_15">
                                    <label for="choice_230_335_15" id="label_230_335_15" price=" +£ 21.53">(1x) Auto Bypass (22mm)</label>
                                 </li>
                                 <li class="gchoice_230_335_16">
                                    <input name="input_335.16" type="checkbox" value="(1x) Viessmann Conversion Kit|25" id="choice_230_335_16">
                                    <label for="choice_230_335_16" id="label_230_335_16" price=" +£ 25.00">(1x) Viessmann Conversion Kit</label>
                                 </li>
                                 <li class="gchoice_230_335_17">
                                    <input name="input_335.17" type="checkbox" value="(1x) Viessmann Off Wall Bracket|44.66" id="choice_230_335_17">
                                    <label for="choice_230_335_17" id="label_230_335_17" price=" +£ 44.66">(1x) Viessmann Off Wall Bracket</label>
                                 </li>
                                 <li class="gchoice_230_335_18">
                                    <input name="input_335.18" type="checkbox" value="(1x) Viessmann DHW Cylinder Stat|32.9" id="choice_230_335_18">
                                    <label for="choice_230_335_18" id="label_230_335_18" price=" +£ 32.90">(1x) Viessmann DHW Cylinder Stat</label>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group">
                           <label for="example-password-input" class="col-form-label text-left">Condensate Components*</label>
                           <select class="form-control" name="condesnate">
                              <option value="" selected="selected" class="gf_placeholder">Please select</option>
                              <option value="Required|0">Required</option>
                              <option value="Not Required|0">Not Required</option>
                           </select>
                           <div class="show_next" id="condesnate">
                              <div class="form-group">
                                 <label> Additional Condensate Components*</label>
                                 <ul class="gfield_checkbox" id="input_230_309">
                                    <li class="gchoice_230_309_1">
                                       <input name="input_309.1" type="checkbox" value="(1x) Condense Pump|0" id="choice_230_309_1">
                                       <label for="choice_230_309_1" id="label_230_309_1" price="">(1x) Condense Pump</label>
                                    </li>
                                    <li class="gchoice_230_309_2">
                                       <input name="input_309.2" type="checkbox" value="(1x) Soakaway|0" id="choice_230_309_2">
                                       <label for="choice_230_309_2" id="label_230_309_2" price="">(1x) Soakaway</label>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="form-group" style="padding-right:20px;">
                           <label for="example-password-input" class="col-form-label text-left">Vented Cylinder Dimensions*</label>
                           <select class="form-control" name="vented_cylinder_dimensions">
                              <option value="" selected="selected" class="gf_placeholder">Please select</option>
                              @foreach(App\VentedCylinderDimension::all() as $bt)
                              <option>{{$bt->name}}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-6">
                        <h4 class="mt-2 header-title mb-0">Radiator Requirements</h4>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="form-group" style="padding-right:20px;">
                           <label for="example-password-input" class="col-form-label text-left">Radiator Requirements*</label>
                           <select class="form-control" id="select_list" multiple name="radiator_requirements">
                             <option value="">No Radiators Required</option>
                              <option value="radiotorsreq">Radiators Required</option>
                              <option value="trvs">TRV's / Lockshields Required</option>
                              <option value="towelrails">Towel Rails Required</option>
                           </select>
                        </div>
                     </div>



                    <div class="col-lg-6">
                      <!-- <h3>Hello</h3> -->
                    </div>

                    <div class="col-lg-12">
                      <div class="mycontainer" id="radiotorsreq" style="display:none">
                        <h5>Radiator Measurement / Location*</h5>

                        <div id="fetchRadiatorMeasurementLocation">
                           <center><h6>Fetch</h6></center>
                        </div>

                        <!-- <form id="radiatorMeasurementLocationForm" class=""  method="post"> -->
                          <div class="row mt-3">
                            <div class="col-md-3">
                              <select class="form-control" id="rml_location" name="radiator_requirements">
                                <option value="">Select Location</option>
                                @foreach(App\CurrentBoilerLocation::all() as $bt)
                                <option>{{$bt->name}}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="col-md-2">
                              <select class="form-control" id="rml_height" name="">
                                <option value="">Select Height</option>
                                <option value="300">300</option>
                                <option value="350">350</option>
                                <option value="400">400</option>
                                <option value="450">450</option>
                                <option value="500">500</option>
                                <option value="550">550</option>
                                <option value="600">600</option>
                                <option value="650">650</option>
                                <option value="700">700</option>
                              </select>
                            </div>
                            <div class="col-md-2">
                              <select class="form-control" id="rml_width" name="">
                                <option value="">Select Width</option>

                                <option value="400">400</option>
                                <option value="500">500</option>
                                <option value="600">600</option>
                                <option value="700">700</option>
                                <option value="800">800</option>
                                <option value="900">900</option>
                                <option value="1000">1000</option>
                                <option value="1100">1100</option>
                                <option value="1200">1200</option>
                                <option value="1300">1300</option>
                                <option value="1400">1400</option>
                                <option value="1500">1500</option>
                                <option value="1600">1600</option>
                                <option value="1700">1700</option>
                                <option value="1800">1800</option>
                                <option value="1900">1900</option>
                                <option value="2000">2000</option>
                              </select>
                            </div>
                            <div class="col-md-4">
                              <select class="form-control" id="rml_psd" name="">
                                <option value="">Select P+ / SINGLE (K1) / DOUBLE (K2)</option>
                                <option value="P+">P+</option>
                                <option value="K1">K1</option>
                                <option value="K2">K2</option>
                                <option value="K3">K3</option>
                              </select>
                            </div>
                            <div class="col-md-1">
                              <button id="radiotorsreqBtn" onclick="return radiatorMeasurementLocation();" type="button" name="button" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                            </div>
                          </div>
                        <!-- </form> -->
                      </div>
                    </div>



                    <div class="col-lg-12">

                      <div class="mycontainer" id="trvs" style="display:none">
                        <h5>Thermostatic Radiator Valves*</h5>

                        <div id="fetchThermostaticRadiatorValves">
                           <center><h6>Fetch</h6></center>
                        </div>
                        <!-- <form id="sas" class="" action="index.html" method="post"> -->

                          <div class="row mt-3">
                            <div class="col-md-5">
                              <select class="form-control" id="trv_size" name="">
                                <option value="">Select Size</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                            </div>
                            <div class="col-md-3">
                              <select class="form-control" id="trv_type" name="">
                                <option value="">Select Type</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                            </div>
                            <div class="col-md-3">
                              <select class="form-control" id="trv_quantity" name="">
                                <option value="">Select Quantity</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                            </div>
                            <div class="col-md-1">
                              <button type="button" onclick="return thermostaticRadiatorValves();" name="button" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                            </div>
                          </div>
                        <!-- </form> -->
                      </div>
                    </div>





                    <div class="col-lg-12">
                      <div class="mycontainer" id="towelrails" style="display:none">
                        <h5>Towel Rail Measurement / Location*</h5>

                        <div id="fetchTowelRailMeasurement">
                           <center><h6>Fetch</h6></center>
                        </div>

                          <div class="row mt-3">
                            <div class="col-md-5">
                              <select class="form-control" id="trm_location" name="">
                                <option value="">Select Location</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                            </div>
                            <div class="col-md-2">
                              <select class="form-control" id="trm_height">
                                <option value="">Select Height</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                            </div>
                            <div class="col-md-2">
                              <select class="form-control" id="trm_width">
                                <option value="">Select Width</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                            </div>
                            <div class="col-md-2">
                              <select class="form-control" id="trm_color">
                                <option value="">Select Color</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                            </div>
                            <div class="col-md-1">
                              <button type="button" onclick="return towelRailMeasurement();" name="button" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                            </div>
                          </div>
                        <br>
                        <h5>Towel Rail Valves*</h5>
                        <div id="fetchTowelRailValves">
                           <center><h6>Fetch</h6></center>
                        </div>
                          <div class="row mt-3">
                            <div class="col-md-5">
                              <select class="form-control" id="torv_type">
                                <option value="">Select Type</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                            </div>
                            <div class="col-md-4">
                              <select class="form-control" id="torv_angel">
                                <option value="">Select Angle</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                            </div>
                            <div class="col-md-2">
                              <select class="form-control" id="torv_number">
                                <option value="">Select number</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                            </div>
                            <div class="col-md-1">
                              <button type="button" onclick="return towelRailValves();" name="button" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                            </div>
                          </div>
                      </div>
                    </div>









                     <div class="col-lg-6">
                        <div class="form-group">
                           <label for="example-password-input" class="col-form-label text-left">How many days of engineer labour?*</label>
                           <select class="form-control" name="how_many_days_of_engineer_labour">
                              <option value="0">Please select</option>
                              <option value="1">1 Day Engineer Labour</option>
                              <option value="2">2 Days Engineer Labour</option>
                              <option value="3">3 Days Engineer Labour</option>
                              <option value="4">4 Days Engineer Labour</option>
                              <option value="5">5 Days Engineer Labour</option>
                              <option value="6">6 Days Engineer Labour</option>
                              <option value="7">7 Days Engineer Labour</option>
                              <option value="8">8 Days Engineer Labour</option>
                              <option value="9">9 Days Engineer Labour</option>
                              <option value="10">10 Days Engineer Labour</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="col-lg-12 parent show_next" id="radiators_required">
                           <lable>Radiator Measurement / Location*</lable>
                           <div class="parents">
                              <div class="child_team">
                                 <label>LOCATION</label>
                                 <select class="form-control">
                                    <option value="Bedroom 1">Bedroom 1</option>
                                    <option value="Bedroom 2">Bedroom 2</option>
                                    <option value="Bedroom 3">Bedroom 3</option>
                                    <option value="Bedroom 4">Bedroom 4</option>
                                    <option value="Bedroom 5">Bedroom 5</option>
                                    <option value="Dining Room">Dining Room</option>
                                    <option value="Lounge">Lounge</option>
                                    <option value="Downstairs Hallway">Downstairs Hallway</option>
                                    <option value="Downstairs WC">Downstairs WC</option>
                                    <option value="Kitchen">Kitchen</option>
                                    <option value="Conservatory">Conservatory</option>
                                    <option value="Landing">Landing</option>
                                    <option value="Bathroom 1">Bathroom 1</option>
                                    <option value="Bathroom 2">Bathroom 2</option>
                                    <option value="Ensuite 1">Ensuite 1</option>
                                    <option value="Ensuite 2">Ensuite 2</option>
                                    <option value="Ensuite 3">Ensuite 3</option>
                                    <option value="Airing Cupboard">Airing Cupboard</option>
                                 </select>
                              </div>
                              <div class="child_team">
                                 <label>HEIGHT</label>
                                 <select class="form-control">
                                    <option value="300">300</option>
                                    <option value="350">350</option>
                                    <option value="400">400</option>
                                    <option value="450">450</option>
                                    <option value="500">500</option>
                                    <option value="550">550</option>
                                    <option value="600">600</option>
                                    <option value="650">650</option>
                                    <option value="700">700</option>
                                 </select>
                              </div>
                              <div class="child_team">
                                 <label>WIDTH</label>
                                 <select class="form-control">
                                    <option value="400">400</option>
                                    <option value="500">500</option>
                                    <option value="600">600</option>
                                    <option value="700">700</option>
                                    <option value="800">800</option>
                                    <option value="900">900</option>
                                    <option value="1000">1000</option>
                                    <option value="1100">1100</option>
                                    <option value="1200">1200</option>
                                    <option value="1300">1300</option>
                                    <option value="1400">1400</option>
                                    <option value="1500">1500</option>
                                    <option value="1600">1600</option>
                                    <option value="1700">1700</option>
                                    <option value="1800">1800</option>
                                    <option value="1900">1900</option>
                                    <option value="2000">2000</option>
                                 </select>
                              </div>
                              <div class="child_team">
                                 <label>P+ / SINGLE (K1) / DOUBLE (K2) </label>
                                 <select class="form-control">
                                    <option value="P+">P+</option>
                                    <option value="K1">K1</option>
                                    <option value="K2">K2</option>
                                    <option value="K3">K3</option>
                                 </select>
                              </div>
                              <button class="btn btn-info btn-sm radiator_click" style="margin-top: 25px;" onclick="addMore()"><i class="fa fa-plus"></i></button>
                           </div>
                        </div>
                        <div class="col-lg-12 parent show_next" id="lockshieldsrequired">
                           <lable>Thermostatic Radiator Valves*</lable>
                           <div class="parents">
                              <div class="radiator-req">
                                 <label>SIZE</label>
                                 <select class="form-control">
                                    <option value="8mm">8mm</option>
                                    <option value="10mm">10mm</option>
                                    <option value="15mm">15mm</option>
                                 </select>
                              </div>
                              <div class="radiator-req">
                                 <label>TYPE</label>
                                 <select class="form-control">
                                    <option value="Straight TRV">Straight TRV</option>
                                    <option value="Angled TRV">Angled TRV</option>
                                    <option value="Straight TRV / Lockshield">Straight TRV / Lockshield</option>
                                    <option value="Angled TRV / Lockshield">Angled TRV / Lockshield</option>
                                    <option value="Lockshield">Lockshield</option>
                                 </select>
                              </div>
                              <div class="radiator-req">
                                 <label>QTY</label>
                                 <select class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                 </select>
                              </div>
                              <button class="btn btn-info btn-sm radiator_click" style="margin-top: 25px;" onclick="addMore()"><i class="fa fa-plus"></i></button>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-12">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-6">
                        <h4 class="mt-2 header-title mb-0">Installation Notes and Photographs</h4>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="form-group" style="padding-right:20px;">
                           <label for="example-password-input" class="col-form-label text-left">Additional Notes</label>
                           <textarea class="form-control" name="additional_notes"></textarea>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group">
                           <label for="example-password-input" class="col-form-label text-left">Notes to Office / Engineer</label>
                           <textarea class="form-control" name="notes_to_officer_engineer" placeholder="If you have included any electrical labour on this job, be sure to describe here what task the electrician would be completing in the property. If the job requires scaffolding, then include the information here."></textarea>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <h4 class="mt-2 header-title mb-0">Optional Extras</h4>

                        <div class="" id=fetchOptionalExtras>
                          <h3>Fetch</h3>
                        </div>

                        <div id="mainpar">
                           <div class="row parent col-lg-12" id="parentadd">
                              <div class="child">
                                 <div class="form-group">
                                    <!-- <label for="example-password-input" class="col-form-label text-left"></label> -->
                                    <input type="text" id="oe_description" class="form-control" placeholder="DESCRIPTION"/>
                                 </div>
                              </div>
                              <div class="child">
                                 <div class="form-group">
                                    <!-- <label for="example-password-input" class="col-form-label text-left">QUANTITY</label> -->
                                    <input type="text" id="oe_quantity" class="form-control" placeholder="QUANTITY"/>
                                 </div>
                              </div>
                              <div class="child">
                                 <div class="form-group">
                                    <!-- <label for="example-password-input" class="col-form-label text-left">PRICE (INCLUDING VAT)</label> -->
                                    <input type="text" id="oe_price" class="form-control" id="tab3" placeholder="PRICE (INCLUDING VAT)"/>
                                 </div>
                              </div>
                              <button class="btn btn-success" onclick="return optionalExtras();" style="margin-top: -20px;" type="button"><i class="fa fa-plus-circle"></i></button>
                           </div>
                        </div>




                     </div>
                  </div>
               </div>

               <div id="step-4" class="tab-pane" role="tabpanel">
                  <div class="main_row_class">
                     <div class="row">
                        <div class="col-lg-4">
                           <div class="form-group">
                              <label>Boiler 1 Guide Price</label>
                              <input class="form-control" name="boiler_1_guide_price" type="text" id="guideone" />

                           </div>
                        </div>



                        <div class="col-lg-4">
                           <div class="form-group">
                              <label>Boiler 2 Guide Price</label>
                              <input class="form-control" type="text" name="boiler_2_guide_price" id="guidetwo" />
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="form-group">
                              <label>Boiler 3 Guide Price</label>
                              <input class="form-control" type="text" name="boiler_3_guide_price" id="guidethree" />
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-4">
                           <div class="form-group">
                              <label>Boiler 1 Amend*</label>
                              <input class="form-control" name="boiler_1_Amend" type="text" id="amendone"/>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="form-group">
                              <label>Boiler 2 Amend*</label>
                              <input class="form-control" name="boiler_2_Amend" type="text" id="amendtwo"/>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="form-group">
                              <label>Boiler 3 Amend*</label>
                              <input class="form-control" name="boiler_3_Amend" type="text" id="amendthree"/>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-4">
                           <div class="form-group">
                              <label>Boiler 1 Amend*</label>
                              <input class="form-control" type="text" id="answerone" name="boiler1_total_price"/>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="form-group">
                              <label>Boiler 2 Amend*</label>
                              <input class="form-control" type="text" id="answertwo" name="boiler2_total_price"/>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="form-group">
                              <label>Boiler 3 Amend*</label>
                              <input class="form-control" type="text" id="answerthree" name="boiler3_total_price"/>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="form-group">
                              <label>Deposit Required*</label>
                              <input class="form-control" name="deposit_required" type="number" value="0" min="0"/>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="form-group">
                              <label>Email Quote to Customer Now?*</label>
                              <select class="form-control" name="email_quote_to_customer_now">
                                 <option value="" selected="selected" class="gf_placeholder">Please select</option>
                                 <option value="Yes">Yes</option>
                                 <option value="No">No</option>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </form>
   </div>
   <!--end row-->
</div>
@endsection
@section('js')
<script type="text/javascript">
  var tmpUID = $('#main_uniqid').val();
  $('#sub_uniqid').val(tmpUID);
</script>


<script>
  $(function(){
    $('#select_list').change(function(){
      var txt = "";
      $('.mycontainer').hide();
      // $('#' + $(this).val()).show();
      var datas= $('#select_list').val();
      datas.forEach(myFunction);

      function myFunction(value, index, array) {
          txt = value;
          $('#' + value).show();
      }
    })
  })
</script>


<!--========================Radiator Measurement Location========================-->
<script type="text/javascript">
fetchRadiatorMeasurementLocation();
function fetchRadiatorMeasurementLocation(){
  $('#fetchRadiatorMeasurementLocation').load('{{URL::to("_fetchRadiatorMeasurementLocation")}}');
}
</script>
<!-- <script type="text/javascript">
fetchGasSupplyLength121();
function fetchGasSupplyLength121(){
  $('#fetchGasSupplyLength').load('{{URL::to("_fetchGasSupplyLength")}}');
}
</script> -->

<script type="text/javascript">
  function radiatorMeasurementLocation(){
    var main_uniqid= $('#main_uniqid').val();
    var rml_location= $('#rml_location').val();
    var rml_height= $('#rml_height').val();
    var rml_width= $('#rml_width').val();
    var rml_psd= $('#rml_psd').val();

    // alert(rml_psd);

    $.ajax({
      type:'post',
      url:'{{URL::to("/qtn-radi-mesur-location")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        main_uniqid:main_uniqid,
        rml_location:rml_location,
        rml_height:rml_height,
        rml_width:rml_width,
        rml_psd:rml_psd,
      },
      success:function(data){
        // alert(data);
        if(data=='Success'){
          // alert('Success');
          $('#radiatorMeasurementLocationForm').trigger("reset");
          fetchRadiatorMeasurementLocation();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert('Error')
      }
    })


    return false;
  }
</script>
<script type="text/javascript">
  function radiatorMeasurementLocationDelete(id){
    // alert(id);
    $.ajax({
      type:'get',
      url:'{{URL::to("/qtn-radi-mesur-location/")}}'+'/'+id,
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchRadiatorMeasurementLocation();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--========================Radiator Measurement Location========================-->




<!--========================Thermostatic Radiator Valves========================-->
<script type="text/javascript">
fetchThermostaticRadiatorValves();
function fetchThermostaticRadiatorValves(){
  $('#fetchThermostaticRadiatorValves').load('{{URL::to("_fetchThermostaticRadiatorValves")}}');
}
</script>

<script type="text/javascript">
  function thermostaticRadiatorValves(){
    var main_uniqid= $('#main_uniqid').val();
    var trv_size= $('#trv_size').val();
    var trv_type= $('#trv_type').val();
    var trv_quantity= $('#trv_quantity').val();


    $.ajax({
      type:'post',
      url:'{{URL::to("/qtn-thermo-radi-valvs")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        main_uniqid:main_uniqid,
        trv_size:trv_size,
        trv_type:trv_type,
        trv_quantity:trv_quantity
      },
      success:function(data){
        // alert(data);
        if(data=='Success'){
          // alert('Success');
          // $('#radiatorMeasurementLocationForm').trigger("reset");
          fetchThermostaticRadiatorValves();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert('Error')
      }
    })


    return false;
  }
</script>
<script type="text/javascript">
  function thermostaticRadiatorValvesDelete(id){
    // alert(id);
    $.ajax({
      type:'get',
      url:'{{URL::to("/qtn-thermo-radi-valvs/")}}'+'/'+id,
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchThermostaticRadiatorValves();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--========================Thermostatic Radiator Valves========================-->








<!--========================Towel Rail Measurement / Location========================-->
<script type="text/javascript">
fetchTowelRailMeasurement();
function fetchTowelRailMeasurement(){
  $('#fetchTowelRailMeasurement').load('{{URL::to("_fetchTowelRailMeasurement")}}');
}
</script>

<script type="text/javascript">
  function towelRailMeasurement(){
    var main_uniqid= $('#main_uniqid').val();
    var trm_location= $('#trm_location').val();
    var trm_height= $('#trm_height').val();
    var trm_width= $('#trm_width').val();
    var trm_color= $('#trm_color').val();


    $.ajax({
      type:'post',
      url:'{{URL::to("/qtn-tow-rail-meas")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        main_uniqid:main_uniqid,
        trm_location:trm_location,
        trm_height:trm_height,
        trm_width:trm_width,
        trm_color:trm_color
      },
      success:function(data){
        // alert(data);
        if(data=='Success'){
          // alert('Success');
          // $('#radiatorMeasurementLocationForm').trigger("reset");
          fetchTowelRailMeasurement();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert('Error')
      }
    })


    return false;
  }
</script>
<script type="text/javascript">
  function qtnTowelRailMeasurementDelete(id){
    // alert(id);
    $.ajax({
      type:'get',
      url:'{{URL::to("/qtn-tow-rail-meas/")}}'+'/'+id,
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchTowelRailMeasurement();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--========================Towel Rail Measurement / Location========================-->






<!--========================Towel Rail Valves*========================-->
<script type="text/javascript">
fetchTowelRailValves();
function fetchTowelRailValves(){
  $('#fetchTowelRailValves').load('{{URL::to("_fetchTowelRailValves")}}');
}
</script>

<script type="text/javascript">
  function towelRailValves(){
    var main_uniqid= $('#main_uniqid').val();
    var torv_type= $('#torv_type').val();
    var torv_angel= $('#torv_angel').val();
    var torv_number= $('#torv_number').val();


    $.ajax({
      type:'post',
      url:'{{URL::to("/qtn-tow-rail-valv")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        main_uniqid:main_uniqid,
        torv_type:torv_type,
        torv_angel:torv_angel,
        torv_number:torv_number,
      },
      success:function(data){
        // alert(data);
        if(data=='Success'){
          // alert('Success');
          // $('#radiatorMeasurementLocationForm').trigger("reset");
          fetchTowelRailValves();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert('Error')
      }
    })


    return false;
  }
</script>
<script type="text/javascript">
  function qtnTowelRailValvesDelete(id){
    // alert(id);
    $.ajax({
      type:'get',
      url:'{{URL::to("/qtn-tow-rail-valv/")}}'+'/'+id,
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchTowelRailValves();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--========================Towel Rail Valves*========================-->





<!--========================Optional Extras========================-->
<script type="text/javascript">
fetchOptionalExtras();
function fetchOptionalExtras(){
  $('#fetchOptionalExtras').load('{{URL::to("_fetchOptionalExtras")}}');
}
</script>

<script type="text/javascript">
  function optionalExtras(){
    var main_uniqid= $('#main_uniqid').val();
    var oe_description= $('#oe_description').val();
    var oe_quantity= $('#oe_quantity').val();
    var oe_price= $('#oe_price').val();


    $.ajax({
      type:'post',
      url:'{{URL::to("qtn_optional_descriptions")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        main_uniqid:main_uniqid,
        oe_description:oe_description,
        oe_quantity:oe_quantity,
        oe_price:oe_price,
      },
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchOptionalExtras();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert('Error')
      }
    })


    return false;
  }
</script>
<script type="text/javascript">
  function optionalExtrasDelete(id){
    // alert(id);
    $.ajax({
      type:'get',
      url:'{{URL::to("/qtn_optional_descriptions/")}}'+'/'+id,
      success:function(data){
        // alert(data);
        if(data=='Success'){
          fetchOptionalExtras();
        }else{
          alert('Failed')
        }
      },
      error:function(data){
        alert(data)
      }
    })
    return false;
  }
</script>
<!--========================Optional Extras========================-->
<script>

function firstregularboiler(a){
  var firstregularid  = (a.value || a.options[a.selectedIndex].value);

  $.ajax({
    type:'get',
    url:'{{URL::to("/firstregularprice/")}}'+'/'+firstregularid,
    success:function(data){
       localStorage.setItem("fstregu", data);
    },
    error:function(data){
      alert(data)
    }

  });

  return false;
 }



function secondregularboiler(b){
  var secondregularid  = (b.value || b.options[b.selectedIndex].value);

  $.ajax({
    type:'get',
    url:'{{URL::to("/secondregularprice/")}}'+'/'+secondregularid,
    success:function(datas){

       localStorage.setItem("secndregu", datas);
    },
    error:function(datas){
      alert(datas)
    }

  });

  return false;
}

function thirdregularboiler(c){
  var thirdregularid  = (c.value || c.options[c.selectedIndex].value);


  $.ajax({
    type:'get',
    url:'{{URL::to("/thirdregularprice/")}}'+'/'+thirdregularid,
    success:function(datast){

       localStorage.setItem("thirdregu", datast);
    },
    error:function(datast){
      alert(datast)
    }

  });

  $('#choice_get_control').addClass('boilercontrol');
}


function firstregularboilercontroller(d){
  var firstregularboilerc  = (d.value || d.options[d.selectedIndex].value);

  localStorage.setItem("firstregrec", firstregularboilerc);
  var total = Number(localStorage.getItem('firstregrec'))+Number(localStorage.getItem('fstregu'));
  localStorage.setItem('total_first_boiler',total);
  functionTotalfirstboiler(total);


}


function secondregularboilercontroller(f){
  var secondregularboilerc  = (f.value || f.options[f.selectedIndex].value);
  localStorage.setItem("secondregrec", secondregularboilerc);
  var totalsecond = Number(localStorage.getItem('secondregrec'))+Number(localStorage.getItem('secndregu'));
  functionTotalsecondboiler(totalsecond);
}


function  thirdregularboilercontroller(g){
  var thirdregularboilerc  = (g.value || g.options[g.selectedIndex].value);
  localStorage.setItem("thirdregrec", thirdregularboilerc);
  var totalthird = Number(localStorage.getItem('thirdregrec'))+Number(localStorage.getItem('thirdregu'));
  functionTotalthirdboiler(totalthird);
    $('#bolts').toggleClass('show_next');
}



function functionTotalfirstboiler(total){
  document.getElementById("guideone").value = total;
}

function functionTotalsecondboiler(totalsecond){
  document.getElementById("guidetwo").value = totalsecond;
}

function functionTotalthirdboiler(totalthird){
  document.getElementById("guidethree").value = totalthird;
}



</script>
@endsection
