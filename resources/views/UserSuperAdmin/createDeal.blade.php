@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Create Deal</div>
                <!-- {{$data->id}} -->
                <div class="card-body">
                      <form class="text-center" action="{{URL::to('Deal/'.$data->id)}} " method="post">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        <p class="h4 mb-4"></p>
                        <input type="text" class="form-control" placeholder="Name" name="deal_name"  value="{{$data->deal_name}}">
                        <br>
                        <select class="browser-default custom-select" name="deal_stage">
                          <option value="" disabled selected>Deal Stage</option>
                          <option value="{{ $data->deal_stage }}">{{ $data->deal_stage }}</option>
                          <option value="ideal_proposal">Idea Proposal</option>
                          <option value="follow_up">Fllow Up</option>
                          <option value="negotiation">Negotiation</option>
                          <option value="lost">Deal Lost</option>
                          <option value="won">Deal Won</option>
                        </select>
                        <br><br>
                        <div class="form-row mb-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Amount" name="deal_amount" value="{{$data->deal_amount}}">
                            </div>
                            <div class="col">
                                <input type="date" class="form-control" placeholder="Expected Closing Date" name="deal_closing_date" value="{{$data->deal_closing_date}}">
                            </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Country" name="deal_owner" value="{{Auth::user()->username}}" readonly
                        <br>

                        <br>
                        <button class="btn btn-primary" type="submit"><i class="fa fa-plus" aria-hidden="true"></i>
 Add now</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
