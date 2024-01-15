@extends('layouts.front')

@section('css')
@endsection

@section('front')

    <!--breadcumb area start -->
    <div class="breadcumb-area overlay pos-rltv" style="background-image: url('/public/images/bg/breadcumb.jpg');">
        <div class="bread-main">
            <div class="bred-hading text-center">
                <h5>{{ __('message.product') }}</h5>
            </div>
            <ol class="breadcrumb">
                <li class="home"><a title="Go to Home Page" href="{{url('/')}}">{{ __('message.home') }}</a></li>
                <li class="active">{{ __('message.product') }}</li>
            </ol>
        </div>
    </div>
    <!--breadcumb area end -->


    <!--Product start -->
    <div class="discunt-featured-onsale-area pt-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-wraper">
                        <div class="clearfix"></div>
                        <div class="col-lg-12">
                            <div class="shop-total-product-area clearfix mt-35">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!--tab grid are start-->
                                    <div role="tabpanel" class="tab-pane fade show active" id="grid">
                                        <div class="total-shop-product-grid row">

                                             @foreach($materials as $material)
                                            <!-- product start-->
                                                <div class="col-lg-3 col-md-6 item">
                                                    <div class="single-product">
                                                        <div class="product-text">
                                                            <div class="prodcut-name">
                                                                <div class="heading-title heading-style pos-rltv mb-50 text-center">
                                                                    <h5 class="uppercase">
                                                                        {{$material->material}}
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-img">
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="{{url('/product/'.$material->material_en)}}">
                                                                    <img alt="" src="{{ asset('images/fabric/' . $material->img ) }}" class="primary-image">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product end-->
                                            @endforeach

                                        </div>
                                    </div>
                                    <!--shop product list end-->
                                </div>
                            </div>
                        </div>
                    </div>

                <!--main-shop-product start-->

                </div>
            </div>
        </div>
    </div>
    <!--Product end-->
@endsection

@section('js')
    <script>

    </script>
@endsection
