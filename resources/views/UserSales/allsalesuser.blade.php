@extends('layouts.master')
@section('css')
<style>
   .row{
   margin-left: 7px !important;
   }
   span.user-separator-xs {
   margin-left: 7px;
   }
</style>
@endsection
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-lg-12">
         <div class="card">
            <div class="card-body">
               <div class="moreFilterDash mb-4">
                  <div>
                     <h4 class="header-title mt-0 mb-3 float-left mr-4">All Users</h4>
                     <ul id="addfilteroption">
                     </ul>
                  </div>
                  <div>
                     <a href="{{URL::to('manageuser/create')}}"><button type="button" class="btn btn-primary"  id="custom-btn">
                     + Add New</button></a>
                  </div>
               </div>
               <div class="table-responsive" style="position:relative">
                  <div id="getTableresponsive">
                     <table class="table" id="datatable">
                        <thead class="thead-light">
                           <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>UserRole</th>
                              <th>Color Type</th>
                              <th>Status</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach(App\User::all()->sortByDesc('id') as $user)
                           <tr>
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>
                              <td>
                                 @if($user->userrole == 1)
                                 Admin
                                 @else
                                 SalesUser
                                 @endif
                              </td>
                              <td><a href="javascript:void(0);" style="background-color:{{$user->colortype}};box-shadow: 0 1px 2px 0 {{$user->colortype}};padding: 7px 27px 6px 27px;border-radius: 3px;">&nbsp;</a></td>
                              <td>
                                 @if($user->acinstatus==1)
                                 <span class="user-active"><a onclick="return ActiveInactivestatus(1,{{$user->id}});"><button type="button" class="btn btn-gradient-primary waves-effect waves-light" id="sa-params">Active</button></a></span>
                                 @else
                                 <span class="user-active"><a onclick="return ActiveInactivestatus(2,{{$user->id}});"><button type="button" class="btn btn-danger waves-effect waves-light" id="sa-params">Inactive</button></a></span>
                                 @endif
                              </td>
                              <td><a href="{{URL::to('manageuser/'.$user->id)}}"><button id="bEdit" type="button" class="btn btn-sm btn-soft-success btn-circle mr-2"><i class="far fa-eye"></i></button></a><span class="user-separator">&nbsp;</span><a href="{{URL::to('manageuser/'.$user->id.'/edit')}}"><button id="bEdit" type="button" class="btn btn-sm btn-soft-success btn-circle mr-2"><i class="dripicons-pencil"></i></button></a> <a href="{{URL::to('manageuser/delete/'.$user->id)}}"><button id="bElim" type="button" class="btn btn-sm btn-soft-danger btn-circle" onclick="return confirm('Are you sure you want to delete this User?');"><i class="dripicons-trash" aria-hidden="true"></i></button></a><span class="user-separator-xs">&nbsp;</span>
                              </td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@section('js')
<script>
   function ActiveInactivestatus(v,id){
   
   var va =v;
   
   var uid = id;
   
   
   
       $.ajax({
   
       type:'POST',
   
       url: '/crmnest/activeinactivest',
   
       data: {_token: CSRF_TOKEN, id:uid,val:va},
   
         success:function(result){
   
           location.reload();
   
         },
   
         error:function(result){
   
           alert('Failed');
   
         }
   
       });
   
   }
   
</script>
@endsection
@endsection