@extends('layouts.front')

@section('css')

@endsection

@section('front')


    <!--breadcumb area start -->
    <div class="breadcumb-area overlay pos-rltv" style="background-image: url('/public/images/bg/breadcumb.jpg');">
        <div class="bread-main">
            <div class="bred-hading text-center">
                <h5>
                     {{$material->material}}
                </h5>
            </div>
            <ol class="breadcrumb">
                <li class="home"><a title="Go to Home Page" href="{{url('/')}}">{{ __('message.home') }}</a></li>
                <li class="active"><a title="Go to Home Page" href="{{url('/product/all')}}">{{ __('message.product') }}</a></li>
                <li class="active">
                    {{$material->material}}
                </li>
            </ol>
        </div>
    </div>
    <!--breadcumb area end -->

    <!--shop main area are start-->
    <div class="shop-main-area ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-area-top">
                        <div class="row">
                            <div class="col-xl-9 col-md-8 order-1">
                                <div class="sort product-show" id="choose-product">
                                 @foreach($types as $type)
                                    <div type="button" style="font-size: 16px; height: 35px;" class="btn btn-info sort" id="{{$type->id}}">
                                        {{$type->type}}
                                    </div>
                                 @endforeach
                                </div>

                                <div class="sort product-type" id="select-product">
                                    <select id="input-sort" style="color: black">
                                        <option value="0" >Sort By Type</option>
                                        @foreach($types as $type)
                                            <option value="{{$type->id}}">
                                                {{$type->type}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3 order-1">
                                <aside class="single-aside search-aside search-box">
                                    <div class="input-box">
                                        <input class="search_input" placeholder="{{ __('message.search') }}...." type="text">
                                    <button type="button" class="src-btn sb-2" id="search">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12">
                    <div class="shop-total-product-area clearfix mt-35">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!--tab grid are start-->
                            <div role="tabpanel" class="tab-pane fade show active" id="grid">
                                <div class="total-shop-product-grid row" id="product-panel">

                                    @include('front.products-standard')

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="fabric_input" value="{{$material->material_en}}">
    <!--shop main area are end-->

@endsection

@section('js')
    <script src="{{ asset('public/js/mine.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.sort').click(function(){
                BaseRecord.sort($('#fabric_input').val(), $(this).attr('id'));
                return false;
            });

            $('#input-sort').change(function(){
                BaseRecord.sort($('#fabric_input').val(), $(this).val());
                return false;
            });

            $('#search').click(function(){
                BaseRecord.search($('.search_input').val());
                return false;
            });
            $('.search_input').keypress(function(e) {
                if(e.which == 13){
                    e.preventDefault();
                    BaseRecord.search($('.search_input').val());
                    return false;
                }
            });
        });
    </script>
@endsection
