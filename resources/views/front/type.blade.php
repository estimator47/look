@extends('front.layout')

@section('css')
    <style>
        h1 {
            font-size: 30px;
        }
        .grid-img img{
            opacity: 0.7;
        }
        .grid-img img:hover{
            opacity: 1;
        }
    </style>
@endsection

@section('main')
    <!-- MAIN -->
    <main id="main">
        <!-- PAGE TITLE -->
        <div id="page-title">
            <h1><span>@if(App::isLocale('ru')) {{{$type->category_ru}}} @else  {{$type->category_uz}} @endif</span></h1>
        </div>
        <!-- PAGE CONTAINER -->
        <div id="page-container">
            <!-- GRID -->
            <div class="grid">
                <div class="unit whole">
                    <div class="row">

                    @foreach($types as $type)
                        <!-- GALLERY 3 -->
                            <div class="col-lg-3 col-sm-6">
                                <div id="gallery4" class="grid-container grid-small">
                                    <div class="grid-img">
                                        <a href="{{url('/catalog', [$type->id])}}" class="photo">
                                            <img src="{{ asset('public/images/type/' .$type->image) }}" alt="catalog-image" />
                                        </a>
                                    </div>
                                    <div class="grid-content">
                                        <p><a href="{{url('/catalog', [$type->id])}}">@if(App::isLocale('ru')) {{{$type->name_ru}}} @else  {{$type->name_uz}} @endif</a></p>
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
