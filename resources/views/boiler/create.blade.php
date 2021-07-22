@extends('layouts.master')
@section('content')
    <div class="page-content-tab">
        <div class="container-fluid">
            <div class="col-md-8 mt-5">
                          <div class="card">
                    <div class="card-header">
                        Create Boiler
                    </div>
                    <form action="{{route('boiler.store')}}" method="post">
                        @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Boiler Name</label>
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