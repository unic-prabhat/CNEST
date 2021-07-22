@extends('layouts.appOther')
@section('style')
<style media="screen">
.auth-logo-text{
  margin-top: -24px
}
body {
      background: url(https://rugs.a2hosted.com/crmnest/public/mphlogin-banner.png) no-repeat center !important;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
.card-body{
  background-color: rgba(0,0,0,0.1);
}
.card {
    border-radius: 0px !important;
}
</style>
@endsection
@section('content')
<!-- Log In page -->
<div class="row vh-100">
   <div class="col-12 align-self-center">
      <div class="auth-page">
         <div class="card auth-card shadow-lg">
            <div class="card-body">
               <div class="px-3">

                 <br>
                 @if (count($errors) > 0)
                   @foreach ($errors->all() as $error)
                     <div class="alert alert-warning alert-dismissible fade show" role="alert">
                       <strong></strong> {{ $error }}
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                   @endforeach
                 @endif
                 <br>


                  <!-- <div class="auth-logo-box"><a href="../analytics/analytics-index.html" class="logo logo-admin"><img src="https://rugs.a2hosted.com/Crmnest/public/logo.png" height="55" alt="logo" class="auth-logo"></a></div> -->
                  <!--end auth-logo-box-->
                  <center><img src="{{URL::to('/public/logo.png')}}" height="35" alt="logo"></center>
                  <div class="text-center auth-logo-text">
                     <h4 class="mt-0 mb-3 mt-5">Let's Get Started</h4>
                     <p class="text-muted mb-0">Sign in to continue to CRMNest.</p>
                  </div>
                  <!--end auth-logo-text-->
                  <form class="form-horizontal auth-form my-4"  method="POST" action="{{ route('login') }}">
                      @csrf
                     <div class="form-group">
                        <!-- <label for="username">Email or Username</label> -->
                        <div class="input-group mb-3"><span class="auth-form-icon"><i class="dripicons-user"></i> </span><input type="text" class="form-control{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}" id="username" name="login" placeholder="Enter email or username"  value="{{ old('username') ?: old('email') }}" required autofocus></div>
                        @if ($errors->has('username') || $errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                            </span>
                        @endif
                     </div>
                     <!--end form-group-->
                     <div class="form-group">
                        <!-- <label for="userpassword">Password</label> -->
                        <div class="input-group mb-3"><span class="auth-form-icon"><i class="dripicons-lock"></i> </span><input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter password"  name="password" required autocomplete="current-password"></div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                     </div>
                     <!--end form-group-->
                     <div class="form-group row mt-4">
                        <div class="col-sm-6" style="">
                           <!-- <div class="custom-control custom-switch switch-success"><input type="checkbox" class="custom-control-input" id="customSwitchSuccess" name="remember" {{ old('remember') ? 'checked' : '' }}> <label class="custom-control-label text-muted" for="customSwitchSuccess">Remember me</label></div> -->
                        </div>
                        <!--end col-->
                        <div class="col-sm-6 text-right"><a href="{{URL::to('forgotpasw')}}" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a></div>
                        <!--end col-->
                     </div>
                     <!--end form-group-->
                     <div class="form-group mb-0 row">
                        <div class="col-12 mt-2"><button class="btn btn-primary btn-round btn-block waves-effect waves-light" type="submit">Log In <i class="fas fa-sign-in-alt ml-1"></i></button></div>
                        <!--end col-->
                     </div>
                     <!--end form-group-->
                  </form>
                  <!--end form-->
               </div>
               <!--end /div-->
               <div class="m-3 text-center text-muted">
                  <!-- <p class="">Don't have an account ? <a href="../authentication/auth-register.html" class="text-primary ml-2">Free Resister</a></p> -->
               </div>
            </div>
            <!--end card-body-->
         </div>
         <!--end card-->
      </div> <p style="text-align:center;color:#FFF;">Powered by Qtonix Software Private Limited.</p>
      <!--end auth-page-->
   </div>
   <!--end col-->

</div>


















<div class="container" hidden>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                          <label for="login" class="col-sm-4 col-form-label text-md-right">
                              {{ __('Username or Email') }}
                          </label>

                          <div class="col-md-6">
                              <input id="login" type="text"
                                     class="form-control{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}"
                                     name="login" value="{{ old('username') ?: old('email') }}" required autofocus>

                              @if ($errors->has('username') || $errors->has('email'))
                                  <span class="invalid-feedback">
                                      <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <!-- <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div> -->
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>

<br><br>
            <p class="note note-success">
              <b>SuperAdmin Login</b><br>
              <b>username-</b> superadmin<br>
              <b>password-</b> Apple@123
            </p>
        </div>
    </div>
</div>
@endsection
