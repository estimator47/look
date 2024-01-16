<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta name="description" content="UzBooking Admin Template"/>
    <title>Lok at me</title>
    <!-- icons -->
    <link href="{{asset('admin/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('admin/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <!--bootstrap -->
    <link href="{{asset('admin/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/plugins/summernote/summernote.css')}}" rel="stylesheet">
    <!-- morris chart -->
    <link href="{{asset('admin/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="{{asset('admin/plugins/material/material.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/material_style.css')}}">
    <!-- animation -->
    <link href="{{asset('admin/css/pages/animate_page.css')}}" rel="stylesheet">
    <!-- Template Styles -->
    <link href="{{asset('admin/css/plugins.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/css/responsive.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/css/theme-color.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{ asset('admin/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css') }}"
          rel="stylesheet" type="text/css"/>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @yield('css')
</head>
<body
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
<div class="page-wrapper">
    <!-- start header -->
    <div class="page-header navbar navbar-fixed-top">
        <div class="page-header-inner ">
            <!-- logo start -->
            <div class="page-logo">
                <a href="{{url('/')}}">

                    <span class="logo-default">Look at me</span> </a>
            </div>
            <!-- logo end -->
            <ul class="nav navbar-nav navbar-left in">
                <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
            </ul>
            <!-- start mobile menu -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
               data-target=".navbar-collapse">
                <span></span>
            </a>
            <!-- end mobile menu -->
            <!-- start header menu -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <!-- start manage user dropdown -->
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <span class="username username-hide-on-mobile"> Админ </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default animated jello">
                            <li>
                                <a href="#" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                    <i class="icon-logout"></i> Выйти
                                </a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    <!-- end manage user dropdown -->
                </ul>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- start page container -->
    <div class="page-container">
        <!-- start sidebar menu -->
        <div class="sidebar-container">
            <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                <div id="remove-scroll">
                    <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true"
                        data-slide-speed="200">
                        <li class="sidebar-toggler-wrapper hide">
                            <div class="sidebar-toggler">
                                <span></span>
                            </div>
                        </li>
                        <li class="sidebar-user-panel">
                            <div class="user-panel">
                                <div class="row">
                                    <div class="sidebar-userpic">
                                        <img src="{{asset('images/favicon.png')}}" class="img-responsive" alt=""></div>
                                </div>
                                <div class="profile-usertitle">
                                    <div class="profile-usertitle-job"> Админ</div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item start">
                            <a href="{{route('news')}}" class="nav-link nav-toggle">
                                <i class="fa fa-arrow-right"></i>
                                <span class="title">Блог</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('catalog')}}" class="nav-link nav-toggle">
                                <i class="fa fa-arrow-right"></i>
                                <span class="title">Продукты</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('message_list')}}" class="nav-link nav-toggle">
                                <i class="fa fa-arrow-right"></i>
                                <span class="title">Сообщение</span>
                                <span class="arrow"></span>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{route('certificate-type')}}" class="nav-link nav-toggle">
                                <i class="fa fa-arrow-right"></i>
                                <span class="title">Тип сертификата</span>
                                <span class="arrow"></span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('certificate-file')}}" class="nav-link nav-toggle">
                                <i class="fa fa-arrow-right"></i>
                                <span class="title">СЕРТИФИКАТЫ</span>
                                <span class="arrow"></span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- end sidebar menu -->

        <!-- start page content -->
        <div class="page-content-wrapper">

            @yield('main')

            <!-- start footer -->
            <div class="page-footer">
                <div class="page-footer-inner"> 2020 &copy; this made by
                    <a href="https://www.instagram.com/estimator47/" target="_top" class="makerCss">estimator47</a>
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- end footer -->
        </div>


        <!-- start js include path -->
        <script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('admin/plugins/popper/popper.min.js')}}"></script>
        <script src="{{asset('admin/plugins/jquery-blockui/jquery.blockui.min.js')}}"></script>
        <!-- bootstrap -->
        <script src="{{asset('admin/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('admin/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('admin/js/pages/sparkline/sparkline-data.js')}}"></script>
        <!-- Common js-->
        <script src="{{asset('admin/js/app.js')}}"></script>
        <script src="{{asset('admin/js/layout.js')}}"></script>
        <script src="{{asset('admin/js/theme-color.js')}}"></script>
        <!-- material -->
        <script src="{{asset('admin/plugins/material/material.min.js')}}"></script>
        <!-- animation -->
        <script src="{{asset('admin/js/pages/ui/animations.js')}}"></script>
        <!-- morris chart -->
        <script src="{{asset('admin/plugins/morris/morris.min.js')}}"></script>
        <script src="{{asset('admin/plugins/morris/raphael-min.js')}}"></script>
        <script src="{{asset('admin/js/pages/chart/morris/morris_home_data.js')}}"></script>
@yield('js')
</body>

</html>
