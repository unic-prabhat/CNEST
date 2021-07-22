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

  <div class="row">
      <div class="col-md-6">
        <div class="form-group">
           <label for="name"><strong>Name:</strong></label><br>
            {{$alluser->name}}

        </div>
       </div>

       <div class="col-md-6">
        <div class="form-group">
          <label for="username"><strong>Username:</strong></label><br>
            {{$alluser->username}}

        </div>
      </div>
   </div>

   <div class="row">
       <div class="col-md-6">
         <div class="form-group">
            <label for="email"><strong>Email:</strong></label><br>
              {{$alluser->email}}

         </div>
        </div>

        <div class="col-md-6">
         <div class="form-group">
           <label for="userrole"><strong>Admin Type:</strong></label><br>
           @php
           if($alluser->userrole==1){
             echo 'Super Admin';
           }else if($alluser->userrole==2){
             echo 'Sales User';
           }

           @endphp
         </div>
       </div>
    </div>


    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
             <label for="acinstatus"><strong>Active/Inactive Status:</strong></label><br>
             @php
             if($alluser->acinstatus==1){
               echo 'Active';
             }else if($alluser->acinstatus==2){
               echo 'Inactive';
             }

             @endphp
          </div>
         </div>

         <div class="col-md-6">
          <div class="form-group">


          </div>
        </div>
     </div>


     <div class="row">

         <div class="col-md-12">
           <div class="form-group">
              <label for="btnsub"></label>
               <a href="{{URL::to('manageuser')}}"><button class="btn btn-primary">BACK</button></a>
           </div>
          </div>

      </div>



     </div>

</div>






      </div>



   </div>

</div>







@endsection
