@extends('front.layout')

@section('css')
    <style>
h4, .experience-box{
    color: #151414;
}
.golden-large p {
    color: #151414;
    font-size: 20px;
}
.experience-box a{
    color: #ce4e4e;
}
.experience-box span{
    font-weight: bold;
}
    </style>
@endsection

@section('main')



    <!-- MAIN -->
    <main id="main">
        <div id="page-title">
            <h1><span>@if(App::isLocale('ru')) {{{$catalog->type->name_ru}}} @else  {{$catalog->type->name_uz}} @endif</span></h1>
        </div>
        <!-- PAGE CONTAINER -->
        <div id="page-container">
            <!-- GRID -->
            <div class="grid">

                <div class="unit golden-small">
                    <!-- MODEL CAROUSEL -->
                    <div id="model-gallery2" class="owl-carousel">
                        <!-- IMAGE -->
                        <div class="ombre-carousel">
                            <a href="{{ asset('public/images/katalog/' .$catalog->image) }}" class="gallery photo"
                               data-title="@if(App::isLocale('ru')) {{{$catalog->model_ru}}} @else  {{$catalog->model_uz}} @endif">
                                <img src="{{ asset('public/images/katalog/' .$catalog->image) }}" alt="catalog-image" />
                            </a>
                        </div>
                        <!-- IMAGE -->
                        <div class="ombre-carousel">
                            <a href="{{ asset('public/images/katalog/' .$catalog->image2) }}" class="gallery photo"
                               data-title="@if(App::isLocale('ru')) {{{$catalog->model_ru}}} @else  {{$catalog->model_uz}} @endif">
                                <img src="{{ asset('public/images/katalog/' .$catalog->image2) }}" alt="catalog-image" />
                            </a>
                        </div>
                        <!-- IMAGE -->
                        <div class="ombre-carousel">
                            <a href="{{ asset('public/images/katalog/' .$catalog->image3) }}" class="gallery photo"
                               data-title="@if(App::isLocale('ru')) {{{$catalog->model_ru}}} @else  {{$catalog->model_uz}} @endif">
                                <img src="{{ asset('public/images/katalog/' .$catalog->image3) }}" alt="catalog-image" />
                            </a>
                        </div>
                    </div>
                </div>

                <div class="unit golden-large">
                    <div class="experience-box">
                        <p><span>{{__('message.article')}}</span>: {{ $catalog->article }}</p>
                        <p><span>{{__('message.size')}}</span>: {{ $catalog->size }}</p>
                        <p><span>{{__('message.compound')}}</span>: @if(App::isLocale('ru')) {{{$catalog->compound_ru}}} @else  {{$catalog->compound_uz}} @endif</p>
                        <p><span>{{__('message.color')}}</span>: @if(App::isLocale('ru')) {{{$catalog->color_ru}}} @else  {{$catalog->color_uz}} @endif</p>
                        <p><span>{{__('message.defination')}}</span>: @if(App::isLocale('ru')) {{{$catalog->info_ru}}} @else  {{$catalog->info_uz}} @endif</p>
                    </div>

                    <!-- EXPERIENCES -->
                    <div class="experience-box one">
                        {{__('message.for_order')}} <a href="https://t.me/lookatmeuw">{{__('message.tel_channel')}} <i  class="fa fa-paper-plane"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </main>


@endsection

@section('js')
    <!-- MODEL CAROUSEL -->
    <script type="text/javascript">
        jQuery(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                items: 1,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                dots: true,
                autoHeight: true,
                margin: 100,
                mouseDrag: false,
                smartSpeed: 800,
                navText: ['', ''],
                nav: false,
                loop: true,
                animateIn: 'zoomIn',
                animateOut: 'zoomOut'
            });
        });

    </script>
<script>
    <!-- zoom -->
    jQuery(document).ready(function () {
        jQuery("#model-gallery2 a").colorbox({
            rel: 'photo-gallery',
            title: function () {
                return jQuery(this).data('title');
            },
            maxWidth: '100%',
            maxHeight: '100%'
        });
    });
</script>
@endsection
