<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Look at me</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1"/>
    <meta name="description" content="">

    <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon" type="image/x-icon"/>

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{ asset('css/core.css') }}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{ asset('css/shortcode/shortcodes.css') }}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- User style -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color/skin-default.css') }}">
    @yield('css')
    <style>
        @media only screen and (max-width: 480px) {
            .phone li {
                font-size: 11px;
            }
        }

        .copyrigth, .payment-support, .payment-support a {
            color: #827a7a;
        }

        .payment-support a:hover {
            color: #cc3333;
        }
    </style>
    <!-- Modernizr JS
    <script src="js/vendor/modernizr-2.8.3.min.js') }}"></script>-->
</head>

<body>

<!-- Body main wrapper start -->
<div class="wrapper fixed-box home-one">

    <!-- Start of header area -->
    <header class="header-area header-wrapper">
        <div class="header-top-bar black-bg clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-6">
                        <div class="login-register-area">
                            <ul style="padding: 0px;">
                                <li><a href="{{ url('locale/en') }}"><img src="{{ asset('images/flag/en.png') }}"
                                                                          style="width: 30px;"></a></li>
                                <li><a href="{{ url('locale/ru') }}"><img src="{{ asset('images/flag/ru.jpg') }}"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6">
                        <div class="social-search-area text-right">
                            <div class="social-icon socile-icon-style-2">
                                <ul class="phone">
                                    <li style="color: white;"><i class="zmdi zmdi-phone"></i> +99855 500-52-52</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="header-middle-area">
            <div class="container">
                <div class="full-width-mega-dropdown">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="logo ptb-20"><a href="{{url('/')}}">
                                    <img src="{{ asset('images/logo/logo.png') }}" alt="main logo"></a>
                            </div>
                        </div>

                        <div class="col-lg-10 col-md-10 d-none d-md-block" style="text-align: right;">
                            <nav id="primary-menu">
                                <ul class="main-menu">
                                    <li><a href="{{url('/')}}">{{ __('message.home') }}</a>
                                    </li>
                                    <li><a href="{{url('/product/all')}}">{{ __('message.product') }}</a></li>
                                    <li class="mega-parent pos-rltv"><a href="#">{{ __('message.fabric') }}</a>
                                        <div class="mega-menu-area">
                                            <ul class="single-mega-item">
                                                <li><a href="{{url('/fabric/cotton')}}">{{ __('message.cotton') }}</a>
                                                </li>
                                                <li><a href="{{url('/fabric/silk')}}">{{ __('message.silk') }}</a></li>
                                                <li><a href="{{url('/fabric/lace')}}">{{ __('message.lace') }}</a></li>
                                                <li><a href="{{url('/fabric/other')}}">{{ __('message.other') }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="{{url('/blog/all')}}">{{ __('message.blog') }}</a></li>
                                    <li><a href="{{url('/about_us')}}">{{ __('message.about') }}</a></li>
                                    <li><a href="{{url('/contact')}}">{{ __('message.contact') }}</a></li>
                                </ul>
                            </nav>
                        </div>

                        <!-- mobile-menu-area start -->
                        <div class="mobile-menu-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <nav id="dropdown">
                                            <ul class="main-menu">
                                                <li class="current"><a class="active"
                                                                       href="{{url('/')}}">{{ __('message.home') }}</a>
                                                </li>
                                                <li><a href="{{url('/product/all')}}">{{ __('message.product') }}</a>
                                                </li>
                                                <li class="mega-parent pos-rltv"><a
                                                        href="#">{{ __('message.fabric') }}</a>

                                                    <ul class="single-mega-item">
                                                        <li>
                                                            <a href="{{url('/fabric/cotton')}}">{{ __('message.cotton') }}</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/fabric/silk')}}">{{ __('message.silk') }}</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/fabric/lace')}}">{{ __('message.lace') }}</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/fabric/other')}}">{{ __('message.other') }}</a>
                                                        </li>
                                                    </ul>

                                                </li>
                                                <li><a href="{{url('/blog/all')}}">{{ __('message.blog') }}</a></li>
                                                <li><a href="{{url('/about_us')}}">{{ __('message.about') }}</a></li>
                                                <li><a href="{{url('/contact')}}">{{ __('message.contact') }}</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- mobile menu area end -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End of header area -->


    @yield('front')


    <!-- footer area start-->
    <div class="footer-area ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-footer contact-us">
                        <div class="footer-title uppercase">
                            <h5>{{ __('message.contact-us') }}</h5>
                        </div>
                        <ul style="padding: 0px;">
                            <li style="display: block;">
                                <div class="contact-icon"><i class="zmdi zmdi-pin-drop"></i></div>
                                <div class="contact-text">
                                    <p><span>Toshkent,</span> <span>Uzbekistan</span></p>
                                </div>
                            </li>
                            <li style="display: block;">
                                <div class="contact-icon"><i class="zmdi zmdi-email-open"></i></div>
                                <div class="contact-text">
                                    <p><span>
                                                <a href="mailto://sale@lookatme4you.com">sale@lookatme4you.com
</a>
                                            </span>
                                    </p>
                                </div>
                            </li>
                            <li style="display: block;">
                                <div class="contact-icon"><i class="zmdi zmdi-phone"></i></div>
                                <div class="contact-text">
                                    <p><a href="tel://+99855 500-52-52">+99855 500-52-52</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-footer informaton-area">
                        <div class="footer-title uppercase">
                            <h5>{{ __('message.information') }}</h5>
                        </div>
                        <div class="informatoin">
                            <ul style="padding: 0px;">
                                <li><a href="{{url('/')}}">{{ __('message.home') }}</a></li>
                                <li><a href="{{url('/product/all')}}">{{ __('message.product') }}</a></li>
                                <li><a href="{{url('/blog/all')}}">{{ __('message.blog') }}</a></li>
                                <li><a href="{{url('/about_us')}}">{{ __('message.about') }}</a></li>
                                <li><a href="{{url('/contact')}}">{{ __('message.contact') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-footer informaton-area">
                        <div class="footer-title uppercase">
                            <h5>{{ __('message.certificate') }}</h5>
                        </div>
                        <div class="informatoin">

                            @php $types = \App\Models\CertificateType::query()->where('status', 'active')->get();@endphp
                            <ul style="padding: 0px;">
                                @foreach($types as $type)
                                    <li>
                                        <a href="{{url('/certificate/' . $type->id)}}">
                                            {{ $type->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-footer newslatter-area">
                        <div class="footer-title uppercase">
                            <h5>{{ __('message.social-net') }}</h5>
                        </div>
                        <div class="newslatter">
                            <div class="social-icon socile-icon-style-3 mt-40">
                                <ul>
                                    <li><a href="https://www.facebook.com/lookatme.tashkent" target="_blank"><i
                                                class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCenGJPaDCPYC4PwoYtNZQcw"
                                           target="_blank"><i class="zmdi zmdi-youtube"></i></a></li>
                                    <li><a href="https://www.pinterest.com/homefeed/" target="_blank"><i
                                                class="zmdi zmdi-pinterest"></i></a></li>
                                    <li><a href="mailto://sale@lookatme4you.com"><i class="zmdi zmdi-google"></i></a>
                                    </li>
                                    <li><a href="https://www.instagram.com/lookatme.uw/" target="_blank"><i
                                                class="zmdi zmdi-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer area start-->

    <!--footer bottom area start-->
    <div class="footer-bottom global-table">
        <div class="global-row">
            <div class="global-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyrigth">
                                Copyright © Look At Me Uzbekistan
                                <script>document.write(new Date().getFullYear());</script>
                                /OOO "Urban Style". All rights reserved.
                            </div>
                        </div>
                        <div class="col-md-6 text-right payment-support">
                            Web Developer: <a href="https://www.instagram.com/estimator47/">estimator47</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer bottom area end-->
</div>
<!-- Body main wrapper end -->

<!-- Placed js at the end of the document so the pages load faster -->

<!-- jquery latest version -->
<script src="{{ asset('js/vendor/jquery-1.12.0.min.js') }}"></script>
<!-- Popper js -->
<script src="{{ asset('js/popper.min.js') }}"></script>
<!-- Bootstrap framework js -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Slider js -->
<script src="{{ asset('js/slider/jquery.nivo.slider.pack.js') }}"></script>
<script src="{{ asset('js/slider/nivo-active.js') }}"></script>
<!-- counterUp-->
<script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
<!-- All js plugins included in this file. -->
<script src="{{ asset('js/plugins.js') }}"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="{{ asset('js/main.js') }}"></script>
@yield('js')

</body>

</html>
