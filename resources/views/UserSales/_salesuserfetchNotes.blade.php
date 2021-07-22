@foreach($notes = App\Note::latest()->where('lead_id',$leadid)->get() as $lea)
<div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 100px;" id="delenotes{{$lea->id}}">
   <!-- Position it -->
   <div style="position: absolute; top: 0; left: 0" class="noteinterface">
      <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">
         <div class="toast-header">
            <i class="mdi mdi-circle-slice-8 font-18 mr-1 text-warning"></i>
            <strong class="mr-auto">{{date('F d,Y - H:i A',strtotime($lea->created_at))}}</strong>
            <small class="text-muted">{{auth()->user()->name}}</small>
            @if(Auth::user()->isAdmin() == 1)
            <a href="javascript:void(0);" onclick="return noteRemoval('{{$lea->id}}');"><span aria-hidden="true">×</span></a>
            @endif
         </div>
         <div class="toast-body">
            {{$lea->message}}
         </div>
      </div>
      <!--end toast-->
   </div>
</div>
@endforeach
