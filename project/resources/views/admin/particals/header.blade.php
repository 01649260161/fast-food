



<header class="header fixed-top clearfix">
    <!--logo start-->
    <div class="brand">
        <a href="{{url('/')}}" class="logo">
            FASTFOOD
        </a>
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars"></div>
        </div>
    </div>
    <!--logo end-->
    <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
            
            <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
    </div>
    <div class="top-nav clearfix">
        <!--search & user info start-->
        <ul class="nav pull-right top-menu">
            <li>
                <input type="text" class="form-control search" placeholder=" Search">
            </li>
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <img alt="" src="{{asset('admin_assets/images/2.png')}}">
                    <span class="username"><?php if(isset(Auth::user()->name)){echo Auth::user()->name;}else{echo 'Admin';} ?></span>
                    <b class="caret"></b>
                </a>

                <ul class="dropdown-menu extended logout">

                    <li><a href="users/<?php if(isset(Auth::user()->id)){echo Auth::user()->id;}else{echo '1';}?>/edit"><i class=" fa fa-suitcase"></i>Hồ sơ</a></li>
                    <li><a href="config"><i class="fa fa-cog"></i> Cài đặt</a></li>
                    <li>
                        <a href="{{ route('admin.auth.logout') }} " onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>{{ __('Đăng Xuất') }}</a>
                        <form id="logout-form" action="{{ route('admin.auth.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
            <!-- user login dropdown end -->

        </ul>
        <!--search & user info end-->
    </div>
</header>