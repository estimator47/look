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
                <h1><span>{{ __('message.companynews') }}</span></h1>
            </div>
            <!-- PAGE CONTAINER -->
            <div id="page-container">
                <!-- GRID -->
                <div class="grid">
                    <div class="unit whole">
                        <!-- MASONRY GRID -->
                        <div class="masonry-grid">
                                <div class="row">

                                @include('front.blog-standard')

                                </div>
                        </div>
                        <!-- PAGER -->
                        <div class="blogpager">
                            <div class="next">
                                {{ $news->links() }}
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
