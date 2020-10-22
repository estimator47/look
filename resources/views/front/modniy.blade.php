@extends('front.layout')

@section('css')
    <style>

    </style>
@endsection

@section('main')
    <!-- MAIN -->
    <main id="main">
        <!-- PAGE TITLE -->
        <div id="page-title">
            <h1><span>{{ __('message.modniy') }}</span></h1>
        </div>
        <!-- PAGE CONTAINER -->
        <div id="page-container">
            <!-- GRID -->
            <div class="grid">
                <div class="unit whole">
                    <!-- MASONRY GRID -->
                    <div class="masonry-grid">
                        <div id="two-columns" class="news-list" data-columns>

                        @foreach($forms as $new)
                            <!-- POST 1 -->
                                <article class="grid-container">
                                    <div class="grid-img">
                                        <a href="{{url('/single_obriz', [$new->id])}}" class="gallery link">
                                            <img src="{{ asset('public/images/rubrika/' .$new->image) }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="grid-content">
                                        <div class="postdate" style="color: #464c4e">
                                            {{ $new->created_at }}
                                        </div>
                                        <h4>
                                            <a href="{{url('/single_obriz', [$new->id])}}" style="color: #1a2226;">@if(App::isLocale('ru')) {{{$new->title_ru}}} @else  {{$new->title_uz}} @endif</a>
                                        </h4>
                                    </div>
                                </article>
                            @endforeach

                        </div>
                    </div>
                    <!-- PAGER -->
                    <div class="blogpager">
                        <div class="next">
                            {{ $forms->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div style="display:none" id="next">1</div>

@endsection

@section('js')
    <!-- MASONRY GRID -->
    <script type="text/javascript" src="{{ asset('js/salvattore.min.js') }}"></script>
@endsection
