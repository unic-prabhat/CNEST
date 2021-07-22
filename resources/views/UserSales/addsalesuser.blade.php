@extends('layouts.master')
@section('css')
<style>
.row{
  margin-left: 7px !important;
}
</style>
@endsection
@section('content')

<div class="container-fluid">
 <div class="row">
  <div class="col-md-12">
   <div class="card">
   <div class="card-body">

<form action="{{URL::to('manageuser')}}" method="POST">
  @csrf
  <div class="row">
      <div class="col-md-6">
        <div class="form-group">
           <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{old('name')}}" required>
        </div>
       </div>

       <div class="col-md-6">
        <div class="form-group">
          <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" value="{{old('username')}}" required>
        </div>
      </div>
   </div>

   <div class="row">
       <div class="col-md-6">
         <div class="form-group">
            <label for="email">Email:</label>
            @if(Session::has('emailflash'))
             <span style="color:red">{{Session::get('emailflash')}}</span>
            @endif
            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="{{old('email')}}" required>
         </div>
        </div>

        <div class="col-md-6">
         <div class="form-group">
           <label for="userrole">Admin Type:</label>
           <select class="form-control" id="userrole" name="userrole" required>
             <option value="1" @if(old('userrole')==1) selected @endif>Super Admin</option>
             <option value="2" @if(old('userrole')==2) selected @endif>Sales User</option>
           </select>
         </div>
       </div>
    </div>


    <div class="row">
        <div class="col-md-4">
          <div class="form-group">
             <label for="acinstatus">Active/Inactive Status:</label>
             <select class="form-control" id="acinstatus" name="acinstatus" required>
               <option value="1" @if(old('acinstatus')==1) selected @endif>Active</option>
               <option value="2" @if(old('acinstatus')==2) selected @endif>Inactive</option>
             </select>
          </div>
         </div>

         <div class="col-md-4">
          <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" value="{{old('password')}}" required>
          </div>
        </div>

        <div class="col-md-4">
         <div class="form-group">
         <label for="colortype">Color Type:</label>
         @if(Session::has('colorflash'))
          <span style="color:red">{{Session::get('colorflash')}}</span>
         @endif
         <input type="color" class="form-control" id="colortype" value="#506ee4" name="colortype" required>
         </div>
       </div>

     </div>



     <div class="row">

         <div class="col-md-12">
           <div class="form-group">
              <label for="btnsub"></label>
             <button type="submit" class="btn btn-primary">ADD</button>
           </div>
          </div>

      </div>


  </form>

     </div>

</div>






      </div>



   </div>

</div>

@endsection
