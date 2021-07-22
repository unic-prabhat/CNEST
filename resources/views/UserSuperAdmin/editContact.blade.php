@extends('layouts.app')
@section('style')
<style media="screen">
  #id{
    display: none;
  }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Contact</div>


                <div class="card-body">
                      <form class="text-center" action="{{URL::to('SuperAdmin/'.$data->id)}}" method="post" enctype="multipart/form-data">
                      {{ method_field('PUT') }}
                      {{ csrf_field() }}
                      <br><br>
                        <p class="h4 mb-4">Update Contact</p>
                          <span style="float:right">
                            <p id="myToogle" style="margin-top:-80px"><button type="button" class="btn1 btn btn-sm btn-primary" class="btn btn-sm btn-success">Converted to lead</button>
                            <div id="toogleDiv">

                            <p style="margin-top: -20px;">Choose the status of lead</p>
                            <select style="margin-top: -18px;" class="browser-default custom-select mb-4" name="contact_lead_status">
                                   <option value="{{$data->contact_lead_status}}" selected>{{$data->contact_lead_status}}</option>
                                   <option value="" disabled>Choose option</option>
                                   <option value="HOT">HOT</option>
                                   <option value="COLD">COLD</option>
                                   <option value="WARM">WARM</option>
                            </select>
                            </div>

                          </p></span>
                          <br><br><br>
                        <div class="form-row mb-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="FirstName" name="first_name" value="{{$data->first_name}}">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="LastName" name="last_name" value="{{$data->last_name}}">
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Email" name="email" value="{{$data->email}}">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Phone" name="phone_number" value="{{$data->phone_number}}">
                            </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Website URL" name="website_url" value="{{$data->website_url}}">
                        <br>
                        <input type="text" class="form-control" placeholder="Company Name" name="company_name"  value="{{$data->company_name}}">
                        <br>
                        <input type="text" class="form-control" placeholder="Country" name="country" value="{{$data->country}}">
                        <br>
                        <!-- <label>Lead Status</label>
                        <select class="browser-default custom-select mb-4" name="contact_lead_status" value="{{$data->contact_lead_status}}">
                               <option value="" disabled>Choose option</option>
                               <option value=""></option>
                               <option value="HOT" selected>HOT</option>
                               <option value="COLD">COLD</option>
                               <option value="WARM">WARM</option>
                        </select> -->
                        <input type="file" name="image_file"  class="form-control" accept="image/jpeg">
                        <br>
                        <button class="btn btn-primary" type="submit">Update</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
<script>
//SHOW HIDE LEAD TYPE IN SUPER ADMIN
$("#toogleDiv").hide();

$(document).ready(function(){
  $("#myToogle").click(function(){
    $("#toogleDiv").toggle();
  });
});
</script>
@endsection
