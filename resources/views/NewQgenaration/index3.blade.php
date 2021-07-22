@extends('layouts.master')

@section('content')
<style media="screen">
.progressbar .active:before {
  width: 30px;
  height: 30px;
  content: counter(step);
  counter-increment: step;
  line-height: 30px;
  border: 2px solid #ef4d56;
  display: block;
  text-align: center;
  margin: 0 auto 10px auto;
  border-radius: 50%;
  background-color: #ef4d56;
  color: white;
}
.progressbar li.active {
    color: #ef4d56;
}
</style>
<div class="container-fluid">

   <div class="container progressbar-container">

      <ul class="progressbar">

         <li class="active">Step 1</li>

         <li class="active">Step 2</li>

         <li class="active">Step 3</li>

         <li>Step 4</li>

      </ul>

   </div>

   <br><br><br><br><br>

   <div class="container boiler-container-section">

      <form class="" action="{{URL::to('/generate-quotation/step3/'.$uniqid)}}" method="post">

      @csrf

      @method('PUT')


       <!--- ADDON PRICE START--->
            <div id="addonprice">

            </div>


      <div class="row">

         <div class="col-lg-6">

            <h4 class="mt-2 header-title mb-0">Installation Requirements</h4>

         </div>

      </div>

      <div class="row">

         <div class="col-lg-6">

            <div class="form-group" style="padding-right:20px;">

               <label for="example-password-input" class="col-form-label text-left">Chemical System Treatment</label>

               <input type="hidden" name="id" value="{{$lead->id}}">

               <select class="form-control input-decorate" name="chemical_system_treatment">

                  <option value="">Please select</option>

                  @foreach(App\ChemicalSystemTreatment::all() as $bt)

                  <option value="{{$bt->id}}" @if($lead->chemical_system_treatment == $bt->id) selected @else @endif>{{$bt->name}}</option>

                  @endforeach

               </select>

            </div>

         </div>

         <div class="col-lg-6">

            <div class="form-group">

               <label for="example-password-input" class="col-form-label text-left">Gas Supply Requirements*</label>

               <select class="form-control input-decorate" name="supply_change" onchange="return supplychange(this);">

                  <option value="">Please select</option>

                  @foreach(App\GasSupplyRequirements::all() as $bt)

                  <option value="{{$bt->id}}" @if($lead->supply_change == $bt->id) selected @else @endif>{{$bt->name}}</option>

                  @endforeach

               </select>

            </div>

            <div id="supplylength">



            </div>

         </div>

      </div>

      <div class="row">

         <div class="col-lg-6">

            <div class="form-group" style="padding-right:20px;">

               <label for="example-password-input" class="col-form-label text-left">Electrical Work Required*</label>

               <select class="form-control input-decorate" multiple name="electrical_work_required[]">
                     @if($lead->electrical_work_required!=NULL)
                     @php($yourJson = trim($lead->electrical_work_required, '[]'))
                     @php($originalstr = str_replace('"', '', $yourJson))
                     @php($myArray = explode(',', $originalstr))
                     @endif
                  @foreach(App\ElectricalWorkRequired::all() as $bt)

                  <option value="{{$bt->id}}"  @if(@in_array($bt->id, @$myArray)) selected @endif>{{$bt->name}}</option>

                  @endforeach

               </select>

            </div>

         </div>

         <div class="col-lg-6">

            <div class="form-group">

               <label for="example-password-input" class="col-form-label text-left">Asbestos Containing Materials (ACM) Identified?*</label>

               <select class="form-control input-decorate" name="asbestos_containing_materials">

                  <option value="">Please select</option>

                  @foreach(App\ACM::all() as $bt)

                  <option value="{{$bt->id}}" @if($lead->asbestos_containing_materials == $bt->id) selected @else @endif>{{$bt->name}}</option>

                  @endforeach

               </select>

            </div>

         </div>

      </div>

      <div class="row">

         <div class="col-lg-6">

            <div class="form-group" style="padding-right:20px;">

               <label for="example-password-input" class="col-form-label text-left">Parking Requirements*</label>

               <select class="form-control input-decorate" name="parking_requirements">

                  <option value="">Please select</option>

                  @foreach(App\ParkingRequirement::all() as $bt)

                  <option value="{{$bt->id}}" @if($lead->parking_requirements == $bt->id) selected @else @endif>{{$bt->name}}</option>

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

               <label for="example-password-input" class="col-form-label text-left">Flue Kit*</label>

               <select class="form-control input-decorate" name="materials_check" onchange="return Matcheck(this);">

                  <option value="">Please select</option>

                  @foreach(App\FlueKit::all() as $bt)

                  <option value="{{$bt->id}}" @if($lead->materials_check == $bt->id) selected @else @endif>{{$bt->name}}</option>

                  @endforeach



               </select>

               <div id="materials_check">



               </div>

            </div>

         </div>

         <div class="col-lg-6">

            <div class="form-group">

               <label for="example-password-input" class="col-form-label text-left">Magnetic System Filter*</label>

               <select class="form-control input-decorate" name="magnetic_system_filter">

                 @foreach(App\MagneticSystemFilter::all() as $bt)

                 <option value="{{$bt->id}}" @if($lead->magnetic_system_filter == $bt->id) selected @else @endif>{{$bt->name}}</option>

                 @endforeach

               </select>

            </div>

         </div>

      </div>

      <div class="row">

         <div class="col-lg-6">

            <div class="form-group" style="padding-right:20px;">

               <label for="example-password-input" class="col-form-label text-left">Additional Central Heating Parts*</label>

               <select class="form-control input-decorate" name="additional_central_heating_parts">

                  <option value="">Please select</option>

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


               <select class="form-control input-decorate" name="condesnate"  onchange="return condesnatecomponent(this);">

                  <option  value="">Please select</option>

                  <option value="Required|0" @if($lead->condesnate == 'Required|0') selected @endif>Required</option>

                  <option value="Not Required|0" @if($lead->condesnate == 'Not Required|0') selected @endif>Not Required</option>

               </select>

               <div id="additional_condesnate">



               </div>

            </div>

         </div>


      </div>

      <div class="row">

         <div class="col-lg-6">

            <div class="form-group" style="padding-right:20px;">

               <label for="example-password-input" class="col-form-label text-left">Vented Cylinder Dimensions*</label>

               <select class="form-control input-decorate" name="vented_cylinder_dimensions">

                  <option value="">Please select</option>

                  @foreach(App\VentedCylinderDimension::all() as $bt)

                  <option value="{{$bt->id}}" @if($lead->vented_cylinder_dimensions == $bt->id) selected @endif>{{$bt->name}}</option>

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

                    @if($lead->radiator_requirements!=NULL)
                        @php($yourJsonresult = trim($lead->radiator_requirements, '[]'))
                        @php($originalstring = str_replace('"', '', $yourJsonresult))
                        @php($myArraying = explode(',', $originalstring))
                     @endif

               <select class="form-control input-decorate" id="select_list" multiple name="radiator_requirements[]">

                 <option value="">No Radiators Required</option>

                  <option value="radiotorsreq" @if(@in_array('radiotorsreq', @$myArraying)) selected @endif>Radiators Required</option>

                  <option value="trvs" @if(@in_array('trvs', @$myArraying)) selected @endif>TRV's / Lockshields Required</option>

                  <option value="towelrails" @if(@in_array('towelrails', @$myArraying)) selected @endif>Towel Rails Required</option>

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


            </div>



            <!-- <form id="radiatorMeasurementLocationForm" class=""  method="post"> -->

              <div class="row mt-3">

                <div class="col-md-3">

                  <select class="form-control input-decorate" id="rml_location" name="rml_location">

                    <option value="">Select Location</option>

                    @foreach(App\CurrentBoilerLocation::all() as $bt)

                    <option>{{$bt->name}}</option>

                    @endforeach

                  </select>

                </div>

                <div class="col-md-2">

                  <select class="form-control input-decorate" id="rml_height" name="rml_height">

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

                  <select class="form-control input-decorate" id="rml_width" name="rml_width">

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

                  <select class="form-control input-decorate" id="rml_psd" name="rml_psd">

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





              <div class="row mt-3">

                <div class="col-md-5">

                  <select class="form-control input-decorate" id="trv_size" name="trv_size_from">

                    <option value="">Select Size</option>

                    <option>1</option>

                    <option>2</option>

                    <option>3</option>

                    <option>4</option>

                    <option>5</option>

                  </select>

                </div>

                <div class="col-md-3">

                  <select class="form-control input-decorate" id="trv_type" name="trv_size_to">

                    <option value="">Select Type</option>

                    <option>1</option>

                    <option>2</option>

                    <option>3</option>

                    <option>4</option>

                    <option>5</option>

                  </select>

                </div>

                <div class="col-md-3">

                  <select class="form-control input-decorate" id="trv_quantity" name="">

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

                  <select class="form-control input-decorate" id="trm_location" name="trm_location">

                    <option value="">Select Location</option>

                    <option>1</option>

                    <option>2</option>

                    <option>3</option>

                    <option>4</option>

                    <option>5</option>

                  </select>

                </div>

                <div class="col-md-2">

                  <select class="form-control input-decorate" id="trm_height" name="trm_height">

                    <option value="">Select Height</option>

                    <option>1</option>

                    <option>2</option>

                    <option>3</option>

                    <option>4</option>

                    <option>5</option>

                  </select>

                </div>

                <div class="col-md-2">

                  <select class="form-control input-decorate" id="trm_width" name="trm_width">

                    <option value="">Select Width</option>

                    <option>1</option>

                    <option>2</option>

                    <option>3</option>

                    <option>4</option>

                    <option>5</option>

                  </select>

                </div>

                <div class="col-md-2">

                  <select class="form-control input-decorate" id="trm_color" name="trm_color">

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

                  <select class="form-control input-decorate" id="torv_type" name="torv_type">

                    <option value="">Select Type</option>

                    <option>1</option>

                    <option>2</option>

                    <option>3</option>

                    <option>4</option>

                    <option>5</option>

                  </select>

                </div>

                <div class="col-md-4">

                  <select class="form-control input-decorate" name="torv_angel" id="torv_angel">

                    <option value="">Select Angle</option>

                    <option>1</option>

                    <option>2</option>

                    <option>3</option>

                    <option>4</option>

                    <option>5</option>

                  </select>

                </div>

                <div class="col-md-2">

                  <select class="form-control input-decorate" name="torv_number" id="torv_number">

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

               <select class="form-control input-decorate" name="how_many_days_of_engineer_labour">

                  <option value="">Please select</option>

                  <option value="1" @if($lead->how_many_days_of_engineer_labour == 1) selected @else @endif>1 Day Engineer Labour</option>

                  <option value="2" @if($lead->how_many_days_of_engineer_labour == 2) selected @else @endif>2 Days Engineer Labour</option>

                  <option value="3" @if($lead->how_many_days_of_engineer_labour == 3) selected @else @endif>3 Days Engineer Labour</option>

                  <option value="4" @if($lead->how_many_days_of_engineer_labour == 4) selected @else @endif>4 Days Engineer Labour</option>

                  <option value="5" @if($lead->how_many_days_of_engineer_labour == 5) selected @else @endif>5 Days Engineer Labour</option>

                  <option value="6" @if($lead->how_many_days_of_engineer_labour == 6) selected @else @endif>6 Days Engineer Labour</option>

                  <option value="7" @if($lead->how_many_days_of_engineer_labour == 7) selected @else @endif>7 Days Engineer Labour</option>

                  <option value="8" @if($lead->how_many_days_of_engineer_labour == 8) selected @else @endif>8 Days Engineer Labour</option>

                  <option value="9" @if($lead->how_many_days_of_engineer_labour == 9) selected @else @endif>9 Days Engineer Labour</option>

                  <option value="10" @if($lead->how_many_days_of_engineer_labour == 10) selected @else @endif>10 Days Engineer Labour</option>

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

                     <select class="form-control input-decorate" name="radiator_measurement_location">

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

                     <select class="form-control input-decorate" name="radiator_measurement_height">

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

                     <select class="form-control input-decorate" name="radiator_measurement_width">

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

                     <select class="form-control input-decorate" name="radiator_measurement_sign">

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

                     <select class="form-control input-decorate" name="thermostatic_radiator_size">

                        <option value="8mm">8mm</option>

                        <option value="10mm">10mm</option>

                        <option value="15mm">15mm</option>

                     </select>

                  </div>

                  <div class="radiator-req">

                     <label>TYPE</label>

                     <select class="form-control input-decorate" name="thermostatic_radiator_type">

                        <option value="Straight TRV">Straight TRV</option>

                        <option value="Angled TRV">Angled TRV</option>

                        <option value="Straight TRV / Lockshield">Straight TRV / Lockshield</option>

                        <option value="Angled TRV / Lockshield">Angled TRV / Lockshield</option>

                        <option value="Lockshield">Lockshield</option>

                     </select>

                  </div>

                  <div class="radiator-req">

                     <label>QTY</label>

                     <select class="form-control input-decorate" name="thermostatic_radiator_qty">

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

               <textarea class="form-control input-decorate" name="additional_notes">@if($lead->additional_notes!=NULL) {{$lead->additional_notes}} @else @endif</textarea>

            </div>

         </div>

         <div class="col-lg-6">

            <div class="form-group">

               <label for="example-password-input" class="col-form-label text-left">Notes to Office / Engineer</label>

               <textarea class="form-control input-decorate" name="notes_to_officer_engineer" placeholder="If you have included any electrical labour on this job, be sure to describe here what task the electrician would be completing in the property. If the job requires scaffolding, then include the information here.">@if($lead->notes_to_officer_engineer!=NULL) {{$lead->notes_to_officer_engineer}} @else @endif</textarea>

            </div>

         </div>

      </div>

      <div class="row">

         <div class="col-lg-12">

            <h4 class="mt-2 header-title mb-0">Optional Extras</h4>



            <div class="" id=fetchOptionalExtras>


            </div>



            <div id="mainpar">

               <div class="row parent col-lg-12" id="parentadd">

                  <div class="child">

                     <div class="form-group">

                        <!-- <label for="example-password-input" class="col-form-label text-left"></label> -->

                        <input type="text" name="oe_description" id="oe_description" class="form-control input-decorate" placeholder="DESCRIPTION" @if($lead->oe_description!=NULL) value="{{$lead->oe_description}}" @else @endif  />

                     </div>

                  </div>

                  <div class="child">

                     <div class="form-group">

                        <!-- <label for="example-password-input" class="col-form-label text-left">QUANTITY</label> -->

                        <input type="text" name="oe_quantity" id="oe_quantity" class="form-control input-decorate" placeholder="QUANTITY"  @if($lead->oe_quantity!=NULL) value="{{$lead->oe_quantity}}" @else @endif/>

                     </div>

                  </div>

                  <div class="child">

                     <div class="form-group">

                        <!-- <label for="example-password-input" class="col-form-label text-left">PRICE (INCLUDING VAT)</label> -->

                        <input type="text" name="oe_price" id="oe_price" class="form-control input-decorate" id="tab3" placeholder="PRICE (INCLUDING VAT)" @if($lead->oe_price!=NULL) value="{{$lead->oe_price}}" @else @endif />

                     </div>

                  </div>

                   <button class="btn btn-success" onclick="return optionalExtras();" style="margin-top: -20px;" type="button"><i class="fa fa-plus-circle"></i></button>

               </div>

            </div>



         </div>

      </div>

      <div class="row mt-3">

        <div class="col-lg-6">

          <a href="{{URL::to('/generate-quotation/step2/'.$lead->lead_id.'/'.$uniqid)}}" class="float-leftc btn btn-primary" style="background-color: #d50527;border-color: #d50527;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>

        </div>

         <div class="col-lg-6">

               <input type="submit"  class="float-right btn btn-primary" value="Next">

         </div>

      </div>

   </div>

   </form>

</div>
@section('js')

@if($lead->supply_change!=NULL)
<script type="text/javascript">
  $('#supplylength').load('{{URL::to("/showblocksupplylength",$lead->main_uniqid)}}');
</script>
@endif

@if($lead->materials_check!=NULL)
<script type="text/javascript">
  $('#materials_check').load('{{URL::to("/showblockmaterialcheck",$lead->main_uniqid)}}');
</script>
@endif


@if($lead->condesnate!=NULL)
<script type="text/javascript">
 $('#additional_condesnate').load('{{URL::to("/showblockadditionalcondesnate",$lead->main_uniqid)}}');
</script>
@endif

<script type="text/javascript">
 function supplychange(cal){
   var value  = (cal.value || cal.options[cal.selectedIndex].value);

     if(value){
       $('#supplylength').load('{{URL::to("/showblocksupplylength",$lead->main_uniqid)}}');
     }

   }
</script>

<script type="text/javascript">
 function Matcheck(mat){

    var value  = (mat.value || mat.options[mat.selectedIndex].value);

     if(value){
       $('#materials_check').load('{{URL::to("/showblockmaterialcheck",$lead->main_uniqid)}}');
     }

   }
</script>

<script type="text/javascript">
 function condesnatecomponent(cnd){

    var value  = (cnd.value || cnd.options[cnd.selectedIndex].value);

     if(value){
       $('#additional_condesnate').load('{{URL::to("/showblockadditionalcondesnate",$lead->main_uniqid)}}');
     }

   }
</script>
<!--========================Optional Extras========================-->
<script type="text/javascript">
fetchOptionalExtras();
function fetchOptionalExtras(){
  // optionalExtras();
  $('#fetchOptionalExtras').load('{{URL::to("/showblockextraoptions",$lead->main_uniqid)}}');
}
</script>



<script type="text/javascript">
  function optionalExtras(){

    var main_uniqid= '{{$lead->main_uniqid}}';
    var oe_description= $('#oe_description').val();
    var oe_quantity= $('#oe_quantity').val();
    var oe_price= $('#oe_price').val();


    if(main_uniqid !='' && oe_description !='' && oe_quantity !='' && oe_price !=''){

    $.ajax({
      type:'POST',
      url:'{{URL::to("qtn_optional_descriptions")}}',
      data:{
        "_token": "{{ csrf_token() }}",
        main_uniqid:main_uniqid,
        oe_description:oe_description,
        oe_quantity:oe_quantity,
        oe_price:oe_price
      },
      success:function(data){

        if(data=='Success'){
          fetchOptionalExtras();
          addOnPrice();

          swal("Added!", "Added Successfully!", "success")
        }else{
          alert('Failed')
        }
      }
      // ,
      // error:function(data){
      //   alert('Error');
      // }
    });

    }else{

      swal("Please Fill first inputs!")

    }

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
          addOnPrice()
          location.reload();
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

<script type="text/javascript">
  addOnPrice()
  function addOnPrice(){
    $('#addonprice').load('{{URL::to("/showaddonprice/".$uniqid)}}');
  }
</script>
@endsection

@endsection
