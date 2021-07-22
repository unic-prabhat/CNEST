@extends('UserSales.layouts.master')

@section('css')

<style>

.row {

    margin-left: 7px;

}



.fc-event.not {

    background: #fff !important;

    color: #000 !important;

    border: unset !important;

    font-weight: 600 !important;

}

.fc-day-grid-event{

  cursor: pointer !important;

}

.nav li:first-child {

    margin-left: unset !important;

}

span.user-color-type {

    display: inline-block;

    padding: 5px;

    margin-right: 5px;

}

</style>

@endsection

@section('content')

<!-- Top Bar End -->
<!-- Page Content-->

@include('UserSales.common.message')

<!-- Page-Title -->

<div class="row">

   <div class="col-sm-12">

      <div class="page-title-box">

         <div class="float-right">

            <ol class="breadcrumb">

               <li class="breadcrumb-item active">Dashboard</li>

               <li class="breadcrumb-item"><a href="javascript:void(0);">CRM</a></li>

            </ol>

         </div>

      </div>

      <!--end page-title-box-->

   </div>

   <!--end col-->

</div>

<!-- end page title end breadcrumb -->

<div class="row">

   <div class="col-lg-3">

      <div class="card">

         <div class="card-body">

            <div class="row">

               <div class="col-4 align-self-center">

                  <div class="icon-info">

                     <i data-feather="smile" class="align-self-center icon-lg icon-dual-warning"></i>

                  </div>

               </div>

               <div class="col-8 align-self-center text-right">

                  <div class="ml-2">

                     <p class="mb-1 text-muted">Total Leads</p>

                     @php

                     $uid=Auth::user()->id;

                     @endphp

                     <h3 class="mt-0 mb-1 font-weight-semibold">{{count(App\Lead::where('user_id',$uid)->get())}}</h3>

                  </div>

               </div>

            </div>

            <div class="progress mt-2" style="height:3px;">

               <div class="progress-bar bg-warning" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>

            </div>

         </div>

         <!--end card-body-->

      </div>

      <!--end card-->

   </div>

   <!--end col-->

   <div class="col-lg-3">

      <div class="card">

         <div class="card-body">

            <div class="row">

               <div class="col-4 align-self-center">

                  <div class="icon-info">

                     <i data-feather="users" class="align-self-center icon-lg icon-dual-purple"></i>

                  </div>

               </div>

               <div class="col-8 align-self-center text-right">

                  <div class="ml-2">

                     <p class="mb-1 text-muted">New Leads</p>

                     <h3 class="mt-0 mb-1 font-weight-semibold">{{count(App\Lead::where('created_at','>=',date('Y-m-d'))->get())}}</h3>

                  </div>

               </div>

            </div>

            <div class="progress mt-2" style="height:3px;">

               <div class="progress-bar bg-purple" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>

            </div>

         </div>

         <!--end card-body-->

      </div>

      <!--end card-->

   </div>

   <!--end col-->

   <div class="col-lg-3">

      <div class="card">

         <div class="card-body">

            <div class="row">

               <div class="col-4 align-self-center">

                  <div class="icon-info">

                     <i data-feather="headphones" class="align-self-center icon-lg icon-dual-success"></i>

                  </div>

               </div>

               <div class="col-8 align-self-center text-right">

                  <div class="ml-2">

                     <p class="mb-0 text-muted">Lead Of Week</p>

                     <h3 class="mt-0 mb-1 font-weight-semibold d-inline-block">{{count(App\Lead::whereBetween('created_at', [Carbon\Carbon::now()->startOfWeek(),

                        Carbon\Carbon::now()->endOfWeek()])->get())}}

                     </h3>

                     <span class="badge badge-soft-success mt-1 shadow-none">Active</span>

                  </div>

               </div>

            </div>

            <div class="progress mt-2" style="height:3px;">

               <div class="progress-bar bg-success" role="progressbar" style="width: 48%;" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>

            </div>

         </div>

         <!--end card-body-->

      </div>

      <!--end card-->

   </div>

   <!--end col-->

   <div class="col-lg-3">

      <div class="card">

         <div class="card-body">

            <div class="row">

               <div class="col-sm-4 col-4 align-self-center">

                  <div class="icon-info">

                     <i data-feather="check-square" class="align-self-center icon-lg icon-dual-pink"></i>

                  </div>

               </div>

               <div class="col-sm-8 col-8 align-self-center text-right">

                  <div class="ml-2">

                     <p class="mb-1 text-muted">Last Month</p>

                     <h3 class="mt-0 mb-1 font-weight-semibold">{{count(App\Lead::where(

                        'created_at', '>=', Carbon\Carbon::now()->firstOfMonth()->toDateTimeString()

                        )->get())}}

                     </h3>

                  </div>

               </div>

            </div>

            <div class="progress mt-2" style="height:3px;">

               <div class="progress-bar bg-pink" role="progressbar" style="width: 22%;" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>

            </div>

         </div>

         <!--end card-body-->

      </div>

      <!--end card-->

   </div>

   <!--end col-->

</div>

<!--end row-->

</div> <!--end tab-content-->

<div class="row">

   <div class="col-lg-4">

      <div class="card">

         <div class="card-body">

           <h5>Recent Metting</h5>

           <img src="../assets/images/widgets/calendar.svg" alt="" class="img-fluid">

            <ul class="list-group">

              @foreach(App\Scheduletask::whereDate('created_at', Carbon\Carbon::now()->toDateString())->where('assigned_user_id',auth()->user()->id)->get() as $dss)

              <li class="list-group-item align-items-center d-flex">

                 <div class="media">

                    <i class="far fa-calendar-alt"></i>

                    <div class="media-body align-self-center">

                       <h5 class="mt-0 mb-1">{{$dss->title}}</h5>

                       <p class="text-muted mb-0">

                       {{App\Lead::where('id',$dss->lead_id)->first()->firstname}}&nbsp;{{App\Lead::where('id',$dss->lead_id)->first()->surname}} - {{App\Lead::where('id',$dss->lead_id)->first()->address}}<br>

                       {{App\User::where('id',$dss->user_id)->first()->name}}

                       </p>

                       <p class="text-muted mb-0">

                          Today  {{date("g:i a", strtotime($dss->date))}}

                       </p>

                    </div>

                    <!--end media body-->

                 </div>

              </li>

            @endforeach

            </ul>



         </div>

         <!--end card-body-->

      </div>

      <!--end card-->

   </div>

   <!--end col-->

   <div class="col-lg-8">

      <div class="card">

         <div class="card-body">


            <div id="calendar" class="fc fc-ltr fc-unthemed" style="">

            </div>

         </div>

      </div>

   </div>

</div>

<!-- end page content -->

<!-- end page-wrapper -->

@endsection

@section('script')

@endsection

