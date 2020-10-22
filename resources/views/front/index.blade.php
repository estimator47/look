@extends('front.layout')

@section('css')
<style>
h3 {
    color: #151414;
}
#page-container p {
    font-size: 21px;
    color: #151414;
}
</style>
@endsection

@section('main')

        <!-- MAIN -->
        <main id="main">
            <!-- SLIDER -->
            <div id="slider-container">
                <div id="home-slider">
                    @include('front.brick-standard')
                </div>
            </div>

            <!-- PAGE CONTAINER -->
            <div id="page-container" class="page-container">
                <!-- GRID BORDER -->
                <div class="grid-border"></div>
                <div class="grid">
                    <div class="unit half">
                            <img class="flex-img" src="{{asset('public/images/main.jpg')}}" alt="" />
                    </div>
                    <div class="unit half">
                        <h3 class="border main">{{__('message.about-us')}}</h3>
                        <p>{{__('text.about_company')}}</p>
                    </div>
                </div>
                <p>{{__('text.goal_company')}}</p>
                <!-- GRID -->
                <div class="grid">
                    <div class="unit half">
                        <h3 class="border">{{__('text.it_must')}}</h3>
                        <!-- ROUNDED LIST -->
                        <ol class="rounded-list">
                            <li><span>{{__('text.must_f')}}</span>
                            </li>
                            <li><span>{{__('text.must_s')}}</span>
                            </li>
                            <li><span>{{__('text.must_t')}}</span>
                            </li>
                            <li><span>{{__('text.must_fo')}}</span>
                            </li>
                        </ol>
                    </div>

                    <div class="unit half">
                        <h3 class="border">{{__('text.so')}}</h3>
                        <p>{{__('text.designers')}}</p>
                        <p>{{__('text.model_company')}}</p>
                    </div>
                </div>
                <!-- GRID-->
                <div class="grid" style="text-align: center">
                    <div class="unit whole">
                        <h3>{{__('text.motiv_company')}}</h3>
                    </div>
                </div>
            </div>

        </main>

@endsection

@section('js')

<script>

</script>

@endsection
