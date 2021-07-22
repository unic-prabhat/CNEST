@foreach($pagi = App\Call::latest()->where('lead_id',$leadid)->get() as $call)
<div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 100px;" id="deleteall{{$call->id}}">
   <!-- Position it -->
   <div style="position: absolute; top: 0; left: 0" class="prepend-call">
      <!-- Then put toasts within -->
      <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">
         <div class="toast-header">
            <i class="mdi mdi-circle-slice-8 font-18 mr-1 text-warning"></i>
            <strong class="mr-auto">{{date('F d,Y - H:i A',strtotime($call->created_at))}}</strong>
            <small class="text-muted">{{$call->user->name}}</small>
              <a href="javascript:void(0);" onclick="return callRemoval('{{$call->id}}');"><span aria-hidden="true">×</span></a>

         </div>
         <div class="toast-body">
            <div class="call-body">
               <div class="float-left">{{$call->call_status}}</div>
               <div class="float-right">{{$call->duration}}</div>
            </div>
         </div>
      </div>
      <!--end toast-->
   </div>
</div>
@endforeach
</div>
