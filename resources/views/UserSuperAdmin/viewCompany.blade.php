@extends('layouts.app')
@section('style')
<style media="screen">
  .mybox{
    background-color:white;
    padding: 30px;
  }
</style>
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View Contact Detais
                  <span style="float:right"><a class="btn btn-success btn-sm" href="{{URL::to('/Deal/create/'.$data->id)}}">Add a Deal</a></span>
                </div>

                <div class="card-body">
                    <div class="row">
                      <div class="col-md-3">
                        <img src="{{URL::to($data->image_path)}}" class="z-depth-1 rounded-round" width="100%" onError="this.onerror=null;this.src='https://eclub.urbanfox.store/media/images/user.png';">
                      </div>
                      <div class="col-md-4">
                        <b>Name:</b> {{$data->first_name}} {{$data->first_name}} <br>
                        <b>Email:</b> {{$data->email}} <br>
                        <b>Phone Number:</b> {{$data->phone_number}} <br>
                        <b>Company:</b> {{$data->company_name}} <br>
                        <b>Website:</b> {{$data->website_url}} <br>
                        <b>Country:</b> {{$data->country}}
                      </div>
                      <div class="col-md-5">
                        <b>Deal Name:</b> {{$data->deal_name}}<br>
                        <b>Deal Stage:</b> {{$data->deal_stage}} <br>
                        <b>Deal Amount:</b> ${{$data->deal_amount}} <br>
                        <b>Deal Closing Date:</b> {{$data->deal_closing_date}} <br>
                        <b>Deal Owner:</b> {{$data->deal_owner}}
                      </div>
                    </div>



                    <form action="{{URL::to('SuperAdmin/'.$data->id)}}" method="post">
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}
                      <button type="submit" name="submit" class="btn btn-sm btn-danger" style="float:right;border-radius: 30px;"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                    </form>

                    <a class="btn btn-primary btn-sm" href="{{URL::to('SuperAdmin/'.$data->id.'/edit')}}"  style="float:right;border-radius: 30px;"><i class="fa fa-pencil" aria-hidden="true"></i>
Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br><br><br><br><br><br>
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="col-md-12 mybox">
        <center><img src="https://rugs.a2hosted.com/Crmnest/public/contactsimages/1572509528721.jpg" style="border-radius: 50%;"></center>
        <br>
        <h4>About This Company</h4>
        <h6>Name:</h6>
        <h6>Email:</h6>
        <h6>URL:</h6>
        <h6>Website:</h6>
        <h6>Country:</h6>
      </div>
    </div>
    <div class="col-md-9">
      <div class="col-md-12 mybox">
          <!--==TABLE==-->
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
                      <tr>
                        <td><img src="https://rugs.a2hosted.com/Crmnest/public/contactsimages/1572509528721.jpg" class="z-depth-1 rounded-circle" height="50px" onError="this.onerror=null;this.src='https://eclub.urbanfox.store/media/images/user.png';"></td>
                        <td><a href="https://rugs.a2hosted.com/Crmnest/SuperAdmin/5">Mark Zillo</a></td>
                        <td><a href="https://rugs.a2hosted.com/Crmnest/SuperAdmin/5">mark.z@gmail.com</a></td>
                        <td><a href="https://rugs.a2hosted.com/Crmnest/SuperAdmin/5">Usee</a></td>
                        <td><a href="https://rugs.a2hosted.com/Crmnest/SuperAdmin/5">www.usee.com</a></td>
                        <td><a href="https://rugs.a2hosted.com/Crmnest/SuperAdmin/5">7745896587</a></td>
                        <td><a href="https://rugs.a2hosted.com/Crmnest/SuperAdmin/5">Thailand</a></td>
                      </tr>
                      <tr>
                        <td><img src="https://rugs.a2hosted.com/Crmnest/public/contactsimages/1572509528721.jpg" class="z-depth-1 rounded-circle" height="50px" onError="this.onerror=null;this.src='https://eclub.urbanfox.store/media/images/user.png';"></td>
                        <td><a href="https://rugs.a2hosted.com/Crmnest/SuperAdmin/5">Mark Zillo</a></td>
                        <td><a href="https://rugs.a2hosted.com/Crmnest/SuperAdmin/5">mark.z@gmail.com</a></td>
                        <td><a href="https://rugs.a2hosted.com/Crmnest/SuperAdmin/5">Usee</a></td>
                        <td><a href="https://rugs.a2hosted.com/Crmnest/SuperAdmin/5">www.usee.com</a></td>
                        <td><a href="https://rugs.a2hosted.com/Crmnest/SuperAdmin/5">7745896587</a></td>
                        <td><a href="https://rugs.a2hosted.com/Crmnest/SuperAdmin/5">Thailand</a></td>
                      </tr>
                      <tr>
                        <td><img src="https://rugs.a2hosted.com/Crmnest/public/contactsimages/1572509528721.jpg" class="z-depth-1 rounded-circle" height="50px" onError="this.onerror=null;this.src='https://eclub.urbanfox.store/media/images/user.png';"></td>
                        <td><a href="https://rugs.a2hosted.com/Crmnest/SuperAdmin/5">Mark Zillo</a></td>
                        <td><a href="https://rugs.a2hosted.com/Crmnest/SuperAdmin/5">mark.z@gmail.com</a></td>
                        <td><a href="https://rugs.a2hosted.com/Crmnest/SuperAdmin/5">Usee</a></td>
                        <td><a href="https://rugs.a2hosted.com/Crmnest/SuperAdmin/5">www.usee.com</a></td>
                        <td><a href="https://rugs.a2hosted.com/Crmnest/SuperAdmin/5">7745896587</a></td>
                        <td><a href="https://rugs.a2hosted.com/Crmnest/SuperAdmin/5">Thailand</a></td>
                      </tr>
                 </tbody>
                </table>
             </div>
          <!--==TABLE==-->
      </div>
    </div>
  </div>
</div>
@endsection
