@extends('layouts.master')
@section('content')
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Import Excel
                    </div>
                    <div class="card-body">
                          <form action="{{route('upload.excel')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="excel">
                    <button type="submit">Upload</button>
                </form>
                    </div>
                </div>
              
            </div>
        </div>
@endsection