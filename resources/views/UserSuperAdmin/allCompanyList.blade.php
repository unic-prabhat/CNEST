@extends('layouts.app')
@section('content')
<br>
<div class="row justify-content-center">
  <div class="col-8">
     <div class="card">
        <div class="card-body"><!-- <button type="button" class="btn btn-primary waves-effect waves-light float-right mb-3" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">+ Add New</button> -->
           <!-- <a href="{{URL::to('SuperAdmin/create')}}" type="button" class="btn btn-primary waves-effect waves-light float-right mb-3">Create Contact</a> -->
           <!-- <h4 class="header-title mt-0 mb-3">All Company</h4> -->
           <div class="table-responsive dash-social">
              <table id="datatable" class="table">
                 <thead class="thead-light">
                    <tr>
                       <th>Name</th>
                       <th>Number</th>
                    </tr>
                    <!--end tr-->
                 </thead>
                 <tbody>
                   @if(count($datas)>0)
                     @foreach($datas as $data)
                    <tr>
                      <td><a href="{{URL::to('SuperAdminAllCompanyList/CompanyDetails/'.$data->company_name)}}">{{$data->company_name}}</a></td>
                      <td><a href="{{URL::to('SuperAdminAllCompanyList/CompanyDetails/'.$data->company_name)}}">{{$data->tot}}</a></td>
                    </tr>
                    @endforeach
                  @endif
                 </tbody>
              </table>
              <span style="float:right">{{ $datas->links() }}</span>
           </div>
        </div>
     </div>
  </div>
</div>
@endsection
