@extends('layouts.front')

@section('css')
    <style>
        .about-des ul li{
            display: list-item;
            list-style: unset;
        }
        .product-img img {
            height: 250px;
        }
    </style>
@endsection

@section('front')
    <!--breadcumb area start -->
    <div class="breadcumb-area overlay pos-rltv" style="background-image: url('/public/images/bg/breadcumb.jpg'); height: 200px;">
        <div class="bread-main">
            <div class="bred-hading text-center">
                <h5>{{ __('message.silk') }}</h5>
            </div>
            <ol class="breadcrumb">
                <li class="home"><a title="Go to Home Page" href="{{url('/')}}">{{ __('message.home') }}</a></li>
                <li class="active">{{ __('message.fabric') }}</li>
                <li class="active">{{ __('message.silk') }}</li>
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
                        <h5 class="uppercase">{{ __('message.silk') }}</h5>
                    </div>
                </div>
                <div class="about-us-wrap">
                        <div class="about-des">
                            <h4> {{ __('silk.what?') }}</h4>
                            <p> {{ __('silk.text1') }}/p>
                            <h4> {{ __('silk.title1') }}</h4>
                            <p> {{ __('silk.text2') }}</p>
                            <ul>
                                <li>{{ __('silk.l1') }}</li>
                                <li>{{ __('silk.l2') }}</li>
                                <li>{{ __('silk.l3') }}</li>
                                <li>{{ __('silk.l4') }}</li>
                                <li>{{ __('silk.l5') }}</li>
                            </ul>
                            <h4> {{ __('silk.title2') }}</h4>
                            <p> {{ __('silk.text3') }}</p>
                            <ul>
                                <li>{{ __('silk.l6') }}</li>
                                <li>{{ __('silk.l7') }}</li>
                                <li>{{ __('silk.l8') }}</li>
                                <li>{{ __('silk.l9') }}</li>
                                <li>{{ __('silk.l10') }}</li>
                            </ul>
                            <h4> {{ __('silk.title3') }}</h4>
                            <p> {{ __('silk.text4') }}</p>
                            <ul>
                                <li>{{ __('silk.l11') }}</li>
                                <li>{{ __('silk.l12') }}</li>
                                <li>{{ __('silk.l13') }}</li>
                            </ul>
                            <h4> {{ __('silk.title4') }}</h4>
                            <p> {{ __('silk.text5') }}</p>
                            <ul>
                                <li>{{ __('silk.l14') }}</li>
                                <li>{{ __('silk.l15') }}</li>
                                <li>{{ __('silk.l16') }}</li>
                                <li>{{ __('silk.l17') }}</li>
                            </ul>
                            <h4> {{ __('silk.title5') }}</h4>
                            <p> {{ __('silk.text6') }}</p>
                            <ul>
                                <li>{{ __('silk.l18') }}</li>
                                <li>{{ __('silk.l19') }}</li>
                                <li>{{ __('silk.l20') }}</li>
                                <li>{{ __('silk.l21') }}</li>
                                <li>{{ __('silk.l22') }}</li>
                            </ul>
                            <h4> {{ __('silk.title6') }}</h4>
                            <p> {{ __('silk.text7') }}</p>
                            <ul>
                                <li>{{ __('silk.l23') }}</li>
                                <li>{{ __('silk.l24') }}</li>
                                <li>{{ __('silk.l25') }}</li>
                                <li>{{ __('silk.l26') }}</li>
                                <li>{{ __('silk.l27') }}</li>
                                <li>{{ __('silk.l28') }}</li>
                            </ul>
                            <h4> {{ __('silk.title7') }}</h4>
                            <ul>
                                <li>{{ __('silk.l29') }}</li>
                                <li>{{ __('silk.l30') }}</li>
                                <li>{{ __('silk.l31') }}</li>
                                <li>{{ __('silk.l32') }}</li>
                                <li>{{ __('silk.l33') }}</li>
                                <li>{{ __('silk.l34') }}</li>
                                <li>{{ __('silk.l35') }}</li>
                            </ul>
                            <h4> {{ __('silk.title8') }}</h4>
                            <ul>
                                <li>{{ __('silk.l36') }}</li>
                                <li>{{ __('silk.l37') }}</li>
                                <li>{{ __('silk.l38') }}</li>
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
                                        <img alt="" src="{{ asset('public/images/fabric/silk2.jpg') }}">
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
                                        <img alt="" src="{{ asset('public/images/fabric/silk3.jpg') }}">
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
                                        <img alt="" src="{{ asset('public/images/fabric/silk5.jpg') }}">
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
                                        <img alt="" src="{{ asset('public/images/fabric/silk4.jpg') }}">
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
