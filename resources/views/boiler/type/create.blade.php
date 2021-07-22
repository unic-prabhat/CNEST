@extends('layouts.master')
@section('content')
    <div class="page-content-tab">
        <div class="container-fluid">
            <div class="col-md-8 mt-5">
                          <div class="card">
                    <div class="card-header">
                        Create Boiler
                    </div>
                    
                    <form action="{{route('boiler.choice.store')}}" method="post">
                        @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Boiler Name</label>
                            <select class="form-control" name="boilerchoise_id">
                                <option>Select Boiler Children</option>
                                @foreach($boilerchoises as $boilerchoise)
                                <option value="{{$boilerchoise->id}}">{{$boilerchoise->name}}</option>
                                @endforeach
                            </select>
                            
                        </div>
                        <div class="form-group">
                            <label>Select boiler chouice type</label>
                            <input class="form-control" placeholder="Enter Boiler choice type" name="name"/>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-secondary">Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
      
            </div>
    </div>
    
@endsection