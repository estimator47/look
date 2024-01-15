@extends('layouts.front')

@section('css')
    <style>
    </style>
@endsection

@section('front')

    <!--breadcumb area start -->
    <div class="breadcumb-area breadcumb-3 overlay pos-rltv" style="background-image: url('public//images/bg/breadcumb.jpg');">
        <div class="bread-main">
            <div class="bred-hading text-center">
                <h5>Error Details</h5> </div>
            <ol class="breadcrumb">
                <li class="home"><a title="Go to Home Page" href="{{url('/')}}">{{ __('message.home') }}</a></li>
                <li class="active">404</li>
            </ol>
        </div>
    </div>
    <!--breadcumb area end -->

    <!--404 area start-->
    <div class="area-404 ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-404 text-center">
                        <img src="{{ asset('public/images/img_404.png') }}" alt="404" >
                        <div class="text-404">
                            <h1>Oops ! that page can't be found.</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--404 area end-->
@endsection

@section('js')
    <script>

    </script>
@endsection
