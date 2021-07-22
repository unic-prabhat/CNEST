@extends('layouts.app')

@section('content')

<br>
<div class="row">
  <div class="col-12">
     <div class="card">
        <div class="card-body">
           <!-- <button type="button" class="btn btn-primary waves-effect waves-light float-right mb-3" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">+ Add New</button> -->
           <a href="{{URL::to('SuperAdmin/create')}}" type="button" class="btn btn-primary waves-effect waves-light float-right mb-3">Create Contact</a>
           <h4 class="header-title mt-0 mb-3">All Leads</h4>
           <div class="table-responsive dash-social">
              <table id="datatable" class="table">
                 <thead class="thead-light">
                    <tr>
                       <th>Image</th>
                       <th>Name</th>
                       <th>Email</th>
                       <th>Company</th>
                       <th>Website</th>
                       <th>Contact</th>
                       <th>Country</th>
                       <th>Lead</th>
                       <th hidden>Action</th>
                    </tr>
                    <!--end tr-->
                 </thead>
                 <tbody>
                   @if(count($myleads)>0)
                     @foreach($myleads as $data)
                    <tr>
                      <td><img src="{{URL::to($data->image_path)}}" class="z-depth-1 rounded-circle" height="50px" onError="this.onerror=null;this.src='https://eclub.urbanfox.store/media/images/user.png';"></td>
                      <td><a href="{{URL::to('SuperAdmin/'.$data->id)}}">{{$data->first_name}} {{$data->last_name}}</a></td>
                      <td><a href="{{URL::to('SuperAdmin/'.$data->id)}}">{{$data->email}}</a></td>
                      <td><a href="{{URL::to('SuperAdmin/'.$data->id)}}">{{$data->company_name}}</a></td>
                      <td><a href="{{URL::to('SuperAdmin/'.$data->id)}}">{{$data->website_url}}</a></td>
                      <td><a href="{{URL::to('SuperAdmin/'.$data->id)}}">{{$data->phone_number}}</a></td>
                      <td><a href="{{URL::to('SuperAdmin/'.$data->id)}}">{{$data->country}}</a></td>
                      <td><a href="{{URL::to('SuperAdmin/'.$data->id)}}">{{$data->contact_lead_status}}</a></td>
                      <!--THEME DEFAULT-->
                       <!-- <td><img src="../assets/images/users/user-10.jpg" alt="" class="thumb-sm rounded-circle mr-2">Donald Gardner</td>
                       <td>xyx@gmail.com</td>
                       <td>+123456789</td>
                       <td>Starbucks coffee</td>
                       <td><span class="badge badge-soft-purple">New Lead</span></td>
                       <td><a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a> <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a></td> -->
                       <!--THEME DEFAULT-->
                    </tr>
                    @endforeach
                  @endif
                 </tbody>
              </table>
           </div>
        </div>
        <!--end card-body-->
     </div>
     <!--end card-->
  </div>
  <!--end col-->
</div>



<div class="container-fluid" hidden>
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header"><b>Leads</b>
                  <span>
                    <a href="{{URL::to('SuperAdmin/create')}}" class="btn btn-success" style="float:right">Create</a>
                  </span>
                </div>

                <div class="card-body">
                  @if(session()->has('message'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong></strong> {{ session()->get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                  @endif


                  <!-- @if(count($myleads)>0)
                    @foreach($myleads as $mylead)
                    <div class="z-depth-1" style="padding:10px">
                      <a href="{{URL::to('SuperAdmin/'.$mylead->id)}}" style="color:black"><b>Company:</b> {{$mylead->company_name}}</a><br>
                      <a href="{{URL::to('SuperAdmin/'.$mylead->id)}}" style="color:black"><b>Owner:</b> {{$mylead->first_name}}&nbsp;{{$mylead->first_name}}</a><br>
                      <a href="{{URL::to('SuperAdmin/'.$mylead->id)}}" style="color:black"><b>Country:</b> {{$mylead->country}}</a><br>
                      <a href="{{URL::to('SuperAdmin/'.$mylead->id)}}" style="color:black"><b>Lead Status:</b> <span style="color: #4285f4;font-weight: 800;">{{$mylead->contact_lead_status}}</span>
                    </div>
                    <br>
                    @endforeach
                  @endif -->

                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Image</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Company</th>
                          <th>Website</th>
                          <th>Contact</th>
                          <th>Country</th>
                          <th>Lead</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(count($myleads)>0)
                          @foreach($myleads as $data)
                        <tr>
                          <td><img src="{{URL::to($data->image_path)}}" class="z-depth-1 rounded-circle" height="50px" onError="this.onerror=null;this.src='https://eclub.urbanfox.store/media/images/user.png';"></td>
                          <td><a href="{{URL::to('SuperAdmin/'.$data->id)}}">{{$data->first_name}} {{$data->last_name}}</a></td>
                          <td><a href="{{URL::to('SuperAdmin/'.$data->id)}}">{{$data->email}}</a></td>
                          <td><a href="{{URL::to('SuperAdmin/'.$data->id)}}">{{$data->company_name}}</a></td>
                          <td><a href="{{URL::to('SuperAdmin/'.$data->id)}}">{{$data->website_url}}</a></td>
                          <td><a href="{{URL::to('SuperAdmin/'.$data->id)}}">{{$data->phone_number}}</a></td>
                          <td><a href="{{URL::to('SuperAdmin/'.$data->id)}}">{{$data->country}}</a></td>
                          <td><a href="{{URL::to('SuperAdmin/'.$data->id)}}">{{$data->contact_lead_status}}</a></td>
                            <!-- <a class="btn btn-info btn-sm" href="SuperAdmin/{{$data->id}}"><i class="fa fa-eye" aria-hidden="true"></i>
View</a> &nbsp; -->
                            <!-- <a class="btn btn-primary btn-sm" href="SuperAdmin/{{$data->id}}/edit" ><i class="fa fa-pencil" aria-hidden="true"></i>
Edit</a> -->

                        </tr>
                            @endforeach
                          @endif
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
