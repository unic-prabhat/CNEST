@extends('layouts.master')

@section('css')

<style>

   .row{

   margin-left: 7px !important;

   }

.refresh-btn-option {
    position: absolute;
    right: 23px;
    border: unset;
    background-color: #fff;
}


</style>

@endsection

@section('content')

<!-- Page-Title -->

<div class="row">

   <div class="col-sm-12">

      <div class="page-title-box">

         <div class="float-right">

            <ol class="breadcrumb">

               <li class="breadcrumb-item"><a href="javascript:void(0);">MPH Boiler</a></li>

               <li class="breadcrumb-item"><a href="javascript:void(0);">CRM</a></li>

               <li class="breadcrumb-item active">Customers</li>

            </ol>

         </div>

      </div>

      <div class="card top-bar-button">

         <div class="card-body">

            <div class="row">

               <ul class="col float-right container-filter categories-filter mb-0" id="filter">

                  <li><a href="{{URL::to('/generate-quotation/'.$lead->id)}}" target="_blank" class="categories btn btn-blue btn-square waves-effect waves-light" data-filter=".branding">Generate Quote</a></li>

                  <li><a class="categories btn btn-blue btn-square waves-effect waves-light" data-filter=".design" data-toggle="modal"

                     data-animation="bounce" data-target="#deal">Add deal</a></li>

                  <!--  <li><a class="categories btn btn-blue btn-square waves-effect waves-light" href="javascript:void(0)" data-filter=".photo" onclick="">Edit</a></li> -->

               </ul>

            </div>

            <!-- End portfolio  -->

         </div>

         <!--end card-body-->

      </div>

      <!--end page-title-box-->

   </div>

   <!--end col-->

</div>

<!-- end page title end breadcrumb -->

<div class="row">

   <div class="col-lg-4">

      <div class="card">

         <div class="card-body">

            <div class="media mb-3">

               <div class="media-body align-self-center">

                  <h4 class="mt-0 mb-1">{{ucfirst($lead->firstname)}}</h4>

                  <p class="text-muted mb-0 font-12">{{$lead->town}}, {{$lead->country}}</p>

               </div>

               <!--end media body-->

            </div>

            <!--end media-->

            <div class="leadStatus_show">

               @if($lead->status == 'Hot Lead')

               <button type="button" class="btn btn-outline-primary dropdown-toggle badge badge-md badge-soft-danger" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><span id="lead_status_show">{{$lead->status}}</span> <i class="mdi mdi-chevron-down"></i></button>

               @elseif($lead->status == 'Cold Lead')

               <button type="button" class="btn btn-outline-primary dropdown-toggle badge badge-md badge-soft-success" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><span id="lead_status_show">{{$lead->status}}</span> <i class="mdi mdi-chevron-down"></i></button>

               @elseif($lead->status == 'New Lead')

               <button type="button" class="btn btn-outline-primary dropdown-toggle badge badge-md badge-soft-purple" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><span id="lead_status_show">{{$lead->status}}</span> <i class="mdi mdi-chevron-down"></i></button>

               @else

               <button type="button" class="btn btn-outline-primary dropdown-toggle badge badge-md badge-soft-success" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><span id="lead_status_show">{{$lead->status}}</span> <i class="mdi mdi-chevron-down"></i></button>

               @endif

               <div class="dropdown-menu" style="">

                  <a class="dropdown-item" href="#" lead-id="{{$lead->id}}">New Lead</a>

                  <a class="dropdown-item" href="#" lead-id="{{$lead->id}}">Hot Lead</a>

                  <a class="dropdown-item" href="#" lead-id="{{$lead->id}}">Cold Lead</a>

                  <a class="dropdown-item" href="#" lead-id="{{$lead->id}}">NI Lead</a>

                  <a class="dropdown-item" href="#" lead-id="{{$lead->id}}">VI Lead</a>

               </div>

            </div>

         </div>

         <!--end card-body-->

      </div>

      <!--end card-->

      <div class="card">

         <div class="card-body">

         <button onclick="window.location.reload();" class="refresh-btn-option"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M13.5 2c-5.621 0-10.211 4.443-10.475 10h-3.025l5 6.625 5-6.625h-2.975c.257-3.351 3.06-6 6.475-6 3.584 0 6.5 2.916 6.5 6.5s-2.916 6.5-6.5 6.5c-1.863 0-3.542-.793-4.728-2.053l-2.427 3.216c1.877 1.754 4.389 2.837 7.155 2.837 5.79 0 10.5-4.71 10.5-10.5s-4.71-10.5-10.5-10.5z"/></svg></button>

            <div class="table-responsive">

               <table class="table table-striped mb-0 table my-table">

                  <tbody>

                     <tr>

                        <td>

                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone icon-dual">

                              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>

                           </svg>

                           &nbsp;<b>Landline</b> :

                        </td>

                        <td>

                           <a href="#" id="landlinenumber1" data-type="text" data-pk="{{$lead->id}}" data-title="Update Landline Number"

                              class="editable editable-click" style="">{{$lead->landlinenumber}}</a>

                        </td>

                     </tr>

                     <tr>

                        <td>

                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smartphone icon-dual">

                              <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>

                              <line x1="12" y1="18" x2="12.01" y2="18"></line>

                           </svg>

                           &nbsp;<b>Phone</b> :

                        </td>

                        <td>

                           <a href="#" id="mobilenumber1" data-type="text" data-pk="{{$lead->id}}" data-placement="right" data-placeholder="Required"

                              data-title="Update Mobile Number" class="editable editable-click editable-empty" style="">{{$lead->mobilenumber}}</a>

                        </td>

                     </tr>

                     <tr>

                        <td>

                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">

                              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>

                              <polyline points="22,6 12,13 2,6"></polyline>

                           </svg>

                           &nbsp;<b> Email </b> :

                        </td>

                        <td>

                           <a href="#" id="email1" data-type="email" data-pk="{{$lead->id}}" data-placement="right" data-title="Update Email"

                              class="editable editable-click" data-original-title="" title="">{{$lead->email}}</a>

                        </td>

                     </tr>

                     <tr>

                        <td>

                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user icon-dual">

                              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>

                              <circle cx="12" cy="7" r="4"></circle>

                           </svg>

                           &nbsp;<b> Lead Owner</b> :

                        </td>

                        <td>

                           <a href="#" id="lead-owner1" data-type="select" data-pk="{{$lead->id}}" data-placement="right" class="editable editable-click">

                           @if($lead->userAssign_id!=NULL)

                           {{App\User::where('id',$lead->userAssign_id)->first()->name}}

                           @endif

                           </a>

                        </td>

                     </tr>

                     <tr>

                        <td>

                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target">

                              <circle cx="12" cy="12" r="10"></circle>

                              <circle cx="12" cy="12" r="6"></circle>

                              <circle cx="12" cy="12" r="2"></circle>

                           </svg>

                           &nbsp;<b> Lead Source </b> :

                        </td>

                        <td>

                           <a href="#" id="leadsource1" data-type="select" data-pk="{{$lead->id}}" data-placement="right" class="editable editable-click">{{$lead->leadsource}}</a>

                        </td>

                     </tr>

                     <tr>

                        <td>

                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin icon-dual">

                              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>

                              <circle cx="12" cy="10" r="3"></circle>

                           </svg>

                           &nbsp;<b> Address </b> :

                        </td>

                        <td>

                           <div style="position:relative">

                              <a href="#" id="address1" data-type="address" data-pk="{{$lead->id}}" data-placeholder="Your comments here..."

                                 data-title="Enter comments" class="editable editable-click">{{$lead->address}}, {{$lead->town}}, {{$lead->country}}, {{$lead->postcode}}

                              </a>

                              <div class="show_address">

                              </div>

                           </div>

                        </td>

                     </tr>

                     <td>

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar icon-dual">

                           <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>

                           <line x1="16" y1="2" x2="16" y2="6"></line>

                           <line x1="8" y1="2" x2="8" y2="6"></line>

                           <line x1="3" y1="10" x2="21" y2="10"></line>

                        </svg>

                        &nbsp;<b> Created Date </b> :

                     </td>

                     <td><a href="#" id="inline-created-at" data-type="date" data-pk="{{$lead->id}}" data-value="0" data-source="/status"

                        data-title="Select status" class="editable editable-click" style="">{{date('F d,Y',strtotime($lead->created_at))}}</a></td>

                  </tbody>

               </table>

            </div>

         </div>

         <!--end card-body-->

      </div>

      <!--end card-->

      <!--end card-->

   </div>

   <!--end col-->

   <div class="col-lg-8">

      <div class="card">

         <div class="card-body">

            <!-- Nav tabs -->

            <ul class="nav nav-tabs" role="tablist">

               <li class="nav-item">

                  <a class="nav-link active" data-toggle="tab" href="#all" role="tab" aria-selected="false" id="all_fet" lead-id="{{$lead->id}}" user-id="{{auth()->user()->id}}">

                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">

                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>

                     </svg>

                     All

                  </a>

               </li>

               <li class="nav-item">

                  <a class="nav-link" data-toggle="tab" href="#home" role="tab" aria-selected="false">

                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square icon-dual">

                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>

                     </svg>

                     Notes

                  </a>

               </li>

               <li class="nav-item">

                  <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-selected="false">

                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">

                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>

                     </svg>

                     Call

                  </a>

               </li>

               <li class="nav-item">

                  <a class="nav-link get_schedule" data-toggle="tab" href="#settings" role="tab" aria-selected="true" data-id="{{$lead->user->id}}">

                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar icon-dual">

                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>

                        <line x1="16" y1="2" x2="16" y2="6"></line>

                        <line x1="8" y1="2" x2="8" y2="6"></line>

                        <line x1="3" y1="10" x2="21" y2="10"></line>

                     </svg>

                     Schedule Task

                  </a>

               </li>

               <li class="nav-item">

                  <a class="nav-link get_schedule" data-toggle="tab" href="#attachment" role="tab" aria-selected="true" data-id="{{$lead->user->id}}">

                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip icon-dual">

                        <path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path>

                     </svg>

                     Attachment

                  </a>

               </li>

               <li class="nav-item">

                  <a class="nav-link get_schedule" data-toggle="tab" href="#quotes" role="tab" aria-selected="true" data-id="{{$lead->user->id}}">

                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip icon-dual">

                        <path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path>

                     </svg>

                     Quotes

                  </a>

               </li>

            </ul>

            <!-- Tab panes -->

            <div class="tab-content">

               <div class="tab-pane p-3 active" id="all" role="tabpanel">

                  <!-- <div id="fet_all_all"></div> -->

                  <div id="_fetchAllData">

                     @foreach(App\Cmodel::where('lead_id',$lead->id)->orderBy('created_at','DESC')->get() as $led)

                     @if($led->notes)

                     <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast" id="deleteall{{$led->id}}">

                        <div class="toast-header">

                           <i class="mdi mdi-circle-slice-8 font-18 mr-1 text-info"></i>

                           <div class="mr-auto"><strong>Note : </strong>{{date('F d,Y - H:i A',strtotime($led->created_at))}}</div>

                           <small class="text-muted"></small>

                           <a href="javascript:void(0);" onclick="return noteRemoval('{{$led->note_id}}');"><span aria-hidden="true">×</span></a>

                        </div>

                        <div class="toast-body">

                           <div class="float-left">{{$led->notes}}</div>

                           <div class="float-right">{{$led->user->name}}</div>

                        </div>

                     </div>

                     @elseif($led->calls)

                     <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast" id="deleteall{{$led->id}}">

                        <div class="toast-header">

                           <i class="mdi mdi-circle-slice-8 font-18 mr-1 text-warning"></i>

                           <div class="mr-auto"><strong>Call : </strong>{{date('F d,Y - H:i A',strtotime($led->created_at))}}</div>

                           <small class="text-muted"></small>

                           <a href="javascript:void(0);" onclick="return callRemoval('{{$led->call_id}}');"><span aria-hidden="true">×</span></a>



                        </div>

                        <div class="toast-body">

                           <div class="call-body">

                              <div class="float-left">{{$led->calls}}</div>

                              <div class="float-right">{{$led->duration}}</div>

                           </div>

                        </div>

                     </div>

                     @endif

                     @endforeach

                     <!-- ALL  ATTACHMENT START ------>

                     <div id="attachment_file_alltab">

                        @foreach(App\Cmodel::where('lead_id',$lead->id)->orderBy('created_at','DESC')->get() as $att)

                        @if($att->attachment_file!=NULL)

                        <div class="toast fade show mt-3 jpg">

                           <div class="toast-header">

                              <i class="mdi mdi-circle-slice-8 font-18 mr-1 text-warning"></i>{{date('F d,Y - H:i A',strtotime($att->created_at))}}

                              <span class="mr-auto">&nbsp;&nbsp;{{$att->created_at->diffForHumans()}}</span>

                              <small class="text-muted">{{$att->user->name}}</small>



                              <a href="javascript:void(0);" onclick="return deleteAttachment('{{$att->id}}');"><span aria-hidden="true">×</span></a>



                           </div>

                           <div class="toast-body">

                              @php($formats = strtolower($att->format))

                              @if($formats == 'jpg')

                              <img src="{{asset('public/attachment/'.$att->attachment_file)}}" width="110" class="zoom_image" onclick="modal_show(this)"/>

                              @elseif($formats == 'png')

                              <img src="{{asset('public/attachment/'.$att->attachment_file)}}" width="110" class="zoom_image" onclick="modal_show(this)"/>

                              @elseif($formats == 'pdf')

                              <a href="{{asset('public/attachment/'.$att->attachment_file)}}" target="_blank">{{$att->filename}}</a>

                              @elseif($formats == 'docx')

                              <a href="{{asset('public/attachment/'.$att->attachment_file)}}" target="_blank">{{$att->filename}}</a>

                              @elseif($formats == 'txt')

                              <a href="{{asset('public/attachment/'.$att->attachment_file)}}" target="_blank">{{$att->filename}}</a>

                              @endif

                           </div>

                        </div>

                        @endif

                        @endforeach

                     </div>

                     <!-- ALL  ATTACHMENT END ------>

                     <!-- SCHEDUE TASK START ALL ------>

                     @foreach($allsc = App\Scheduletask::latest()->where('lead_id',$lead->id)->orderByRaw("FIELD(id,'upcoming') ASC")->orderBy('status','DESC')->paginate(6) as $scheduletask)

                     <div id="all_schedule">

                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast" id="deleteall34">

                           <div class="toast-header">

                              @if($scheduletask->status =='completed')

                              <i class="mdi mdi-circle-slice-8 font-18 mr-1 text-success">

                              @endif

                              </i> @if($scheduletask->status =='completed') <span class="badge badge-soft-success becomegreen cla{{$scheduletask->id}}">{{$scheduletask->status}}</span> @elseif($scheduletask->status =='overdue') <span class="badge badge-soft-danger cla{{$scheduletask->id}} overdue">{{$scheduletask->status}}</span> @else <span class="badge badge-soft-danger cla{{$scheduletask->id}}">{{$scheduletask->status}}</span> @endif

                              <span class="mr-auto"><label id="runtime" class="mt-3"></label>{{$scheduletask->created_at->diffForHumans()}}</span>

                              <small class="text-muted">{{$scheduletask->user->name}}</small>

                              <a href="javascript:void(0);" onclick="return deleteScheduleTask('{{$scheduletask->id}}');"><span aria-hidden="true">×</span></a>

                           </div>

                           <strong style="position: relative;top: 5px;left: 12px;">{{$scheduletask->title}}</strong>

                           <div class="toast-body">

                              <div class="table-responsive">

                                 <table class="table table-striped mb-0">

                                    <tbody>

                                       <tr>

                                          <td>

                                             <div><i class="ti-calendar"></i>&nbsp;{{$scheduletask->date}}</div>

                                             <div><i class="ti-alarm-clock"></i>&nbsp;{{date("g:i a", strtotime($scheduletask->date))}}</div>

                                          </td>

                                          <td>

                                             <div>@if($scheduletask->type == 'call') <i class="ti-mobile"></i> {{$scheduletask->type}} @elseif($scheduletask->type == 'email') <i class="ti-email"></i> {{$scheduletask->type}} @else <i class="fas fa-user-clock"></i> {{$scheduletask->type}} @endif</div>

                                             <div>{{$scheduletask->note}}</div>

                                          </td>

                                          <td> &nbsp; </td>

                                          <td>

                                             @if($scheduletask->status == 'completed') <button type="button" class="btn btn-dark waves-effect waves-light btn-sm float-right status_complete disab"

                                                disabled data-id="{{$scheduletask->id}}">Completed</button> @else <button type="button" class="btn btn-dark waves-effect waves-light btn-sm float-right status_complete" data-id="{{$scheduletask->id}}">Completed</button> @endif

                                          </td>

                                       </tr>

                                    </tbody>

                                 </table>

                                 <!--end /table-->

                              </div>

                           </div>

                        </div>

                     </div>

                     @endforeach

                     <!-- SCHEDUE TASK START ENDING ALL------>

                     <!-- QUOTE GEN SECTION START ALL------>

                     <table class="table">

                        <tbody>

                           @foreach(App\LeadQuotation::where('lead_id',$lead->id)->latest()->get() as $qtn)

                           <tr>

                              <th style="text-transform: capitalize">

                                 @php($leadownerid=App\Lead::where('id',$lead->id)->first()->userAssign_id)

                                 {{App\User::where('id',$leadownerid)->first()->name}}

                              </th>

                              <th>

                                 @if($qtn->cus_email!=NULL)

                                 {{$qtn->cus_email}}

                                 @endif

                              </th>

                              <th></th>

                              <td>{{$qtn->created_at->diffForHumans()}}</td>

                              <td> <a href="{{URL::to('pdfgenerate/'.$qtn->id)}}" target="_blank"> <i class="fas fa-file-pdf"></i> PDF</a> </td>

                              <td> <a href="{{URL::to('/generate-quotation/step1/'.$lead->id.'/'.$qtn->main_uniqid)}}" target="_blank"> <i class="far fa-edit"></i> </a> </td>

                              <td>

                                 <a onclick="return DeleteQuote({{$qtn->id}});"><span aria-hidden="true" style="font-size: 17px;cursor: pointer;">×</span></a>

                              </td>

                           </tr>

                           @endforeach

                        </tbody>

                     </table>

                     <!-- QUOTE GEN SECTION START ALL------>

                  </div>

               </div>

               <script type="text/javascript">

                  // _showNotes();



                  function _showALl(){



                    // alert('Notes done');



                    $('#_fetchAllData').load('{{URL::to("/_fetchAll/".$lead->id)}}')



                  }



               </script>

               <!-- ==========================================NOTES========================================== -->

               <div class="tab-pane p-3" id="home" role="tabpanel">

                  <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">

                     <!-- Position it -->

                     <div style="position: absolute; top: 0; left: 0" class="noteinterface">

                        <!-- Then put toasts within -->

                        <div class="toast fade show new-note" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">

                           <div class="toast-header">

                              <i class="mdi mdi-circle-slice-8 font-18 mr-1 text-warning"></i>

                              <strong class="mr-auto">New Note</strong>

                           </div>

                           <div class="toast-body">

                              <form action="{{route('note.store')}}" method="post">

                                 @csrf

                                 <input type="hidden" name="lead_id" value="{{$lead->id}}" id="note_lead_id"/>

                                 <input type="hidden" name="user_id" value="{{auth()->user()->id}}" id="note_user_id"/>

                                 <textarea class="form-control" rows="3" id="note_text_area" name="message" placeholder="Your Notes.."></textarea>

                                 <button class="categories btn btn-blue btn-square waves-effect waves-light mt-2 btn-sm create-note-button float-right mb-2" type="submit" id="add-note">Add Note</button>

                              </form>

                           </div>

                        </div>

                        <!--end toast-->

                     </div>

                  </div>

                  <!-- <div aria-live="polite" aria-atomic="true" style="position: relative;">

                     <div class="note_pre">



                     </div>



                     </div> -->

                  <!-- Then put toasts within -->

                  <!-- <div class="note_all"> -->

                  <div class="" id="_showNotes">

                     @foreach($notes = App\Note::latest()->where('lead_id',$lead->id)->get() as $lea)

                     <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 100px;" id="delenotes{{$lea->id}}">

                        <!-- Position it -->

                        <div style="position: absolute; top: 0; left: 0" class="noteinterface">

                           <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">

                              <div class="toast-header">

                                 <i class="mdi mdi-circle-slice-8 font-18 mr-1 text-warning"></i>

                                 <strong class="mr-auto">{{date('F d,Y - H:i A',strtotime($lea->created_at))}}</strong>

                                 <small class="text-muted">{{auth()->user()->name}}</small>

                                 @if(Auth::user()->isAdmin() == 1)

                                 <a href="javascript:void(0);" onclick="return noteRemoval('{{$lea->id}}');"><span aria-hidden="true">×</span></a>



                                 @endif

                              </div>

                              <div class="toast-body">

                                 {{$lea->message}}

                              </div>

                           </div>

                           <!--end toast-->

                        </div>

                     </div>

                     @endforeach

                  </div>

                  <script type="text/javascript">

                     // _showNotes();



                     function _showNotes(){



                       // alert('Notes done');



                       _showALl();



                       $('#_showNotes').load('{{URL::to("/_fetchNotes/".$lead->id)}}')



                     }



                  </script>

               </div>

               <!-- ==========================================NOTES========================================== -->

               <!-- ==========================================CALL========================================== -->

               <div class="tab-pane p-3" id="profile" role="tabpanel">

                  <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;margin-bottom:25px">

                     <!-- Position it -->

                     <div style="position: absolute; top: 0; left: 0" class="noteinterface">

                        <!-- Then put toasts within -->

                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast" id="profileclose">

                           <div class="toast-header">

                              <i class="mdi mdi-circle-slice-8 font-18 mr-1 text-warning"></i>

                              <strong class="mr-auto"><label id="runtime" class="mt-3">00:00:00</label></strong>

                              <small class="text-muted"></small>

                              <button type="button" class="ml-2 mb-1 close" id="closecallpopup">

                              <span aria-hidden="true">×</span>

                              </button>

                           </div>

                           <div class="toast-body" id="closefrm">

                              <form action="{{route('call.store')}}" method="post">

                                 @csrf

                                 <input type="hidden" name="lead_id" value="{{$lead->id}}" id="lead_id"/>

                                 <input type="hidden" name="user_id" value="{{auth()->user()->id}}" id="user_id"/>

                                 <textarea class="form-control" rows="3" id="call_note_text" name="call" placeholder="Your Notes.." disabled></textarea>

                                 <div class="timer"><button class="categories btn btn-danger btn-square waves-effect waves-light mt-2 btn-sm create-note-button float-right mb-2" type="button" id="stopcall">Stop Call</button></div>

                                 <div class="float-left all_tags"><span>Not receive</span> <span>Call later</span></div>

                                 <button class="categories btn btn-blue btn-square waves-effect waves-light mt-2 btn-sm create-note-button float-right mb-2" type="submit" id="startcall">Start Call</button>

                              </form>

                           </div>

                        </div>

                        <!--end toast-->

                     </div>

                  </div>

                  <!-- <div aria-live="polite" aria-atomic="true" style="position: relative;">

                     <div class="pre">



                     </div>



                     </div> -->

                  <div class="all"></div>

                  <div class="" id="_showCall">

                     @foreach($pagi = App\Call::latest()->where('lead_id',$lead->id)->get() as $call)

                     <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 100px;" id="deleteall{{$call->id}}">

                        <!-- Position it -->

                        <div style="position: absolute; top: 0; left: 0" class="prepend-call">

                           <!-- Then put toasts within -->

                           <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">

                              <div class="toast-header">

                                 <i class="mdi mdi-circle-slice-8 font-18 mr-1 text-warning"></i>

                                 <strong class="mr-auto">{{date('F d,Y - H:i A',strtotime($call->created_at))}}</strong>

                                 <small class="text-muted">{{$call->user->name}}</small>

                                 <a href="javascript:void(0);" onclick="return callRemoval('{{$call->id}}');"><span aria-hidden="true">×</span></a>



                              </div>

                              <div class="toast-body">

                                 <div class="call-body">

                                    <div class="float-left">{{$call->call_status}}</div>

                                    <div class="float-right">{{$call->duration}}</div>

                                 </div>

                              </div>

                           </div>

                           <!--end toast-->

                        </div>

                     </div>

                     @endforeach

                  </div>

               </div>

               <script type="text/javascript">

                  // _showCall();



                  function _showCall(){



                    // alert('Call Done');



                    _showALl();



                    $('#_showCall').load('{{URL::to("/_fetchCall/".$lead->id)}}')



                  }



               </script>

               <!-- ==========================================CALL========================================== -->

               <!-- ==========================================MEETING========================================== -->

               <div class="tab-pane p-3" id="settings" role="tabpanel">

                  <div aria-live="polite" aria-atomic="true" style="position: relative;margin-bottom:25px">

                     <!-- Position it -->

                     <div class="noteinterface">

                        <!-- Then put toasts within -->

                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast" id="scdfrm">

                           <div class="toast-header">

                              <i class="mdi mdi-circle-slice-8 font-18 mr-1 text-warning"></i>

                              <strong class="mr-auto"><label id="runtime" class="mt-3"></label></strong>

                              <small class="text-muted"></small>

                              <button type="button" class="ml-2 mb-1 close" id="scdbtn">

                              <span aria-hidden="true">×</span>

                              </button>

                           </div>

                           <div class="toast-body">

                              <form action="{{route('scheduletask.store')}}" method="post" onsubmit="return createSchedule()" id="createSchedule">

                                 @csrf

                                 <input type="hidden" name="lead_id" value="{{$lead->id}}" id="lead_id">

                                 <input type="hidden" name="user_id" value="{{auth()->user()->id}}" id="user_id">

                                 <input type="hidden" name="assigned_user_id" value="{{App\User::where('id',$lead->userAssign_id)->first()->id}}">

                                 <div class="form-group">

                                    <div class="schedule_meeting col-sm-12">

                                       <div class="custom-control custom-radio">

                                          <input type="radio" id="customRadio5" checked="" name="type" class="custom-control-input" value="meeting">

                                          <label class="custom-control-label" for="customRadio5">Meeting</label>

                                       </div>

                                    </div>

                                 </div>

                                 <div class="row form-group">

                                    <div class="col-sm-1">

                                       <label for="example-time-input" class="col-form-label text-right">Title</label>

                                    </div>

                                    <div class="col-sm-5">

                                       <input class="form-control @error('title') is-invalid @enderror" type="text" id="example-time-input" name="title" required>

                                    </div>

                                    <div class="col-sm-1">

                                       <label for="example-time-input" class="col-form-label text-right">Date</label>

                                    </div>

                                    <div class="col-sm-5">

                                       <input class="form-control" type="text" id="txtdate" name="date" required>

                                    </div>

                                 </div>

                                 <div class="row form-group">

                                    <div class="col-sm-1">Note</div>

                                    <div class="col-sm-11">

                                       <textarea name="note" class="form-control" required></textarea>

                                    </div>

                                 </div>

                                 <div class="form-group text-center">

                                    <button type="submit" class="btn btn-gradient-primary waves-effect waves-light">Submit</button>

                                 </div>

                              </form>

                           </div>

                        </div>

                        <!--end toast-->

                     </div>

                  </div>

                  <!-- SCHEDUE TASK START ------>

                  <!-- <button onClick="window.location.reload();" style="position: relative;bottom: 10px;border: 1px solid #ddd;background-color: #506ee4;"><i class="fas fa-sync" style="color: #fff;"></i> </button> -->

                  <div class="" id="_showMeetings">

                     @foreach($allsc = App\Scheduletask::latest()->where('lead_id',$lead->id)->orderByRaw("FIELD(id,'upcoming') ASC")->orderBy('status','DESC')->get() as $scheduletask)

                     <div id="all_schedule">

                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast" id="deleteall34">

                           <div class="toast-header">

                              @if($scheduletask->status =='completed')

                              <i class="mdi mdi-circle-slice-8 font-18 mr-1 text-success">

                              @endif

                              </i> @if($scheduletask->status =='completed') <span class="badge badge-soft-success becomegreen cla{{$scheduletask->id}}">{{$scheduletask->status}}</span> @elseif($scheduletask->status =='overdue') <span class="badge badge-soft-danger cla{{$scheduletask->id}} overdue">{{$scheduletask->status}}</span> @else <span class="badge badge-soft-danger cla{{$scheduletask->id}}">{{$scheduletask->status}}</span> @endif

                              <span class="mr-auto"><label id="runtime" class="mt-3"></label>{{$scheduletask->created_at->diffForHumans()}}</span>

                              <small class="text-muted">{{$scheduletask->user->name}}</small>

                              <a href="javascript:void(0);" onclick="return deleteScheduleTask('{{$scheduletask->id}}');"><span aria-hidden="true">×</span></a>



                           </div>

                           <strong style="position: relative;top: 5px;left: 12px;">{{$scheduletask->title}}</strong>

                           <div class="toast-body">

                              <div class="table-responsive">

                                 <table class="table table-striped mb-0">

                                    <tbody>

                                       <tr>

                                          <td>

                                             <div><i class="ti-calendar"></i>&nbsp;{{$scheduletask->date}}</div>

                                             <div><i class="ti-alarm-clock"></i>&nbsp;{{date("g:i a", strtotime($scheduletask->date))}}</div>

                                          </td>

                                          <td>

                                             <div>@if($scheduletask->type == 'call') <i class="ti-mobile"></i> {{$scheduletask->type}} @elseif($scheduletask->type == 'email') <i class="ti-email"></i> {{$scheduletask->type}} @else <i class="fas fa-user-clock"></i> {{$scheduletask->type}} @endif</div>

                                             <div>{{$scheduletask->note}}</div>

                                          </td>

                                          <td> &nbsp; </td>

                                          <td>

                                             @if($scheduletask->status == 'completed') <button type="button" class="btn btn-dark waves-effect waves-light btn-sm float-right status_complete disab"

                                                disabled data-id="{{$scheduletask->id}}">Completed</button> @else <button type="button" class="btn btn-dark waves-effect waves-light btn-sm float-right status_complete" data-id="{{$scheduletask->id}}">Completed</button> @endif

                                          </td>

                                       </tr>

                                    </tbody>

                                 </table>

                                 <!--end /table-->

                              </div>

                           </div>

                        </div>

                     </div>

                     @endforeach

                  </div>

                  <script type="text/javascript">

                     // _showMeetings();



                     function _showMeetings(){



                       _showALl();



                       $('#_showMeetings').load('{{URL::to("/_fetchMeeting/".$lead->id)}}')



                     }



                  </script>

                  <!-- SCHEDUE TASK END ------>

               </div>

               <!-- ==========================================MEETING========================================== -->

               <!-- ==========================================ATTACHMENT========================================== -->

               <div class="tab-pane p-3" id="attachment" role="tabpanel">

                  <form method="post" id="saveForm" enctype="multipart/form-data">

                     @csrf

                     <input type="hidden" value="{{$lead->id}}" name="lead_id"/>

                     <input type="hidden" value="{{auth()->user()->id}}" name="user_id"/>

                     <input type="file" name="attachment_file" id="input-file-now" class="dropify">

                     <button type="button" class="btn btn-primary btn-block" id="saveImage">save</button>

                  </form>

                  <!-- <div id="attachment_file"></div> -->

                  <!-- SHOW ATTACHMENT DIV -->

                  <div class="" id="_showAttachment">

                     @foreach(App\Cmodel::where('lead_id',$lead->id)->orderBy('created_at','DESC')->get() as $attach)

                     @if($attach->attachment_file!=NULL)

                     <div class="toast fade show mt-3 jpg">

                        <div class="toast-header">

                           <i class="mdi mdi-circle-slice-8 font-18 mr-1 text-warning"></i>{{date('F d,Y - H:i A',strtotime($attach->created_at))}}

                           <span class="mr-auto">&nbsp;&nbsp;{{$attach->created_at->diffForHumans()}}</span>

                           <small class="text-muted">{{$attach->user->name}}</small>



                           <a href="javascript:void(0);" onclick="return deleteAttachment('{{$attach->id}}');"><span aria-hidden="true">×</span></a>



                        </div>

                        <div class="toast-body">

                           @php($formats = strtolower($attach->format))

                           @if($formats == 'jpg')

                           <img src="{{asset('public/attachment/'.$attach->attachment_file)}}" width="110" class="zoom_image" onclick="modal_show(this)"/>

                           @elseif($formats == 'png')

                           <img src="{{asset('public/attachment/'.$attach->attachment_file)}}" width="110" class="zoom_image" onclick="modal_show(this)"/>

                           @elseif($formats == 'pdf')

                           <a href="{{asset('public/attachment/'.$attach->attachment_file)}}" target="_blank">{{$attach->filename}}</a>

                           @elseif($formats == 'docx')

                           <a href="{{asset('public/attachment/'.$attach->attachment_file)}}" target="_blank">{{$attach->filename}}</a>

                           @elseif($formats == 'txt')

                           <a href="{{asset('public/attachment/'.$attach->attachment_file)}}" target="_blank">{{$attach->filename}}</a>

                           @endif

                        </div>

                     </div>

                     @endif

                     @endforeach

                  </div>

                  <script type="text/javascript">

                     function _showAttachment(){



                       _showALl();



                       $('#_showAttachment').load('{{URL::to("/_fetchAttachments/".$lead->id)}}')



                     }



                  </script>

               </div>

               <!-- ==========================================ATTACHMENT========================================== -->

               <!-- QUOTES -->

               <div class="tab-pane p-3" id="quotes" role="tabpanel">

                  <table class="table">

                     <!-- <thead>

                        <tr>







                          <th scope="col"></th>















                          <th scope="col">#</th>







                          <th scope="col">First</th>







                          <th scope="col">Last</th>







                          <th scope="col">Handle</th>







                        </tr>







                        </thead> -->

                     <tbody>

                        @foreach(App\LeadQuotation::where('lead_id',$lead->id)->latest()->get() as $qtn)

                        <tr>

                           <th style="text-transform: capitalize">{{$qtn->cus_firstname}} {{$qtn->cus_surname}}</th>

                           <th>

                              @if($qtn->cus_email!=NULL)

                              {{$qtn->cus_email}}

                              @endif

                           </th>

                           <th></th>

                           <td>{{$qtn->created_at->diffForHumans()}}</td>

                           <td> <a href="{{URL::to('pdfgenerate/'.$qtn->id)}}" target="_blank"> <i class="fas fa-file-pdf"></i> PDF</a> </td>

                           <td> <a href="{{URL::to('/generate-quotation/step1/'.$lead->id.'/'.$qtn->main_uniqid)}}" target="_blank"> <i class="far fa-edit"></i> </a> </td>

                           <td>

                              <a onclick="return DeleteQuote({{$qtn->id}});"><span aria-hidden="true" style="font-size: 17px;cursor: pointer;">×</span></a>

                           </td>

                        </tr>

                        @endforeach

                     </tbody>

                  </table>

               </div>

               <!-- QUOTES -->

            </div>

         </div>

      </div>

      <!--end card-body-->

   </div>

</div>

<!--end col-->

<!--  Modal content for the above example -->

<div class="modal modal-rightbar fade" tabindex="-1" role="dialog" aria-labelledby="MetricaRightbar" aria-hidden="true">

   <div class="modal-dialog modal-lg" role="document">

      <div class="modal-content">

         <div class="modal-header">

            <h5 class="modal-title mt-0" id="MetricaRightbar">Appearance</h5>

            <button type="button" class="btn btn-sm btn-soft-primary btn-circle btn-square" data-dismiss="modal" aria-hidden="true"><i class="mdi mdi-close"></i></button>

         </div>

         <div class="modal-body">

            <!-- Nav tabs -->

            <ul class="nav nav-pills nav-justified mt-2 mb-4" role="tablist">

               <li class="nav-item waves-effect waves-light">

                  <a class="nav-link active" data-toggle="tab" href="#ActivityTab" role="tab">Activity</a>

               </li>

               <li class="nav-item waves-effect waves-light">

                  <a class="nav-link" data-toggle="tab" href="#TasksTab" role="tab">Tasks</a>

               </li>

               <li class="nav-item waves-effect waves-light">

                  <a class="nav-link" data-toggle="tab" href="#SettingsTab" role="tab">Settings</a>

               </li>

            </ul>

            <!-- Tab panes -->

            <div class="tab-content">

               <div class="tab-pane active " id="ActivityTab" role="tabpanel">

                  <div class="bg-light mx-n3">

                     <img src="../assets/images/small/img-1.gif" alt="" class="d-block mx-auto my-4" height="180">

                  </div>

                  <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 657px;">

                     <div class="slimscroll scroll-rightbar" style="overflow: hidden; width: auto; height: 657px;">

                        <div class="activity">

                           <div class="activity-info">

                              <div class="icon-info-activity">

                                 <i class="mdi mdi-checkbox-marked-circle-outline bg-soft-success"></i>

                              </div>

                              <div class="activity-info-text mb-2">

                                 <div class="mb-1">

                                    <small class="text-muted d-block mb-1">10 Min ago</small>

                                    <a href="#" class="m-0 w-75">Task finished</a>

                                 </div>

                                 <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>

                              </div>

                           </div>

                           <div class="activity-info">

                              <div class="icon-info-activity">

                                 <i class="mdi mdi-timer-off bg-soft-pink"></i>

                              </div>

                              <div class="activity-info-text mb-2">

                                 <div class="mb-1">

                                    <small class="text-muted d-block mb-1">50 Min ago</small>

                                    <a href="#" class="m-0 w-75">Task Overdue</a>

                                 </div>

                                 <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>

                                 <span class="badge badge-soft-secondary">Design</span>

                                 <span class="badge badge-soft-secondary">HTML</span>

                              </div>

                           </div>

                           <div class="activity-info">

                              <div class="icon-info-activity">

                                 <i class="mdi mdi-alert-decagram bg-soft-purple"></i>

                              </div>

                              <div class="activity-info-text mb-2">

                                 <div class="mb-1">

                                    <small class="text-muted d-block mb-1">10 hours ago</small>

                                    <a href="#" class="m-0 w-75">New Task</a>

                                 </div>

                                 <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>

                              </div>

                           </div>

                           <div class="activity-info">

                              <div class="icon-info-activity">

                                 <i class="mdi mdi-clipboard-alert bg-soft-warning"></i>

                              </div>

                              <div class="activity-info-text mb-2">

                                 <div class="mb-1">

                                    <small class="text-muted d-block mb-1">yesterday</small>

                                    <a href="#" class="m-0 w-75">New Comment</a>

                                 </div>

                                 <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>

                              </div>

                           </div>

                           <div class="activity-info">

                              <div class="icon-info-activity">

                                 <i class="mdi mdi-clipboard-alert bg-soft-secondary"></i>

                              </div>

                              <div class="activity-info-text mb-2">

                                 <div class="mb-1">

                                    <small class="text-muted d-block mb-1">01 feb 2020</small>

                                    <a href="#" class="m-0 w-75">New Lead Meting</a>

                                 </div>

                                 <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>

                              </div>

                           </div>

                           <div class="activity-info">

                              <div class="icon-info-activity">

                                 <i class="mdi mdi-checkbox-marked-circle-outline bg-soft-success"></i>

                              </div>

                              <div class="activity-info-text mb-2">

                                 <div class="mb-1">

                                    <small class="text-muted d-block mb-1">26 jan 2020</small>

                                    <a href="#" class="m-0 w-75">Task finished</a>

                                 </div>

                                 <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>

                              </div>

                           </div>

                        </div>

                        <!--end activity-->

                     </div>

                     <div class="slimScrollBar" style="background: rgba(162, 177, 208, 0.13); width: 7px; position: absolute; top: 0px; opacity: 1; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>

                     <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>

                  </div>

                  <!--end activity-scroll-->

               </div>

               <!--end tab-pane-->

               <div class="tab-pane" id="TasksTab" role="tabpanel">

                  <div class="m-0" style="position: relative;">

                     <div id="rightbar_chart" class="apex-charts" style="min-height: 250px;">

                        <div id="apexcharts790e3d" class="apexcharts-canvas apexcharts790e3d" style="width: 0px; height: 250px;">

                           <svg id="SvgjsSvg1009" width="0" height="250" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">

                              <g id="SvgjsG1011" class="apexcharts-inner apexcharts-graphical">

                                 <defs id="SvgjsDefs1010"></defs>

                              </g>

                           </svg>

                           <div class="apexcharts-legend"></div>

                        </div>

                     </div>

                     <div class="resize-triggers">

                        <div class="expand-trigger">

                           <div style="width: 1px; height: 1px;"></div>

                        </div>

                        <div class="contract-trigger"></div>

                     </div>

                  </div>

                  <div class="text-center mt-n2 mb-2">

                     <button type="button" class="btn btn-soft-primary">Create Project</button>

                     <button type="button" class="btn btn-soft-primary">Create Task</button>

                  </div>

                  <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 657px;">

                     <div class="slimscroll scroll-rightbar" style="overflow: hidden; width: auto; height: 657px;">

                        <div class="p-2">

                           <div class="media mb-3">

                              <img src="../assets/images/widgets/project3.jpg" alt="" class="thumb-lg rounded-circle">

                              <div class="media-body align-self-center text-truncate ml-3">

                                 <p class="text-success font-weight-semibold mb-0 font-14">Project</p>

                                 <h4 class="mt-0 mb-0 font-weight-semibold text-dark font-18">Payment App</h4>

                              </div>

                              <!--end media-body-->

                           </div>

                           <span><b>Deadline:</b> 02 June 2020</span>

                           <a href="javascript: void(0);" class="d-block mt-3">

                              <p class="text-muted mb-0">Complete Tasks<span class="float-right">75%</span></p>

                              <div class="progress mt-2" style="height: 4px;">

                                 <div class="progress-bar bg-secondary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>

                              </div>

                           </a>

                        </div>

                        <hr class="hr-dashed">

                     </div>

                     <div class="slimScrollBar" style="background: rgba(162, 177, 208, 0.13); width: 7px; position: absolute; top: 0px; opacity: 1; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>

                     <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>

                  </div>

               </div>

               <!--end tab-pane-->

               <div class="tab-pane" id="SettingsTab" role="tabpanel">

                  <div class="p-1 bg-light mx-n3">

                     <h6 class="px-3">Account Settings</h6>

                  </div>

                  <div class="p-2 text-left mt-3">

                     <div class="custom-control custom-switch switch-primary mb-3">

                        <input type="checkbox" class="custom-control-input" id="settings-switch1" checked="">

                        <label class="custom-control-label" for="settings-switch1">Auto updates</label>

                     </div>

                     <div class="custom-control custom-switch switch-primary mb-3">

                        <input type="checkbox" class="custom-control-input" id="settings-switch2">

                        <label class="custom-control-label" for="settings-switch2">Location Permission</label>

                     </div>

                     <div class="custom-control custom-switch switch-primary mb-3">

                        <input type="checkbox" class="custom-control-input" id="settings-switch3" checked="">

                        <label class="custom-control-label" for="settings-switch3">Show offline Contacts</label>

                     </div>

                  </div>

                  <div class="p-1 bg-light mx-n3">

                     <h6 class="px-3">General Settings</h6>

                  </div>

                  <div class="p-2 text-left mt-3">

                     <div class="custom-control custom-switch switch-primary mb-3">

                        <input type="checkbox" class="custom-control-input" id="settings-switch4" checked="">

                        <label class="custom-control-label" for="settings-switch4">Show me Online</label>

                     </div>

                     <div class="custom-control custom-switch switch-primary mb-3">

                        <input type="checkbox" class="custom-control-input" id="settings-switch5">

                        <label class="custom-control-label" for="settings-switch5">Status visible to all</label>

                     </div>

                     <div class="custom-control custom-switch switch-primary mb-3">

                        <input type="checkbox" class="custom-control-input" id="settings-switch6" checked="">

                        <label class="custom-control-label" for="settings-switch6">Notifications Popup</label>

                     </div>

                  </div>

               </div>

               <!--end tab-pane-->

            </div>

            <!--end tab-content-->

         </div>

         <!--end modal-body-->

      </div>

      <!-- /.modal-content -->

   </div>

   <!-- /.modal-dialog -->

</div>

<!-- /.modal -->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-modal="true" id="editlead">

   <div class="modal-dialog modal-lg">

      <div class="modal-content">

         <div class="modal-header">

            <h5 class="modal-title mt-0" id="myLargeModalLabel">Add New Lead</h5>

            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

         </div>

         <div class="modal-body">

            <form>

               <div class="row">

                  <div class="col-md-6">

                     <div class="form-group">

                        <label for="LeadName">Name</label>

                        <input type="text" class="form-control" id="LeadName" required="">

                     </div>

                  </div>

                  <div class="col-md-6">

                     <div class="form-group">

                        <label for="LeadEmail">Email</label>

                        <input type="email" class="form-control" id="LeadEmail" required="">

                     </div>

                  </div>

               </div>

               <div class="row">

                  <div class="col-md-6">

                     <div class="form-group">

                        <label for="PhoneNo">Phone No</label>

                        <input type="text" class="form-control" id="PhoneNo" required="">

                     </div>

                  </div>

                  <div class="col-md-6">

                     <div class="form-group">

                        <label for="status-select" class="mr-2">Country</label>

                        <select class="custom-select" id="status-select">

                           <option selected="">Select</option>

                           <option value="1">India</option>

                           <option value="2">USA</option>

                           <option value="3">Japan</option>

                           <option value="4">China</option>

                           <option value="5">Germany</option>

                        </select>

                     </div>

                  </div>

               </div>

               <button type="button" class="btn btn-sm btn-primary">Save</button>

               <button type="button" class="btn btn-sm btn-danger">Delete</button>

            </form>

         </div>

      </div>

      <!-- /.modal-content -->

   </div>

   <!-- /.modal-dialog -->

</div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-modal="true" id="deal">

   <div class="modal-dialog modal-lg">

      <div class="modal-content">

         <div class="modal-header">

            <h5 class="modal-title mt-0" id="myLargeModalLabel">Add Deal</h5>

            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

         </div>

         <div class="modal-body">

            <form style="width: 400px;margin: auto;" method="post" action="{{route('task.store')}}">

               @csrf

               @foreach(App\Status::all() as $key => $l)

               @if($key == 0)

               <input type="hidden" name="status" value="{{$l->id}}"/>

               @endif

               @endforeach

               <input type="hidden" name="lead_id" value="{{$lead->id}}"/>
               <input type="hidden" name="userAssign_id" value="{{$lead->userAssign_id}}"/>

               <div class="row">

                  <div class="col-md-12">

                     <div class="form-group">

                        <label for="LeadName">Title</label>

                        <input type="text" class="form-control" id="title" name="title" required="">

                     </div>

                  </div>

               </div>

               <div class="row">

                  <div class="col-md-12">

                     <div class="form-group">

                        <label for="LeadName">Price</label>

                        <input type="text" class="form-control" id="amount" name="amount" required="">

                     </div>

                  </div>

               </div>

               <div class="row">

                  <div class="col-md-12">

                     <div class="form-group">

                        <label for="LeadName">Description</label>

                        <textarea class="form-control" id="lead-status" required="" name="description"></textarea>

                     </div>

                  </div>

               </div>

               <button type="submit" class="btn btn-sm btn-primary">Create</button>

               <button type="button" class="btn btn-sm btn-danger">Cancel</button>

            </form>

         </div>

      </div>

      <!-- /.modal-content -->

   </div>

   <!-- /.modal-dialog -->

</div>

</div><!--end row-->

@endsection

@section('script')

<script>

   $(document).ready(function(){







     $('#closecallpopup').on('click',function(e){







       e.preventDefault();







       $('#profileclose').hide();







     });







   });







</script>

<script>

   $(document).ready(function(){

     $('#scdbtn').on('click',function(e){

       e.preventDefault();

       $('#scdfrm').hide();

     });

   });

</script>

<script type="text/javascript">

   function Deletelead(data){

     $.ajax({

       type:'get',

       url:'{{URL::to("/scheduletask/delete/")}}'+'/'+data,

       success:function(data){

       },

       error:function(data){

         alert(data)

       }

     })

     return false;

   }

</script>

<script type="text/javascript">

   function DeleteQuote(id){

     if(id){

          $.ajax({

             type:'get',

             url:'{{URL::to("/quotation/delete/")}}'+'/'+id,

             success:function(data){

                if(data == 'success'){

                 // swal("Removeed!", "Removed Successfully!", "success")



                 window.location.reload(true);

                }

             },

             error:function(data){

               alert(data)

             }

           });

     }

     return false;

   }

</script>





<script type="text/javascript">

  function noteRemoval(id){

    // alert(name)

    $.ajax({

       type:'get',

       url:'{{URL::to("/XXdeletenote/")}}'+'/'+id,

       success:function(data){

          if(data == 'success'){

           _showNotes()

            _showALl();

         }else{



         }

       },

       error:function(data){

         alert(data)

       }

     });



    return false;

  }

</script>







<script type="text/javascript">

  function callRemoval(id){

    $.ajax({

       type:'get',

       url:'{{URL::to("/XXdeletecall/")}}'+'/'+id,

       success:function(data){

          if(data == 'success'){

           _showCall()

            _showALl();

         }else{



         }

       },

       error:function(data){

         alert(data)

       }

     });



    return false;

  }

</script>





<!-- <script type="text/javascript">

  function deleteScheduleTask(id){

    $.ajax({

       type:'get',

       url:'{{URL::to("/XXdeletedeleteScheduleTask/")}}'+'/'+id,

       success:function(data){

          if(data == 'success'){

           _showMeetings()

            _showALl();

         }else{



         }

       },

       error:function(data){

         alert(data)

       }

     });



    return false;

  }

</script> -->



<script type="text/javascript">

  function deleteScheduleTask(id){

    $.ajax({

       type:'get',

       url:'{{URL::to("/XXdeletedeleteScheduleTask/")}}'+'/'+id,

       success:function(data){

          if(data == 'success'){

           _showMeetings()

            _showALl();

         }else{



         }

       },

       error:function(data){

         alert(data)

       }

     });



    return false;

  }

</script>







<script type="text/javascript">

  function deleteAttachment(id){

    $.ajax({

       type:'get',

       url:'{{URL::to("/XXdeletedeleteAttach/")}}'+'/'+id,

       success:function(data){

          if(data == 'success'){

           _showAttachment()

            _showALl();

         }else{



         }

       },

       error:function(data){

         alert(data)

       }

     });



    return false;

  }

</script>

@endsection

