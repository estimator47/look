@foreach($blogs as $blog)
    <div class="col-lg-6">
        <div class="single-blog sb-2 mb-30">
            <div class="blog-img pos-rltv product-overlay" style="overflow: hidden; height: 400px">
                <a href="{{url('/blog/single', [$blog->id] )}}">
                    <img src="{{ $blog->image_url }}" alt="lookatme blog image">
                </a>
            </div>
            <div class="blog-content">
                <div class="blog-title">
                    <h5 class="uppercase font-bold">
                        <a href="{{url('/blog/single', [$blog->id])}}">
                            {{$blog->title}}
                        </a>
                    </h5>
                    <div class="like-comments-date">
                        <ul style="padding: 0px">
                            <li><a href="single-blog.blade.php"><i class="fa fa-eye"></i>{{$blog->click}}  {{ __('message.views') }}</a></li>
                            <li class="blog-date">
                                <a href="{{url('/blog/single', [$blog->id])}}">
                                    <i class="zmdi zmdi-calendar-alt"></i>
                                    {{$blog->created_at}}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="blog-text">
                        <p id="text_info">
                              {{$blog->text}}
                        </p>
                    </div> <a class="read-more montserrat" href="{{url('/blog/single', [$blog->id] )}}">{{ __('message.more-det') }}</a> </div>
            </div>
        </div>
    </div>
@endforeach
