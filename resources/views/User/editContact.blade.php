@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Contact</div>


                <div class="card-body">
                      <form class="text-center" action="{{URL::to('User/'.$data->id)}}" method="post">
                      {{ method_field('PUT') }}
                      {{ csrf_field() }}
                        <p class="h4 mb-4">Update Contact</p>
                        <div class="form-row mb-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="FirstName" name="first_name" value="{{$data->first_name}}">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="LastName" name="last_name" value="{{$data->last_name}}">
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Email" name="email" value="{{$data->email}}">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Phone" name="phone_number" value="{{$data->phone_number}}">
                            </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Website URL" name="website_url" value="{{$data->website_url}}">
                        <br>
                        <input type="text" class="form-control" placeholder="Company Name" name="company_name"  value="{{$data->company_name}}">
                        <br>
                        <input type="text" class="form-control" placeholder="Country" name="country" value="{{$data->country}}">
                        <br>
                        <label>Lead Status</label>
                        <select class="browser-default custom-select mb-4" name="contact_lead_status">
                               <option value="{{$data->contact_lead_status}}" selected>{{$data->contact_lead_status}}</option>
                               <option value="HOT">HOT</option>
                               <option value="COLD">COLD</option>
                               <option value="WARM">WARM</option>
                        </select>
                        <button class="btn btn-primary" type="submit">Update</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
