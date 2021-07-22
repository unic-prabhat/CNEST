@extends('layouts.master')
@section('css')
<style>
   .row{
   margin-left: 7px !important;
   }
   span#popup-close-m {
    position: absolute;
    right: 15px;
    top: 8px;
    font-size: 19px;
    cursor: pointer;
}
</style>
@endsection
@section('content')
<!-- Top Bar End -->
<script>
   sessionStorage.setItem('userid','{{auth()->user()->id}}');
</script>
<!-- Page Content-->
@include('crm_new.common.message')
<!-- Page-Title -->
<div class="row">
   <div class="col-sm-12">
      <div class="page-title-box">
         <div class="float-right">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="javascript:void(0);">CRM</a></li>
               <li class="breadcrumb-item active">Lead</li>
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
         <div class="card-body" style="position:relative">
            <div class="row">
               <div class="col-4 align-self-center">
                  <div class="icon-info">
                     <i data-feather="smile" class="align-self-center icon-lg icon-dual-warning"></i>
                  </div>
               </div>
               <div class="col-8 align-self-center text-right">
                  <div class="ml-2">
                     <p class="mb-1 text-muted">Total Leads</p>
                     <h3 class="mt-0 mb-1 font-weight-semibold"><a href="{{URL::to('leads')}}">{{count(App\Lead::get())}}</a></h3>
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
                     <h3 class="mt-0 mb-1 font-weight-semibold d-inline-block"><a href="{{URL::to('leadofweek')}}">{{count(App\Lead::whereBetween('created_at', [Carbon\Carbon::now()->startOfWeek(),
                        Carbon\Carbon::now()->endOfWeek()])->get())}}</a>
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
                     <h3 class="mt-0 mb-1 font-weight-semibold"><a href="{{URL::to('lastmlead')}}">{{count(App\Lead::whereMonth('created_at', '=', \Carbon\Carbon::now()->subMonth()->month)->get())}}</a></h3>
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
<div class="loader"></div>
<div class="row">
<div class="col-lg-12">
   <div class="card">
      <div class="card-body">
         @if(Auth::user()->isAdmin == 1)
         <div class="moreFilterDash mb-4">
            <div>
               <h4 class="header-title mt-0 mb-3 float-left mr-4">Leads Report</h4>
               <!-- <ul id="addfilteroption">
                  </ul> -->
            </div>
            <div>
               <!-- <button type="button" class="btn btn-gradient-primary
                  waves-effect waves-light float-right mb-3 " data-toggle="modal"
                  data-animation="bounce" data-target="myLargeModalLabelXX">+ Add New</button> -->
               <button type="button" class="btn btn-gradient-primary waves-effect waves-light float-right mb-3" data-toggle="modal" data-target="#myModal">
               + Add New
               </button>
               <!-- The Modal -->
               <div class="modal" id="myModal">
                  <div class="modal-dialog-lg" style="width: 100%;padding-left: 15%;padding-right: 15%;padding-top: 5%;">
                     <div class="modal-content">
                        <div class="modal-header custom-cls-d">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                           <form action="{{route('lead.store')}}" method="post" id="leadForm">
                              @csrf
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="LeadName">First Name</label>
                                       <input type="text" class="form-control" id="firstname" name="firstname" required>
                                       <span id="error-firstname"></span>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="LeadName">Sur Name</label>
                                       <input type="text" class="form-control" id="surname" name="surname" required>
                                       <span id="error-surname"></span>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label for="city">Post Code</label>
                                       <input type="text" class="form-control" id="postcode" name="postcode" required>
                                       <span id="error-postcode"></span>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label for="villag">city</label>
                                       <input type="text" class="form-control" id="address" name="address" required>
                                       <span id="error-address"></span>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label for="PhoneNo">state</label>
                                       <input type="text" class="form-control" id="town" name="town" required>
                                       <span id="error-town"></span>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label for="PhoneNo">Country</label>
                                       <select name="country" id="country" class="form-control" required>
                                          <option value="united kingdom">United Kingdom</option>
                                          <option value="unitedstate">USA</option>
                                          <option value="brazil">Brazil</option>
                                          <option value="australia">Australia</option>
                                       </select>
                                       <span id="error-country"></span>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="PhoneNo">Email</label>
                                       <input type="email" class="form-control" id="email" name="email">
                                       <span id="error-email"></span>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label for="PhoneNo">Mobile Number</label>
                                       <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" required>
                                       <span id="error-mobilenumber"></span>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label for="PhoneNo">Landline Number</label>
                                       <input type="text" class="form-control" id="landlinenumber" name="landlinenumber">
                                       <span id="error-landlinenumber"></span>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="leadsource">Lead Source</label>
                                       <select class="custom-select" id="leadsource" name="leadsource" required>
                                          <option value="">Select</option>
                                          <option value="PPC">PPC</option>
                                          <option value="Organic Boiler">Organic Boiler</option>
                                          <option value="Guide">Guide</option>
                                          <option value="Social Media">Social Media</option>
                                          <option value="Existing Customer">Existing Customer</option>
                                          <option value="Price Engine">Price Engine</option>
                                          <option value="Viessmann">Viessmann</option>
                                          <option value="RPD">RPD</option>
                                       </select>
                                       <span id="error-leadsource"></span>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="PhoneNo">Lead assign to</label>
                                       <select class="custom-select" id="leadassignto" name="user_id" required>
                                          <option value="">Select</option>
                                          @foreach(App\User::all() as $user)
                                          <option value="{{$user->id}}">{{$user->name}}</option>
                                          @endforeach
                                       </select>
                                       <span id="error-leadassignto"></span>
                                    </div>
                                 </div>
                              </div>
                        </div>
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="savefrm" >Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                        </form>
                     </div>
                  </div>
               </div>
               <button type="button" class="btn btn-gradient-primary
                  waves-effect waves-light float-right mb-3 mr-2" data-toggle="modal"
                  data-animation="bounce" data-target="#filtersId">Filter By Status </button>
            </div>
         </div>
         @endif
         <div class="table-responsive" style="position:relative">
            <div id="getTable">
               <table class="table" id="datatable">
                  <thead class="thead-light">
                     <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Lead Source</th>
                        <th>Lead Owner</th>
                        <th>Status</th>
                        <th>Call</th>
                        <th>Action</th>
                     </tr>
                     <!--end tr-->
                  </thead>
                  <tbody>
                     @if(!empty($search) && count($search) > 0)
                     @foreach($search as $key=>$val)
                     <tr>
                        <td><a href="{{route('lead.show',[$val->id])}}">{{$val->firstname}}</a></td>
                        <td><a href="{{route('lead.show',[$val->id])}}">{{$val->email}}</a></td>
                        <td><a href="{{route('lead.show',[$val->id])}}">{{$val->mobilenumber}}</a></td>
                        <td><a href="{{route('lead.show',[$val->id])}}">{{$val->address}},{{ $val->town}},{{$val->country}}</a></td>
                        <td><a href="{{route('lead.show',[$val->id])}}">{{$val->leadsource}}</a></td>
                        <td><a href="{{route('lead.show',[$val->id])}}">
                           @php $var = App\User::where('id', $val->user_id)->get()@endphp
                           @foreach($var as $t)
                           {{$t->name}}
                           @endforeach
                           </a>
                        </td>
                        <td> <a href="{{route('lead.show',[$val->id])}}">
                           @if($val->status == 'Hot Lead')
                           <span class="badge badge-md badge-soft-success ">{{$val->status}}</span>
                           @elseif($val->status == 'New Lead')
                           <span class="badge badge-md badge-soft-purple ">{{$val->status}}</span>
                           @elseif($val->status == 'Cold Lead')
                           <span class="badge badge-md badge-soft-orange">{{$val->status}}</span>
                           @elseif($val->status == 'NI Lead')
                           <span class="badge badge-md badge-soft-danger ni">{{$val->status}}</span>
                           @elseif($val->status == 'VI Lead')
                           <span class="badge badge-md badge-soft-very vi">{{$val->status}}</span>
                           @endif
                           </a>
                        </td>
                        <td>
                           <span class="todo_call" data-id="{{$val->id}}">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call">
                                 <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                              </svg>
                              </i>
                              <!-- <i data-feather="phone-call"></i> -->
                           </span>
                        </td>
                        <div class="modal fade bs-example-modal-lg" id="addnewleadfrm">
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
                        <!-- /.modal -->
                        <div class="modal fade showCall" id="callingm">
                           <div class="modal-dialog">
                              <div class="modal-content">
                                 <div class="modal-body">
                                    <div class="form-group">
                                       <div class="form-row">
                                          <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast" style="width:100%;">
                                             <div class="toast-header">
                                                 <span id="popup-close-m">&times;</span>
                                                <i class="mdi mdi-circle-slice-8 font-18 mr-1 text-warning"></i> <strong class="mr-auto"><label id="runtime" class="mt-3">00:00:00</label></strong> <small class="text-muted"></small>
                                                <!-- <button type="button" class="ml-2 mb-1 close"  id="val_call_close"> <span aria-hidden="true">×</span> </button> -->
                                             </div>
                                             <div class="toast-body">
                                                <form method="post" id="frontCallfrm">
                                                   <input type="hidden" name="_token" value="jUcVmOjPm7L4O80vksyEgNVZKp5e6ApX6fdKCuF2">
                                                   <input type="hidden" name="lead_id" value="{{$val->id}}" id="lead_id">
                                                   <input type="hidden" name="user_id" value="{{auth()->user()->id}}" id="user_id">
                                                   <textarea class="form-control" rows="3" id="call_note_text" name="call" placeholder="Your Notes.." disabled=""></textarea>
                                                   <div class="timer">
                                                      <button class="categories btn btn-danger btn-square waves-effect waves-light mt-2 btn-sm create-note-button float-right mb-2" type="button" id="stopcallui">Stop Call</button>
                                                   </div>
                                                   <div class="float-left all_tags"><span>Not receive</span> <span>Call later</span></div>
                                                   <button class="categories btn btn-blue btn-square waves-effect waves-light mt-2 btn-sm create-note-button float-right mb-2" type="submit" id="startcall">Start Call</button>
                                                </form>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </tr>
                     @endforeach
                     @elseif(isset($leads) && count($leads) > 0)
                     @foreach($leads as $todo)
                     <tr>
                        <td><a href="{{route('lead.show',[$todo->id])}}">{{$todo->firstname}}</a></td>
                        <td><a href="{{route('lead.show',[$todo->id])}}">{{$todo->email}}</a></td>
                        <td><a href="{{route('lead.show',[$todo->id])}}">{{$todo->mobilenumber}}</a></td>
                        <td><a href="{{route('lead.show',[$todo->id])}}">{{$todo->address}},{{ $todo->town}},{{$todo->country}}</a></td>
                        <td><a href="{{route('lead.show',[$todo->id])}}">{{$todo->leadsource}}</a></td>
                        <td><a href="{{route('lead.show',[$todo->id])}}">
                           @php $var = App\User::where('id', $todo->user_id)->get()@endphp
                           @foreach($var as $t)
                           {{$t->name}}
                           @endforeach
                           </a>
                        </td>
                        <td> <a href="{{route('lead.show',[$todo->id])}}">
                           @if($todo->status == 'Hot Lead')
                           <span class="badge badge-md badge-soft-success ">{{$todo->status}}</span>
                           @elseif($todo->status == 'New Lead')
                           <span class="badge badge-md badge-soft-purple ">{{$todo->status}}</span>
                           @elseif($todo->status == 'Cold Lead')
                           <span class="badge badge-md badge-soft-orange">{{$todo->status}}</span>
                           @elseif($todo->status == 'NI Lead')
                           <span class="badge badge-md badge-soft-danger ni">{{$todo->status}}</span>
                           @elseif($todo->status == 'VI Lead')
                           <span class="badge badge-md badge-soft-very vi">{{$todo->status}}</span>
                           @endif
                           </a>
                        </td>
                        <td>
                           <span class="todo_call" data-id="{{$todo->id}}">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call">
                                 <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                              </svg>
                              </i>
                           </span>
                        </td>
                        <td><a href="{{URL::to('leads/deletes/'.$todo->id)}}"><button id="bElim" type="button" class="btn btn-sm btn-soft-danger btn-circle" onclick="return confirm('Are you sure you want to delete this Lead?');"><i class="dripicons-trash" aria-hidden="true"></i></button></a></td>
                        <div class="modal fade bs-example-modal-lg" id="addnewleadfrm">
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
                        <!-- /.modal --> 
                        <div class="modal fade showCall" id="callingm">
                           <div class="modal-dialog">
                              <div class="modal-content">
                                 <div class="modal-body">
                                    <div class="form-group">
                                       <div class="form-row">

                                          <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast" style="width:100%;">
                                             <div class="toast-header">
                                                <span id="popup-close-m">&times;</span>
                                                <i class="mdi mdi-circle-slice-8 font-18 mr-1 text-warning"></i>
                                                <strong class="mr-auto"><label id="runtime" class="mt-3">00:00:00</label></strong>
                                                <small class="text-muted"></small>
                                             </div>
                                             <div class="toast-body">
                                                <form  method="post" id="frontCallfrm">
                                                   <input type="hidden" name="_token" value="jUcVmOjPm7L4O80vksyEgNVZKp5e6ApX6fdKCuF2">
                                                   <input type="hidden" name="lead_id" value="{{$todo->id}}" id="lead_id">
                                                   <input type="hidden" name="user_id" value="{{auth()->user()->id}}" id="user_id">
                                                   <textarea class="form-control" rows="3" id="call_note_text" name="call" placeholder="Your Notes.." disabled></textarea>

                                                   <div class="timer">

                                                   <button class="categories btn btn-danger btn-square waves-effect waves-light mt-2 btn-sm create-note-button float-right mb-2" type="button" id="stopcallui">Stop Call</button>

                                                  </div>
                                                   <div class="float-left all_tags">
                                                      <span>Not receive</span> <span>Call later</span>
                                                   </div>
                                                   <button class="categories btn btn-blue btn-square waves-effect waves-light mt-2 btn-sm create-note-button float-right mb-2" type="submit" id="startcall">Start Call</button>

                                                </form>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </tr>
                     @endforeach
                     @elseif(isset($wleads) && count($wleads) > 0)
                     @foreach($wleads as $wedo)
                     <tr>
                        <td><a href="{{route('lead.show',[$wedo->id])}}">{{$wedo->firstname}}</a></td>
                        <td><a href="{{route('lead.show',[$wedo->id])}}">{{$wedo->email}}</a></td>
                        <td><a href="{{route('lead.show',[$wedo->id])}}">{{$wedo->mobilenumber}}</a></td>
                        <td><a href="{{route('lead.show',[$wedo->id])}}">{{$wedo->address}},{{ $wedo->town}},{{$wedo->country}}</a></td>
                        <td><a href="{{route('lead.show',[$wedo->id])}}">{{$wedo->leadsource}}</a></td>
                        <td><a href="{{route('lead.show',[$wedo->id])}}">
                           @php $var = App\User::where('id', $wedo->user_id)->get()@endphp
                           @foreach($var as $t)
                           {{$t->name}}
                           @endforeach
                           </a>
                        </td>
                        <td> <a href="{{route('lead.show',[$wedo->id])}}">
                           @if($wedo->status == 'Hot Lead')
                           <span class="badge badge-md badge-soft-success ">{{$wedo->status}}</span>
                           @elseif($wedo->status == 'New Lead')
                           <span class="badge badge-md badge-soft-purple ">{{$wedo->status}}</span>
                           @elseif($wedo->status == 'Cold Lead')
                           <span class="badge badge-md badge-soft-orange">{{$wedo->status}}</span>
                           @elseif($wedo->status == 'NI Lead')
                           <span class="badge badge-md badge-soft-danger ni">{{$wedo->status}}</span>
                           @elseif($wedo->status == 'VI Lead')
                           <span class="badge badge-md badge-soft-very vi">{{$wedo->status}}</span>
                           @endif
                           </a>
                        </td>
                        <td>
                           <span class="todo_call" data-id="{{$wedo->id}}">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call">
                                 <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                              </svg>
                              </i>
                              <!-- <i data-feather="phone-call"></i> -->
                           </span>
                        </td>
                        <div class="modal fade bs-example-modal-lg" id="addnewleadfrm">
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
                        <!-- /.modal -->
                        <div class="modal fade showCall" id="callingm">
                           <div class="modal-dialog">
                              <div class="modal-content">
                                 <div class="modal-body">
                                    <div class="form-group">
                                       <div class="form-row">
                                          <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast" style="width:100%;">
                                             <div class="toast-header">
                                                <span id="popup-close-m">&times;</span>
                                                <i class="mdi mdi-circle-slice-8 font-18 mr-1 text-warning"></i>
                                                <strong class="mr-auto"><label id="runtime" class="mt-3">00:00:00</label></strong>
                                                <small class="text-muted"></small>
                                                <!-- <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close" id="wedo_call_close">
                                                   <span aria-hidden="true">×</span>
                                                   </button> -->
                                             </div>
                                             <div class="toast-body">
                                                <form method="post" id="frontCallfrm">
                                                   <input type="hidden" name="_token" value="jUcVmOjPm7L4O80vksyEgNVZKp5e6ApX6fdKCuF2">                                                            <input type="hidden" name="lead_id" value="{{$wedo->id}}" id="lead_id">
                                                   <input type="hidden" name="user_id" value="{{auth()->user()->id}}" id="user_id">
                                                   <textarea class="form-control" rows="3" id="call_note_text" name="call" placeholder="Your Notes.." disabled=""></textarea>
                                                   <div class="timer"><button class="categories btn btn-danger btn-square waves-effect waves-light mt-2 btn-sm create-note-button float-right mb-2" type="button" id="stopcallui">Stop Call</button></div>
                                                   <div class="float-left all_tags"><span>Not receive</span> <span>Call later</span></div>
                                                   <button class="categories btn btn-blue btn-square waves-effect waves-light mt-2 btn-sm create-note-button float-right mb-2" type="submit" id="startcall">Start Call</button>
                                                </form>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </tr>
                     @endforeach
                     @elseif(isset($lastmlead) && count($lastmlead) > 0)
                     @foreach($lastmlead as $lml)
                     <tr>
                        <td><a href="{{route('lead.show',[$lml->id])}}">{{$lml->firstname}}</a></td>
                        <td><a href="{{route('lead.show',[$lml->id])}}">{{$lml->email}}</a></td>
                        <td><a href="{{route('lead.show',[$lml->id])}}">{{$lml->mobilenumber}}</a></td>
                        <td><a href="{{route('lead.show',[$lml->id])}}">{{$lml->address}},{{ $lml->town}},{{$lml->country}}</a></td>
                        <td><a href="{{route('lead.show',[$lml->id])}}">{{$lml->leadsource}}</a></td>
                        <td><a href="{{route('lead.show',[$lml->id])}}">
                           @php $var = App\User::where('id', $lml->user_id)->get()@endphp
                           @foreach($var as $t)
                           {{$t->name}}
                           @endforeach
                           </a>
                        </td>
                        <td> <a href="{{route('lead.show',[$lml->id])}}">
                           @if($lml->status == 'Hot Lead')
                           <span class="badge badge-md badge-soft-success ">{{$lml->status}}</span>
                           @elseif($lml->status == 'New Lead')
                           <span class="badge badge-md badge-soft-purple ">{{$lml->status}}</span>
                           @elseif($lml->status == 'Cold Lead')
                           <span class="badge badge-md badge-soft-orange">{{$lml->status}}</span>
                           @elseif($lml->status == 'NI Lead')
                           <span class="badge badge-md badge-soft-danger ni">{{$lml->status}}</span>
                           @elseif($lml->status == 'VI Lead')
                           <span class="badge badge-md badge-soft-very vi">{{$lml->status}}</span>
                           @endif
                           </a>
                        </td>
                        <td>
                           <span class="todo_call" data-id="{{$lml->id}}">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call">
                                 <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                              </svg>
                              </i>
                              <!-- <i data-feather="phone-call"></i> -->
                           </span>
                        </td>
                        <div class="modal fade bs-example-modal-lg" id="addnewleadfrm">
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
                        <!-- /.modal -->
                        <div class="modal fade showCall"  id="callingm">
                           <div class="modal-dialog">
                              <div class="modal-content">
                                 <div class="modal-body">
                                    <div class="form-group">
                                       <div class="form-row">
                                          <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast" style="width:100%;">
                                             <div class="toast-header">
                                                <span id="popup-close-m">&times;</span>
                                                <i class="mdi mdi-circle-slice-8 font-18 mr-1 text-warning"></i>
                                                <strong class="mr-auto"><label id="runtime" class="mt-3">00:00:00</label></strong>
                                                <small class="text-muted"></small>
                                                <!-- <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                                   <span aria-hidden="true">×</span>
                                                   </button> -->
                                             </div>
                                             <div class="toast-body">
                                                <form method="post" id="frontCallfrm">
                                                   <input type="hidden" name="_token" value="jUcVmOjPm7L4O80vksyEgNVZKp5e6ApX6fdKCuF2">                                                            <input type="hidden" name="lead_id" value="{{$lml->id}}" id="lead_id">
                                                   <input type="hidden" name="user_id" value="{{auth()->user()->id}}" id="user_id">
                                                   <textarea class="form-control" rows="3" id="call_note_text" name="call" placeholder="Your Notes.." disabled=""></textarea>
                                                   <div class="timer"><button class="categories btn btn-danger btn-square waves-effect waves-light mt-2 btn-sm create-note-button float-right mb-2" type="button" id="stopcallui">Stop Call</button></div>
                                                   <div class="float-left all_tags"><span>Not receive</span> <span>Call later</span></div>
                                                   <button class="categories btn btn-blue btn-square waves-effect waves-light mt-2 btn-sm create-note-button float-right mb-2" type="submit" id="startcall">Start Call</button>
                                                </form>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </tr>
                     @endforeach
                     @else
                     <td>No lead found</td>
                     @endif
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <!--end card-body-->
      <!--<div class="col-lg-4">
         <div class="card">
             <div class="card-body">
                 <h4 class="header-title mt-0 mb-3">Activity</h4>
                 <div class="slimscroll crm-dash-activity">
                     <div class="activity">
                         <div class="activity-info">
                             <div class="icon-info-activity">
                                 <i class="mdi mdi-checkbox-marked-circle-outline bg-soft-success"></i>
                             </div>
                             <div class="activity-info-text">
                                 <div class="d-flex justify-content-between align-items-center">
                                     <h6 class="m-0 w-75">Task finished</h6>
                                     <span class="text-muted d-block">10 Min ago</span>
                                 </div>
                                 <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                     <a href="#" class="text-info">[more info]</a>
                                 </p>
                             </div>
                         </div>
         
                         <div class="activity-info">
                             <div class="icon-info-activity">
                                 <i class="mdi mdi-timer-off bg-soft-pink"></i>
                             </div>
                             <div class="activity-info-text">
                                 <div class="d-flex justify-content-between align-items-center">
                                     <h6 class="m-0  w-75">Task Overdue</h6>
                                     <span class="text-muted">50 Min ago</span>
                                 </div>
                                 <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                     <a href="#" class="text-info">[more info]</a>
                                 </p>
                                 <span class="badge badge-soft-secondary">Design</span>
                                 <span class="badge badge-soft-secondary">HTML</span>
                             </div>
                         </div>
                         <div class="activity-info">
                             <div class="icon-info-activity">
                                 <i class="mdi mdi-alert-decagram bg-soft-purple"></i>
                             </div>
                             <div class="activity-info-text">
                                 <div class="d-flex justify-content-between align-items-center">
                                     <h6 class="m-0  w-75">New Task</h6>
                                     <span class="text-muted">10 hours ago</span>
                                 </div>
                                 <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                     <a href="#" class="text-info">[more info]</a>
                                 </p>
                             </div>
                         </div>
         
                         <div class="activity-info">
                             <div class="icon-info-activity">
                                 <i class="mdi mdi-clipboard-alert bg-soft-warning"></i>
                             </div>
                             <div class="activity-info-text">
                                 <div class="d-flex justify-content-between align-items-center">
                                     <h6 class="m-0">New Comment</h6>
                                     <span class="text-muted">Yesterday</span>
                                 </div>
                                 <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                     <a href="#" class="text-info">[more info]</a>
                                 </p>
                             </div>
                         </div>
                         <div class="activity-info">
                             <div class="icon-info-activity">
                                 <i class="mdi mdi-clipboard-alert bg-soft-secondary"></i>
                             </div>
                             <div class="activity-info-text">
                                 <div class="d-flex justify-content-between align-items-center">
                                     <h6 class="m-0">New Lead Miting</h6>
                                     <span class="text-muted">14 Nov 2019</span>
                                 </div>
                                 <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                     <a href="#" class="text-info">[more info]</a>
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         </div>
         </div>--><!--end row-->
   </div>
   <!-- container -->
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
                        <img src="{{asset('public/new/assets/images/small/img-1.gif')}}" alt="" class="d-block mx-auto my-4" height="180">
                     </div>
                     <div class="slimscroll scroll-rightbar">
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
                     <!--end activity-scroll-->
                  </div>
                  <!--end tab-pane-->
                  <div class="tab-pane" id="TasksTab" role="tabpanel">
                     <div class="m-0">
                        <div id="rightbar_chart" class="apex-charts"></div>
                     </div>
                     <div class="text-center mt-n2 mb-2">
                        <button type="button" class="btn btn-soft-primary">Create Project</button>
                        <button type="button" class="btn btn-soft-primary">Create Task</button>
                     </div>
                     <div class="slimscroll scroll-rightbar">
                        <div class="p-2">
                           <div class="media mb-3">
                              <img src="{{asset('public/new/assets/images/widgets/project3.jpg')}}" alt="" class="thumb-lg rounded-circle">
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
</div>
<!-- end page content -->
<!-- end page-wrapper -->
<div class="modal fade bs-example-modal-lg">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title mt-0" id="addnewleadbtn">Add New Lead</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         </div>
         <div class="modal-body">
         </div>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="modal fade" id="filtersId" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title mt-0" id="myLargeModalLabel">Filter</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         </div>
         <div class="modal-body">
            <h6>Filtered By</h6>
            <form action="#" method="post" id="filterForm">
               @csrf
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control"/>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control"/>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label>Contact</label>
                        <input type="text" name="contact" class="form-control"/>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control"/>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <div class="form-group">
                        <label>Lead Source</label>
                        <select class="form-control" name="leadSource">
                           <option></option>
                           @php
                           $leadSource = App\Lead::select('leadsource')->distinct()->get();
                           @endphp
                           @if(count($leadSource) > 0)
                           @foreach($leadSource as $val)
                           <option value="{{$val->leadsource}}">{{$val->leadsource}}</option>
                           @endforeach
                           @endif
                        </select>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label>Lead Owner</label>
                        @php
                        $leadOwner = App\User::with('leads')->distinct('name')->get();
                        @endphp
                        <select class="form-control" name="leadOwner">
                           <option></option>
                           @foreach($leadOwner as $val)
                           <option value="{{$val->id}}">{{$val->name}}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label>Lead Status</label>
                        @php
                        $leadStatus = App\Lead::select('status')->distinct('status')->get();
                        @endphp
                        <select class="form-control" name="leadStatus">
                           <option></option>
                           @foreach($leadStatus as $val)
                           <option value="{{$val->status}}">{{$val->status}}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <button class="btn btn-primary" type="button" id="filterlead">Submit</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection
@section('script')
<script>
   $(document).ready(function(){
   $('body').on('click','#addnewleadbtn',function(){
     alert("success");
    });
   
     $('#val_call_close').on('click',function(){
       alert("success");
     });
   
   });
</script>
<script type="text/javascript">
$(document).ready(function(){
   

   $('.todo_call').click(function(){
      var dataId = $(this).attr("data-id");
      sessionStorage.setItem('key', dataId);
      $('#callingm').modal('show');
   });

    $('#startcall').click(function(){
     $('#call_note_text').removeAttr('disabled');
     
   });

   $('#stopcallui').click(function(){
     var call_status = $('#call_note_text').val();
     let lead_id = sessionStorage.getItem('key');
     if(call_status == ''){
      alert('entert the notes');
     }else{
         
          var user_id = $('#user_id').val();
          var duration = $('#runtime').html();

          $.ajax({

               type:'POST',
               url: '/crmnest/call/store',
               data: {

                    "_token": "{{ csrf_token() }}",
                    call_status:call_status,
                    user_id: user_id,
                    lead_id: lead_id,
                    duration:duration
                 },
               success:function(data){
                
                
                sessionStorage.removeItem('key');
                sessionStorage.clear();
                location.reload();
                  

                }
                
              });  


     }
     
   });


   $('#popup-close-m').click(function(){
        $('#callingm').modal('hide');
         sessionStorage.removeItem('key');
         sessionStorage.clear();
       
   });

});   
</script>
@endsection