<div class="col-lg-4">
   <label>First Combi Boiler Choice*</label>
   <select class="form-control input-decorate" name="first_regular_boiler_choice" id="first_regular_boiler_choice" >
      <option value="">Select Boiler</option>
      @foreach(App\Boilertype::where('boilerchoise_id',3)->get() as $boil)
      <option value="{{$boil->id}}" @if($lead_quotation->first_regular_boiler_choice == $boil->id) selected @else @endif>{{$boil->boilertype}}</option>
      @endforeach
   </select>
</div>
<div class="col-lg-4">
   <label>Second Combi Boiler Choice*</label>
   <select class="form-control input-decorate" name="second_regular_boiler_choice" id="second_regular_boiler_choice" >
      <option value="">Select Boiler</option>
      @foreach(App\Boilertype::where('boilerchoise_id',3)->get() as $boil)
      <option value="{{$boil->id}}" @if($lead_quotation->second_regular_boiler_choice == $boil->id) selected @else @endif>{{$boil->boilertype}}</option>
      @endforeach
   </select>
</div>
<div class="col-lg-4">
   <label>Third Combi Boiler Choice*</label>
   <select class="form-control input-decorate" name="third_regular_boiler_choice" id="third_regular_boiler_choice"  onchange="return Thirdboiler(this);">
      <option value="">Select Boiler</option>
      @foreach(App\Boilertype::where('boilerchoise_id',3)->get() as $boil)
      <option value="{{$boil->id}}" @if($lead_quotation->third_regular_boiler_choice == $boil->id) selected @else @endif>{{$boil->boilertype}}</option>
      @endforeach
   </select>
</div>
