@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Contact</div>

                @if (count($errors) > 0)
                  @foreach ($errors->all() as $error)
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong></strong> {{ $error }}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  @endforeach
                @endif


                <div class="card-body">
                      <form class="text-center" action="{{ action('Users\ContactlistController@store') }}" method="post">
                        {{ csrf_field() }}
                        <p class="h4 mb-4">Add Contact</p>
                        <div class="form-row mb-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="FirstName" name="first_name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="LastName" name="last_name">
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Email" name="email">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Phone" name="phone_number">
                            </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Website URL" name="website_url">
                        <br>
                        <input type="text" class="form-control" placeholder="Company Name" name="company_name">
                        <br>
                        <input type="text" class="form-control" placeholder="Country" name="country">


                        <input type="text" class="form-control" placeholder="Country" name="generated_by" value="{{Auth::user()->username}}" hidden>
                        <br>

                        <button class="btn btn-primary" type="submit">Add now</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
