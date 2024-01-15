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
                <h5>{{ __('message.lace') }}</h5>
            </div>
            <ol class="breadcrumb">
                <li class="home"><a title="Go to Home Page" href="{{url('/')}}">{{ __('message.home') }}</a></li>
                <li class="active">{{ __('message.fabric') }}</li>
                <li class="active">{{ __('message.lace') }}</li>
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
                        <h5 class="uppercase">{{ __('message.lace') }}</h5>
                    </div>
                </div>
                <div class="about-us-wrap">
                        <div class="about-des">
                            <h4> {{ __('lace.what?') }}</h4>
                            <p>{{ __('lace.text1') }}</p>
                            <p>{{ __('lace.text2') }}</p>
                            <ul>
                                <li>{{ __('lace.l1') }}</li>
                                <li>{{ __('lace.l2') }}</li>
                            </ul>
                            <p>{{ __('lace.text3') }}</p>
                            <ul>
                                <li>{{ __('lace.l3') }}</li>
                                <li>{{ __('lace.l4') }}</li>
                                <li>{{ __('lace.l5') }}</li>
                            </ul>
                            <p>{{ __('lace.text4') }}</p>
                            <ul>
                                <li>{{ __('lace.l6') }}</li>
                                <li>{{ __('lace.l7') }}</li>
                            </ul>
                            <h5>{{ __('lace.title1') }}</h5>
                            <ul>
                                <li>{{ __('lace.l8') }}</li>
                                <li>{{ __('lace.l9') }}</li>
                                <li>{{ __('lace.l10') }}</li>
                                <li>{{ __('lace.l11') }}</li>
                            </ul>
                            <h5>{{ __('lace.title2') }}</h5>
                            <ul>
                                <li>{{ __('lace.l12') }}</li>
                                <li>{{ __('lace.l13') }}</li>
                            </ul>
                            <p>{{ __('lace.text5') }}</p>
                            <ul>
                                <li>{{ __('lace.l14') }}</li>
                                <li>{{ __('lace.l15') }}</li>
                                <li>{{ __('lace.l16') }}</li>
                                <li>{{ __('lace.l17') }}</li>
                                <li>{{ __('lace.l18') }}</li>
                                <li>{{ __('lace.l19') }}</li>
                                <li>{{ __('lace.l20') }}</li>
                                <li>{{ __('lace.l21') }}</li>
                                <li>{{ __('lace.l22') }}</li>
                                <li>{{ __('lace.l23') }}</li>
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
                                        <img alt="" src="{{ asset('public/images/fabric/lace2.png') }}">
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
                                        <img alt="" src="{{ asset('public/images/fabric/lace3.png') }}">
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
                                        <img alt="" src="{{ asset('public/images/fabric/lace5.png') }}">
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
                                        <img alt="" src="{{ asset('public/images/fabric/lace4.png') }}">
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
