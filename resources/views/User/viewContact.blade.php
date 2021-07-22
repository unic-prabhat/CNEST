@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View Contact Detais</div>

                <div class="card-body">
                    <b>Name:</b> {{$data->first_name}} {{$data->first_name}} <br>
                    <b>Email:</b> {{$data->email}} <br>
                    <b>Phone Number:</b> {{$data->phone_number}} <br>
                    <b>Company:</b> {{$data->company_name}} <br>
                    <b>Website:</b> {{$data->website_url}} <br>
                    <b>Country:</b> {{$data->country}} <br>
                    <br>
                    <form action="{{URL::to('User/'.$data->id)}}" method="post">
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}
                      <button type="submit" name="submit" class="btn btn-sm btn-danger" style="float:right">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
