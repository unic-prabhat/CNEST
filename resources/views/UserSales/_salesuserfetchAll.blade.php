<!-- ============================== ALL SECTION ============================== -->
 @foreach(App\Cmodel::where('lead_id',$leadid)->orderBy('created_at','DESC')->get() as $led)
 @if($led->notes)
 <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast" id="deleteall{{$led->id}}">
    <div class="toast-header">
       <i class="mdi mdi-circle-slice-8 font-18 mr-1 text-info"></i>
       <div class="mr-auto"><strong>Note : </strong>{{date('F d,Y - H:i A',strtotime($led->created_at))}}</div>
       <small class="text-muted"></small>
       <a href="javascript:void(0);" onclick="return noteRemoval('{{$led->note_id}}');"><span aria-hidden="true">×</span></a>

    </div>
    <div class="toast-body">
       <div class="float-left">{{$led->notes}}</div>
       <div class="float-right">{{$led->user->name}}</div>
    </div>
 </div>
 @elseif($led->calls)
 <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast" id="deleteall{{$led->id}}">
    <div class="toast-header">
       <i class="mdi mdi-circle-slice-8 font-18 mr-1 text-warning"></i>
       <div class="mr-auto"><strong>Call : </strong>{{date('F d,Y - H:i A',strtotime($led->created_at))}}</div>
       <small class="text-muted"></small>
       <a href="javascript:void(0);" onclick="return callRemoval('{{$led->call_id}}');"><span aria-hidden="true">×</span></a>

    </div>
    <div class="toast-body">
       <div class="call-body">
          <div class="float-left">{{$led->calls}}</div>
          <div class="float-right">{{$led->duration}}</div>
       </div>
    </div>
 </div>
 @endif
 @endforeach


 <!-- ALL  ATTACHMENT START ------>
 <div id="attachment_file_alltab">
    @foreach(App\Cmodel::where('lead_id',$leadid)->orderBy('created_at','DESC')->get() as $att)
    @if($att->attachment_file!=NULL)
    <div class="toast fade show mt-3 jpg">
       <div class="toast-header">
          <i class="mdi mdi-circle-slice-8 font-18 mr-1 text-warning"></i>{{date('F d,Y - H:i A',strtotime($att->created_at))}}
          <span class="mr-auto">&nbsp;&nbsp;{{$att->created_at->diffForHumans()}}</span>
          <small class="text-muted">{{$att->user->name}}</small>

          <a href="javascript:void(0);" onclick="return deleteAttachment('{{$att->id}}');"><span aria-hidden="true">×</span></a>
        
       </div>
       <div class="toast-body">
         @php($formats = strtolower($att->format))
         @if($formats == 'jpg')
         <img src="{{asset('public/attachment/'.$att->attachment_file)}}" width="110" class="zoom_image" onclick="modal_show(this)"/>
         @elseif($formats == 'png')
         <img src="{{asset('public/attachment/'.$att->attachment_file)}}" width="110" class="zoom_image" onclick="modal_show(this)"/>
         @elseif($formats == 'pdf')
         <a href="{{asset('public/attachment/'.$att->attachment_file)}}" target="_blank">{{$att->filename}}</a>
         @elseif($formats == 'docx')
         <a href="{{asset('public/attachment/'.$att->attachment_file)}}" target="_blank">{{$att->filename}}</a>
         @elseif($formats == 'txt')
         <a href="{{asset('public/attachment/'.$att->attachment_file)}}" target="_blank">{{$att->filename}}</a>
         @endif
       </div>
    </div>
    @endif
    @endforeach
 </div>
 <!-- ALL  ATTACHMENT END ------>
 <!-- SCHEDUE TASK START ALL ------>
 @foreach($allsc = App\Scheduletask::latest()->where('lead_id',$leadid)->orderByRaw("FIELD(id,'upcoming') ASC")->orderBy('status','DESC')->get() as $scheduletask)
 <div id="all_schedule">
    <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast" id="deleteall34">
       <div class="toast-header">
          @if($scheduletask->status =='completed')
          <i class="mdi mdi-circle-slice-8 font-18 mr-1 text-success">
          @endif
          </i> @if($scheduletask->status =='completed') <span class="badge badge-soft-success becomegreen cla{{$scheduletask->id}}">{{$scheduletask->status}}</span> @elseif($scheduletask->status =='overdue') <span class="badge badge-soft-danger cla{{$scheduletask->id}} overdue">{{$scheduletask->status}}</span> @else <span class="badge badge-soft-danger cla{{$scheduletask->id}}">{{$scheduletask->status}}</span> @endif
          <span class="mr-auto"><label id="runtime" class="mt-3"></label>{{$scheduletask->created_at->diffForHumans()}}</span>
          <small class="text-muted">{{$scheduletask->user->name}}</small>
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
 <!-- SCHEDUE TASK START ENDING ALL------>
 <!-- QUOTE GEN SECTION START ALL------>
 <table class="table">
    <tbody>
       @foreach(App\LeadQuotation::where('lead_id',$leadid)->latest()->get() as $qtn)
       <tr>
          <th style="text-transform: capitalize">
             @php($leadownerid=App\Lead::where('id',$leadid)->first()->userAssign_id)
             {{App\User::where('id',$leadownerid)->first()->name}}
          </th>
          <th>
             @if($qtn->cus_email!=NULL)
             {{$qtn->cus_email}}
             @endif
          </th>
          <th></th>
          <td>{{$qtn->created_at->diffForHumans()}}</td>
          <td> <a href="{{URL::to('pdfgenerate/'.$qtn->id)}}" target="_blank"> <i class="fas fa-file-pdf"></i> PDF</a> </td>
          <td> <a href="{{URL::to('/generate-quotation/step1/'.$leadid.'/'.$qtn->main_uniqid)}}" target="_blank"> <i class="far fa-edit"></i> </a> </td>
          <td>
             <a onclick="return DeleteQuote({{$qtn->id}});"><span aria-hidden="true" style="font-size: 17px;cursor: pointer;">×</span></a>
          </td>
       </tr>
       @endforeach
    </tbody>
 </table>
 <!-- QUOTE GEN SECTION START ALL------>
 <!-- ============================== ALL SECTION ============================== -->
