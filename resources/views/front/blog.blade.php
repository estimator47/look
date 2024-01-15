@extends('layouts.front')

@section('css')
    <style>
        #text_info {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            overflow: hidden;
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
                <li class="active"><a href="{{url('/blog/all')}}">{{ __('message.blog') }}</a></li>
            </ol>
        </div>
    </div>
    <!--breadcumb area end -->

    <!--blog main area are start-->
    <div class="shop-main-area pt-70 pb-40">
        <div class="container">
                   <div class="row">
                    <div class="col-lg-12">
                    <div class="shop-area-top">
                        <div class="row">
                            <div class="col-xl-9 col-lg-5 col-md-6">
                            </div>
                            <div class="col-md-3 d-sm-none d-md-block d-block">
                                <aside class="single-aside search-aside search-box">
                                    <div class="input-box">
                                        <input class="search_input" placeholder="{{ __('message.search') }}...." type="text">
                                        <button class="src-btn sb-2" id="search-button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div><br><br><br>
                    <div class="blog-wraper row" id="blog-list">
                        @include('front.blog-standard')
                   </div>
                       <div class="col-lg-12">
                           <div class="text-center">
                               <button type="button" class="btn btn-secondary" id="next_button">{{ __('message.more') }}</button>
                           </div>
                       </div>
                       <div style="display:none" id="next">1</div>
            </div>
        </div>
    </div>
    <!--blog main area are end-->

@endsection

@section('js')
    <script src="{{ asset('public/js/mine.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#next_button').click(function(){
                BaseRecord.more($('#next').html());
                return false;
            });
            $('#search-button').click(function(){
                BaseRecord.searchBlog($('.search_input').val());
                return false;
            });
            $('.search_input').keypress(function(e) {
                if(e.which == 13){
                    e.preventDefault();
                    BaseRecord.searchBlog($('.search_input').val());
                    return false;
                }
            });

        });
    </script>
@endsection
