@extends('layouts.app')

@section('content')
<br>
<div class="row">
  <div class="col-12">
     <div class="card">
        <div class="card-body">
          @if(session()->has('message'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong></strong> {{ session()->get('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
          @endif
           <!-- <button type="button" class="btn btn-primary waves-effect waves-light float-right mb-3" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">+ Add New</button> -->
           <a href="{{URL::to('SuperAdmin/create')}}" type="button" class="btn btn-primary waves-effect waves-light float-right mb-3">Create Contact</a>
           <h4 class="header-title mt-0 mb-3">All Contacts</h4>
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
                       <th></th>
                       <th hidden>Action</th>
                    </tr>
                    <!--end tr-->
                 </thead>
                 <tbody>
                   @if(count($datas)>0)
                     @foreach($datas as $data)
                    <tr>
                      <td><img src="{{URL::to($data->image_path)}}" class="z-depth-1 rounded-circle" height="50px" onError="this.onerror=null;this.src='https://eclub.urbanfox.store/media/images/user.png';"></td>
                      <td><a href="{{URL::to('SuperAdmin/'.$data->id)}}">{{$data->first_name}} {{$data->last_name}}</a></td>
                      <td><a href="{{URL::to('SuperAdmin/'.$data->id)}}">{{$data->email}}</a></td>
                      <td><a href="{{URL::to('SuperAdmin/'.$data->id)}}">{{$data->company_name}}</a></td>
                      <td><a href="{{URL::to('SuperAdmin/'.$data->id)}}">{{$data->website_url}}</a></td>
                      <td><a href="{{URL::to('SuperAdmin/'.$data->id)}}">{{$data->phone_number}}</a></td>
                      <td><a href="{{URL::to('SuperAdmin/'.$data->id)}}">{{$data->country}}</a></td>
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
              <span style="float:right">{{ $datas->links() }}</span>
           </div>
        </div>
     </div>
  </div>
</div>


@endsection
