@extends('layouts.master')

@section('css')

<style>

   .row{

   margin-left: 7px !important;

   }

</style>

@endsection

@section('content')

<div class="row">

   <div class="col-md-12">

      <div class="master">

         @if($all_leads->count() > 0)

         @foreach($all_leads as $key=>$lead)

         <div class="list mytask">

            <div class="head">

               <h3 class="mb-3 mt-3">{{$lead->title}}</h3>

               <span class="badge badge-md badge-soft-danger" style="color:#fff !important;" id="leadcount">

               {{count(App\Task::where('status_id',$lead->id)->get())}}

               &nbsp;Lead</span>

               <span class="badge badge-md badge-soft-success float-right" id="price">

               @php ($total = 0) @endphp

               @foreach(App\Task::where('status_id',$lead->id)->get() as $all)

               @php ($total +=$all->amount) @endphp

               @endforeach

               £&nbsp;{{$total}}

               </span>

            </div>

            @php ($tass = App\Task::where('status_id',$lead->id)->get()) @endphp

            <div class="list-item {{count($tass) > 0 ? '' : 'dropify-wrapper' }}" id="project{{$key+1}}" status="{{$lead->id}}">

               @if(count($tass) > 0)

               @foreach($tass as $key => $val)

               <div class="chh" status-id="{{$lead->id}}" row-id="{{$val->id}}" id="dealdelete{{$val->id}}">

                  <div class="d-flex" style="justify-content:space-between"><strong style="

                     font-size: 12px;

                     color: red;

                     "></strong></p><span class="destroy float-right" data-id="{{$val->id}}" lead-id="{{$val->lead_id}}"><i class="fas fa-window-close"></i></span></div>

                  <div class="ch">

                     <a href="{{URL::to('lead/'.$val->lead_id)}}" target="_blank">

                     </a>

                     <h5 class="mb-2" style="font-weight: 600">

                        <span class="price float-right">{{$val->amount}}</span>

                        @if($val->lead_id!=NULL)

                        {{$val->title}}<br>

                        {{App\Lead::where('id',$val->lead_id)->first()->firstname}} &nbsp; {{App\Lead::where('id',$val->lead_id)->first()->surname}}<br>

                        @php($leadassignId = App\Lead::where('id',$val->lead_id)->first()->userAssign_id)

                        {{App\User::where('id',$leadassignId)->first()->name}}<br>

                        {{date('F d,Y',strtotime($val->created_at))}}

                        @endif

                     </h5>

                     <h6 class="float-right" style="margin-top: -24px;"> <a href="{{URL::to('/lead/'.$val->lead_id)}}" class=" text-primary">View</a> </h6>

                     <div class="child">

                        <p class="lname"></p>

                        <p class="dt"></p>

                     </div>

                  </div>

               </div>

               @endforeach

               @else

               <div class="ch">

               </div>

               @endif

            </div>

         </div>

         @endforeach

         @endif

      </div>

   </div>

</div>

@endsection

