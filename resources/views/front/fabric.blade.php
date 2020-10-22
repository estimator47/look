@extends('front.layout')

@section('css')
    <style>
        h3 {
            text-align: center;
            color: #1a1818;
        }
        .whole img{
            float: left;
            width: 300px;
            margin: 10px;
        }
        h5 {
            text-align: center;
            color: red;
        }
        .unit.whole p {
            font-size: 25px;
            color: #1d1c1c;
        }
        @media only screen and (max-width: 480px) {

            .unit.whole p {
                font-size:15px;
            }
            .whole img{
                margin: 0px;
            }
        }
    </style>
@endsection

@section('main')
        <!-- MAIN -->
        <main id="main">
            <div id="page-title">
                <h1><span>{{__('message.fabric')}}</span></h1>
            </div>
            <!-- PAGE CONTAINER -->
            <div id="page-container">
                <!-- GRID -->
                <div class="grid">
                    <div class="unit whole">
                        <h3>{{__('text.about_fabric')}}</h3>
                        <p>
                            {{__('text.about_look')}}
                        </p>
                    </div>

                    <div class="unit whole">
                        <h3>{{__('text.natural_fab')}}</h3>
                        <h5>{{__('text.cotton')}}</h5>
                        <div>
                            <img src="{{ asset('public/images/fabric1.jpg') }}" alt="about-fabric">
                            <p>
                                {{__('text.about_cotton')}}
                            </p>
                        </div>
                    </div>

                    <div class="unit whole">
                        <h5>{{__('text.silk')}}</h5>
                        <div>
                            <img src="{{ asset('public/images/fabric2.jpg') }}" alt="about-fabric">
                            <p>
                                {{__('text.about_silk')}}
                            </p>
                        </div>
                    </div>

                    <div class="unit whole">
                        <h5>{{__('text.viskoz')}}</h5>
                        <div>
                            <img src="{{ asset('public/images/fabric3.jpg') }}" alt="about-fabric">
                            <p>
                                {{__('text.about_viskoz')}}
                            </p>
                        </div>
                    </div>

                    <div class="unit whole">
                        <h5>{{__('text.modal')}}</h5>
                        <div>
                            <img src="{{ asset('public/images/fabric4.jpg') }}" alt="about-fabric">
                            <p>
                                {{__('text.about_modal')}}
                            </p>
                        </div>
                    </div>

                    <div class="unit whole">
                        <h3>{{__('text.sintetic')}}</h3>
                        <h5>{{__('text.poliamid')}}</h5>
                        <div>
                            <img src="{{ asset('public/images/fabric5.jpg') }}" alt="about-fabric">
                            <p>
                                {{__('text.about_poliamid')}}
                            </p>
                        </div>
                    </div>

                    <div class="unit whole">
                        <h5>{{__('text.polyester')}}</h5>
                        <div>
                            <img src="{{ asset('public/images/fabric6.jpg') }}" alt="about-fabric">
                            <p>
                                {{__('text.about_polyester')}}
                            </p>
                        </div>
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
