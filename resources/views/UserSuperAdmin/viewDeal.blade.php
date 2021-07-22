@extends('layouts.app')

@section('style')
<style media="screen">
  .myBox{
    padding: 9px;
    margin-top: 5px;
    border-radius: 3px;
    background-color:#fff;
    line-height: 0px;
    font-size: 12px;
    border: 1px solid #dddcdc;
  }

  .underDiv{
    background-color:#f1f4f8;
    margin-top: 18px;
    font-size: 9px;
    margin: 9px -10px -10px -10px;
    background-color:#f1f4f8;
    margin-top: 18px;
    padding: 5px;
    margin: 9px -10px -10px -10px;
    border-bottom: 1px solid#dddcdc;
    border-radius: 3px;
    border-left: 1px solid#dddcdc;
    border-right: 1px solid#dddcdc;
    text-align: right;
  }

  .dealFirst{
    margin-top: -22px;
margin-left: 41px;
font-size: 10px;
margin-bottom: 2px;
  }
  .dealSecond{
    margin-left: 40px;
font-size: 13px;
  }

  .card h6{
    color: black;
    font-size: 14px;
margin-left: 20px;
text-transform: uppercase;
letter-spacing: 1px;
  }

  .card h5{
    color:#4285f4;
font-size: 14px;
margin: -6px 0px -16px 20px;
letter-spacing: 1px;
  }
/*====================*/
  #ideal_proposal_num{
    float: right;
margin-right: 4px;
color:#9f9e9e;
font-size: 11px;
  }

  #follow_up_num{
    float: right;
margin-right: 4px;
color:#9f9e9e;
font-size: 11px;
  }

  #negotiation_num{
    float: right;
margin-right: 4px;
color:#9f9e9e;
font-size: 11px;
  }

  #lost_num{
    float: right;
margin-right: 4px;
color:#9f9e9e;
font-size: 11px;
  }

  #won_num{
    float: right;
margin-right: 4px;
color:#9f9e9e;
font-size: 11px;
  }
/*====================*/
  #leads{
    float: right;
color:#9f9e9e;
font-size: 11px;
margin-right: 19px;
  }

  .card > hr {
    margin-right: 20px;
    margin-left: 20px;
    margin-top: 24px;
    margin-bottom: -10px;
}

.menuImg{
  float: right;
margin-right: 20px;
height: 9px;
}

  .card-1{
    border-top: 5px solid #4285f4;
border-radius: 0px;
background-color: #f1f4f9;;
  }
  .card-2{
    border-top: 5px solid #2BBBAD;
border-radius: 0px;
background-color: #f1f4f9;
  }
  .card-3{
    border-top: 5px solid #ffbb33;
border-radius: 0px;
background-color: #f1f4f9;
  }
  .card-4{
    border-top: 5px solid #ff4444;
border-radius: 0px;
background-color: #f1f4f9;
  }
  .card-5{
    border-top: 5px solid #00C851;
border-radius: 0px;
background-color: #f1f4f9;
  }
</style>
@endsection
@section('content')











<div class="row">
                  <div class="col-sm-12">
                     <div class="page-title-box">
                        <div class="float-right">
                           <!-- <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                              <li class="breadcrumb-item"><a href="javascript:void(0);">Projects</a></li>
                              <li class="breadcrumb-item active">Kanban</li>
                           </ol> -->
                           <!--KANBAN AND TABLE SWICH-->
                           <!-- <i class="fa fa-table" aria-hidden="true" id="kanbanBtn" style="height:50px">
                           </i> -->

                           <img src="https://img.icons8.com/ios-filled/50/000000/show-all-views.png" id="kanbanBtn" data-toggle="tooltip" data-placement="top" title="Kanban" height="30px">
                           &nbsp;
                           <img src="https://img.icons8.com/ios/50/000000/table-1.png"  id="listBtn" data-toggle="tooltip" data-placement="top" title="Table" height="30px">
                           &nbsp;&nbsp;&nbsp;&nbsp;
                           <!-- <i class="fa fa-list-alt" aria-hidden="true" id="listBtn"></i> -->
                           <!--KANBAN AND TABLE SWICH-->
                        </div>
                        <h4 class="page-title">Deals</h4>
                     </div>
                     <!--end page-title-box-->
                  </div>
                  <!--end col-->
               </div>
               <!-- end page title end breadcrumb -->
               <div class="row">
                  <div class="col-12">
                     <div class="card">

                           <!--=====***TABLE VIEW***=====-->
                           <div class="card-body" id="list" style="display:none">
                             <!-- <center><h4>Table View</h4></center><br> -->
                             <div class="table-responsive dash-social">
                                <table id="datatable" class="table">
                                   <thead class="thead-light">


                             <!-- <table class="table"> -->
                               <!-- <thead class=""> -->
                                 <tr>
                                   <th scope="col"></th>
                                   <th scope="col">Name</th>
                                   <th scope="col">Company</th>
                                   <th scope="col">Contact</th>
                                   <th scope="col">Website</th>
                                   <th scope="col">Deal Name</th>
                                   <th scope="col">Deal Stage</th>
                                   <th scope="col">Deal Amount</th>
                                   <th scope="col">Country</th>
                                 </tr>
                               </thead>
                               <tbody id="viewTable">
                                 <!--TABLE DATA HERE-->
                               </tbody>
                             </table>
                           </div>
                           </div>
                           <!--=====TABLE VIEW=====-->
                           <!--=====KANBAN VIEW=====-->
                           <div class="card-body" id="kanban">
                             <!-- <center><h4>Kanban View</h4></center><br> -->
                               <div class="row" id="viewKanban">
                                 <div class="col">
                                   <div class="card card-1">

                                         <h6>Ideal Proposal <span class="menuImg"><img src="https://img.icons8.com/android/14/000000/menu.png"></span></h6>
                                         <h5>$<span id="ideal_proposal_amount"></span> <span id="leads">Leads</span> <span id="ideal_proposal_num">0</span></h5>
                                         <!-- <h6>Ideal Proposal <span id="ideal_proposal_num">0</span> ($<span id="total_ideal_proposal_num"></span>)</h6> -->
                                          <hr>
                                       <div class="card-body" id="ideal_proposal">
                                         @if(count($data1)>0)
                                           @foreach($data1 as $file1)



                                               <div class="myBox" id="{{$file1->id}}">
                                                 <div class="">
                                                      <img src="https://img.icons8.com/small/16/00b200/filled-circle.png" height="12px" style="float:right">&nbsp;&nbsp;<img src="https://img.icons8.com/windows/32/4285f4/settings.png" height="12px" style="float:right">
                                                 </div>
                                                 <img src="{{URL::to($file1->image_path)}}" style="float:left" class="z-depth-1 rounded-circle" height="33px" onError="this.onerror=null;this.src='https://eclub.urbanfox.store/media/images/user.png';">

                                                 <a href="{{URL::to('SuperAdmin/'.$file1->id)}}"><p class="dealSecond">{{$file1->company_name}}</p></a>
                                                 <p class="dealFirst">{{$file1->first_name}} {{$file1->last_name}}</p>
                                                 <!-- <p>{{$file1->deal_name}}</p> -->
                                                 <!-- <p class="ideal_proposal_num">${{$file1->deal_amount}}</p> -->
                                                 <div class="underDiv">
                                                   <span><img src="https://img.icons8.com/material-sharp/24/4285f4/speaker-notes.png" height="10px"> 2 Notes</span>
                                                 </div>
                                               </div>


                                           @endforeach
                                         @endif
                                       </div>
                                   </div>
                                 </div>
                                 <div class="col">
                                   <div class="card card-2">

                                         <!-- <h6><span id="follow_up_num">0</span> Follow up $<span id="follow_up_amount"></span></h6> -->

                                         <h6>Follow up <span class="menuImg"><img src="https://img.icons8.com/android/14/000000/menu.png"></span></h6>
                                         <h5>$<span id="follow_up_amount"></span> <span id="leads">Leads</span> <span id="follow_up_num">0</span></h5>
                                         <hr>
                                       <div class="card-body" id="follow_up">
                                         @if(count($data2)>0)
                                           @foreach($data2 as $file2)


                                             <div class="myBox" id="{{$file2->id}}">
                                               <div class="">
                                                    <img src="https://img.icons8.com/small/16/00b200/filled-circle.png" height="12px" style="float:right">&nbsp;&nbsp;<img src="https://img.icons8.com/windows/32/4285f4/settings.png" height="12px" style="float:right">
                                               </div>
                                               <img src="{{URL::to($file2->image_path)}}" style="float:left" class="z-depth-1 rounded-circle" height="33px" onError="this.onerror=null;this.src='https://eclub.urbanfox.store/media/images/user.png';">

                                               <a href="{{URL::to('SuperAdmin/'.$file2->id)}}"><p class="dealSecond">{{$file2->company_name}}</p></a>
                                               <p class="dealFirst">{{$file2->first_name}} {{$file2->last_name}}</p>

                                               <div class="underDiv">
                                                 <span><img src="https://img.icons8.com/material-sharp/24/4285f4/speaker-notes.png" height="10px"> 2 Notes</span>
                                               </div>
                                             </div>
                                           @endforeach
                                         @endif
                                       </div>
                                   </div>
                                 </div>
                                 <div class="col">
                                   <div class="card card-3">

                                         <!-- <h6><span id="negotiation_num">0</span> Negotiation $<span id="negotiation_amount"></span></h6> -->

                                         <h6>Negotiation <span class="menuImg"><img src="https://img.icons8.com/android/14/000000/menu.png"></span></h6>
                                         <h5>$<span id="negotiation_amount"></span> <span id="leads">Leads</span> <span id="negotiation_num">0</span></h5>
                                         <hr>

                                       <div class="card-body" id="negotiation">
                                         @if(count($data3)>0)
                                           @foreach($data3 as $file3)
                                           <div class="myBox" id="{{$file3->id}}">
                                             <div class="">
                                                  <img src="https://img.icons8.com/small/16/00b200/filled-circle.png" height="12px" style="float:right">&nbsp;&nbsp;<img src="https://img.icons8.com/windows/32/4285f4/settings.png" height="12px" style="float:right">
                                             </div>
                                             <img src="{{URL::to($file3->image_path)}}" style="float:left" class="z-depth-1 rounded-circle" height="33px" onError="this.onerror=null;this.src='https://eclub.urbanfox.store/media/images/user.png';">

                                             <a href="{{URL::to('SuperAdmin/'.$file3->id)}}"><p class="dealSecond">{{$file3->company_name}}</p></a>
                                             <p class="dealFirst">{{$file3->first_name}} {{$file3->last_name}}</p>

                                             <div class="underDiv">
                                               <span><img src="https://img.icons8.com/material-sharp/24/4285f4/speaker-notes.png" height="10px"> 2 Notes</span>
                                             </div>
                                           </div>
                                           @endforeach
                                         @endif
                                       </div>
                                   </div>
                                 </div>
                                 <div class="col">
                                   <div class="card card-4">

                                         <!-- <h6><span id="lost_num">0</span> Lost $<span id="lost_amount"></span></h6> -->

                                         <h6>Lost <span class="menuImg"><img src="https://img.icons8.com/android/14/000000/menu.png"></span></h6>
                                         <h5>$<span id="lost_amount"></span> <span id="leads">Leads</span> <span id="lost_num">0</span></h5>
                                         <hr>

                                       <div class="card-body" id="lost">
                                         @if(count($data4)>0)
                                           @foreach($data4 as $file4)
                                           <div class="myBox" id="{{$file4->id}}">
                                             <div class="">
                                                  <img src="https://img.icons8.com/small/16/00b200/filled-circle.png" height="12px" style="float:right">&nbsp;&nbsp;<img src="https://img.icons8.com/windows/32/4285f4/settings.png" height="12px" style="float:right">
                                             </div>
                                             <img src="{{URL::to($file4->image_path)}}" style="float:left" class="z-depth-1 rounded-circle" height="33px" onError="this.onerror=null;this.src='https://eclub.urbanfox.store/media/images/user.png';">

                                             <a href="{{URL::to('SuperAdmin/'.$file4->id)}}"><p class="dealSecond">{{$file4->company_name}}</p></a>
                                             <p class="dealFirst">{{$file4->first_name}} {{$file4->last_name}}</p>

                                             <div class="underDiv">
                                               <span><img src="https://img.icons8.com/material-sharp/24/4285f4/speaker-notes.png" height="10px"> 2 Notes</span>
                                             </div>
                                           </div>
                                           @endforeach
                                         @endif
                                       </div>
                                   </div>
                                 </div>
                                 <div class="col">
                                   <div class="card card-5">

                                         <!-- <h6><span id="won_num">0</span> WON $<span id="won_amount"></span></h6> -->
                                         <h6>Won <span class="menuImg"><img src="https://img.icons8.com/android/14/000000/menu.png"></span></h6>
                                         <h5>$<span id="won_amount"></span> <span id="leads">Leads</span> <span id="won_num">0</span></h5>
                                         <hr>

                                       <div class="card-body" id="won">
                                         @if(count($data5)>0)
                                           @foreach($data5 as $file5)
                                           <div class="myBox" id="{{$file5->id}}">
                                             <div class="">
                                                  <img src="https://img.icons8.com/small/16/00b200/filled-circle.png" height="12px" style="float:right">&nbsp;&nbsp;<img src="https://img.icons8.com/windows/32/4285f4/settings.png" height="12px" style="float:right">
                                             </div>
                                             <img src="{{URL::to($file5->image_path)}}" style="float:left" class="z-depth-1 rounded-circle" height="33px" onError="this.onerror=null;this.src='https://eclub.urbanfox.store/media/images/user.png';">

                                             <a href="{{URL::to('SuperAdmin/'.$file5->id)}}"><p class="dealSecond">{{$file5->company_name}}</p></a>
                                             <p class="dealFirst">{{$file5->first_name}} {{$file5->last_name}}</p>

                                             <div class="underDiv">
                                               <span><img src="https://img.icons8.com/material-sharp/24/4285f4/speaker-notes.png" height="10px"> 2 Notes</span>
                                             </div>
                                           </div>
                                           @endforeach
                                         @endif
                                       </div>
                                   </div>
                                 </div>
                               </div>
                           </div>
                           <!--=====KANBAN VIEW=====-->
                     </div>
                  </div>
               </div>























<div class="container-fluid" hidden>
    <div class="card">
        <div class="card-header">My Deals
          <span style="font-size:30px; float:right; cursor: pointer;">
            <i class="fa fa-table" aria-hidden="true" id="kanbanBtn">
            </i>&nbsp;<i class="fa fa-list-alt" aria-hidden="true" id="listBtn"></i>
          </span>
        </div>
        <!--LIST VIEW-->


        <!--KANBAN VIEW-->

    </div>
</div>
@endsection

@section('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.min.js"></script>
<script>
        dragula([document.querySelector('#ideal_proposal'), document.querySelector('#follow_up'), document.querySelector('#negotiation'), document.querySelector('#lost'), document.querySelector('#won')])
        .on('drag', function (el) {
            var id = el.id;
            parentDiv = el.parentNode;
            var parentId = parentDiv.id;
            // console.log(parentId);=
            el.className = el.className.replace('ex-moved', '');
        }).on('drop', function (el) {
            var id = el.id;
            parentDiv = el.parentNode;
            var parentId = parentDiv.id;
            //console.log(id);
            //console.log('Suatus- '+parentId);
            $.ajax({
              url:'Deal/'+id+'/kanbanUpd',
              type: 'put',
              data:{
                "_token": "{{ csrf_token() }}",
                id:id,
                status:parentId
              },
              success:function(){
                getTable();
                myfun();
                myCount();
              },
              error:function(){
                console.log('Not Working Knaban Update');
              }
            });
            el.className += ' ex-moved';
            //sumAmount();
        });
        </script>
        <script>
        myfun();
        function myfun(){
          var count = $('#ideal_proposal').children().length;
          document.getElementById("ideal_proposal_num").innerHTML = count;
          var count = $('#follow_up').children().length;
          document.getElementById("follow_up_num").innerHTML = count;
          var count = $('#negotiation').children().length;
          document.getElementById("negotiation_num").innerHTML = count;
          var count = $('#lost').children().length;
          document.getElementById("lost_num").innerHTML = count;
          var count = $('#won').children().length;
          document.getElementById("won_num").innerHTML = count;
        }
        myCount();
        function myCount(){
          console.log('Working myCount');
          $.ajax({
            url:'DealShowAmount',
            type: 'post',
            data:{
              "_token": "{{ csrf_token() }}",
            },
            success:function(data){
              // console.log('Working..');
              document.getElementById('ideal_proposal_amount').innerHTML=data.amount1;
              document.getElementById('follow_up_amount').innerHTML=data.amount2;
              document.getElementById('negotiation_amount').innerHTML=data.amount3;
              document.getElementById('lost_amount').innerHTML=data.amount4;
              document.getElementById('won_amount').innerHTML=data.amount5;
              // console.log(data.state);
            },
            error:function(){
              console.log('Not Working');
            }
          });
        }
        </script>
        <!-- KANBAN AND TABLE SHOW HIDE   -->
        <script>
          $(document).ready(function(){
            $('#kanbanBtn').click(function(){
                $('#kanban').show();
                $('#list').hide();
            });
            $('#listBtn').click(function(){
                $('#kanban').hide();
                $('#list').show();
            });
          });
        </script>
        <script>
        //******** FETCH DATA ON TABLE
        getTable();
        function getTable(){
          $.get("_viewFetchDealTable", function(data){
            document.getElementById('viewTable').innerHTML=data;
          });
        }
        </script>
@endsection
