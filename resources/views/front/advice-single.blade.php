@extends('front.layout')

@section('css')
    <style>
        article p, h5 {
            color: #151414;
        }
        article a {
            color: #e22c2c;
        }
    </style>
@endsection

@section('main')
    <!-- MAIN -->
    <main id="main">
        <!-- PAGE TITLE -->
        <div id="page-title">
            <h1><span>@if(App::isLocale('ru')) {{{$new->title_ru}}} @else  {{$new->title_uz}} @endif</span></h1>
        </div>
        <div id="sub-title">
            <div><span class="post-date">{{ $new->created_at }}</span></div>
        </div>
        <!-- PAGE CONTAINER -->
        <div id="page-container">
            <!-- GRID -->
            <div class="grid">
                <article class="unit two-thirds">
                    <!-- FLEX IMAGE -->
                    <figure class="caption-image">
                        <img src="{{ asset('public/images/rubrika/' .$new->image) }}" alt="blog-single" />
                    </figure>
                    <p>@if(App::isLocale('ru')) {{{$new->info_ru}}} @else  {{$new->info_uz}} @endif</p>
                    <a href="{{$new->source}}">{{__('message.source')}}: {{$new->source}}</a>
                </article>

                <aside class="unit one-third">
                    <!-- WIDGET 2 -->
                    <div class="sidebar-box">
                        <h5>{{ __('message.more-read') }}</h5>
                        <ul class="sidebar-posts">
                            @foreach($tips as $info)
                                <li>
                                    <a href="{{url('/single_tips', [$info->id])}}">
                                        <div class="sidebar-posts-img">
                                            <img src="{{ asset('public/images/rubrika/' .$info->image) }}" alt="" />
                                        </div>
                                        <p class="sidebar-post-title"><span>@if(App::isLocale('ru')) {{{$info->title_ru}}} @else  {{$info->title_uz}} @endif</span></p>
                                        <p class="sidebar-post-date">{{ $info->created_at }}</p>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </main>
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('js/jflickrfeed.min.js') }}"></script>
    <script type="text/javascript">
    </script>
@endsection
