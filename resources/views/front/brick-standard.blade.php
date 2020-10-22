@foreach($news as $new)
    <!-- SLIDE -->
    <div>
        <img src="{{ asset('public/images/news/' .$new->image)}}"alt="slider">
        <!-- SLIDE TITLE data-animation="image-zoom scale-right" -->
        <a href="{{url('/single_blog', [$new->id])}}">
            <div class="ns_slideContent">
                <div class="top-left">

                </div>
            </div>
        </a>
    </div>
@endforeach
