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
            <form action="{{route('search')}}" method="post" id="searchform" class="searchbox">
                {{ csrf_field() }}
                <input type="text" id="search" class="searchtext" name="search" placeholder="{{__('message.cat-search')}}..." required="required"/>
                <input type="submit" id="search-button"  value="{{__('message.search')}}"/>
            </form>
        </div>
        <!-- PAGE CONTAINER -->
        <div id="page-container">
            <!-- GRID -->
            <div class="grid">
                <div class="unit whole">
                    <h3></h3>
                    <p>{{__('text.search-error')}}</p>
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
