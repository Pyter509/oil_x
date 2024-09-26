@extends('user.index')

@section('extension')

<nav class="sidebar dark_sidebar">
    <div class="logo d-flex justify-content-between">
        <a class="large_logo" href="{{ route('user.main') }}">
            <img src="{{ url('admin/img/logo_white.png') }}" alt>
        </a>
        <a class="small_logo" href="{{ route('user.main') }}">
            <img src="{{ url('admin/img/mini_logo.png') }}" alt>
        </a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>

    <ul id="sidebar_menu">
        <li>
            <a href="{{ route('user.main') }}" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ url('admin/img/menu-icon/2.svg') }}" alt>
                </div>
                <div class="nav_title">
                    <span>Home Page</span>
                </div>
            </a>
        </li>
        <li>
            <a href="{{route('user.history')}}" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ url('admin/img/menu-icon/3.svg') }}" alt>
                </div>
                <div class="nav_title">
                    <span>History</span>
                </div>
            </a>
        </li>
  
            <li>
        <a href="{{ route('user.appointments')}}" aria-expanded="false">
            <div class="nav_icon_small">
                <i class="fas fa-calendar-alt"></i> <!-- or fas fa-clock -->
            </div>
            <div class="nav_title">
                <span>Appointments</span>
            </div>
        </a>
    </li>


        <li>
            <a href="{{ route('user.profile')}}" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ url('admin/img/menu-icon/4.svg') }}" alt>
                </div>
                <div class="nav_title">
                    <span>Profile</span>
                </div>
            </a>
        </li>
        <li>
            <a class="has-arrow" href="#" aria-expanded="false">
            <div class="nav_icon_small">
            <i class="fas fa-user-shield"></i> <!-- Admin Icon -->
            </div>
                <div class="nav_title">
                    <span>Admin</span>
                </div>
            </a>
            <ul>
                <li><a href="{{ route('admin.home') }}">Home</a></li>
                <li><a href="{{route('admin.manage')}}">Manage</a></li>
                <li><a href="{{route('admin.customers')}}">Customers</a></li>
                <li><a href="{{route('admin.appointments')}}">Appointments</a></li>
                <li><a href="{{route('admin.payee')}}">Payments Details</a></li>
            </ul>
        </li>
    </ul>
</nav>

<section class="main_content dashboard_part large_header_bg">
    <div class="container-fluid g-0">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="header_iner d-flex justify-content-between align-items-center">
                    <div class="sidebar_icon d-lg-none">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="line_icon open_miniSide d-none d-lg-block">
                        <img src="{{ url('admin/img/line_img.png') }}" alt>
                    </div>
                    <div class="header_right d-flex justify-content-between align-items-center">
                        <div class="header_notification_warp d-flex align-items-center">
                            <li>
                                <a class="CHATBOX_open nav-link-notify" href="#">
                                    <img src="{{ url('admin/img/icon/msg.svg') }}" alt>
                                </a>
                            </li>
                            <li>
                                <a class="bell_notification_clicker nav-link-notify" href="#">
                                    <img src="{{ url('admin/img/icon/bell.svg') }}" alt>
                                </a>
                                <div class="Menu_NOtification_Wrap">
                                    <div class="notification_Header">
                                        <h4>Notifications</h4>
                                    </div>
                                   
                                    <div class="nofity_footer">
                                        <div class="submit_button text-center pt_20">
                                            <a href="#" class="btn_1 green">See More</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </div>

                        <div class="profile_info d-flex align-items-center">
                            <div class="profile_thumb mr_20">
                                <img src="{{ url('admin/img/transfer/4.png') }}" alt="#">
                            </div>
                            <div class="author_name">
                                <h4 class="f_s_15 f_w_500 mb-0">Jiue Anderson</h4>
                                <p class="f_s_12 f_w_400">Manager</p>
                            </div>
                            <div class="profile_info_iner">
                                <div class="profile_author_name">
                                    <p>Manager</p>
                                    <h5>Jiue Anderson</h5>
                                </div>
                                <div class="profile_info_details">
                                    <a href="#">My Profile</a>
                                    <a href="#">Settings</a>
                                    <a href="#">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row py-4">
            @yield('x-slot')
        </div>
    </div>
</section>

@endsection
