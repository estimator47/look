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
                <h5>{{ __('message.other') }}</h5>
            </div>
            <ol class="breadcrumb">
                <li class="home"><a title="Go to Home Page" href="{{url('/')}}">{{ __('message.home') }}</a></li>
                <li class="active">{{ __('message.fabric') }}</li>
                <li class="active">{{ __('message.other') }}</li>
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
                        <h5 class="uppercase">{{ __('message.other') }}</h5>
                    </div>
                </div>
                <div class="about-us-wrap">
                        <div class="about-des">
                            <h4> {{ __('other.what?b') }}</h4>
                            <p>{{ __('other.textb') }}</p>
                            <h5> {{ __('other.titleb') }}</h5>
                            <ul>
                                <li>{{ __('other.b1') }}</li>
                                <li>{{ __('other.b2') }}</li>
                                <li>{{ __('other.b3') }}</li>
                                <li>{{ __('other.b4') }}</li>
                                <li>{{ __('other.b5') }}</li>
                                <li>{{ __('other.b6') }}</li>
                                <li>{{ __('other.b7') }}</li>
                                <li>{{ __('other.b8') }}</li>
                                <li>{{ __('other.b9') }}</li>
                            </ul>
                            <h4> {{ __('other.what?v') }}</h4>
                            <p>{{ __('other.textv') }}</p>
                            <h5> {{ __('other.titlev') }}</h5>
                            <ul>
                                <li>{{ __('other.v1') }}</li>
                                <li>{{ __('other.v2') }}</li>
                                <li>{{ __('other.v3') }}</li>
                                <li>{{ __('other.v4') }}</li>
                                <li>{{ __('other.v5') }}</li>
                                <li>{{ __('other.v6') }}</li>
                                <li>{{ __('other.v7') }}</li>
                                <li>{{ __('other.v8') }}</li>
                                <li>{{ __('other.v9') }}</li>
                                <li>{{ __('other.v10') }}</li>
                            </ul>
                            <h5> {{ __('other.titlev2') }}</h5>
                            <ul>
                                <li>{{ __('other.v11') }}</li>
                                <li>{{ __('other.v12') }}</li>
                                <li>{{ __('other.v13') }}</li>
                                <li>{{ __('other.v14') }}</li>
                                <li>{{ __('other.v15') }}</li>
                            </ul>
                            <h4> {{ __('other.what?m') }}</h4>
                            <p>{{ __('other.textm') }}</p>
                            <h5> {{ __('other.titlem') }}</h5>
                            <ul>
                                <li>{{ __('other.m1') }}</li>
                                <li>{{ __('other.m2') }}</li>
                                <li>{{ __('other.m3') }}</li>
                                <li>{{ __('other.m4') }}</li>
                                <li>{{ __('other.m5') }}</li>
                                <li>{{ __('other.m6') }}</li>
                                <li>{{ __('other.m7') }}</li>
                                <li>{{ __('other.m8') }}</li>
                                <li>{{ __('other.m9') }}</li>
                            </ul>
                            <p>{{ __('other.textm2') }}</p>
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
                                        <img alt="" src="{{ asset('public/images/fabric/other2.jpg') }}">
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
                                        <img alt="" src="{{ asset('public/images/fabric/other3.jpg') }}">
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
                                        <img alt="" src="{{ asset('public/images/fabric/other5.jpg') }}">
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
                                        <img alt="" src="{{ asset('public/images/fabric/other4.jpg') }}">
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
