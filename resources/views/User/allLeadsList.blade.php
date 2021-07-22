@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header"><b>All Leads List:</b></div>

                <div class="card-body">
                  @if(count($myleads)>0)
                    @foreach($myleads as $mylead)
                    <div class="z-depth-1" style="padding:10px">
                      <b>Company:</b> {{$mylead->company_name}}<br>
                      <b>Owner:</b> {{$mylead->first_name}}&nbsp;{{$mylead->first_name}}<br>
                      <b>Country:</b> {{$mylead->country}}<br>
                      <b>Lead Status:</b> <span style="color: #4285f4;font-weight: 800;">{{$mylead->contact_lead_status}}</span>
                      <a href="{{URL::to('User/'.$mylead->id)}}" class="btn btn-sm btn-primary" style="float:right;margin-top:-10px;border-radius: 30px;"><i class="fa fa-eye" aria-hidden="true"></i>
 View</a>
                    </div>
                    <br>
                    @endforeach
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
