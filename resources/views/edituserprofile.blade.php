@extends('layouts.master')
@section('css')
<style>
   img#uperpro-iop {
   width: 12%;
   border-radius: 50%;
   height: 22px;
   top: -8px;
   float: right;
   position: relative;
   box-shadow: 4px 5px #506ee4;
   }
</style>
@endsection
@section('content')
<div class="container-fluid">
   <!-- end page title end breadcrumb -->
   <div class="row">
      <div class="col-12">
         <div class="card">
            <div class="card-body met-pro-bg">
               <div class="met-profile">
                  <div class="row">
                     <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                        <div class="met-profile-main">
                           <div class="met-profile-main-pic"><img src="{{URL::to(Auth::user()->userprofilepic)}}" onerror="this.src='https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-alt-512.png'" alt="profile-user" class="rounded-circle" style="height: 100px;width: 100px;" /></div>
                           <div class="met-profile_user-detail">
                              <h5 class="met-user-name">{{auth()->user()->name}}</h5>
                              <p class="mb-0 met-user-name-post">UI/UX Designer</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 ml-auto">
                        <ul class="list-unstyled personal-detail">
                           <li class=""><i class="dripicons-phone mr-2 text-info font-18"></i> <b>phone </b>: {{auth()->user()->phone}}</li>
                           <li class="mt-2"><i class="dripicons-mail text-info font-18 mt-2 mr-2"></i> <b>Email </b>: {{auth()->user()->email}}</li>
                           <li class="mt-2"><i class="dripicons-location text-info font-18 mt-2 mr-2"></i> <b>Location</b> : {{auth()->user()->location}}</li>
                        </ul>
                        <div class="button-list btn-social-icon"><button type="button" class="btn btn-blue btn-circle"><i class="fab fa-facebook-f"></i></button> <button type="button" class="btn btn-secondary btn-circle ml-2"><i class="fab fa-twitter"></i></button> <button type="button" class="btn btn-pink btn-circle ml-2"><i class="fab fa-dribbble"></i></button></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <ul class="nav nav-pills mb-0" id="pills-tab" role="tablist">
                  <li class="nav-item"><a class="nav-link active" id="general_detail_tab" data-toggle="pill" href="#general_detail">General</a></li>
                  <!-- <li class="nav-item"><a class="nav-link" id="activity_detail_tab" data-toggle="pill" href="#activity_detail">Activity</a></li>
                  <li class="nav-item"><a class="nav-link" id="portfolio_detail_tab" data-toggle="pill" href="#portfolio_detail">Portfolio</a></li> -->
                  <li class="nav-item"><a class="nav-link" id="settings_detail_tab" data-toggle="pill" href="#settings_detail">Settings</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-12">
         <div class="tab-content detail-list" id="pills-tabContent">
            <div class="tab-pane fade show active" id="general_detail">
            </div>
            <div class="tab-pane fade" id="activity_detail">
            </div>
            <div class="tab-pane fade" id="portfolio_detail">
            </div>
            <div class="tab-pane fade" id="settings_detail">
               <div class="row">
                  <div class="col-lg-12 mx-auto">
                     <div class="card">
                        <div class="card-body">
                          <form action="{{URL::to('userprofileup/'.$user->id)}}" method="POST" enctype="multipart/form-data">
                             @csrf
                             @method('PUT')
                              <input type="file" id="input-file-now-custom-1" name="userprofilepic" class="dropify" data-default-file="{{URL::to(auth()->user()->userprofilepic)}}">

                           <div class="">
                              <div class="form-horizontal form-material mb-0">
                                <div class="form-group row">
                                  <div class="col-md-6">
                                    <input type="text" placeholder="Name" class="form-control" name="name" value="{{$user->name}}">
                                  </div>
                                  <div class="col-md-6">
                                    <input type="text" placeholder="UserName" class="form-control" name="username" value="{{$user->username}}">
                                  </div>
                                </div>
                                 <div class="form-group row">
                                    <div class="col-md-6">
                                      <input type="email" placeholder="Email" class="form-control"name="email" value="{{$user->email}}">
                                    </div>
                                    <div class="col-md-6">
                                      <input type="text" placeholder="Password" class="form-control" name="password">
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <div class="col-md-6">
                                      <select class="form-control" id="acinstatus" name="acinstatus" required>
                                         <option <?php echo ($user->acinstatus == 1) ? 'selected' : ''; ?> value="1">Active</option>
                                         <option <?php echo ($user->acinstatus == 2) ? 'selected' : ''; ?> value="2">Inactive</option>
                                      </select>
                                    </div>

                                    <div class="col-md-6">
                                      <input type="text" placeholder="Phone" class="form-control" name="phone" value="{{$user->phone}}">
                                    </div>

                                 </div>

                                <div class="form-group row">
                                   <div class="col-md-6">
                                     <input type="text" placeholder="Location" class="form-control" name="location" value="{{$user->location}}">
                                   </div>

                                </div>



                                 <div class="form-group">
                                 <button class="btn btn-gradient-primary btn-sm px-4 mt-3 float-right mb-0">Update Profile</button></div>
                              </div>
                           </div>
                         </form>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- <div class="row">
      <div class="col-md-12">
         <div class="card">
            <div class="card-body">
               <form action="{{URL::to('userprofileup/'.$user->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="name">Name:</label>
                           <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{$user->name}}" required>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="username">Username:</label>
                           <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" value="{{$user->username}}" required>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="email">Email:</label>
                           <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="{{$user->email}}" required>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="userprofilepic">Profile Pic:</label>
                           <img src="{{URL::to($user->userprofilepic)}}" id="uperpro-iop" width="100%" alt="">
                           <input type="file" name="userprofilepic" id="userprofilepic" class="form-control"  accept="image/jpeg">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="acinstatus">Active/Inactive Status:</label>
                           <select class="form-control" id="acinstatus" name="acinstatus" required>
                              <option <?php echo ($user->acinstatus == 1) ? 'selected' : ''; ?> value="1">Active</option>
                              <option <?php echo ($user->acinstatus == 2) ? 'selected' : ''; ?> value="2">Inactive</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="password">Password:</label>
                           <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="btnsub"></label>
                           <button type="submit" class="btn btn-primary">UPDATE</button>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div> -->
</div>
@endsection
