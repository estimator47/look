@extends('layouts.front')

@section('css')
    <style>
        .slider-img {
            text-align: center;
        }

    </style>
@endsection

@section('front')


    <!--Video area start-->
    <div class="slider-area pos-rltv carosule-pagi cp-line">
        <div class="active-slider">

            <div class="single-slider pos-rltv">
                <div class="slider-img embed-responsive embed-responsive-16by9">
                    <video role="presentation" muted loop autoplay preload="auto">
                        <source src="{{ asset('video/lookatme.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>

        </div>
    </div>
    <!--Video area start-->


    <!--product start -->
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
