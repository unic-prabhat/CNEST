@extends('layouts.app')
@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

          <a href="{{URL::to('/UsersDetails/create')}}" class="btn btn-primary">Click Here To Create A New User</a>

          <br><br>

            <div class="card">

                <div class="card-header"><b>All Users</b></div>

                <div class="card-body">

                  @if(session()->has('message'))

                      <div class="alert alert-success alert-dismissible fade show" role="alert">

                        <strong></strong> {{ session()->get('message') }}

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                          <span aria-hidden="true">&times;</span>

                        </button>

                      </div>

                  @endif



                  @if(count($datas)>0)

                    @foreach($datas as $data)

                      <h6><a href="{{URL::to('UsersDetails/'.$data->id.'/edit')}}" style="border-radius: 30px; color: black">{{$data->name}} &nbsp;<span style="color: #4285f4;font-weight: 800;">({{$data->admin_type}})</a></span> </span> <span style=""></h6>

                    @endforeach

                  @endif

                </div>

            </div>

            <br>



        </div>

    </div>

</div>

@endsection
