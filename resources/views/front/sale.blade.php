@extends('front.layout')

@section('css')
    <style>
        .whole p{
            color: #151414;
        }
    </style>
@endsection

@section('main')

    <!-- MAIN -->
    <main id="main">
        <div id="page-title">
            <h1><span>{{ __('message.sale') }}</span></h1>
        </div>
        <!-- PAGE CONTAINER -->
        <div id="page-container">
            <!-- GRID -->
            <div class="grid">
                <div class="unit whole">
                    <h3></h3>
                    <p>{{ __('message.nopub') }}</p>
                </div>
            </div>
            <!-- GRID BORDER -->
            <div class="grid-border"></div>

        </div>
    </main>
@endsection

@section('js')
    <script>
    </script>
@endsection
