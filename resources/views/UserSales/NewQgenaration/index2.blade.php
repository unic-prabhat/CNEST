@extends('UserSales.layouts.master')
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
         <li>Step 3</li>
         <li>Step 4</li>
      </ul>
   </div>
   <br><br><br><br><br>
   <div class="container boiler-container-section">
      <form class="" action="{{URL::to('/generate-quotation/salesuser/step2/'.$uniqid)}}" method="post">
      @csrf
      @method('PUT')

      <div class="row">
         <div class="col-lg-6">
            <h4 class="mt-2 header-title mb-0">Current System Configuration</h4>
         </div>
      </div>
      <div class="row rr">
         <div class="col-md-4">
            <div class="form-group mb-0" style="padding-right:20px;">
               <label for="example-password-input" class="col-form-label text-left">Current Boiler Type*</label>
                <input type="hidden" name="id" value="{{$lead->id}}">
               <select class="form-control input-decorate" name="current_boiler_type">
                  <option value="">Please select</option>
                  @foreach(App\CurrentBoilerType::all() as $bt)
                  <option value="{{$bt->id}}"  @if($lead->current_boiler_type == $bt->id) selected @else @endif>{{$bt->name}}</option>
                  @endforeach
               </select>
            </div>
         </div>
         <div class="col-md-4">
            <div class="form-group mb-0" style="padding-right:20px;">
               <label for="example-password-input" class="col-form-label text-left">Current Boiler Location*</label>
               <select class="form-control input-decorate" name="current_boiler_location">
                  <option value="">Please select</option>
                  @foreach(App\CurrentBoilerLocation::all() as $bt)
                  <option value="{{$bt->id}}"  @if($lead->current_boiler_location == $bt->id) selected @else @endif>{{$bt->name}}</option>
                  @endforeach
               </select>
            </div>
         </div>
         <div class="col-md-4">
            <div class="form-group mb-0" >
               <label for="example-password-input" class="col-form-label text-left">Current Flue*</label>
               <select class="form-control input-decorate" name="current_flue">
                  <option value="">Please select</option>
                  @foreach(App\CurrentFlue::all() as $bt)
                  <option value="{{$bt->id}}" @if($lead->current_flue == $bt->id) selected @else @endif>{{$bt->name}}</option>
                  @endforeach
               </select>
            </div>
         </div>
      </div>
      <div class="row mt-2">
         <div class="col-lg-6">
            <label for="example-password-input" class="col-form-label text-left">Existing Shower?*</label>
            <div class="form-group mb-0">
               <select class="form-control input-decorate" name="existing_shower">
                  <option value="">None</option>
                  @foreach(App\ExistingShower::all() as $bt)
                  <option value="{{$bt->id}}" @if($lead->existing_shower == $bt->id) selected @else @endif>{{$bt->name}}</option>
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
               <select class="form-control input-decorate" name="new_fuel_type">
                  <option value="">None</option>
                  @foreach(App\newfuleType::all() as $bt)
                  <option value="{{$bt->id}}" @if($lead->new_fuel_type == $bt->id) selected @else @endif>{{$bt->name}}</option>
                  @endforeach
               </select>
            </div>
         </div>
         <div class="col-md-4">
            <div class="form-group mb-0" style="padding-right:20px;">
               <label for="example-password-input" class="col-form-label text-left">New Boiler Type*</label>
               <select class="form-control medium gfield_select input-decorate" name="new_boiler_yype">
                  <option value="">None</option>
                  @foreach(App\NewBoilerType::all() as $bt)
                  <option value="{{$bt->id}}" @if($lead->new_boiler_yype == $bt->id) selected @else @endif>{{$bt->name}}</option>
                  @endforeach
               </select>
            </div>
         </div>
         <div class="col-md-4">
            <div class="form-group mb-0" >
               <label for="example-password-input" class="col-form-label text-left">New Boiler Location*</label>
               <select class="form-control input-decorate" name="new_boiler_location">
                  <option value="">Please select</option>
                  @foreach(App\CurrentBoilerLocation::all() as $bt)
                  <option value="{{$bt->id}}" @if($lead->new_boiler_location == $bt->id) selected @else @endif>{{$bt->name}}</option>
                  @endforeach
               </select>
            </div>
         </div>
      </div>
      <div class="row rr">
         <div class="col-md-4">
            <div class="form-group mb-0" style="padding-right:20px;">
               <label for="example-password-input" class="col-form-label text-left">New Flue*</label>
               <select class="form-control input-decorate" name="new_flue">
                  <option value="">Please select</option>
                  @foreach(App\NewFlue::all() as $bt)
                  <option value="{{$bt->id}}" @if($lead->new_flue == $bt->id) selected @else @endif>{{$bt->name}}</option>
                  @endforeach
               </select>
            </div>
         </div>
         <div class="col-md-4">
            <div class="form-group mb-0" style="padding-right:20px;">
               <label for="example-password-input" class="col-form-label text-left">New Flue Location*</label>
               <select class="form-control input-decorate" name="new_flue_location">
                  <option value="">Please select</option>
                  @foreach(App\NewFlueLocation::all() as $bt)
                  <option value="{{$bt->id}}" @if($lead->new_flue_location == $bt->id) selected @else @endif>{{$bt->name}}</option>
                  @endforeach
               </select>
            </div>
         </div>
         <div class="col-md-4">
            <div class="form-group mb-0" >
               <label for="example-password-input" class="col-form-label text-left">Condensate Termination*</label>
               <select class="form-control input-decorate" name="condensate_termination">
                  <option value="">Please select</option>
                  @foreach(App\CondensateTermination::all() as $bt)
                  <option value="{{$bt->id}}" @if($lead->condensate_termination == $bt->id) selected @else @endif>{{$bt->name}}</option>
                  @endforeach
               </select>
            </div>
         </div>
      </div>
      <div class="row mt-2">
         <div class="col-lg-6">
            <label for="example-password-input" class="col-form-label text-left">New Controls*</label>
            <div class="form-group mb-0" style="padding-right:20px;">
               <select class="form-control input-decorate" name="new_controls">
                 @foreach(App\NewControls::all() as $bt)
                 <option value="{{$bt->id}}" @if($lead->new_controls == $bt->id) selected @else @endif>{{$bt->name}}</option>
                 @endforeach
               </select>
            </div>
         </div>
      </div>

      <div class="row mt-4">
         <div class="col-lg-12">
            <div class="form-group">
               <label>Is the New Boiler Being Fitted in a Cupboard?*</label>
               <select class="form-control alter input-decorate" name="is_the_new_boiler_being_fitted_in_a_cupboard" onchange="return beingfitted(this);">
                  <option value="">Please select</option>
                  <option value="Yes" @if($lead->is_the_new_boiler_being_fitted_in_a_cupboard == 'Yes') selected @else @endif>Yes</option>
                  <option value="No" @if($lead->is_the_new_boiler_being_fitted_in_a_cupboard == 'No') selected @else @endif>No</option>
               </select>
            </div>
         </div>
      </div>
      <div class="row mt-3" id="blockcupboard">

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
            <label for="example-password-input" class="col-form-label text-left">Removals

               @if($lead->removals!=NULL)
               @php($yourJson = trim($lead->removals, '[]'))
               @php($originalstr = str_replace('"', '', $yourJson))
               @php($myArray = explode(',', $originalstr))
               @endif
              </label>
            <select class="form-control" multiple name="removals[]">

                @foreach(App\Removals::all() as $bt)
                <option value="{{$bt->id}}" @if(@in_array($bt->id, @$myArray)) selected @endif>{{$bt->name}}</option>
                @endforeach
            </select>
         </div>
      </div>
      <div class="row mt-3">
        <div class="col-lg-6">
          <a href="{{URL::to('/generate-quotation/salesuser/step1/'.$lead->lead_id.'/'.$uniqid)}}" class="float-leftc btn btn-primary" style="background-color: #d50527;border-color: #d50527;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
        </div>
         <div class="col-lg-6">
               <input type="submit"  class="float-right btn btn-primary" value="Next">
         </div>
      </div>
   </div>
   </form>
</div>
@section('js')

@if($lead->is_the_new_boiler_being_fitted_in_a_cupboard == 'Yes')
<script type="text/javascript">
  $('#blockcupboard').load('{{URL::to("/showblockcupboard",$lead->main_uniqid)}}');
</script>
@endif

<script type="text/javascript">
 function beingfitted(cal){
   var value  = (cal.value || cal.options[cal.selectedIndex].value);

     if(value == 'Yes'){
       $('#blockcupboard').load('{{URL::to("/showblockcupboard",$lead->main_uniqid)}}');
     }

   }
</script>
@endsection
@endsection
