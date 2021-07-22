@foreach(App\Cmodel::where('lead_id',$leadid)->orderBy('created_at','DESC')->get() as $attach)
@if($attach->attachment_file!=NULL)
<div class="toast fade show mt-3 jpg">
   <div class="toast-header">
      <i class="mdi mdi-circle-slice-8 font-18 mr-1 text-warning"></i>{{date('F d,Y - H:i A',strtotime($attach->created_at))}}
      <span class="mr-auto">&nbsp;&nbsp;{{$attach->created_at->diffForHumans()}}</span>
      <small class="text-muted">{{$attach->user->name}}</small>
      <button style="border: unset;background: #fff;font-size: 15px;font-weight: 600;cursor: pointer;">
      <a href="javascript:void(0);" onclick="return attachmentRemoval('{{$attach->id}}','{{$attach->filename}}');"><span aria-hidden="true">×</span></a>
      </button>
   </div>
   <div class="toast-body">
      @php($formats = strtolower($attach->format))
      @if($formats == 'jpg')
      <img src="{{asset('public/attachment/'.$attach->attachment_file)}}" width="110" class="zoom_image" onclick="modal_show(this)"/>
      @elseif($formats == 'png')
      <img src="{{asset('public/attachment/'.$attach->attachment_file)}}" width="110" class="zoom_image" onclick="modal_show(this)"/>
      @elseif($formats == 'pdf')
      <a href="{{asset('public/attachment/'.$attach->attachment_file)}}" target="_blank">{{$attach->filename}}</a>
      @elseif($formats == 'docx')
      <a href="{{asset('public/attachment/'.$attach->attachment_file)}}" target="_blank">{{$attach->filename}}</a>
      @elseif($formats == 'txt')
      <a href="{{asset('public/attachment/'.$attach->attachment_file)}}" target="_blank">{{$attach->filename}}</a>
      @endif
   </div>
</div>
@endif
@endforeach
