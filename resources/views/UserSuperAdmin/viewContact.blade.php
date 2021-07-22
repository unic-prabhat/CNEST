@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View Contact Detais
                  <span style="float:right">XXXXXXXXXXXXXXXXXXXXXXXXXXX</span>
                </div>

                <div class="card-body">
                    <div class="row">
                      <div class="col-md-2">
                        <!-- <img src="{{URL::to($data->image_path)}}" class="z-depth-1 rounded-circle" width="100%" onError="this.onerror=null;this.src='https://eclub.urbanfox.store/media/images/user.png';"> -->
                      </div>
                      <div class="col-md-10">
                        <b>Name:</b> {{$data->first_name}} {{$data->first_name}} <br>
                        <b>Email:</b> {{$data->email}} <br>
                        <b>Phone Number:</b> {{$data->phone_number}} <br>
                        <b>Company:</b> {{$data->company_name}} <br>
                        <b>Website:</b> {{$data->website_url}} <br>
                        <b>Country:</b> {{$data->country}} <br>
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
@endsection
