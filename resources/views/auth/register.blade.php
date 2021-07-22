@extends('layouts.app')
@section('content')
 <div class="row high" style="margin-top: 4%;margin-left: 2%;margin-right: 2%;">
  <div class="col-md-12">
   <div class="card">
   <div class="card-body">

<form action="{{URL::to('regme')}}" method="POST">
  @csrf
  <div class="row">
      <div class="col-md-6">
        <div class="form-group">
           <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
        </div>
       </div>

       <div class="col-md-6">
        <div class="form-group">
          <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" required>
        </div>
      </div>
   </div>

   <div class="row">
       <div class="col-md-6">
         <div class="form-group">
            <label for="email">Email:</label>
                   <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
                   @if(isset($exis))
                   {{$exis}}
                   @endif
         </div>
        </div>

        <div class="col-md-6">
         <div class="form-group">
           <label for="userrole">Admin Type:</label>
           <select class="form-control" id="userrole" name="userrole" required>
             <option value="1">Super Admin</option>
             <option value="2">Sales User</option>
           </select>
         </div>
       </div>
    </div>


    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
             <label for="acinstatus">Active/Inactive Status:</label>
             <select class="form-control" id="acinstatus" name="acinstatus" required>
               <option value="1">Active</option>
               <option value="2">Inactive</option>
             </select>
          </div>
         </div>

         <div class="col-md-6">
          <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required>
          </div>
        </div>
     </div>


     <div class="row">

         <div class="col-md-12">
           <div class="form-group">
              <label for="btnsub"></label>
             <button type="submit" class="btn btn-primary">REGISTER</button>
           </div>
          </div>

      </div>


  </form>

     </div>

</div>






      </div>



   </div>

@endsection
