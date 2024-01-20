@extends('layouts.front')

@section('css')
    <style>

    </style>
@endsection

@section('front')

    <!--breadcumb area start -->
    <div class="breadcumb-area overlay pos-rltv" style="background-image: url('/public/images/bg/breadcumb.jpg'); height: 200px;">
        <div class="bread-main">
            <div class="bred-hading text-center">
                <h5>{{ __('message.certificate') }}</h5>
            </div>
            <ol class="breadcrumb">
                <li class="home"><a title="Go to Home Page" href="{{url('/')}}">{{ __('message.home') }}</a></li>
                <li class="active">{{ __('message.certificate') }}</li>
            </ol>
        </div>
    </div>
    <!--breadcumb area end -->

    <div class="about-us-area ptb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="heading-title heading-style pos-rltv mb-50 text-center">
                        <h5 class="uppercase">{{ __('message.certificate') }}</h5>
                    </div>
                    <div class="about-us-area ptb-60">
                        <div class="container">
                            <div class="row">
                                <div class="about-us-wrap">
                                    <div class="about-des">
                                        <div class="row">
                                            <div class="row">
                                                @foreach($certificates as $certificate)
                                                    <div class="col-lg-6">
                                                        <div class="skill-img">
                                                            <img src="{{ $certificate->image_url }}"
                                                                 alt="">
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>

    </script>
@endsection



