@guest
<!-- <script type="text/javascript">
  location.replace("{{URL::to('/login')}}");
</script> -->
@endguest
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>CRMNest</title>
      <link href="{{URL::to('public/themeassets/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">
      <!-- <link href="{{URL::to('plugins/dragula.min.css')}}" rel="stylesheet" type="text/css"> -->
      <!-- App css -->
      <link href="{{URL::to('public/themeassets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
      <link href="{{URL::to('public/themeassets/css/icons.css')}}" rel="stylesheet" type="text/css">
      <link href="{{URL::to('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css')}}" rel="stylesheet" type="text/css">
      <link href="{{URL::to('public/themeassets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css">
      <link href="{{URL::to('public/themeassets/css/style.css')}}" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.7/dist/sweetalert2.min.css">
      <style>
         .card-header {
         background-color: rgb(66, 133, 244);
         color: white;
         }
         .navbar .nav-item .nav-link {
         font-weight: 300;
         }
      </style>
      <!-- THEME STYLE -->
      <style>
         .menu-body .slimscroll{
         display: none;
         }
         .main-menu-inner {
         width: 0.1%;
         }
         .left-sidenav {
         min-width: 0%;
         max-width: 0px;
         }
         .container-fluid {
         width: 100%;
         padding-right: 52px;
         padding-left: 15px;
         margin-left: 55px;
         }
         .left-sidenav .main-icon-menu {
         top: 71px;
         }
         .left-sidenav .main-icon-menu {
         top: 7px !important;
         }
         .topbar .topbar-left {
         width: 0px;
         padding-left: 3px;
         margin-right: 50em;
         }
         .navbar-custom {
         margin-left: 0px;
         }
         /*LOGO*/
         .topbar .topbar-left .logo .logo-sm {
         height: 35px;
         margin-left: -66px;
         }
         .topbar .topbar-left .logo .logo-lg {
         display: none;
         }
         /*MENU COLOR*/
         .left-sidenav .main-icon-menu {
         background: rgb(60,49,255);
         background: linear-gradient(0deg, rgba(60,49,255,1) 0%, rgba(0,0,126,1) 0%, rgba(1,75,201,1) 100%);
         }
         @media (max-width:1024px) {
         .topbar .topbar-left {
         width: 70px;
         margin-left: 0;
         background-color: #4d79f6
         }
         .topbar .topbar-left .logo .logo-sm {
         height: 52px;
         margin-left: 8px;
         }
         .topbar .navbar-custom {
         margin-left: 24px;
         }
         }
         @media (max-width:1024px) {
         .topbar .topbar-left {
         background-color: #fff;
         }
         }
         /*Dashboard*/
         /*part1*/
         .crm-data-card h3 {
         font-size: 22px;
         }
      </style>
      <!-- THEME STYLE -->
      @yield('style')
   </head>
   <body>
      <div id="app">
         <div class="topbar">
            <!--====LOGO====-->
            <div class="topbar-left"><a href="" class="logo"><span><img src="{{URL::to('public/logo.png')}}" alt="logo-small" class="logo-sm"> </span><span><img src="{{URL::to('public/logo.png')}}" alt="logo-large" class="logo-lg"></span></a>
              <!-- <img src="{{URL::to('public/logo.png')}}" alt="" style="height:42px"> -->
            </div>
            <!--====LOGO====-->
            <!--====NAVBAR-HEADER====-->
            <nav class="navbar-custom">
               <ul class="list-unstyled topbar-nav float-right mb-0">
                 <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"style="padding: 0px;"><img src="https://img.icons8.com/material-sharp/24/00FF00/plus.png" height="30px"></a>
                 </li>

                 <!--=======================NOTIFICATION BELL=================================-->
                 <!--=======================NOTIFICATION BELL=================================-->
                 <!--=======================NOTIFICATION BELL=================================-->
                  <li class="dropdown notification-list">
                     <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"> <img src="https://img.icons8.com/windows/24/000000/appointment-reminders.png"> <span class="badge badge-danger badge-pill noti-icon-badge">2</span></a>
                     <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                        <!-- item-->
                        <h6 class="dropdown-item-text">Notifications (18)</h6>
                        <div class="slimscroll notification-list">
                           <!-- item-->
                           <a href="javascript:void(0);" class="dropdown-item notify-item active">
                              <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                              <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                           </a>
                           <!-- item-->
                           <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                              <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                           </a>
                           <!-- item-->
                           <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                              <p class="notify-details">Your item is shipped<small class="text-muted">It is a long established fact that a reader will</small></p>
                           </a>
                           <!-- item-->
                           <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                              <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                           </a>
                           <!-- item-->
                           <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                              <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                           </a>
                        </div>
                        <!-- All--> <a href="javascript:void(0);" class="dropdown-item text-center text-primary">View all <i class="fi-arrow-right"></i></a>
                     </div>
                  </li>
                  <!--=======================NOTIFICATION BELL=================================-->
                  <!--=======================NOTIFICATION BELL=================================-->
                  <!--=======================NOTIFICATION BELL=================================-->


                  <!--=======================PROFILE=================================-->
                  <!--=======================PROFILE=================================-->
                  <!--=======================PROFILE=================================-->
                  <li class="dropdown">
                     <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                       <img src="https://rugs.a2hosted.com/crmnest/public/contactsimages/1572509528721.jpg" alt="profile-user" class="rounded-circle">
                       <span class="ml-1 nav-user-name hidden-sm">  @guest @else {{ Auth::user()->name }}  @endguest
                         <img src="https://img.icons8.com/material-sharp/24/000000/expand-arrow.png" style="height:20px; width:20px">
                       </span>
                     </a>
                     <div class="dropdown-menu dropdown-menu-right">
                        <!-- <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
                        <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><img src="https://img.icons8.com/android/19/FF0000/logout-rounded-down.png">&nbsp;&nbsp;{{ __('Logout') }}</a>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                           </form>
                     </div>
                  </li>
                  <!--=======================PROFILE=================================-->
                  <!--=======================PROFILE=================================-->
                  <!--=======================PROFILE=================================-->
               </ul>
               <!--end topbar-nav-->
               <ul class="list-unstyled topbar-nav mb-0">
                  <!-- <li><button class="button-menu-mobile nav-link waves-effect waves-light"><img src="https://img.icons8.com/ios/20/000000/menu-2.png"></button></li> -->
                  <li class="hide-phone app-search">
                     <form role="search" class=""><input type="text" placeholder="Search..." class="form-control"> <a href="#"><img src="https://img.icons8.com/ios-filled/20/000000/search.png"></a></form>
                  </li>
               </ul>
            </nav>
            <!--====NAVBAR-HEADER====-->
         </div>
         <!--==HEADER-END==-->
         <!--==BODY-START==-->
         <div class="page-wrapper">
            <div class="left-sidenav">
               <div class="main-icon-menu">
                  <div class="main-icon-menu">
                     <nav class="nav">
                        <a href="#idContacts" class="nav-link" data-toggle="tooltip-custom" data-placement="top" title="" data-original-title="Contacts">
                          <!-- <img src="https://img.icons8.com/metro/26/ffffff/contacts.png" onclick="location.href='{{URL::to('/SuperAdmin')}}'"> -->
                          <img src="https://img.icons8.com/material/24/ffffff/add-user-female.png" onclick="location.href='{{URL::to('/SuperAdmin')}}'">
                        </a>
                        <!--end MetricaAnalytic-->
                        <a href="#idCompany" class="nav-link" data-toggle="tooltip-custom" data-placement="top" title="" data-original-title="Company">
                           <img src="https://img.icons8.com/material-rounded/26/ffffff/new-company.png" onclick="location.href='{{URL::to('/SuperAdminAllCompanyList')}}'">
                        </a>
                        <!--end MetricaCrypto-->
                        <a href="#MetricaProject" class="nav-link" data-toggle="tooltip-custom" data-placement="top" title="" data-original-title="Leads">
                           <img src="https://img.icons8.com/material/26/ffffff/leader.png" onclick="location.href='{{URL::to('/SuperAdminAllLeadsList')}}'">
                        </a>
                        <!--end MetricaProject-->
                        <a href="#MetricaEcommerce" class="nav-link" data-toggle="tooltip-custom" data-placement="top" title="" data-original-title="Deals">
                           <img src="https://img.icons8.com/material/26/ffffff/about-us-female.png" onclick="location.href='{{URL::to('/Deal')}}'">
                        </a>
                        <!--end MetricaEcommerce-->
                        <a href="#MetricaCRM" class="nav-link" data-toggle="tooltip-custom" data-placement="top" title="" data-original-title="CRM">
                           <svg class="nav-svg" version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                              <g>
                                 <g>
                                    <path d="M276,68.1v219c0,3.7-2.5,6.8-6,7.7L81.1,343.4c-2.3,0.6-3.6,3.1-2.7,5.4C109.1,426,184.9,480.6,273.2,480
                                       C387.8,479.3,480,386.5,480,272c0-112.1-88.6-203.5-199.8-207.8C277.9,64.1,276,65.9,276,68.1z"/>
                                 </g>
                                 <path class="svg-primary" d="M32,239.3c0,0,0.2,48.8,15.2,81.1c0.8,1.8,2.8,2.7,4.6,2.2l193.8-49.7c3.5-0.9,6.4-4.6,6.4-8.2V36c0-2.2-1.8-4-4-4
                                    C91,33.9,32,149,32,239.3z"/>
                              </g>
                           </svg>
                        </a>
                        <!--end MetricaCRM-->
                        <a href="#MetricaOthers" class="nav-link" data-toggle="tooltip-custom" data-placement="top" title="" data-original-title="UI Kit">
                           <svg class="nav-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path d="M70.7 164.5l169.2 81.7c4.4 2.1 10.3 3.2 16.1 3.2s11.7-1.1 16.1-3.2l169.2-81.7c8.9-4.3 8.9-11.3 0-15.6L272.1 67.2c-4.4-2.1-10.3-3.2-16.1-3.2s-11.7 1.1-16.1 3.2L70.7 148.9c-8.9 4.3-8.9 11.3 0 15.6z"/>
                              <path class="svg-primary" d="M441.3 248.2s-30.9-14.9-35-16.9-5.2-1.9-9.5.1S272 291.6 272 291.6c-4.5 2.1-10.3 3.2-16.1 3.2s-11.7-1.1-16.1-3.2c0 0-117.3-56.6-122.8-59.3-6-2.9-7.7-2.9-13.1-.3l-33.4 16.1c-8.9 4.3-8.9 11.3 0 15.6l169.2 81.7c4.4 2.1 10.3 3.2 16.1 3.2s11.7-1.1 16.1-3.2l169.2-81.7c9.1-4.2 9.1-11.2.2-15.5z"/>
                              <path d="M441.3 347.5s-30.9-14.9-35-16.9-5.2-1.9-9.5.1S272.1 391 272.1 391c-4.5 2.1-10.3 3.2-16.1 3.2s-11.7-1.1-16.1-3.2c0 0-117.3-56.6-122.8-59.3-6-2.9-7.7-2.9-13.1-.3l-33.4 16.1c-8.9 4.3-8.9 11.3 0 15.6l169.2 81.7c4.4 2.2 10.3 3.2 16.1 3.2s11.7-1.1 16.1-3.2l169.2-81.7c9-4.3 9-11.3.1-15.6z"/>
                           </svg>
                        </a>
                        <!--end MetricaOthers-->
                        <a href="#MetricaPages" class="nav-link" data-toggle="tooltip-custom" data-placement="top" title="" data-original-title="Pages">
                           <svg class="nav-svg" version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                              <g>
                                 <path d="M462.5,352.3c-1.9-5.5-5.6-11.5-11.4-18.3c-10.2-12-30.8-29.3-54.8-47.2c-2.6-2-6.4-0.8-7.5,2.3l-4.7,13.4
                                    c-0.7,2,0,4.3,1.7,5.5c15.9,11.6,35.9,27.9,41.8,35.9c2,2.8-0.5,6.6-3.9,5.8c-10-2.3-29-7.3-44.2-12.8c-8.6-3.1-17.7-6.7-27.2-10.6
                                    c16-20.8,24.7-46.3,24.7-72.6c0-32.8-13.2-63.6-37.1-86.4c-22.9-21.9-53.8-34.1-85.7-33.7c-25.7,0.3-50.1,8.4-70.7,23.5
                                    c-18.3,13.4-32.2,31.3-40.6,52c-8.3-6-16.1-11.9-23.2-17.6c-13.7-10.9-28.4-22-38.7-34.7c-2.2-2.8,0.9-6.7,4.4-5.9
                                    c11.3,2.6,35.4,10.9,56.4,18.9c1.5,0.6,3.2,0.3,4.5-0.8l11.1-10.1c2.4-2.1,1.7-6-1.3-7.2C121,137.4,89.2,128,73.2,128
                                    c-11.5,0-19.3,3.5-23.3,10.4c-7.6,13.3,7.1,35.2,45.1,66.8c34.1,28.5,82.6,61.8,136.5,92c87.5,49.1,171.1,81,208,81
                                    c11.2,0,18.7-3.1,22.1-9.1C464.4,364.4,464.7,358.7,462.5,352.3z"/>
                                 <path class="svg-primary" d="M312,354c-29.1-12.8-59.3-26-92.6-44.8c-30.1-16.9-59.4-36.5-84.4-53.6c-1-0.7-2.2-1.1-3.4-1.1c-0.9,0-1.9,0.2-2.8,0.7
                                    c-2,1-3.3,3-3.3,5.2c0,1.2-0.1,2.4-0.1,3.5c0,32.1,12.6,62.3,35.5,84.9c22.9,22.7,53.4,35.2,85.8,35.2c23.6,0,46.5-6.7,66.2-19.5
                                    c1.9-1.2,2.9-3.3,2.7-5.5C315.5,356.8,314.1,354.9,312,354z"/>
                              </g>
                           </svg>
                        </a>
                        <a href="#MetricaAuthentication" class="nav-link" data-toggle="tooltip-custom" data-placement="top" title="" data-original-title="Authentication">
                           <svg class="nav-svg" version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                              <g>
                                 <path class="svg-primary" d="M376,192h-24v-46.7c0-52.7-42-96.5-94.7-97.3c-53.4-0.7-97.3,42.8-97.3,96v48h-24c-22,0-40,18-40,40v192c0,22,18,40,40,40
                                    h240c22,0,40-18,40-40V232C416,210,398,192,376,192z M270,316.8v68.8c0,7.5-5.8,14-13.3,14.4c-8,0.4-14.7-6-14.7-14v-69.2
                                    c-11.5-5.6-19.1-17.8-17.9-31.7c1.4-15.5,14.1-27.9,29.6-29c18.7-1.3,34.3,13.5,34.3,31.9C288,300.7,280.7,311.6,270,316.8z
                                    M324,192H188v-48c0-18.1,7.1-35.1,20-48s29.9-20,48-20s35.1,7.1,48,20s20,29.9,20,48V192z"/>
                              </g>
                           </svg>
                        </a>
                     </nav>
                     <!--end nav-->
                  </div>
               </div>
            </div>
            <!--==SIDENAV==-->
            <!--==SIDENAV==-->
            <!--==SIDENAV==-->
            <!--==SIDENAV==-->
            <div class="main-menu-inner">
               <div class="menu-body slimscroll">
                  <div id="idContacts" class="main-icon-menu-pane">
                     <div class="title-box">
                        <h6 class="menu-title">Contacts</h6>
                     </div>
                  </div>
                  <div id="idCompany" class="main-icon-menu-pane">
                     <div class="title-box">
                        <h6 class="menu-title">Company</h6>
                     </div>
                  </div>
                  <div id="MetricaProject" class="main-icon-menu-pane">
                     <div class="title-box">
                        <h6 class="menu-title">Projects</h6>
                     </div>
                  </div>
                  <div id="MetricaEcommerce" class="main-icon-menu-pane">
                     <div class="title-box">
                        <h6 class="menu-title">Ecommerce</h6>
                     </div>
                  </div>
                  <div id="MetricaCRM" class="main-icon-menu-pane">
                     <div class="title-box">
                        <h6 class="menu-title">CRM</h6>
                     </div>
                  </div>
                  <div id="MetricaOthers" class="main-icon-menu-pane">
                     <div class="title-box">
                        <h6 class="menu-title">Others</h6>
                     </div>
                  </div>
                  <div id="MetricaPages" class="main-icon-menu-pane">
                     <div class="title-box">
                        <h6 class="menu-title">Pages</h6>
                     </div>
                  </div>
                  <div id="MetricaAuthentication" class="main-icon-menu-pane">
                     <div class="title-box">
                        <h6 class="menu-title">Authentication</h6>
                     </div>
                  </div>
               </div>
            </div>
            <!--==SIDENAV==-->
            <!--==SIDENAV==-->
            <!--==SIDENAV==-->
            <!--==SIDENAV==-->
            <div class="page-content">
              <div class="container-fluid">
                 @yield('content')
              </div>
            </div>
         </div>
         <!--==BODY-END==-->
         <!--==BODY-END==-->
         <!--==BODY-END==-->
         <!--==BODY-END==-->




         <nav class="navbar navbar-expand-md  navbar-dark primary-color">
            <a class="navbar-brand" href="{{ url('/') }}">
               <!-- {{ config('app.name', 'CrmNest') }} -->
               <!--<img src="{{URL::to('public/logo.png')}}" alt="" style="height:42px">-->
            </a>
            <div class="container">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  @guest
                  @else
                  @if(Auth::user()->admin_type == 'Super Admin')
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item {{Request::is('SuperAdmin') ? 'active' : ''}} {{Request::is('home') ? 'active' : ''}}">
                        <a class="nav-link" href="{{URL::to('/SuperAdmin')}}">Contacts</a>
                     </li>
                     <!-- <li class="nav-item {{Request::is('SuperAdmin/create') ? 'active' : ''}}">
                        <a class="nav-link" href="{{URL::to('SuperAdmin/create')}}">Add Contact</a>
                        </li> -->
                     <li class="nav-item {{Request::is('SuperAdminAllCompanyList') ? 'active' : ''}}">
                        <a class="nav-link" href="{{URL::to('SuperAdminAllCompanyList')}}">Company</a>
                     </li>
                     <li class="nav-item {{Request::is('SuperAdminAllLeadsList') ? 'active' : ''}}">
                        <a class="nav-link" href="{{URL::to('SuperAdminAllLeadsList')}}">Leads</a>
                     </li>
                     <li class="nav-item {{Request::is('Deal') ? 'active' : ''}}">
                        <a class="nav-link" href="{{URL::to('Deal')}}">Deals</a>
                     </li>
                     <li class="nav-item {{Request::is('UsersDetails') ? 'active' : ''}}">
                        <a class="nav-link" href="{{URL::to('UsersDetails')}}">Users</a>
                     </li>
                  </ul>
                  @elseif(Auth::user()->admin_type == 'Admin')
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="">Home</a>
                     </li>
                  </ul>
                  @elseif(Auth::user()->admin_type == 'User')
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item {{Request::is('User') ? 'active' : ''}} {{Request::is('home') ? 'active' : ''}}">
                        <a class="nav-link" href="{{URL::to('/User')}}">Home</a>
                     </li>
                     <li class="nav-item {{Request::is('User/create') ? 'active' : ''}}">
                        <a class="nav-link" href="{{URL::to('User/create')}}">Add Contact</a>
                     </li>
                     <li class="nav-item {{Request::is('UserAllCompanyList') ? 'active' : ''}}">
                        <a class="nav-link" href="{{URL::to('UserAllCompanyList')}}">All Company</a>
                     </li>
                     <li class="nav-item {{Request::is('UserLeadsList') ? 'active' : ''}}">
                        <a class="nav-link" href="{{URL::to('UserAllLeadsList')}}">All Leads</a>
                     </li>
                  </ul>
                  @endif
                  @endguest
                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                     <!-- Authentication Links -->
                     @guest
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                     </li>
                     @if (Route::has('register'))
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                     </li>
                     @endif
                     @else
                     <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret" style="font-weight:800">({{ Auth::user()->admin_type }})</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                           {{ __('Logout') }}
                           </a>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                           </form>
                        </div>
                     </li>
                     @endguest
                  </ul>
               </div>
            </div>
         </nav>
         <main class="py-4">

         </main>
      </div>
      <script src="{{URL::to('public/themeassets/js/jquery.min.js')}}"></script>
      <script src="{{URL::to('public/themeassets/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{URL::to('public/themeassets/js/metisMenu.min.js')}}"></script>
      <script src="{{URL::to('public/themeassets/js/waves.min.js')}}"></script>
      <script src="{{URL::to('public/themeassets/js/jquery.slimscroll.min.js')}}"></script>
      <script src="{{URL::to('public/themeassets/plugins/moment/moment.js')}}"></script>
      <script src="{{URL::to('public/themeassets/plugins/apexcharts/apexcharts.min.js')}}"></script>
      <script src="{{URL::to('public/themeassets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
      <script src="{{URL::to('public/themeassets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
      <script src="{{URL::to('public/themeassets/pages/jquery.crm_dashboard.init.js')}}"></script>
      <!-- <script src="{{URL::to('public/themeassets/js/dragula/dragula.min.js')}}"></script> -->
      <!-- <script src="{{URL::to('public/themeassets/js/jquery.projects_kanabn.init.js')}}"></script> -->
      <script src="{{URL::to('public/themeassets/js/app.js')}}"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.7/dist/sweetalert2.min.js" charset="utf-8"></script>

      <!-- TOOLTIP -->
      <script type="text/javascript">
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();
        });
      </script>
      @yield('js')
      @if(session()->has('success-message'))
          <script type="text/javascript">
             Swal.fire(
               '{{ session()->get("success-message") }}',
               '{{ session()->get("success-message-details") }}',
               'success'
               )
          </script>
          @endif
          @if(session()->has('failed-message'))
          <script type="text/javascript">
             Swal.fire({
               icon: 'error',
               title: '{{ session()->get("failed-message") }}',
               text: '{{ session()->get("failed-message-details") }}',
               })
          </script>
          @endif
      @yield('footer')
   </body>
</html>
