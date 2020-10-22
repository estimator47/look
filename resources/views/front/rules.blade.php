@extends('front.layout')

@section('css')
    <style>
        h3 {
            color: red;
            text-align: center;
        }
li {
    color: black;
}
    </style>
@endsection

@section('main')
        <!-- MAIN -->
        <main id="main">
            <div id="page-title">
                <h1><span>{{__('message.ruleoftrade')}}</span></h1>
            </div>
            <!-- PAGE CONTAINER -->
            <div id="page-container">
                <!-- GRID -->
                <div class="grid">
                    <div class="unit whole">
                        <h3>{{__('text.rule_for_trade')}}</h3>
                        <ol>
                            <li>{{__('text.tr_first')}}</li>
                            <br>
                            <li>{{__('text.tr_second')}}</li>
                            <br>
                            <li>{{__('text.tr_third')}}</li>
                            <br>
                            <li>{{__('text.tr_fourth')}}</li>
                            <br>
                            <li>{{__('text.tr_fifth')}} <a href="mailto:lookatmeuzb@gmail.com" style="color: red">lookatmeuzb@gmail.com</a></li>
                        </ol>
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
