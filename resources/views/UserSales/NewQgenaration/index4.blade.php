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

         <li class="active">Step 3</li>

         <li class="active">Step 4</li>

      </ul>

   </div>

   <br><br><br><br><br>

   <div class="container boiler-container-section">

      <form class="" action="{{URL::to('/generate-quotation/salesuser/step4/'.$uniqid)}}" method="post" id="myform">

      @csrf

      @method('PUT')


             @php($lead = App\LeadQuotation::where('main_uniqid',$uniqid)->first())

       <!--- ADDON PRICE START--->
              @php($boltsonprice = App\Boltschoosen::where('unique_id',$uniqid)->sum('total_price'))

              @if($lead->new_fuel_type!=NULL)
              @php($newfueltypeprice= App\newfuleType::where('id',$lead->new_fuel_type)->first()->price)
              @endif

              @if($lead->new_boiler_yype!=NULL)
              @php($newboilertypeprice=App\NewBoilerType::where('id',$lead->new_boiler_yype)->first()->price)
              @endif

             @if($lead->new_flue!=NULL)
             @php($newfluepeprice=App\NewFlue::where('id',$lead->new_flue)->first()->price)
             @endif

              @if($lead->new_controls!=NULL)
              @php($newcontrolsprice=App\NewControls::where('id',$lead->new_controls)->first()->price)
              @endif

              @if($lead->will_the_cupboard_need_altering!=NULL)
              @php($cupboardaltprice=App\CupboardNeedAlt::where('id',$lead->will_the_cupboard_need_altering)->first()->price)
              @endif

              @if($lead->chemical_system_treatment!=NULL)
              @php($chemicalsystemprice=App\ChemicalSystemTreatment::where('id',$lead->chemical_system_treatment)->first()->price)
              @endif

              @if($lead->gas_supply_length!=NULL)
               @php($gassupplylengthprice=App\GasSupplyLength::where('id',$lead->gas_supply_length)->first()->price)
              @endif


               @if($lead->electrical_work_required!=NULL)
                    @php($yourJson = trim($lead->electrical_work_required, '[]'))
                    @php($originalstr = str_replace('"', '', $yourJson))
                    @php($myArray = explode(',', $originalstr))


               @php($electricalworkprice = App\ElectricalWorkRequired::whereIn('id',$myArray)->sum('price'))
              @endif


              @if($lead->materials_check!=NULL)
              @php($fluekitprice=App\FlueKit::where('id',$lead->materials_check)->first()->price)
              @endif



              @if($lead->materials_check_options!=NULL)
                    @php($yourJsonmatoptions = trim($lead->materials_check_options, '[]'))
                    @php($originalstrmaterial = str_replace('"', '', $yourJsonmatoptions))
                    @php($myArraymaterial = explode(',', $originalstrmaterial))

               @php($materialchekoptionsprice = App\FlueKitDetails::whereIn('id',$myArraymaterial)->sum('price'))
              @endif

              @if($lead->flue_components!=NULL)
              @php($fluecomponentsprice=App\FlueKitDetails::where('id',$lead->flue_components)->first()->price)
              @endif

              @if($lead->vented_cylinder_dimensions!=NULL)
              @php($ventedcylinderprice=App\VentedCylinderDimension::where('id',$lead->vented_cylinder_dimensions)->first()->price)
              @endif

               @if($lead->magnetic_system_filter!=NULL)
               @php($magneticsystemfilterprice=App\MagneticSystemFilter::where('id',$lead->magnetic_system_filter)->first()->price)
               @endif



              @php($optionalprice = App\QtnOptionalDescription::where('uniqid',$uniqid)->sum('total_oe_price'))


              @php($totalAddonprice = @$boltsonprice+@$newfueltypeprice+@$newboilertypeprice+@$newfluepeprice+@$newcontrolsprice+@$cupboardaltprice+@$chemicalsystemprice+@$gassupplylengthprice+@$electricalworkprice+@$fluekitprice+@$materialchekoptionsprice+@$fluecomponentsprice+@$ventedcylinderprice+@$magneticsystemfilterprice+@$optionalprice)

              <p><strong>Addon Price: </strong> {{$totalAddonprice}}</p>

              <!--- ADDON PRICE END--->



                @php($firstregularboilerchoice=App\LeadQuotation::where('main_uniqid',$uniqid)->first()->first_regular_boiler_choice)

                <?php if(!empty($firstregularboilerchoice)){ ?>

                @php($boilerprice=App\Boilertype::where('id',$firstregularboilerchoice)->first()->price)
              <?php }else{

                    $boilerprice=0;

                 }

              ?>

                @php($firstboilercontrol=App\LeadQuotation::where('main_uniqid',$uniqid)->first()->first_boiler_controls)

                @if($firstboilercontrol!=NULL)

                   @php($firstboilercontrolprice = App\BoilerControls::where('id',$firstboilercontrol)->first()->price)
                @endif

                @php($totalbonePrice=$boilerprice+$firstboilercontrolprice+$totalAddonprice)


               @php($secondregularboilerchoice=App\LeadQuotation::where('main_uniqid',$uniqid)->first()->second_regular_boiler_choice)

               @php($secondboilerprice=App\Boilertype::where('id',$secondregularboilerchoice)->first()->price)

               @php($secondboilercontrol=App\LeadQuotation::where('main_uniqid',$uniqid)->first()->second_boiler_controls)


                @if($secondboilercontrol!=NULL)

                   @php($secondboilercontrolprice = App\BoilerControls::where('id',$secondboilercontrol)->first()->price)
                @endif

               @php($totalbtwoPrice=$secondboilerprice+$secondboilercontrolprice+$totalAddonprice)



               @php($thirdregularboilerchoice=App\LeadQuotation::where('main_uniqid',$uniqid)->first()->third_regular_boiler_choice)

               @php($thirdboilerprice=App\Boilertype::where('id',$thirdregularboilerchoice)->first()->price)

               @php($thirdboilercontrol=App\LeadQuotation::where('main_uniqid',$uniqid)->first()->third_boiler_controls)


                @if($thirdboilercontrol!=NULL)

                   @php($thirdboilercontrolprice = App\BoilerControls::where('id',$thirdboilercontrol)->first()->price)
                @endif

               @php($totalbthreePrice=$thirdboilerprice+$thirdboilercontrolprice+$totalAddonprice)



      <div class="row">

         <div class="col-lg-4">

            <div class="form-group">

               <label>Boiler 1 Guide Price</label>

               <input type="hidden" name="id" value="{{$lead->id}}">

               <input class="form-control input-decorate" name="boiler_1_guide_price" type="text" id="guideone"  @if($lead->boiler_1_guide_price!=NULL) value="{{$totalbonePrice}}" @else  @endif />



            </div>

         </div>







         <div class="col-lg-4">

            <div class="form-group">

               <label>Boiler 2 Guide Price</label>

               
               <input class="form-control input-decorate" type="text" name="boiler_2_guide_price" id="guidetwo" @if($lead->boiler_2_guide_price!=NULL) value="{{$totalbtwoPrice}}" @else  @endif />

            </div>

         </div>

         <div class="col-lg-4">

            <div class="form-group">

               <label>Boiler 3 Guide Price</label>

              
    
               <input class="form-control input-decorate" type="text" name="boiler_3_guide_price" id="guidethree"  @if($lead->boiler_3_guide_price!=NULL) value="{{$totalbthreePrice}}" @else  @endif />

            </div>

         </div>

      </div>

      <div class="row">

         <div class="col-lg-4">

            <div class="form-group">

               <label>Boiler 1 Amend*</label>

               <input class="form-control input-decorate" name="boiler_1_Amend" type="text" id="amendone" @if($lead->boiler_1_Amend!=NULL) value="{{$lead->boiler_1_Amend}}" @else  @endif/>

            </div>

         </div>

         <div class="col-lg-4">

            <div class="form-group">

               <label>Boiler 2 Amend*</label>

               <input class="form-control input-decorate" name="boiler_2_Amend" type="text" id="amendtwo" @if($lead->boiler_2_Amend!=NULL) value="{{$lead->boiler_2_Amend}}" @else  @endif/>

            </div>

         </div>

         <div class="col-lg-4">

            <div class="form-group">

               <label>Boiler 3 Amend*</label>

               <input class="form-control input-decorate" name="boiler_3_Amend" type="text" id="amendthree" @if($lead->boiler_3_Amend!=NULL) value="{{$lead->boiler_3_Amend}}" @else  @endif/>

            </div>

         </div>

      </div>

      <div class="row">

         <div class="col-lg-4">

            <div class="form-group">

               <label>Boiler 1 Amend*</label>

               <input class="form-control input-decorate" type="text" id="answerone" name="boiler1_total_price" @if($lead->boiler1_total_price!=NULL) value="{{$totalbonePrice+$lead->boiler_1_Amend}}" @else  @endif />

            </div>

         </div>

         <div class="col-lg-4">

            <div class="form-group">

               <label>Boiler 2 Amend*</label>

               <input class="form-control input-decorate" type="text" id="answertwo" name="boiler2_total_price" @if($lead->boiler2_total_price!=NULL) value="{{$totalbtwoPrice+$lead->boiler_2_Amend}}" @else  @endif />

            </div>

         </div>

         <div class="col-lg-4">

            <div class="form-group">

               <label>Boiler 3 Amend*</label>

               <input class="form-control input-decorate" type="text" id="answerthree" name="boiler3_total_price" @if($lead->boiler3_total_price!=NULL) value="{{$totalbthreePrice+$lead->boiler_3_Amend}}" @else  @endif />

            </div>

         </div>

      </div>

      <div class="row">

         <div class="col-lg-12">

            <div class="form-group">

               <label>Deposit Required*</label>

               <input class="form-control input-decorate" name="deposit_required" type="number" @if($lead->deposit_required!=NULL) value="{{$lead->deposit_required}}" @else  @endif />

            </div>

         </div>

      </div>

      <div class="row">

         <div class="col-lg-12">

            <div class="form-group">

               <label>Email Quote to Customer Now?*</label>

               <select class="form-control input-decorate" name="email_quote_to_customer_now">

                  <option value="">Please select</option>

                  <option value="Yes" @if($lead->email_quote_to_customer_now == 'Yes') selected @else @endif>Yes</option>

                  <option value="No" @if($lead->email_quote_to_customer_now == 'No') selected @else @endif>No</option>

               </select>

            </div>

         </div>

      </div>

      <div class="row mt-3">

        <div class="col-lg-6">

      <!--     <a href="{{URL::to('/generate-quotation/salesuser/step3/'.$lead->lead_id.'/'.$uniqid)}}" class="float-leftc btn btn-primary" style="background-color: #d50527;border-color: #d50527;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
 -->


      <a class="float-leftc btn btn-primary" onclick="return pageBack();" style="background-color: #d50527;border-color: #d50527;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
    



        </div>

         <div class="col-lg-6">

               <input type="submit"  class="float-right btn btn-primary" value="Next">

         </div>

      </div>

   </div>

   </form>

</div>

@endsection

@section('js')

<script type="text/javascript">

function pageBack(){



  $.ajax({

    type:'POST',

    url:'{{URL::to("/generate-quotation/salesuser/step4back")}}',

    data:{

      "_token": "{{ csrf_token() }}",

      main_uniqid:'{{$uniqid}}',

      boiler_1_guide_price:$('#guideone').val(),

      boiler_2_guide_price:$('#guidetwo').val(),

      boiler_3_guide_price:$('#guidethree').val(),

      boiler_1_Amend:$('#amendone').val(),

      boiler_2_Amend:$('#amendtwo').val(),

      boiler_3_Amend:$('#amendthree').val(),

      boiler1_total_price:$('#answerone').val(),

      boiler2_total_price:$('#answertwo').val(),

      boiler2_total_price:$('#answerthree').val()

    },

    success:function(data){



      if(data=='success'){

  
  window.location.href = "{{URL::to('/generate-quotation/salesuser/step3/'.$lead->lead_id.'/'.$uniqid)}}";



      }else{

        alert('Failed')

      }

    }

    ,

    error:function(data){

      alert('Error');

    }

  });





  return false;

}

</script>

<script>

$(document).on('focusout','#amendone',function(){

	var total = '';

	var val = $(this).val();

	var total = $('#guideone').val();

	total2 = parseInt(val) + parseInt(total);

	$('#answerone').val(total2);

})

$(document).on('focusout','#amendtwo',function(){

	var total = '';

	var val = $(this).val();

	var total = $('#guidetwo').val();

	total2 = parseInt(val) + parseInt(total);

	$('#answertwo').val(total2);

})

$(document).on('focusout','#amendthree',function(){

	var total = '';

	var val = $(this).val();

	var total = $('#guidethree').val();

	total2 = parseInt(val) + parseInt(total);

	$('#answerthree').val(total2);

})

</script>

@endsection
