<!DOCTYPE html>
<html lang="en-US" class="no-js">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <title>MPH Boiler</title>
      <meta name='robots' content='noindex,follow' />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <style rel="stylesheet">
         @media print {
         body {-webkit-print-color-adjust: exact;}
         }
         label{margin-bottom:0; font-weight:600;}
         .bg-light{background:#E8F1F4; font-weight:600; }
         img{max-width:100%; height:auto;}
         .jam {
         background-color: #5d97b4; padding: 2px; text-align:center;font-weight:600;visibility:hidden;font-weight: 600;
         }
         .jam1 {
         background-color: #5d97b4; text-align:center;
         border:3px solid #fff;
         color: #fff;
         font-weight: 600;
         padding: 9px;
         }
         .jam2 {
         background-color: #eaeaea; text-align:center;color:#000;
         border:3px solid #fff;
         font-weight: 600;
         padding: 2px;
         }
         .jam3 {background-color: #7bbf8f;font-weight: 600;color:fff;
         padding: 2px;border:3px solid #fff;}
         .dot {
         height: 120px;
         width: 120px;
         background-color: #e21818;
         border-radius: 50%;
         display: inline-block;
         position: absolute;
         margin-top: -26px;
         z-index: 200;
         margin-left: 103px;
         border: 6px solid #ab0000;
         }
         .dot-text {
         color: white;
         margin-left: 10px;
         margin-top: 34px;
         position: absolute;
         line-height: 18px;
         text-align: center;
         font-weight: 600;
         }
      </style>
   </head>
   <body>
      <div class="wrapper">
      <div class="header">
         <div class="container">
            <div class="container text-center">
               <div class="no-print">
                  <button id="btn" onclick="window.print()" class="btn btn-primary printBtn d-print-none" style="margin-top: 16px;">Print / Download</button>
               </div>
            </div>
            <script type="text/javascript">
               window.onload = function(){
               
               
               
                document.getElementById('btn').click();
               
               
               
               }
               
               
               
            </script>
            <div class="row mt-4 mb-5" style="align-items:center;">
               <div class="col-md-6">
                  <img src="{{asset('public/image/mphlogo.png')}}" />
               </div>
               <div class="col-md-6 text-right">
                  <img src="{{asset('public/image/logos.png')}}" />
               </div>
            </div>
         </div>
      </div>
      <br><br>
      <div class="mt-10 mb-4" style="padding: 5em 0; background:#F1F1F1;">
         <div class="container">
            @if($data->first_regular_boiler_choice)
            @php($bolier = App\Boilertype::where('id',$data->first_regular_boiler_choice)->first())
            @endif
            <span class="dot">
            <span class="dot-text">{{@$bolier->warranty}} YEAR <br> GUARANTEE</span>
            </span>
            <div class="row" style=" position:relative; align-items:center;">
               <img src="{{asset('public/image/b1.png')}}" style="position:absolute; right:5em; top:-8em"/>
               <div class="col-md-3" style="padding: 0 3em 0 0;">
                  <img src="{{@$bolier->image}}" alt="" />
               </div>
               <div class="col-md-9">
                  @if($data->first_regular_boiler_choice)
                  <h3>{{App\Boilertype::find($data->first_regular_boiler_choice)->company}}</h3>
                  <h5>{{App\Boilertype::find($data->first_regular_boiler_choice)->boilertype}}</h5>
                  @endif
                  <ul style="list-style-type:none; padding:0;">
                     <li><i class="fa fa-check-circle" style="color:green"></i>
                        @if($data->first_boiler_controls!=NULL)
                        {{App\BoilerControls::where('id',$data->first_boiler_controls)->first()->pack}}
                        @endif
                     </li>
                     @foreach(App\Boltschoosen::where('unique_id',$data->main_uniqid)->get() as $bolts)
                     @if($bolts->boltsid!=NULL)
                     <li><i class="fa fa-check-circle" style="color:green"></i> 
                        {{App\BoltOns::where('id',$bolts->boltsid)->first()->name}}
                     </li>
                     @endif
                     @endforeach
                  </ul>
                  <div class="row col-md-8 text-white" style="padding:10px 0 0;border-radius: 5px; background:#2E3D4B;align-items:center;">
                     <div class="col-md-4 text-left">
                        <h4>&pound; {{$data->boiler1_total_price}}</h4>
                        <p>Incl. VAT</p>
                     </div>
                     <div class="col-md-4 text-center">
                        <h4>OR</h4>
                     </div>
                     <div class="col-md-4 text-right">
                        <?php
                           function getapr($getapr){
                           
                             $pv= $getapr;
                           
                             $i= 0.082;
                           
                             $pi= 0.00683;
                           
                             $pi1= 1.00683;
                           
                             $n= 120;
                           
                             $cal1= $pv*$pi;
                           
                             $cal2=(pow($pi1,$n));
                           
                             $cal3=$cal2-1;
                           
                             $cal4= ($cal1*$cal2)/$cal3;
                           
                             echo round($cal4);
                           
                           }
                           
                           ?>
                        <h4>&pound; <?php getapr($data->boiler1_total_price-$data->deposit_required) ?></h4>
                        <p>Per month</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="mt-4 mb-4" style="padding: 5em 0;">
         <div class="container">
            @php($bolier2 = App\Boilertype::where('id',$data->second_regular_boiler_choice)->first())
            <span class="dot">
            <span class="dot-text">{{$bolier2->warranty}} YEAR <br> GUARANTEE</span>
            </span>
            <div class="row" style=" position:relative;align-items:center;">
               <img src="{{asset('public/image/b2.png')}}" style="position:absolute; right:5em; top:-8em"/>
               <div class="col-md-3" style="padding: 0 3em 0 0;">
                  <img src="{{$bolier2->image}}" alt="" />
               </div>
               <div class="col-md-9">
                  <h3>{{App\Boilertype::find($data->second_regular_boiler_choice)->company}}</h3>
                  <h5>{{App\Boilertype::find($data->second_regular_boiler_choice)->boilertype}}</h5>
                  <ul style="list-style-type:none; padding:0;">
                     <li><i class="fa fa-check-circle" style="color:green"></i>
                        @if($data->second_boiler_controls!=NULL)
                        {{App\BoilerControls::where('id',$data->second_boiler_controls)->first()->pack}}
                        @endif
                     </li>
                     @foreach(App\Boltschoosen::where('unique_id',$data->main_uniqid)->get() as $bolts)
                     @if($bolts->boltsid!=NULL)
                     <li><i class="fa fa-check-circle" style="color:green"></i> 
                        {{App\BoltOns::where('id',$bolts->boltsid)->first()->name}}
                     </li>
                     @endif
                     @endforeach
                  </ul>
                  <div class="row col-md-8 text-white" style="padding:10px 0 0;border-radius: 5px; background:#2E3D4B;align-items:center;">
                     <div class="col-md-4 text-left">
                        <h4>&pound; {{$data->boiler2_total_price}}</h4>
                        <p>Incl. VAT</p>
                     </div>
                     <div class="col-md-4 text-center">
                        <h4>OR</h4>
                     </div>
                     <div class="col-md-4 text-right">
                        <h4>&pound; <?php getapr($data->boiler2_total_price-$data->deposit_required) ?></h4>
                        <p>Per month</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="mt-4 mb-4" style="padding: 5em 0; background:#F1F1F1;">
         <div class="container">
            @php($bolier3 = App\Boilertype::where('id',$data->third_regular_boiler_choice)->first())
            <span class="dot">
            <span class="dot-text">{{$bolier3->warranty}} YEAR <br> GUARANTEE</span>
            </span>
            <div class="row" style=" position:relative;align-items:center;">
               <img src="{{asset('public/image/b3.png')}}" style="position:absolute; right:5em; top:-8em"/>
               <div class="col-md-3" style="padding: 0 3em 0 0;">
                  <img src="{{$bolier3->image}}" alt="" />
               </div>
               <div class="col-md-9">
                  <h3>{{App\Boilertype::find($data->third_regular_boiler_choice)->company}}</h3>
                  <h5>{{App\Boilertype::find($data->third_regular_boiler_choice)->boilertype}}</h5>
                  <ul style="list-style-type:none; padding:0;">
                     <li><i class="fa fa-check-circle" style="color:green"></i>
                        @if($data->third_boiler_controls!=NULL)
                        {{App\BoilerControls::where('id',$data->third_boiler_controls)->first()->pack}}
                        @endif
                     </li>
                     @foreach(App\Boltschoosen::where('unique_id',$data->main_uniqid)->get() as $bolts)
                     @if($bolts->boltsid!=NULL)
                     <li><i class="fa fa-check-circle" style="color:green"></i> 
                        {{App\BoltOns::where('id',$bolts->boltsid)->first()->name}}
                     </li>
                     @endif
                     @endforeach
                  </ul>
                  <div class="row col-md-8 text-white" style="padding:10px 0 0;border-radius: 5px; background:#2E3D4B;align-items:center;">
                     <div class="col-md-4 text-left">
                        <h4>&pound; {{$data->boiler3_total_price}}</h4>
                        <p>Incl. VAT</p>
                     </div>
                     <div class="col-md-4 text-center">
                        <h4>OR</h4>
                     </div>
                     <div class="col-md-4 text-right">
                        <h4>&pound; <?php getapr($data->boiler3_total_price-$data->deposit_required) ?></h4>
                        <p>Per month</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php
         function getapr2totlpay($getapr,$n){
         
           $pv= $getapr;
         
           $i= 0.082;
         
           $pi= 0.00683;
         
           $pi1= 1.00683;
         
           $n= $n;
         
           $cal1= $pv*$pi;
         
           $cal2=(pow($pi1,$n));
         
           $cal3=$cal2-1;
         
           $cal4= ($cal1*$cal2)/$cal3;
         
           //APR PRICE PER MONTH
         
           echo round($cal4*$n);
         
         }
         
         ?>
      <?php
         function getapr3totlpay($getapr,$n){
         
           $pv= $getapr;
         
           $i= 0.082;
         
           $pi= 0.00683;
         
           $pi1= 1.00683;
         
           $n= $n;
         
           $cal1= $pv*$pi;
         
           $cal2=(pow($pi1,$n));
         
           $cal3=$cal2-1;
         
           $cal4= ($cal1*$cal2)/$cal3;
         
           //APR PRICE PER MONTH
         
           echo round(($cal4*$n)/$n);
         
         }
         
         ?>
      @include('_pdfFooter',['page' => "Page 1/2"])
      <br><br>
      <!-- HEADER -->
      @include('_pdfHeader')
      <!-- HEADER -->
      <div class="container">
         <div class="text-white" style="color:black;border-radius:0;">
            <div class="">
               <table style="width:100%">
                  <tr style="text-align:center;font-weight:600">
                     <th class="jam" style="">Name</th>
                     <th class="jam1">APR %</th>
                     <th class="jam1">Duration</th>
                     <th class="jam1">Deposit</th>
                     <th class="jam1">Loan Amount</th>
                     <th class="jam1">Total Payable</th>
                     <th class="jam1">Monthly Payment</th>
                  </tr>
                  <tr style="color: #fff; text-align:center;">
                     <td class="jam1">Option 1</td>
                     <td class="jam2">8.2%</td>
                     <td class="jam2">120 months</td>
                     <td class="jam2">£ {{$data->deposit_required}}</td>
                     <td class="jam2">£ {{$data->boiler1_total_price-$data->deposit_required}}</td>
                     <td class="jam2">£ <?php getapr2totlpay($data->boiler1_total_price-$data->deposit_required,120) ?></td>
                     <td class="jam3">£ <?php getapr($data->boiler1_total_price-$data->deposit_required) ?></td>
                  </tr>
                  <tr style="color: #fff; text-align:center;font-weight:600">
                     <td class="jam1">Option 2</td>
                     <td class="jam2">8.2%</td>
                     <td class="jam2">60 months</td>
                     <td class="jam2">£ {{$data->deposit_required}}</td>
                     <td class="jam2">£ {{$data->boiler1_total_price-$data->deposit_required}}</td>
                     <td class="jam2">£ <?php getapr2totlpay($data->boiler1_total_price-$data->deposit_required,60) ?></td>
                     <td class="jam3">£ <?php getapr3totlpay($data->boiler1_total_price-$data->deposit_required,60) ?></td>
                  </tr>
                  <tr style="color: #fff; text-align:center;font-weight:600">
                     <td class="jam1">Option 3</td>
                     <td class="jam2">8.2%</td>
                     <td class="jam2">12 months</td>
                     <td class="jam2">£ {{$data->deposit_required}}</td>
                     <td class="jam2">£ {{$data->boiler1_total_price-$data->deposit_required}}</td>
                     <td class="jam2">£ <?php getapr2totlpay($data->boiler1_total_price-$data->deposit_required,12) ?></td>
                     <td class="jam3">£ <?php getapr3totlpay($data->boiler1_total_price-$data->deposit_required,12) ?></td>
                  </tr>
               </table>
            </div>
         </div>
         <br>
         <div class="card text-white" style="background:#5D97B4; border-radius:0;">
            <div class="card-body">
               <h4>Your next steps</h4>
               <p>The MPH Boilers team will be in touch with you shortly to make sure you have everything you need to make an informed decision, in the mean time if you'd like to discuss your quote or need any further support please contact us.</p>
            </div>
         </div>
         <p>&nbsp;</p>
         <div class="card" style="border-color:#5D97B4; border-radius:0;">
            <div class="card-header text-white" style="background:#5D97B4;">
               <div class="card-title">
                  <h4 class="card-label">Customer Details</h4>
               </div>
            </div>
            <div class="card-body">
               <p><strong>Name:</strong> {{$data->cus_firstname}} {{$data->cus_surname}}</p>
               <p><strong>Email:</strong> {{$data->cus_email}}</p>
               <p><strong>Installation Address</strong><br />{{$data->cus_street_address}}<br /> {{$data->cus_installation_address}}<br />{{$data->cus_postal_code}}</p>
            </div>
         </div>
         <p>&nbsp;</p>
         <div class="card" style="border-color:#5D97B4; border-radius:0;">
            <div class="card-header text-white" style="background:#5D97B4;">
               <div class="card-title">
                  <h4 class="card-label">Quotation Summary</h4>
               </div>
            </div>
            <div class="card-body">
               <p><strong>Quotation Date:</strong> {{$data->created_at->format('d/m/Y')}}</p>
               <p><strong>Your Reference</strong> MPH-2547-{{$data->id}}</p>
               <p><strong>Surveyor:</strong> {{App\User::find($data->user_id)->name}}</p>
               <p><strong>Estimated Duration:</strong> {{$data->how_many_days_of_engineer_labour}} - {{$data->how_many_days_of_engineer_labour+1 }} Days</p>
               <p><strong>Monthly Finance Example:</strong> The monthly finance figures displayed on the front page include a deposit of £ {{$data->deposit_required}}, with an APR of 8.2% over 120 months. MPH have a range of finance options available. Please speak to your surveyor or our office for further information.</p>
            </div>
         </div>
      </div>
      <br><br><br>
      <!-- <div class="card" style="background:#E8F1F4;border-radius:0;">
         <div class="card-body">
         
         
         
            <h4 class="card-label" style="color:#5E90A6;">Fixed-Price Promise</h4>
         
         
         
            <hr style="background:#5E90A6; border-top-width: 3px;" />
         
         
         
            <p>Remember, this quotation is given on a fixed-price basis. That means you won't pay a penny more for all of the works detailed below, even if the work takes longer to complete.</p>
         
         
         
            <p> To discuss or accept your quotation, please call our office on <strong>0845 269 8476</strong>, alternatively email <strong>info@mphboilers.org.uk</strong></p>
         
         
         
         </div>
         
         
         
         </div> -->
      <!-- FOOTER -->
      <br><br><br>
      @include('_pdfFooter',['page' => "Page 2/3"])
      <!-- FOOTER -->
      <br><br>
      <!-- HEADER -->
      @include('_pdfHeader')
      <!-- HEADER -->
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <label>BOLT ON</label>
               <div class="bg-light py-2 px-2 mb-3">
                  <ul>
                     @foreach(App\Boltschoosen::where('unique_id',$data->main_uniqid)->get() as $bolts)
                     <li>{{App\BoltOns::where('id',$bolts->boltsid)->first()->name}}</li>
                     @endforeach
                  </ul>
               </div>
            </div>
         </div>
         <br>
         <h5 style="margin-bottom:1em;font-weight:900;">Current System Configuration</h5>
         <div class="row">
            <div class="col-md-4">
               <label for="">CURRENT BOILER TYPE</label>
               <div class="bg-light py-2 px-2 mb-3">
                  @if($data->current_boiler_type!=NULL)
                  {{App\CurrentBoilerType::where('id',$data->current_boiler_type)->first()->name}}
                  @endif
               </div>
            </div>
            <div class="col-md-4">
               <label for="">CURRENT FLUE</label>
               <div class="bg-light py-2 px-2 mb-3">
                  @if($data->current_flue!=NULL)
                  {{App\CurrentFlue::where('id',$data->current_flue)->first()->name}}
                  @endif
               </div>
            </div>
            <div class="col-md-4">
               <label for="">CURRENT BOILER LOCATION</label>
               <div class="bg-light py-2 px-2 mb-3">
                  @if($data->current_boiler_location!=NULL)
                  {{App\CurrentBoilerLocation::where('id',$data->current_boiler_location)->first()->name}}
               </div>
               @endif
            </div>
            <div class="col-md-12">
               <label for="">EXISTING SHOWER?</label>
               <div class="bg-light py-2 px-2 mb-3">
                  @if($data->existing_shower!=NULL)
                  {{App\ExistingShower::where('id',$data->existing_shower)->first()->name}}
                  @endif
               </div>
            </div>
         </div>
         <br><br>
         <h5 style="margin-bottom:1em;font-weight:900;">New System Configuration</h5>
         <div class="row">
            <div class="col-md-4">
               <label>NEW FUEL TYPE</label>
               <div class="bg-light py-2 px-2 mb-3">
                  @if($data->new_fuel_type!=NULL)
                  {{App\newfuleType::where('id',$data->new_fuel_type)->first()->name}}
                  @endif
               </div>
               <label>NEW FLUE</label>
               <div class="bg-light py-2 px-2 mb-3">
                  @if($data->new_flue!=NULL)
                  {{App\NewFlue::where('id',$data->new_flue)->first()->name}}
               </div>
               @endif
            </div>
            <div class="col-md-4">
               <label>NEW BOILER TYPE</label>
               <div class="bg-light py-2 px-2 mb-3">
                  @if($data->new_boiler_yype!=NULL)
                  {{App\NewBoilerType::where('id',$data->new_boiler_yype)->first()->name}}
                  @endif
               </div>
               <label>NEW FLUE LOCATION</label>
               <div class="bg-light py-2 px-2 mb-3">
                  @if($data->new_flue_location!=NULL)
                  {{App\NewFlueLocation::where('id',$data->new_flue_location)->first()->name}}
                  @endif
               </div>
            </div>
            <div class="col-md-4">
               <label>NEW BOILER LOCATION</label>
               <div class="bg-light py-2 px-2 mb-3">
                  @if($data->new_boiler_location!=NULL)
                  {{App\CurrentBoilerLocation::where('id',$data->new_boiler_location)->first()->name}}
                  @endif
               </div>
               <label>CONDENSATE TERMINATION</label>
               <div class="bg-light py-2 px-2 mb-3">
                  @if($data->condensate_termination!=NULL)
                  {{App\CondensateTermination::where('id',$data->condensate_termination)->first()->name}}
                  @endif
               </div>
            </div>
            <div class="col-md-12">
               <label>NEW CONTROLS</label>
               <div class="bg-light py-2 px-2 mb-3">
                  @if($data->new_controls!=NULL)
                  {{App\NewControls::where('id',$data->new_controls)->first()->name}}
                  @endif
               </div>
            </div>
            <div class="col-md-6">
               <label>IS THE NEW BOILER BEING FITTED IN A CUPBOARD?</label>
               <div class="bg-light py-2 px-2 mb-3">
                  @if($data->is_the_new_boiler_being_fitted_in_a_cupboard!=NULL)
                  {{$data->is_the_new_boiler_being_fitted_in_a_cupboard}}
                  @endif
               </div>
            </div>
            <div class="col-md-6">
               <label>WILL THE CUPBOARD NEED ALTERING?</label>
               <div class="bg-light py-2 px-2 mb-3">
                  @if($data->will_the_cupboard_need_altering!=NULL)
                  {{App\CupboardNeedAlt::where('id',$data->will_the_cupboard_need_altering)->first()->name}}
                  @endif
               </div>
            </div>
         </div>
         <p>&nbsp;</p>
         <h5 style="margin-bottom:1em;font-weight:600;">Decommission and Removal</h5>
         <div class="row">
            <div class="col-md-4">
               <label>REMOVALS</label> <br>
               @if($data->removals!=NULL)
               @php($yourJson = trim($data->removals, '[]'))
               @php($originalstr = str_replace('"', '', $yourJson))
               @php($myArray = explode(',', $originalstr))
               @endif
               <?php if(!empty($myArray)){ ?>
               <ul>
                  @foreach(App\Removals::whereIn('id',$myArray)->get() as $removaldata)
                  <li>{{$removaldata->name}}</li>
                  @endforeach
               </ul>
               <?php }else{ } ?>
            </div>
         </div>
         <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      </div>
      <!-- FOOTER -->
      @include('_pdfFooter',['page' => "Page 3/4"])
      <!-- FOOTER -->
      <!-- HEADER -->
      @include('_pdfHeader')
      <!-- HEADER -->
      <div class="container">
         <h5 style="margin-bottom:1em;font-weight:600;">Installation Requirements</h5>
         <div class="row">
            <div class="col-md-6">
               <label>CHEMICAL SYSTEM TREATMENT</label>
               <div class="bg-light py-2 px-2 mb-3">
                  @if($data->chemical_system_treatment!=NULL)
                  {{App\ChemicalSystemTreatment::where('id',$data->chemical_system_treatment)->first()->name}}
                  @endif
               </div>
            </div>
            <div class="col-md-6">
               <label>GAS SUPPLY REQUIREMENTS</label>
               <div class="bg-light py-2 px-2 mb-3">
                  @if($data->supply_change!=NULL)
                  {{App\GasSupplyRequirements::where('id',$data->supply_change)->first()->name}}
                  @endif
               </div>
            </div>
            <div class="col-md-12">
               <label>GAS SUPPLY LENGTH</label>
               <div class="bg-light py-2 px-2 mb-3">
                  @if($data->gas_supply_length!=NULL)
                  {{App\GasSupplyLength::where('id',$data->gas_supply_length)->first()->name}}
                  @endif
               </div>
            </div>
            <div class="col-md-12">
               <label>ELECTRICAL WORK REQUIRED</label>
               @if($data->electrical_work_required!=NULL)
               @php($yourJsonelct = trim($data->electrical_work_required, '[]'))
               @php($originalstrelct = str_replace('"', '', $yourJsonelct))
               @php($myArrayelct = explode(',', $originalstrelct))
               @endif
               <div class="bg-light py-2 px-2 mb-3">
                  <?php if(!empty($myArrayelct)){ ?>
                  <ul>
                     @foreach(App\ElectricalWorkRequired::whereIn('id',@$myArrayelct)->get() as $electricaldata)
                     <li>{{$electricaldata->name}}</li>
                     @endforeach
                  </ul>
                  <?php }else{ } ?>
               </div>
            </div>
            <div class="col-md-12">
               <label>ASBESTOS CONTAINING MATERIALS (ACM) IDENTIFIED?</label> 
               <div class="bg-light py-2 px-2 mb-3">
                  @if($data->asbestos_containing_materials!=NULL)
                  {{App\ACM::where('id',$data->asbestos_containing_materials)->first()->name}}
                  @endif
               </div>
            </div>
            <div class="col-md-12">
               <label>PARKING REQUIREMENTS</label>
               <div class="bg-light py-2 px-2 mb-3"> 
                  @if($data->parking_requirements!=NULL)
                  {{App\ParkingRequirement::where('id',$data->parking_requirements)->first()->name}}
                  @endif
               </div>
            </div>
            <div class="col-md-12">
               <label>60/100MM FLUE KIT</label>
               <div class="bg-light py-2 px-2 mb-3">
                  @if($data->materials_check!=NULL)
                  {{App\FlueKit::where('id',$data->materials_check)->first()->name}}
                  @endif
               </div>
            </div>
            <div class="col-md-12">
               <label>MAGNETIC SYSTEM FILTER</label>
               <div class="bg-light py-2 px-2 mb-3">
                  @if($data->magnetic_system_filter!=NULL)
                  {{App\MagneticSystemFilter::where('id',$data->magnetic_system_filter)->first()->name}}
                  @endif
               </div>
            </div>
            <div class="col-md-12">
               <label>ADDITIONAL CENTRAL HEATING PARTS</label>
               <div class="bg-light py-2 px-2 mb-3">
                  @if($data->additional_central_heating_parts!=NULL)
                  {{$data->additional_central_heating_parts}}
                  @endif
               </div>
            </div>
            <div class="col-md-12">
               <label>CONDENSATE COMPONENTS</label> 
               <div class="bg-light py-2 px-2 mb-3">{{$data->condesnate}}</div>
            </div>
            <div class="col-md-12">
               <label>ADDITIONAL CONDENSATE COMPONENTS</label>
               @if($data->condesnate_input!=NULL)
               @php($yourJsoncondes = trim($data->condesnate_input, '[]'))
               @php($originalstrconds = str_replace('"', '', $yourJsoncondes))
               @php($myArraycondes = explode(',', $originalstrconds))
               @endif
               <div class="bg-light py-2 px-2 mb-3">
                  <?php if(!empty($myArraycondes)){ ?>
                  <ul>
                     @foreach($myArraycondes as $condes)
                     <li>{{$condes}}</li>
                     @endforeach
                  </ul>
                  <?php }else{} ?>
               </div>
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-md-12">
               <label>GAS PLUME MANAGEMENT KIT</label>
               <div class="bg-light py-2 px-2 mb-3">(1x) Plume Management Kit</div>
               <label>CONDENSATE COMPONENTS</label>
               <div class="bg-light py-2 px-2 mb-3">
                  @if($data->condensate_components!=NULL)
                  {{$data->condensate_components}}
                  @endif
               </div>
            </div>
         </div>
         <br>
         <h5 style="margin-bottom:1em;font-weight:600;">Radiator Requirements</h5>
         <div class="row">
            <div class="col-md-4">
               <label>RADIATOR REQUIREMENTS</label>
               @if($data->radiator_requirements!=NULL)
               @php($yourJsonradiator = trim($data->radiator_requirements, '[]'))
               @php($originalstrradiator = str_replace('"', '', $yourJsonradiator))
               @php($myArrayradiator = explode(',', $originalstrradiator))
               @endif
               <div class="bg-light py-2 px-2 mb-3">
                  <?php if(!empty($myArrayradiator)){?>
                  <ul>
                     @foreach($myArrayradiator as $radiators)
                     <li>{{$radiators}}</li>
                     @endforeach
                  </ul>
                  <?php }else{ } ?>
               </div>
            </div>
         </div>
         <br>
      </div>
      <br><br><br><br><br><br>
      @include('_pdfFooter',['page' => "Page 4/5"])
      <br><br><br>
      <!-- HEADER -->
      @include('_pdfHeader')
      <!-- HEADER -->
      <div class="container">
         <h5 style="margin-bottom:1em;font-weight:600;">Installation Notes and Photographs</h5>
         <div class="row">
            <div class="col-md-12">
               <label>ADDITIONAL NOTES</label>
               <div class="bg-light py-2 px-2 mb-3">{{$data->additional_notes}}</div>
            </div>
            <div class="col-md-12">
               <label>OPTIONAL EXTRAS</label>
               <div class="bg-light py-2 px-2 mb-3">

                <table class="table">
                  <thead>
                    <tr>
                      <th>Description</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>
                @foreach(App\QtnOptionalDescription::where('uniqid',$data->main_uniqid)->get() as $opt)
                @if($opt!=NULL)
                  <tr>
                    <td>{{$opt->oe_description}}</td>
                    <td>{{$opt->oe_quantity}}</td>
                    <td>{{$opt->oe_quantity}}&nbsp;X&nbsp;{{$opt->oe_price}}</td>
                    <td>{{$opt->total_oe_price}}</td>
                  </tr>
                  @endif
                @endforeach
                  </tbody>
                </table>
                
                
               </div>
              
            </div>
         </div>
         <p>&nbsp;</p>
      </div>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      @include('_pdfFooter',['page' => "Page 5/6"])
   </body>
</html>