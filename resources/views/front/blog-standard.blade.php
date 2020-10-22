@foreach($news as $new)
<!-- POST 1 -->
<div class="col-lg-6 col-sm-12">
    <article class="grid-container">
    <div class="grid-img">
        <a href="{{url('/single_blog', [$new->id])}}" class="gallery link">
            <img src="{{ asset('public/images/news/' .$new->image) }}" alt="" />
        </a>
    </div>
    <div class="grid-content">
        <div class="postdate" style="color: #464c4e">
            {{ $new->created_at }}
        </div>
        <h4>
            <a href="{{url('/single_blog', [$new->id])}}" style="color: #1a2226;">@if(App::isLocale('ru')) {{{$new->name_ru}}} @else  {{$new->name_uz}} @endif</a>
        </h4>
    </div>
    </article>
</div>
@endforeach
