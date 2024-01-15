@extends('layouts.front')

@section('css')
    <style>
        .vidio_display {
            display: none;
            text-align: center;
        }
    </style>
@endsection

@section('front')

    <!--breadcumb area start -->
    <div class="breadcumb-area overlay pos-rltv" style="background-image: url('/public/images/bg/breadcumb.jpg');">
        <div class="bread-main">
            <div class="bred-hading text-center">
                <h5>{{ __('message.blog') }}</h5>
            </div>
            <ol class="breadcrumb">
                <li class="home"><a title="Go to Home Page" href="{{url('/')}}">{{ __('message.home') }}</a></li>
                <li class="active">{{ __('message.blog') }}</li>
            </ol>
        </div>
    </div>
    <!--breadcumb area end -->

    <!--single blog main area are start-->
    <div class="shop-main-area pt-70 pb-40">
        <div class="container">
            <div class="row">
                <!--sidebar start-->
                <div class="col-lg-3 col-md-4 order-2">
                    <h6 class="uppercase sb-title">{{ __('message.more-read') }}</h6>
                    @foreach($news as $new)
                    <div class="col-lg-12">
                        <div class="single-blog">
                            <div class="blog-img pos-rltv" style="width: 100%; height: 200px; overflow: hidden">
                                <a href="{{url('/blog/single', [$new->id])}}">
                                    <img src="{{ $new->image_url }}" alt="lookatme blog image">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h5 class="uppercase font-bold">
                                        <a href="{{url('/blog/single', [$new->id])}}">
                                           {{$new->title}}
                                        </a>
                                    </h5>
                                    <div class="like-comments-date">
                                        <ul style="padding: 0px">
                                            <li>
                                                    <i class="fa fa-eye"></i>
                                                    {{$new->click}} {{ __('message.views') }}
                                            </li>
                                            <li class="blog-date">
                                                <a href="{{url('/blog/single', [$new->id])}}">
                                                    <i class="zmdi zmdi-calendar-alt"></i>
                                                    {{$new->created_at}}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- sidebar end-->

                <!--main-shop-product start-->
                <div class="col-lg-9 col-md-8 order-1">
                    <div class="single-blog-body">
                        <div class="single-blog sb-2 mb-30">
                            <div class="blog-img pos-rltv">
                                <img src="{{ $blog->image_url }}" alt="lookatme blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h5 class="uppercase font-bold">
                                        {{$blog->title}}
                                    </h5>
                                    <div class="like-comments-date">
                                        <ul style="padding: 0px">
                                            <li>
                                                <i class="fa fa-eye"></i>
                                                {{$blog->click}}  {{ __('message.views') }}
                                            </li>
                                            <li class="blog-date">
                                                <i class="zmdi zmdi-calendar-alt"></i>
                                                {{$blog->created_at}}
                                            </li>
                                        </ul>
                                    </div><br>
                                    <div class="blog-text">
                                        <p>
                                            {{$blog->text}}
                                        </p>
                                    </div>
                                    <div class="<?=($blog->video === '0')?'vidio_display':'' ?> embed-responsive embed-responsive-16by9" >
                                            <iframe
                                                    src="https://www.youtube.com/embed/{{$blog->video}}">
                                            </iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--main-shop-product start-->
                </div>
            </div>
        </div>
    </div>
    <!--single blog main area are end-->

@endsection

@section('js')

@endsection

