<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>Lookatme</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="LOOK AT ME- женское нижнее бельё, одежда для сна и отдыха оптом со склада в Ташкенте">
    <meta name="keywords" content="женское нижнее бельё, купить оптом, лучшие цены, Фабрика в Ташкенте">
    <meta property="og:type" content="website">
    <meta property="og:title" content="LOOK AT ME (женское нижнее бельё)">
    <meta property="og:site_name" content="lookatme.uz">
    <meta property="og:description" content="LOOK AT ME- женское нижнее бельё, одежда для сна и отдыха оптом со склада в Ташкенте">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:locale:alternate" content="uz_UZ">
    <meta property="og:url" content="http://lookatme.uz/">
    <meta property="og:image" content="{{ asset('public/images/favicon.png') }}">
    <meta property="og:image:width" content="968">
    <meta property="og:image:height" content="504">
    <meta name="google-site-verification" content="lKLGpQb_WQjAJ_E2YriV8KDUwwETlHrqqZCi6pvvrBA">
    <meta name="robots" content="all">
    <link rel="canonical" href="http://lookatme.uz/">
    <!-- FAVICON -->
    <link href="{{ asset('public/images/favicon.png') }}" rel="shortcut icon" type="image/x-icon" />
    <!-- CSS FILES -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="{{ asset('public/css/normalize.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/css/fakeloader.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/css/animations.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/css/tooltipster.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/css/nerveslider.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/css/colors.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/css/media.css') }}" rel="stylesheet" type="text/css">

    <!-- catalog page -->
    <link href="{{ asset('public/css/colorbox.css') }}" rel="stylesheet" type="text/css">

    <!-- NOSCRIPT -->
    <noscript>
        <link href="{{ asset('public/css/nojs.css') }}" rel="stylesheet" type="text/css">
    </noscript>
    @yield('css')
</head>

<body>
<!-- FAKE LOADER -->
<div id="fakeloader"></div>
<!-- SEMI TRANSPARENT DARK BG COLOR -->
<div id="bg-transparent"></div>
<!-- MAIN CONTAINER -->
<div id="main-container">
    <!-- HEADER -->
    <header id="header">
        <div id="header-top">
            <!-- LOGO -->
            <div id="header-logo">
                <a href="{{url('/')}}">
                    <img src="{{ asset('public/images/logo.png') }}" alt="logo" style="height: auto;" />
                </a>
            </div>
            <!-- SOCIAL ICONS -->
            <div id="header-icons">
                <ul class="flag">
                    <li>
                        <a class="fa fa-search" id="flag-search" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('locale/uz') }}" class="tooltip-header" title="UZ"><img src="{{ asset('public/images/flag/uz.jpg') }}" alt="uz"></a>
                    </li>
                    <li>
                        <a href="{{ url('locale/ru') }}" class="tooltip-header" title="RU"><img src="{{ asset('public/images/flag/ru.jpg') }}" alt="ru"></a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="header-menu">
            <!-- MOBILE MENU ICON -->
            <a class="toggleMenu" href="{{route('home')}}">LOOK AT ME</a>
            <!-- MAIN MENU -->
            <nav>
                <ul class="nav">
                    <li>
                        <a href="{{route('home')}}">{{ __('message.main') }}</a>
                    </li>
                    <li>
                        <a href="#">{{ __('message.catalog') }}</a>
                        <ul>
                            @foreach($categories as $category)
                            <li>
                                <a href="{{url('/catalog_type', [$category->id])}}">
                                    @if(App::isLocale('ru')) {{{$category->category_ru}}} @else  {{$category->category_uz}} @endif</a>
                            </li>
                            @endforeach

                        </ul>
                    </li>
                    <li>
                        <a href="#">{{ __('message.information') }}</a>
                        <ul>
                            <li>
                                <a href="{{ route('pay_del') }}">{{ __('message.pay&del') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('size') }}">{{ __('message.size') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('fabric') }}">{{ __('message.fabric') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('rules') }}">{{ __('message.ruleoftrade') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">{{ __('message.wholesale') }}</a>
                        <ul>
                            <li>
                                <a href="{{route('price-list')}}">{{ __('message.pricelist') }}</a>
                            </li>

                            <li>
                                <a href="{{route('for-delivery')}}">{{ __('message.fromfactry') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">{{ __('message.rubrika') }}</a>
                        <ul>
                            <li>
                                <a href="{{ route('kalonka_style') }}">{{ __('message.forstyle') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('modniy_obriz') }}">{{ __('message.modniy') }}</a>
                            </li>
                            <li>
                                <a href="{{route('blog')}}">{{ __('message.companynews') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('useful_tips') }}">{{ __('message.usefultips') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('sale') }}">{{ __('message.sale') }}</a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}">{{ __('message.contact') }}</a>
                    </li>
                    <li id="menu-search">
                        <a class="fa fa-search"  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" style="line-height: 50px;">
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="collapse" id="collapseExample">
                <div>
                    <form action="{{route('search')}}" method="post" id="searchform" class="searchbox">
                        {{ csrf_field() }}
                        <input type="text" id="search" class="searchtext" name="search" placeholder="{{__('message.cat-search')}}..." required="required"/>
                        <input type="submit" id="search-button"  value="{{__('message.search')}}"/>
                    </form>
                </div>
            </div>
        </div>
    </header>


     @yield('main')


    <!-- FOOTER -->
    <footer id="footer">
        <!-- BACK TO TOP BUTTON -->
        <div id="back-to-top" class="tooltip-gototop" title="{{ __('message.top') }}"></div>
        <!-- FOOTER WIDGETS -->
        <div id="footer-widgets" class="grid">
            <!-- WIDGET 1 -->
            <div class="footer-widget unit one-third">
                <p><span class="fa fa-map-marker"> {{ __('message.full-address') }}</span></p>
            </div>
            <!-- WIDGET 2 -->
            <div class="footer-widget unit one-third">
                <p><span class="fa fa-phone"></span>+99855 500-52-52</p>
            </div>
            <!-- WIDGET 3 -->
            <div class="footer-widget unit one-third">
                <p><span class="fa fa-clock-o"></span>{{ __('message.worktime') }}: {{ __('message.workday') }}</p>
            </div>
        </div>
        <div class="footer-info">
            <!-- COPYRIGHT -->
            <div class="credits">© lookatme.uz, <script>document.write(new Date().getFullYear());</script></div>
            <!-- SOCIAL ICONS -->
            <ul class="social-icons footer-social">
                <li>
                    <a href="https://www.facebook.com/lookatme.tashkent" class="fa fa-facebook-f tooltip-pink" title="Facebook">Facebook</a>
                </li>
                <li>
                    <a href="https://t.me/lookatmeuw" class="fa fa-paper-plane tooltip-pink" title="Telegram">Telegram</a>
                </li>
                <li>
                    <a href="https://www.instagram.com/lookatme.uw/" class="fa fa-instagram tooltip-pink" title="Instagram">Instagram</a>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCenGJPaDCPYC4PwoYtNZQcw" class="fa fa-youtube-play tooltip-pink" title="YouTube">YouTube</a>
                </li>
            </ul>
        </div>
    </footer>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<!-- MAIN JS FILES -->
<script type="text/javascript" src="{{ asset('public/js/jquery-1.11.3.min.js') }}"></script>
<!-- FAKE LOADER -->
<script type="text/javascript" src="{{ asset('public/js/fakeloader.js') }}"></script>
<!-- NERVESLIDER -->
<script type="text/javascript" src="{{ asset('public/js/jquery-ui-custom.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/nerveslider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/homeslider.js') }}"></script>
<!-- CAROUSELS -->
<script type="text/javascript" src="{{ asset('public/js/owl.carousel.min.js') }}"></script>

<!-- BACKSTRETCH (BG IMAGES) -->
<script type="text/javascript" src="{{ asset('public/js/backstretch.min.js') }}"></script>
<!-- TOOLTIPS -->
<script type="text/javascript" src="{{ asset('public/js/jquery.tooltipster.min.js') }}"></script>
<!-- CUSTOM JS -->
<script type="text/javascript" src="{{ asset('public/js/custom.js') }}"></script>
<!-- COLORBOX -->
<script type="text/javascript" src="{{ asset('public/js/colorbox.js') }}"></script>
@yield('js')
</body>

</html>
