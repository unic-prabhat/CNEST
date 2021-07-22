@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          @if(count($datas)>0)
            @foreach($datas as $data)
            <div class="card">
                <div class="card-header"><b>Company Name:</b> {{$data->company_name}}</div>

                <div class="card-body">
                      <span style="color: #4285f4;font-weight: 800;">{{$data->tot}}</span> Record found.
                      <a href="{{URL::to('UserAllCompanyList/CompanyDetails/'.$data->company_name)}}" class="btn btn-sm btn-info" style="float:right">View Details</a>
                </div>
            </div>
            <br>
            @endforeach
          @endif
        </div>
    </div>
</div>
@endsection
