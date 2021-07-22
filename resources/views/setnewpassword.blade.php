@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{URL::to('setnewpass')}}">
                        @csrf
                       <input type="hidden" name="passreset_code" id="passreset_code" value="@if(isset($cd)) {{$cd}} @endif"
                        <div class="form-group row">


                            <div class="col-md-6 offset-md-3">
                              <label for="password">{{ __('New Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter New Password" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">


                            <div class="col-md-6 offset-md-3">
                              <button type="submit" class="btn btn-primary" style="margin-left: 15px;">
                                  {{ __('Update Password') }}
                              </button>
                            </div>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
