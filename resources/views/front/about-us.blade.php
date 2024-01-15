@extends('layouts.front')

@section('css')
    <style>

    </style>
@endsection

@section('front')


    <!--breadcumb area start -->
    <div class="breadcumb-area overlay pos-rltv" style="background-image: url('/images/bg/breadcumb.jpg'); height: 200px;">
        <div class="bread-main">
            <div class="bred-hading text-center">
                <h5>{{ __('message.about-us') }}</h5>
            </div>
            <ol class="breadcrumb">
                <li class="home"><a title="Go to Home Page" href="{{url('/')}}">{{ __('message.home') }}</a></li>
                <li class="active">{{ __('message.about') }}</li>
            </ol>
        </div>
    </div>
    <!--breadcumb area end -->

    <!-- about-us-area start-->
    <div class="about-us-area ptb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="heading-title heading-style pos-rltv mb-50 text-center">
                        <h5 class="uppercase">{{ __('message.about-us') }}</h5>
                    </div>
                </div>
                <div class="about-us-wrap">
                    <div class="about-des">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="skill-img">
                                <img src="{{ asset('images/banner/about.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <p>
                                {{ __('about.text1') }}
                            </p>

                            <p>
                                {{ __('about.text2') }}
                            </p>
                            <p>
                                {{ __('about.text3') }}
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p>
                                {{ __('about.text4') }}
                            </p>
                            <p>{{ __('about.text5') }}</p>
                            <ul>
                                <li>{{ __('about.l1') }}</li><br>
                                <li>{{ __('about.l2') }}</li><br>
                                <li>{{ __('about.l3') }}</li><br>
                                <li>{{ __('about.l4') }}</li>
                            </ul>
                            <p>
                                {{ __('about.text6') }}
                            </p>
                            <p>
                                {{ __('about.text7') }}
                            </p>
                        </div>
                        <div class="col-lg-6">
                                <div class="skill-img">
                                <img src="{{ asset('images/banner/panty.jpg') }}" alt="">
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about-us-area end-->

    <!-- certificate start-->
    <div class="about-us-area ptb-60">
        <div class="container">
            <div class="row">
                <div class="about-us-wrap">
                    <div class="about-des">
                        <div class="row">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="skill-img">
                                        <img src="{{ asset('images/certificate/serf1.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="skill-img">
                                        <img src="{{ asset('images/certificate/serf2.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="skill-img">
                                        <img src="{{ asset('images/certificate/serf3.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="skill-img">
                                        <img src="{{ asset('images/certificate/serf4.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- certificate-area end-->

    <!--banner start-->
    <div class="choose-us-area pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="skill-img">
                        <h4>{{ __('about.text8') }}</h4>
                    </div>
                </div>
        </div>
    </div>
    <br>
        <!--banner end-->
@endsection

@section('js')
    <script>

    </script>
@endsection



