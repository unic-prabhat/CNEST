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



<form action="{{URL::to('manageuser/'.$user->id)}}" method="POST">

  @csrf

  @method('PUT')



  <div class="row">

      <div class="col-md-6">

        <div class="form-group">

           <label for="name">Name:</label>

                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{$user->name}}" required>

        </div>

       </div>



       <div class="col-md-6">

        <div class="form-group">

          <label for="username">Username:</label>

                <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" value="{{$user->username}}" required>

        </div>

      </div>

   </div>



   <div class="row">

       <div class="col-md-6">

         <div class="form-group">

            <label for="email">Email:</label>

                   <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="{{$user->email}}" readonly required>

         </div>

        </div>



        <div class="col-md-6">

         <div class="form-group">

           <label for="userrole">Admin Type:</label>

           <select class="form-control" id="userrole" name="userrole" required>

             <option <?php echo ($user->userrole == 1) ? 'selected' : ''; ?> value="1">Super Admin</option>

             <option <?php echo ($user->userrole == 2) ? 'selected' : ''; ?> value="2">Sales User</option>

           </select>

         </div>

       </div>

    </div>





    <div class="row">

        <div class="col-md-6">

          <div class="form-group">

             <label for="acinstatus">Active/Inactive Status:</label>

             <select class="form-control" id="acinstatus" name="acinstatus" required>

               <option <?php echo ($user->acinstatus == 1) ? 'selected' : ''; ?> value="1">Active</option>

               <option <?php echo ($user->acinstatus == 2) ? 'selected' : ''; ?> value="2">Inactive</option>

             </select>

          </div>

         </div>



         <div class="col-md-6">

          <div class="form-group">

          <label for="password">Password:</label>

          <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">

          </div>

        </div>


    

     </div>





     <div class="row">



         <div class="col-md-12">

           <div class="form-group">

              <label for="btnsub"></label>

             <button type="submit" class="btn btn-primary">UPDATE</button>

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

