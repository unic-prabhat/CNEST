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
         <li>Step 2</li>
         <li>Step 3</li>
         <li>Step 4</li>
      </ul>
   </div>
   <br><br><br><br><br>
   <div class="container boiler-container-section">
      <form class="" action="{{URL::to('/generate-quotation/'.$uniqid)}}" method="post">
      @csrf
      @method('PUT')
      <div class="row">
         <div class="col-lg-6">
            <div class="form-group row">
               <label for="example-text-input" class="col-sm-4 col-form-label text-left">Boiler Type Required*</label>
               <div class="col-sm-8">
                 <input type="hidden" name="id" value="{{$lead->id}}">
                 <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                 <input type="hidden" name="userrole" value="{{auth()->user()->userrole}}">
                  <select class="form-control input-decorate" name="boiler_type_required" id="boiler_type_required"  onchange="return Boilertype(this);">
                     <option value="">Select Boiler</option>
                     @foreach(App\Boiler::all() as $boil)
                     <option value="{{$boil->id}}" @if($lead_quotation->boiler_type_required == $boil->id) selected @else @endif>{{$boil->name}}</option>
                     @endforeach
                  </select>
               </div>
            </div>
         </div>
      </div>
      <div class="row mt-3" id="allboilersection">


      </div>


      <div class="row mt-3" id="allboilercontroller">

      </div>

      <div class="row mt-3" id="boldsonall">

      </div>

      <div class="row mt-4">
         <div class="col-lg-6 rr">
            <h4 class="mt-0 header-title">Customer Details</h4>
            <div class="form-group row">
               <label for="example-email-input" class="col-sm-4 col-form-label text-left">First Name</label>
               <div class="col-sm-8">
                  {{$lead->firstname}}<input type="hidden" name="cus_firstname" value="{{$lead->firstname}}">
               </div>
            </div>
            <div class="form-group row">
               <label for="example-tel-input" class="col-sm-4 col-form-label text-left">Sure Name</label>
               <div class="col-sm-8">
                 {{$lead->surname}}<input type="hidden" name="cus_surname" value="{{$lead->surname}}">
               </div>
            </div>
            <div class="form-group row">
               <label for="example-password-input" class="col-sm-4 col-form-label text-left">Email</label>
               <div class="col-sm-8">
                  <input class="form-control input-decorate" type="email" name="cus_email" @if($lead_quotation->cus_email!=NULL) value="{{$lead_quotation->cus_email}}" @else value="{{$lead->email}}" @endif   >
               </div>
            </div>
         </div>
         <div class="col-lg-6 rr">
            <h4 class="mt-0 header-title">Property Details</h4>
            <div class="form-group row">
               <label for="example-email-input" class="col-sm-4 col-form-label text-left">Installation Address</label>
               <div class="col-sm-8">
                {{$lead->address}}<input type="hidden" name="cus_installation_address" value="{{$lead->address}}">
               </div>
            </div>
            <div class="form-group row">
               <label for="example-tel-input" class="col-sm-4 col-form-label text-left">Street Address</label>
               <div class="col-sm-8">
                  {{$lead->town}}<input type="hidden" name="cus_street_address" value="{{$lead->town}}">
               </div>
            </div>
            <div class="form-group row">
               <label for="example-password-input" class="col-sm-4 col-form-label text-left">ZIP / Postal Code
               </label>
               <div class="col-sm-8">
                 {{$lead->postcode}}<input type="hidden" name="cus_postal_code" value="{{$lead->postcode}}">
               </div>
            </div>
         </div>
      </div>
      <div class="row mt-3">
         <div class="col-lg-12">
               <input type="submit"  class="float-right btn btn-primary" value="Next">
         </div>
      </div>
   </div>
   </form>
</div>

@section('js')

@if($lead_quotation->boiler_type_required==1)
<script type="text/javascript">
$('#allboilersection').load('{{URL::to("/showblockregular",$lead_quotation->main_uniqid)}}');
</script>
@endif

@if($lead_quotation->boiler_type_required==2)
<script type="text/javascript">
$('#allboilersection').load('{{URL::to("/showblocksystem",$lead_quotation->main_uniqid)}}');
</script>
@endif

@if($lead_quotation->boiler_type_required==3)
<script type="text/javascript">
$('#allboilersection').load('{{URL::to("/showblockcombi",$lead_quotation->main_uniqid)}}');
</script>
@endif

@if($lead_quotation->boiler_type_required==4)
<script type="text/javascript">
$('#allboilersection').load('{{URL::to("/showblockelectric",$lead_quotation->main_uniqid)}}');
</script>
@endif

@if($lead_quotation->boiler_type_required==5)
<script type="text/javascript">
$('#allboilersection').load('{{URL::to("/showblockoil",$lead_quotation->main_uniqid)}}');
</script>
@endif

@if($lead_quotation->third_regular_boiler_choice!=NULL)
<script type="text/javascript">
$('#allboilercontroller').load('{{URL::to("/showblockallboilercontroller",$lead_quotation->main_uniqid)}}');
</script>
@endif

@if($lead_quotation->third_boiler_controls!=NULL)
<script type="text/javascript">
  $('#boldsonall').load('{{URL::to("/showblockallboltsonoption",$lead_quotation->main_uniqid)}}');
</script>
@endif

<script type="text/javascript">

  function Boilertype(cal){
   var value  = (cal.value || cal.options[cal.selectedIndex].value);

      $('#allboilercontroller').hide();
       $('#boldsonall').hide();

     if(value == 1){
       $('#allboilersection').load('{{URL::to("/showblockregular",$lead_quotation->main_uniqid)}}');
     }else if(value == 2){
        $('#allboilersection').load('{{URL::to("/showblocksystem",$lead_quotation->main_uniqid)}}');
     }else if(value == 3){
       $('#allboilersection').load('{{URL::to("/showblockcombi",$lead_quotation->main_uniqid)}}');
     }else if(value == 4){
      $('#allboilersection').load('{{URL::to("/showblockelectric",$lead_quotation->main_uniqid)}}');
     }else if(value == 5){
       $('#allboilersection').load('{{URL::to("/showblockoil",$lead_quotation->main_uniqid)}}');
     }else{

     }
  }
</script>
<script type="text/javascript">
 function Thirdboiler(third){
   $('#allboilercontroller').show();
    $('#boldsonall').hide();

     var value  = (third.value || third.options[third.selectedIndex].value);
     if(value){
      $('#allboilercontroller').load('{{URL::to("/showblockallboilercontroller",$lead_quotation->main_uniqid)}}');
     }
 }
</script>

<script type="text/javascript">
 function Thirdboilercontroller(controll){
   $('#boldsonall').show();

     var value  = (controll.value || controll.options[controll.selectedIndex].value);
     if(value){
      $('#boldsonall').load('{{URL::to("/showblockallboltsonoption",$lead_quotation->main_uniqid)}}');
     }
 }
</script>
@endsection
@endsection
