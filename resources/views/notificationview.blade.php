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
    <strong>Total Notification:</strong><span>                                @php

                                    $ccc = App\Notification::where('status',0)->get();
                                        $arrcount = [];
                                    @endphp
                                    @foreach($ccc as $cc)
                                        @if($cc->notificationType == 'lead' && $cc->user_id != auth()->user()->id && auth()->user()->id != 1)

                                            @php

                                            continue;

                                            @endphp

                                            @elseif($cc->notificationType == 'deal' && $cc->user_id != auth()->user()->id && auth()->user()->id != 1)
                                            @php

                                            continue;

                                            @endphp
                                             @elseif($cc->notificationType == 'note' && $cc->user_id != auth()->user()->id && auth()->user()->id != 1)
                                            @php

                                            continue;

                                            @endphp
                                             @elseif($cc->notificationType == 'call' && $cc->user_id != auth()->user()->id && auth()->user()->id != 1)
                                            @php

                                            continue;

                                            @endphp
                                             @elseif($cc->notificationType == 'meeting' && $cc->user_id != auth()->user()->id && auth()->user()->id != 1)
                                            @php

                                            continue;

                                            @endphp
                                             @elseif($cc->notificationType == 'user' && auth()->user()->id != 1)
                                            @php

                                            continue;

                                            @endphp
                                             @else

                                            @php
                                                array_push($arrcount,$cc);
                                            @endphp
                                        @endif
                                    @endforeach
                                    {{count($arrcount)}}</span>


                                    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Name</th>
      <th class="th-sm">Action</th>
    </tr>
  </thead>
  <tbody>
    @php
      $notiUser = App\Notification::latest()->with('users:id,name','user')->where('status',0)->get()
    @endphp
    @foreach($notiUser as $notiu)
      @if($notiu->notificationType == 'user')
      @if(auth()->user()->id == 1)
    <tr>
      <td>
        <div class="notiTop">
          <a href="#" class="dropdown-item py-3">
            <div class="media">
              <div class="avatar-md bg-primary">
                <i class="typcn typcn-user-add-outline"></i>
              </div>
                <div class="media-body align-self-center ml-2 text-truncate">
                  <h6 class="my-0 font-weight-normal text-dark">One New user Created By @foreach($notiu->users as $us) {{$us->name}} @endforeach</h6>
                    <small class="float-left text-muted">{{$notiu->created_at->diffForHumans()}}</small>

                </div>
              </div>
              </a>
          </div>
      </td>
      <td>  <div class="noti_close" data-id="{{$notiu->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x icon-dual"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></div></td>
    </tr>
     @endif
     @elseif($notiu->notificationType == 'lead')
      @if($notiu->user_id == auth()->user()->id || auth()->user()->id == 1)
      <tr>
        <td>
          <div class="notiTop">
                <a href="{{route('lead.show',[$notiu->lead_id])}}" class="dropdown-item py-3">
                              <div class="media">
                                  <div class="avatar-md bg-success">
                                     <i class="la la-group text-white"></i>
                                  </div>
                                  <div class="media-body align-self-center ml-2 text-truncate">
                                    <h6 class="my-0 font-weight-normal text-dark">
                                          One New Lead has been assigned to {{$notiu->user->name}}</h6>
                                     <!--  <small class="text-muted mb-0">Dummy text of the printing and industry.</small> -->
                                     <small class="float-left text-muted">{{$notiu->created_at->diffForHumans()}}</small>

                                  </div><!--end media-body-->
                              </div><!--end media-->

                          </a><!--end-item-->

                          <!-- item-->
                              </div>
        </td>
        <td>  <div class="noti_close" data-id="{{$notiu->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x icon-dual"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></div></td>
      </tr>
      @endif

    @elseif($notiu->notificationType == 'deal')
      @if($notiu->user_id == auth()->user()->id || auth()->user()->id == 1)
      <tr>
        <td>
          <div class="notiTop">
                <a href="/crmnest/lead/{{$notiu->lead_id}}/deal" class="dropdown-item py-3">

          <div class="media">
              <div class="avatar-md bg-info">
                 <i class="la la-check-circle text-white"></i>
              </div>
              <div class="media-body align-self-center ml-2 text-truncate">
                <h6 class="my-0 font-weight-normal text-dark">
                      One New Deal created by @foreach($notiu->users as $us) {{$us->name}} @endforeach</h6>
                      <small class="float-left text-muted">{{$notiu->created_at->diffForHumans()}}</small>
                 <!--  <small class="text-muted mb-0">Dummy text of the printing and industry.</small> -->

              </div><!--end media-body-->
          </div><!--end media-->

      </a><!--end-item-->

          </div>
        </td>
        <td> <div class="noti_close" data-id="{{$notiu->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x icon-dual"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></div> </td>
      </tr>
      @endif
      @elseif($notiu->notificationType == 'call')
        @if($notiu->user_id == auth()->user()->id || auth()->user()->id == 1)
        <tr>
          <td>
            <div class="notiTop">
                   <a href="/crmnest/lead/{{$notiu->lead_id}}/deal" class="dropdown-item py-3">

    <div class="media">
        <div class="avatar-md bg-warning">
           <i class="typcn typcn-phone"></i>
        </div>
        <div class="media-body align-self-center ml-2 text-truncate">
          <h6 class="my-0 font-weight-normal text-dark">
                One Call created by @foreach($notiu->users as $us) {{$us->name}} @endforeach</h6>
                <small class="float-left text-muted">{{$notiu->created_at->diffForHumans()}}</small>
            <!-- <small class="text-muted mb-0">Dummy text of the printing and industry.</small> -->

        </div><!--end media-body-->
    </div><!--end media-->

</a><!--end-item-->

<!-- item-->
            </div>
          </td>
          <td>  <div class="noti_close" data-id="{{$notiu->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x icon-dual"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></div></td>
        </tr>
        @endif

        @elseif($notiu->notificationType == 'note')
          @if($notiu->user_id == auth()->user()->id || auth()->user()->id == 1)
          <tr>
            <td>
              <div class="notiTop">
                      <a href="/crmnest/lead/{{$notiu->lead_id}}/deal" class="dropdown-item py-3">

          <div class="media">
              <div class="avatar-md bg-success">
                 <i class="typcn typcn-edit"></i>
              </div>
              <div class="media-body align-self-center ml-2 text-truncate">
                <h6 class="my-0 font-weight-normal text-dark">
                      One Note created by @foreach($notiu->users as $us) {{$us->name}} @endforeach</h6>
               <!--    <small class="text-muted mb-0">Dummy text of the printing and industry.</small> -->
               <small class="float-left text-muted">{{$notiu->created_at->diffForHumans()}}</small>

              </div><!--end media-body-->
          </div><!--end media-->

      </a><!--end-item-->
      <!-- item-->

              </div>
            </td>
            <td>  <div class="noti_close" data-id="{{$notiu->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x icon-dual"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></div></td>
          </tr>
          @endif
  @elseif($notiu->notificationType == 'meeting')
    @if($notiu->user_id == auth()->user()->id || auth()->user()->id == 1)
    <tr>
      <td>
        <div class="notiTop">
            <a href="/crmnest/lead/{{$notiu->lead_id}}/deal" class="dropdown-item py-3">

                                  <div class="media">
                                      <div class="avatar-md bg-pink">
                                         <i class="typcn typcn-volume"></i>
                                      </div>
                                      <div class="media-body align-self-center ml-2 text-truncate">
                                        <h6 class="my-0 font-weight-normal text-dark">
                                              One Meeting created by @foreach($notiu->users as $us) {{$us->name}} @endforeach</h6>
                                         <!--  <small class="text-muted mb-0">Dummy text of the printing and industry.</small> -->
                                         <small class="float-left text-muted">{{$notiu->created_at->diffForHumans()}}</small>

                                      </div><!--end media-body-->
                                  </div><!--end media-->

                              </a><!--end-item-->
        </div>
      </td>
      <td>  <div class="noti_close" data-id="{{$notiu->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x icon-dual"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></div></td>
    </tr>
    @endif

      @endif
   @endforeach
  </tbody>
  <tfoot>
    <tr>
      <th class="th-sm">Name</th>
      <th class="th-sm">Action</th>
    </tr>
  </tfoot>
</table>


     </div>

</div>






      </div>



   </div>

</div>





@endsection
