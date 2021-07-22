@foreach($allsc = App\Scheduletask::latest()->where('lead_id',$leadid)->orderByRaw("FIELD(id,'upcoming') ASC")->orderBy('status','DESC')->paginate(6) as $scheduletask)
<div id="all_schedule">
   <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast" id="deleteall34">
      <div class="toast-header">
         @if($scheduletask->status =='completed')
         <i class="mdi mdi-circle-slice-8 font-18 mr-1 text-success">
         @endif
         </i> @if($scheduletask->status =='completed') <span class="badge badge-soft-success becomegreen cla{{$scheduletask->id}}">{{$scheduletask->status}}</span> @elseif($scheduletask->status =='overdue') <span class="badge badge-soft-danger cla{{$scheduletask->id}} overdue">{{$scheduletask->status}}</span> @else <span class="badge badge-soft-danger cla{{$scheduletask->id}}">{{$scheduletask->status}}</span> @endif
         <span class="mr-auto"><label id="runtime" class="mt-3"></label>{{$scheduletask->created_at->diffForHumans()}}</span>
         <small class="text-muted">{{$scheduletask->user->name}}</small>
         <!-- <a href="{{URL::to('/XXdeletescheduletask/'.$scheduletask->id)}}" onclick="return confirm('Are you sure want to delete?')"><span aria-hidden="true">×</span></a> -->
         <a href="javascript:void(0);" onclick="return deleteScheduleTask('{{$scheduletask->id}}');"><span aria-hidden="true">×</span></a>

      </div>
      <strong style="position: relative;top: 5px;left: 12px;">{{$scheduletask->title}}</strong>
      <div class="toast-body">
         <div class="table-responsive">
            <table class="table table-striped mb-0">
               <tbody>
                  <tr>
                     <td>
                        <div><i class="ti-calendar"></i>&nbsp;{{$scheduletask->date}}</div>
                        <div><i class="ti-alarm-clock"></i>&nbsp;{{date("g:i a", strtotime($scheduletask->date))}}</div>
                     </td>
                     <td>
                        <div>@if($scheduletask->type == 'call') <i class="ti-mobile"></i> {{$scheduletask->type}} @elseif($scheduletask->type == 'email') <i class="ti-email"></i> {{$scheduletask->type}} @else <i class="fas fa-user-clock"></i> {{$scheduletask->type}} @endif</div>
                        <div>{{$scheduletask->note}}</div>
                     </td>
                     <td> &nbsp; </td>
                     <td>
                        @if($scheduletask->status == 'completed') <button type="button" class="btn btn-dark waves-effect waves-light btn-sm float-right status_complete disab"
                           disabled data-id="{{$scheduletask->id}}">Completed</button> @else <button type="button" class="btn btn-dark waves-effect waves-light btn-sm float-right status_complete" data-id="{{$scheduletask->id}}">Completed</button> @endif
                     </td>
                  </tr>
               </tbody>
            </table>
            <!--end /table-->
         </div>
      </div>
   </div>
</div>
@endforeach
<center>
   <div class="sche schedulepagination">{{$allsc->links()}}</div>
</center>
