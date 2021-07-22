@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{ URL::previous() }}" class="btn btn-sm myBackbutton">Back</a> User Dashboard</div>

                <div class="card-body">
                  @if(session()->has('message'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong></strong> {{ session()->get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                  @endif

                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Website</th>
                          <th>Contact</th>
                          <th>Country</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(count($datas)>0)
                          @foreach($datas as $data)
                        <tr>
                          <td>{{$data->first_name}} {{$data->last_name}}</td>
                          <td>{{$data->email}}</td>
                          <td>{{$data->website_url}}</td>
                          <td>{{$data->phone_number}}</td>
                          <td>{{$data->country}}</td>
                          <td>
                            <a class="btn btn-info btn-sm" href="User/{{$data->id}}">View</a> &nbsp;
                            <a class="btn btn-primary btn-sm" href="User/{{$data->id}}/edit">Edit</a>
                        </td>
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
