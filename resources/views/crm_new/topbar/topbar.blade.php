<!-- Top Bar Start -->
<div class="topbar">
<!-- Navbar -->
<nav class="navbar-custom">
   <ul class="list-unstyled topbar-nav float-right mb-0">
      <!-- <li class="hidden-sm hide-phone app-search">
         <form role="search" class="">
             <input type="text" id="AllCompo" placeholder="Search..." class="form-control">
             <a href=""><i class="fas fa-search"></i></a>
         </form>
         </li> -->
      <li class="dropdown notification-list">
         <a class="nav-link arrow-none waves-light waves-effect" href="#" role="button"
            >
         <i class="ti-bell noti-icon"></i>
         <span class="badge badge-danger badge-pill noti-icon-badge">
         @php
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
         {{count($arrcount)}}
         </span>
         </a>
         <div class="sub-menu-top dropdown-menu-right dropdown-lg pt-0">
            <h6 class="dropdown-item-text font-15 m-0 py-3 bg-primary text-white d-flex justify-content-between align-items-center">
               Notifications <span class="badge badge-light badge-pill"></span>
            </h6>
            <div class="slimscroll notification-list">
               <!-- item-->
               @php
               $notiUser = App\Notification::latest()->with('users:id,name','user')->where('status',0)->get()
               @endphp
               <!-- {{$notiUser}} -->
               @foreach($notiUser as $notiu)
               @if($notiu->notificationType == 'user')
               @if(auth()->user()->id == 1)
               <div class="notiTop">
                  <a href="#" class="dropdown-item py-3">
                     <div class="media">
                        <div class="avatar-md bg-primary">
                           <i class="typcn typcn-user-add-outline"></i>
                        </div>
                        <div class="media-body align-self-center ml-2 text-truncate">
                           <h6 class="my-0 font-weight-normal text-dark">One New user Created By @foreach($notiu->users as $us) {{$us->name}} @endforeach</h6>
                           <small class="float-left text-muted">{{$notiu->created_at->diffForHumans()}}</small>
                           <!-- <small class="text-muted mb-0">Dummy text of the printing and industry.</small> -->
                        </div>
                        <!--end media-body-->
                     </div>
                     <!--end media-->
                  </a>
                  <!--end-item-->
                  <div class="noti_close" data-id="{{$notiu->id}}">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x icon-dual">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                     </svg>
                  </div>
                  <!-- item-->
               </div>
               @endif
               @elseif($notiu->notificationType == 'lead')
               @if($notiu->user_id == auth()->user()->id || auth()->user()->id == 1)
               <div class="notiTop">
                  <a href="{{route('lead.show',[$notiu->lead_id])}}" class="dropdown-item py-3">
                     <div class="media">
                        <div class="avatar-md bg-success">
                           <i class="la la-group text-white"></i>
                        </div>
                        <div class="media-body align-self-center ml-2 text-truncate">
                           <h6 class="my-0 font-weight-normal text-dark">
                              One New Lead has been assigned to @if(!empty($notiu->user->name)) {{$notiu->user->name}} @else @endif
                           </h6>
                           <!--  <small class="text-muted mb-0">Dummy text of the printing and industry.</small> -->
                           <small class="float-left text-muted">{{$notiu->created_at->diffForHumans()}}</small>
                        </div>
                        <!--end media-body-->
                     </div>
                     <!--end media-->
                  </a>
                  <!--end-item-->
                  <div class="noti_close" data-id="{{$notiu->id}}">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x icon-dual">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                     </svg>
                  </div>
                  <!-- item-->
               </div>
               @endif
               @elseif($notiu->notificationType == 'deal')
               @if($notiu->user_id == auth()->user()->id || auth()->user()->id == 1)
               <div class="notiTop">
                  <a href="/crmnest/lead/{{$notiu->lead_id}}/deal" class="dropdown-item py-3">
                     <div class="media">
                        <div class="avatar-md bg-info">
                           <i class="la la-check-circle text-white"></i>
                        </div>
                        <div class="media-body align-self-center ml-2 text-truncate">
                           <h6 class="my-0 font-weight-normal text-dark">
                              One New Deal created by @foreach($notiu->users as $us) {{$us->name}} @endforeach
                           </h6>
                           <small class="float-left text-muted">{{$notiu->created_at->diffForHumans()}}</small>
                           <!--  <small class="text-muted mb-0">Dummy text of the printing and industry.</small> -->
                        </div>
                        <!--end media-body-->
                     </div>
                     <!--end media-->
                  </a>
                  <!--end-item-->
                  <div class="noti_close" data-id="{{$notiu->id}}">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x icon-dual">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                     </svg>
                  </div>
               </div>
               <!-- item-->  @endif
               @elseif($notiu->notificationType == 'call')
               @if($notiu->user_id == auth()->user()->id || auth()->user()->id == 1)
               <div class="notiTop">
                  <a href="/crmnest/lead/{{$notiu->lead_id}}/deal" class="dropdown-item py-3">
                     <div class="media">
                        <div class="avatar-md bg-warning">
                           <i class="typcn typcn-phone"></i>
                        </div>
                        <div class="media-body align-self-center ml-2 text-truncate">
                           <h6 class="my-0 font-weight-normal text-dark">
                              One Call created by @foreach($notiu->users as $us) {{$us->name}} @endforeach
                           </h6>
                           <small class="float-left text-muted">{{$notiu->created_at->diffForHumans()}}</small>
                           <!-- <small class="text-muted mb-0">Dummy text of the printing and industry.</small> -->
                        </div>
                        <!--end media-body-->
                     </div>
                     <!--end media-->
                  </a>
                  <!--end-item-->
                  <div class="noti_close" data-id="{{$notiu->id}}">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x icon-dual">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                     </svg>
                  </div>
                  <!-- item-->
               </div>
               @endif
               @elseif($notiu->notificationType == 'note')
               @if($notiu->user_id == auth()->user()->id || auth()->user()->id == 1)
               <div class="notiTop">
                  <a href="/crmnest/lead/{{$notiu->lead_id}}/deal" class="dropdown-item py-3">
                     <div class="media">
                        <div class="avatar-md bg-success">
                           <i class="typcn typcn-edit"></i>
                        </div>
                        <div class="media-body align-self-center ml-2 text-truncate">
                           <h6 class="my-0 font-weight-normal text-dark">
                              One Note created by @foreach($notiu->users as $us) {{$us->name}} @endforeach
                           </h6>
                           <!--    <small class="text-muted mb-0">Dummy text of the printing and industry.</small> -->
                           <small class="float-left text-muted">{{$notiu->created_at->diffForHumans()}}</small>
                        </div>
                        <!--end media-body-->
                     </div>
                     <!--end media-->
                  </a>
                  <!--end-item-->
                  <!-- item-->
                  <div class="noti_close" data-id="{{$notiu->id}}">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x icon-dual">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                     </svg>
                  </div>
               </div>
               @endif
               @elseif($notiu->notificationType == 'meeting')
               @if($notiu->user_id == auth()->user()->id || auth()->user()->id == 1)
               <div class="notiTop">
                  <a href="/crmnest/lead/{{$notiu->lead_id}}/deal" class="dropdown-item py-3">
                     <div class="media">
                        <div class="avatar-md bg-pink">
                           <i class="typcn typcn-volume"></i>
                        </div>
                        <div class="media-body align-self-center ml-2 text-truncate">
                           <h6 class="my-0 font-weight-normal text-dark">
                              One Meeting created by @foreach($notiu->users as $us) {{$us->name}} @endforeach
                           </h6>
                           <!--  <small class="text-muted mb-0">Dummy text of the printing and industry.</small> -->
                           <small class="float-left text-muted">{{$notiu->created_at->diffForHumans()}}</small>
                        </div>
                        <!--end media-body-->
                     </div>
                     <!--end media-->
                  </a>
                  <!--end-item-->
               </div>
               <div class="noti_close" data-id="{{$notiu->id}}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x icon-dual">
                     <line x1="18" y1="6" x2="6" y2="18"></line>
                     <line x1="6" y1="6" x2="18" y2="18"></line>
                  </svg>
               </div>
               <!-- item--> @endif
               @endif
               @endforeach
            </div>
            <!-- All-->
            <a href="{{URL::to('logfile')}}" target="_blank" class="dropdown-item text-center text-primary">
            View all <i class="fi-arrow-right"></i>
            </a>
         </div>
      </li>
      <li class="dropdown">
         <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
            aria-haspopup="false" aria-expanded="false">
         <img src="{{URL::to(Auth::user()->userprofilepic)}}" onerror="this.src='https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-alt-512.png'" alt="profile-user" class="rounded-circle" />
         <span class="ml-1 nav-user-name hidden-sm">@if(Auth::check()) {{Auth::user()->name}} @else @endif<i class="mdi mdi-chevron-down"></i> </span>
         </a>
         <div class="dropdown-menu dropdown-menu-right">
            @php
            $uid=Auth::user()->id;
            @endphp
            <a class="dropdown-item" href="{{URL::to('userprofileud/'.$uid)}}"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
            <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
            <a class="dropdown-item" href="{{URL::to('clear')}}"><i class="dripicons-user text-muted mr-2"></i> Clear</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
            <i class="dripicons-exit text-muted mr-2"></i>
            {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               @csrf
            </form>
         </div>
      </li>
      <!-- <li class="mr-2">
         <a href="#" class="nav-link" data-toggle="modal" data-animation="fade" data-target=".modal-rightbar">
             <i data-feather="align-right" class="align-self-center"></i>
         </a>
         </li> -->
   </ul>
   <!--end topbar-nav-->
   <ul class="list-unstyled topbar-nav mb-0">
      <li>
         <a href="../crm/crm-index.html">
         <span class="responsive-logo">
         <img src="{{asset('public/new/assets/images/logo-sm.png')}}" alt="logo-small" class="logo-sm align-self-center" height="34">
         </span>
         </a>
      </li>
      <!-- <li>
         <button class="button-menu-mobile close-sidebar">
             <i data-feather="menu" class="align-self-center"></i>
         </button>
         </li> -->
      <li class="dropdown">
         <!--<a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
            aria-haspopup="false" aria-expanded="false">
            <span class="ml-1 p-2 bg-soft-classic nav-user-name hidden-sm rounded">System <i class="mdi mdi-chevron-down"></i> </span>
            </a>-->
         <div class="dropdown-menu dropdown-xl dropdown-menu-left p-0">
            <div class="row no-gutters">
               <div class="col-12 col-lg-6">
                  <div class="text-center system-text">
                     <h4 class="text-white">The Poworfull Dashboard</h4>
                     <p class="text-white">See all the pages Metrica.</p>
                     <a href="https://mannatthemes.com/metrica/" class="btn btn-sm btn-pink mt-2">See Dashboard</a>
                  </div>
                  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img src="{{asset('public/new/assets/images/dashboard/dash-1.png')}}" class="d-block img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                           <img src="{{asset('public/new/assets/images/dashboard/dash-4.png')}}" class="d-block img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                           <img src="{{asset('public/new/assets/images/dashboard/dash-2.png')}}" class="d-block img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                           <img src="{{asset('public/new/assets/images/dashboard/dash-3.png')}}" class="d-block img-fluid" alt="...">
                        </div>
                     </div>
                  </div>
               </div>
               <!--end col-->
               <div class="col-12 col-lg-6">
                  <div class="divider-custom mb-0">
                     <div class="divider-text bg-light">All Dashboard</div>
                     </divi>
                     <div class="p-4">
                        <div class="row">
                           <div class="col-6">
                              <a class="dropdown-item mb-2" href="../analytics/analytics-index.html"> Analytics</a>
                              <a class="dropdown-item mb-2" href="../crypto/crypto-index.html"> Crypto</a>
                              <a class="dropdown-item mb-2" href="../crm/crm-index.html"> CRM</a>
                              <a class="dropdown-item" href="../projects/projects-index.html"> Project</a>
                           </div>
                           <div class="col-6">
                              <a class="dropdown-item mb-2" href="../ecommerce/ecommerce-index.html"> Ecommerce</a>
                              <a class="dropdown-item mb-2" href="../helpdesk/helpdesk-index.html"> Helpdesk</a>
                              <a class="dropdown-item" href="../hospital/hospital-index.html"> Hospital</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--end col-->
               </div>
               <!--end row-->
            </div>
      </li>
      <li class="hide-phone" style="margin-top: 1.5%;margin-left: 1.5%;">
      <a href="{{URL::to('home')}}"><img src="{{asset('public/logo.png')}}" alt="logo-large" class="logo-lg logo-dark"></a>
      </li>
   </ul>
</nav>
<!-- end navbar-->
</div>
