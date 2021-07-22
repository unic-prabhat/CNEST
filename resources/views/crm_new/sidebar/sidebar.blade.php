@guest
<script type="text/javascript">
   location.replace("{{URL::to('/login')}}");
</script>
@else

@if(auth()->user()->userrole==2)
<script type="text/javascript">
   location.replace("{{URL::to('/salesuser')}}");
</script>
@endif

@endguest
 <!-- leftbar-tab-menu -->
        <div class="leftbar-tab-menu">
            <div class="main-icon-menu">
                <a href="#" class="logo logo-metrica d-block text-center">
                    <span>
                        <img src="{{asset('/public/new/assets/images/logo-small.png')}}" alt="logo-small" class="logo-sm">
                    </span>
                </a>
                <nav class="nav sidebar-left">
                    <a href="{{route('home.index')}}" class="nav-menu dashboard" data-original-title="DASHBOARD" data-toggle="tooltip-custom" data-placement="right" data-trigger="hover">
                        <i data-feather="pie-chart" class="align-self-center menu-icon icon-dual"></i>
                    </a><!--end MetricaCRM-->

                    <a href="{{route('home.leads')}}" class="nav-menu lead" data-original-title="LEADS" data-toggle="tooltip-custom" data-placement="right" data-trigger="hover">
                        <i data-feather="users" class="align-self-center menu-icon icon-dual"></i>
                    </a><!--end MetricaApps-->

                    <a href="{{route('home.calender')}}" class="nav-menu calender" data-original-title="CALENDER" data-toggle="tooltip-custom" data-placement="right" data-trigger="hover">
                        <i data-feather="calendar" class="align-self-center menu-icon icon-dual"></i>
                    </a><!--end MetricaUikit-->

                    <a href="{{route('deal')}}" class="nav-menu deal" data-original-title="DEAL" data-original-title="LEADS" data-toggle="tooltip-custom" data-placement="right" data-trigger="hover">
                        <i data-feather="trello" class="align-self-center menu-icon icon-dual"></i>
                    </a><!--end MetricaPages-->

                    <a href="#setting" class="nav-menu setting" data-original-title="SETTINGS" data-original-title="LEADS" data-toggle="tooltip-custom" data-placement="right" data-trigger="hover">
                        <i data-feather="settings" class="align-self-center menu-icon icon-dual"></i>
                    </a> <!--end MetricaAuthentication-->
                     <a href="#MetricaAuthentication" class="nav-menu reporting" data-original-title="REPORTING" data-original-title="LEADS" data-toggle="tooltip-custom" data-placement="right" data-trigger="hover">
                        <i data-feather="copy" class="align-self-center menu-icon icon-dual"></i>
                    </a> <!--end MetricaAuthentication-->

                    <a href="{{URL::to('/manageuser')}}" class="nav-menu lead" data-original-title="MANAGE USER" data-toggle="tooltip-custom" data-placement="right" data-trigger="hover">
                        <i data-feather="users" class="align-self-center menu-icon icon-dual"></i>
                    </a>

                </nav><!--end nav-->
                <div class="pro-metrica-end">
                    <a href="" class="profile">
                        <img src="{{asset('public/new/assets/images/users/user-4.jpg')}}" alt="profile-user" class="rounded-circle thumb-sm">
                    </a>
                </div>
            </div>
            <div class="sub-menu">
                    <span class="close-sub"><i data-feather="x"></i></span>
                <div class="sub-menu-pages" style="margin-top: 60px;">

                    <ul class="umenus">
                            <!-- <li><a href="{{URL::to('manageuser')}}">Manage User</a></li> -->
                            <!-- <li><a href="">Proposal Setting</a></li> -->
                            <!-- <li><a href="{{route('template.create')}}">SMS Template</a></li> -->
                            <li><a href="{{route('quotation.index')}}">Quotation Setting</a></li>
                    </ul>

                </div>
            </div>
             <div class="report">
                    <span class="close-sub"><i data-feather="x"></i></span>
                <div class="sub-menu-pages">

                    <ul class="umenus">
                            <li><a href="{{route('lead.report')}}">Monthly Lead Report</a></li>
                            <li><a href="{{URL::to('usersales')}}">Sales Performance</a></li>
                            <li><a href="{{URL::to('logfile')}}">Log File</a></li>
                            <li><a href="">Sales Exective Report</a></li>
                    </ul>

                </div>
            </div>


                    <div id="MetricaPages" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">Pages</h6>
                        </div>
                        <ul class="nav">
                            <li class="nav-item"><a class="nav-link" href="{{Route('boiler.create')}}">Boiler</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('boiler.choice')}}">Boiler Choice</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('boiler.choice.type')}}">Boiler choice type</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('boiler.choice.type')}}">Timeline</a></li>
                            <li class="nav-item"><a class="nav-link" href="../pages/pages-treeview.html">Treeview</a></li>
                            <li class="nav-item"><a class="nav-link" href="../pages/pages-starter.html">Starter Page</a></li>
                            <li class="nav-item"><a class="nav-link" href="../pages/pages-pricing.html">Pricing</a></li>
                            <li class="nav-item"><a class="nav-link" href="../pages/pages-blogs.html">Blogs</a></li>
                            <li class="nav-item"><a class="nav-link" href="../pages/pages-faq.html">FAQs</a></li>
                            <li class="nav-item"><a class="nav-link" href="../pages/pages-gallery.html">Gallery</a></li>
                        </ul>
                    </div><!-- end Pages -->
                    <div id="MetricaAuthentication" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">Authentication</h6>
                        </div>
                        <ul class="nav">
                            <li class="nav-item"><a class="nav-link" href="../authentication/auth-login.html">Log in</a></li>
                            <li class="nav-item"><a class="nav-link" href="../authentication/auth-login-alt.html">Log in alt</a></li>
                            <li class="nav-item"><a class="nav-link" href="../authentication/auth-register.html">Register</a></li>
                            <li class="nav-item"><a class="nav-link" href="../authentication/auth-register-alt.html">Register-alt</a></li>
                            <li class="nav-item"><a class="nav-link" href="../authentication/auth-recover-pw.html">Re-Password</a></li>
                            <li class="nav-item"><a class="nav-link" href="../authentication/auth-recover-pw-alt.html">Re-Password-alt</a></li>
                            <li class="nav-item"><a class="nav-link" href="../authentication/auth-lock-screen.html">Lock Screen</a></li>
                            <li class="nav-item"><a class="nav-link" href="../authentication/auth-lock-screen-alt.html">Lock Screen</a></li>
                            <li class="nav-item"><a class="nav-link" href="../authentication/auth-404.html">Error 404</a></li>
                            <li class="nav-item"><a class="nav-link" href="../authentication/auth-404-alt.html">Error 404-alt</a></li>
                            <li class="nav-item"><a class="nav-link" href="../authentication/auth-500.html">Error 500</a></li>
                            <li class="nav-item"><a class="nav-link" href="../authentication/auth-500-alt.html">Error 500-alt</a></li>
                        </ul>
                    </div><!-- end Authentication-->
                </div><!--end menu-body-->
            </div>--><!-- end main-menu-inner-->
        </div>
        <!-- end leftbar-tab-menu-->
