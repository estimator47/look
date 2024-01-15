@extends('layouts.front')

@section('css')
    <style>
     .about-des ul li{
         display: list-item;
         list-style: unset;
     }
     .product-img img {
         height: 300px;
     }
    </style>
@endsection

@section('front')
    <!--breadcumb area start -->
    <div class="breadcumb-area overlay pos-rltv" style="background-image: url('/public/images/bg/breadcumb.jpg'); height: 200px;">
        <div class="bread-main">
            <div class="bred-hading text-center">
                <h5>{{ __('message.cotton') }}</h5>
            </div>
            <ol class="breadcrumb">
                <li class="home"><a title="Go to Home Page" href="{{url('/')}}">{{ __('message.home') }}</a></li>
                <li class="active">{{ __('message.fabric') }}</li>
                <li class="active">{{ __('message.cotton') }}</li>
            </ol>
        </div>
    </div>
    <!--breadcumb area end -->

    <!-- fubric-area start-->
    <div class="about-us-area ptb-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="heading-title heading-style pos-rltv mb-50 text-center">
                        <h5 class="uppercase">{{ __('message.cotton') }}</h5>
                    </div>
                </div>
                <div class="about-us-wrap">
                        <div class="about-des">
                           <h4> {{ __('cotton.what?') }}</h4>
                            <p>{{ __('cotton.text1') }}</p>
                            <ul>
                                <li>{{ __('cotton.li1') }}</li>
                                <li>{{ __('cotton.li2') }}</li>
                                <li>{{ __('cotton.li3') }}</li>
                                <li>{{ __('cotton.li4') }}</li>
                                <li>{{ __('cotton.li5') }}</li>
                                <li>{{ __('cotton.li6') }}</li>
                                <li>{{ __('cotton.li7') }}</li>
                            </ul>

                                <p>{{ __('cotton.text2') }}</p>
                            <ul>
                                <li>{{ __('cotton.li8') }}</li>
                                <li>{{ __('cotton.li9') }}</li>
                                <li>{{ __('cotton.li10') }}</li>
                                <li>{{ __('cotton.li11') }}</li>
                                <li>{{ __('cotton.li12') }}</li>
                                <li>{{ __('cotton.li13') }}</li>
                                <li>{{ __('cotton.li14') }}</li>
                                <li>{{ __('cotton.li15') }}</li>
                                <li>{{ __('cotton.li16') }}</li>
                            </ul>
                            <p>
                                {{ __('cotton.text3') }}
                            </p>
                            <ul>
                                <li>{{ __('cotton.li17') }}</li>
                                <li>{{ __('cotton.li18') }}</li>
                                <li>{{ __('cotton.li19') }}</li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fubric-area end-->


    <!--fabric-img area start-->
    <div class="our-team-area ptb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="total-team team-carasoul row">
                        <div class="col-lg-3">
                            <!-- single img start-->
                            <div class="single-product single-member">
                                <div class="product-img">
                                    <div class="single-prodcut-img   pos-rltv">
                                        <img alt="" src="{{ asset('images/fabric/cotton2.jpeg') }}">
                                    </div>
                                    <div class="product-icon socile-icon-tooltip text-center">

                                    </div>

                                </div>
                            </div>
                            <!-- single img end-->
                        </div>
                        <div class="col-lg-3">
                            <!-- single img start-->
                            <div class="single-product single-member">
                                <div class="product-img">
                                    <div class="single-prodcut-img  pos-rltv">
                                        <img alt="" src="{{ asset('images/fabric/cotton3.jpeg') }}">
                                    </div>
                                    <div class="product-icon socile-icon-tooltip text-center">

                                    </div>

                                </div>
                            </div>
                            <!-- single img end-->
                        </div>
                        <div class="col-lg-3">
                            <!-- single img start-->
                            <div class="single-product single-member">
                                <div class="product-img">
                                    <div class="single-prodcut-img   pos-rltv">
                                        <img alt="" src="{{ asset('images/fabric/cotton5.jpg') }}">
                                    </div>
                                    <div class="product-icon socile-icon-tooltip text-center">

                                    </div>

                                </div>
                            </div>
                            <!-- single img end-->
                        </div>
                        <div class="col-lg-3">
                            <!-- single img start-->
                            <div class="single-product single-member">
                                <div class="product-img">
                                    <div class="single-prodcut-img pos-rltv">
                                        <img alt="" src="{{ asset('images/fabric/cotton4.jpg') }}">
                                    </div>
                                    <div class="product-icon socile-icon-tooltip text-center">

                                    </div>

                                </div>
                            </div>
                            <!-- single img end-->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fabric-img end-->

@endsection

@section('js')
    <script>

    </script>
@endsection
