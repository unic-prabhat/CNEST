@extends('layouts.master')
@section('content')
    <div class="page-content-tab">
        <div class="container-fluid">
            <div class="col-md-8 mt-5">
                          <div class="card">
                    <div class="card-header">
                        Create Boiler Choice
                    </div>
                    <form action="{{route('boilerchoice.store')}}" method="post">
                        @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Select Boiler</label>
                            <select class="form-control" name="boiler_id">
                                <option>Select Boiler</option>
                                @if(count($boilers) > 0)
                                    @foreach($boilers as $boiler)
                                        <option value="{{$boiler->id}}">{{$boiler->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Boiler Choice</label>
                            <input type="text" name="name" class="form-control">
                            
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