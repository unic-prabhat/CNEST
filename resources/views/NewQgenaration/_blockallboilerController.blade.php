<div class="col-lg-4">

   <label>First Boiler Controls*</label>

   <select class="form-control input-decorate" name="first_boiler_controls" id="first_boiler_controls" >

      <option value="">Select Boiler</option>

      @foreach(App\BoilerControls::all() as $bc)

      <option value="{{$bc->id}}" @if($lead_quotation->first_boiler_controls == $bc->id) selected @else @endif>{{$bc->pack}}</option>

      @endforeach

   </select>

</div>

<div class="col-lg-4">

   <label>Second Boiler Controls*</label>

   <select class="form-control input-decorate" name="second_boiler_controls" id="second_boiler_controls" >

      <option value="">Select Boiler</option>

      @foreach(App\BoilerControls::all() as $bc)

      <option value="{{$bc->id}}" @if($lead_quotation->second_boiler_controls == $bc->id) selected @else @endif>{{$bc->pack}}</option>

      @endforeach

   </select>

</div>

<div class="col-lg-4">

   <label>Third Boiler Controls*</label>

   <select class="form-control input-decorate" name="third_boiler_controls" id="third_boiler_controls" onchange="return Thirdboilercontroller(this);">

      <option value="">Select Boiler</option>

      @foreach(App\BoilerControls::all() as $bc)

      <option value="{{$bc->id}}" @if($lead_quotation->third_boiler_controls == $bc->id) selected @else @endif>{{$bc->pack}}</option>

      @endforeach

   </select>

</div>

