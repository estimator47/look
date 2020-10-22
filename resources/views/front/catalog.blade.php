@extends('front.layout')

@section('css')
    <style>
        h1 {
            font-size: 30px;
        }

    </style>
@endsection

@section('main')
        <!-- MAIN -->
        <main id="main">
            <!-- PAGE TITLE -->
            <div id="page-title">
                <h1><span>@if(App::isLocale('ru')) {{{$catalog->category->category_ru}}} @else  {{$catalog->category->category_uz}} @endif <i class="fa fa-angle-right"></i>
                        @if(App::isLocale('ru')) {{{$catalog->name_ru}}} @else  {{$catalog->name_uz}} @endif</span></h1>
            </div>
            <!-- PAGE CONTAINER -->
            <div id="page-container">
                <!-- GRID -->
                <div class="grid">
                    <div class="unit whole">
                        <div class="row">

                         @foreach($catalogs as $catalog)
                                <!-- GALLERY 3 -->
                           <div class="col-lg-3 col-sm-6">
                                <div id="gallery4" class="grid-container grid-small">
                                    <div class="grid-img">
                                        <a href="{{url('/single_catalog', [$catalog->id])}}" class="photo">
                                            <img src="{{ asset('public/images/katalog/' .$catalog->image) }}" alt="catalog-image" />
                                        </a>
                                    </div>
                                    <div class="grid-content">
                                        <p><a href="{{url('/single_catalog', [$catalog->id])}}">@if(App::isLocale('ru')) {{{$catalog->type->name_ru}}} @else  {{$catalog->type->name_uz}} @endif > {{$catalog->article}}</a></p>
                                    </div>
                                </div>
                           </div>
                         @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </main>

        @endsection

        @section('js')

        @endsection
