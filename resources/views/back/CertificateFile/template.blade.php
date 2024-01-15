@extends('layouts.back')

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/dropzone.css">
    <style>
        small {
            color: red;
        }
    </style>
@endsection
@section('main')

    <div class="page-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="card-head">
                        <header>Добавить Блог</header>
                    </div>
                    <div class="col-lg-4 p-t-20">
                        <div class="{{ $errors->has('image') ? 'has-error' : '' }}">       <!-- third img -->
                            @if (\Request::is('blogs/create'))
                                <form action="{{route('blog-image')}}" method="post" class="dropzone" enctype ='multipart/form-data' id="model_image">
                                    {{ csrf_field() }}
                                </form>
                            @endif
                            {!! $errors->first('image', '<small class="help-block">:message</small>') !!}
                        </div>
                    </div>
                    @yield('form-open')
                    <input type="hidden" id="image" name="image"  value="@if(isset($blog)){{$blog->image}}@elseif(old('image')){{old('image')}}@endif" />
                    <div class="card-body row">
                        <div class="card-body row">

                            <div class="col-lg-6 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width
                                    form-group {{ $errors->has('title_en') ? 'has-error' : '' }}">
                                    <input class="mdl-textfield__input" type="text" name="title_en"
                                           value="@if(isset($blog)){{$blog->title_en}}@elseif(old('title_en')){{old('title_en')}}@endif" id="txtRoomNo">
                                    <label class="mdl-textfield__label">Title</label>
                                    {!! $errors->first('title_en', '<small class="help-block">:message</small>') !!}
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width
                                        form-group {{ $errors->has('title_ru') ? 'has-error' : '' }}">
                                    <input class="mdl-textfield__input" type="text" name="title_ru"
                                           value="@if(isset($blog)){{$blog->title_ru}}@elseif(old('title_ru')){{old('title_ru')}}@endif" id="txtRoomNo">
                                    <label class="mdl-textfield__label">Название</label>
                                    {!! $errors->first('title_ru', '<small class="help-block">:message</small>') !!}
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div class="col-lg-12 p-t-20">
                                    <div class="mdl-textfield mdl-js-textfield txt-full-width form-group
                                        {{ $errors->has('text_en') ? 'has-error' : '' }}">
                                        <textarea class="mdl-textfield__input" rows="5" name="text_en"
                                                  id="education">@if(isset($blog)){{$blog->text_en}}@elseif(old('text_en')){{old('text_en')}}@endif</textarea>
                                        <label class="mdl-textfield__label">Blog</label>
                                        {!! $errors->first('text_en', '<small class="help-block">:message</small>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div class="col-lg-12 p-t-20">
                                    <div class="mdl-textfield mdl-js-textfield txt-full-width form-group
                                       {{ $errors->has('text_ru') ? 'has-error' : '' }}">
                                        <textarea class="mdl-textfield__input" rows="5" name="text_ru"
                                                  id="education">@if(isset($blog)){{$blog->text_ru}}@elseif(old('text_ru')){{old('text_ru')}}@endif</textarea>
                                        <label class="mdl-textfield__label">Cтатья</label>
                                        {!! $errors->first('text_ru', '<small class="help-block">:message</small>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width
                                        form-group {{ $errors->has('video') ? 'has-error' : '' }}">
                                    <input class="mdl-textfield__input" type="text" name="video"
                                           value="@if(isset($blog)){{$blog->video}}@elseif(old('video')){{old('video')}}@endif" id="txtRoomNo">
                                    <label class="mdl-textfield__label">Видео</label>
                                    {!! $errors->first('video', '<small class="help-block">:message</small>') !!}
                                </div>
                            </div>

                            <div class="col-lg-6 p-t-20">
                                <div class="col-lg-12 p-t-20">
                                    <div class="mdl-textfield mdl-js-textfield txt-full-width form-group
                                        {{ $errors->has('meta_keywords') ? 'has-error' : '' }}">
                                        <textarea class="mdl-textfield__input" rows="5" name="meta_keywords"
                                                  id="education">@if(isset($blog)){{$blog->meta_keywords}}@elseif(old('meta_keywords')){{old('meta_keywords')}}@endif</textarea>
                                        <label class="mdl-textfield__label">Meta keywords</label>
                                        {!! $errors->first('meta_keywords', '<small class="help-block">:message</small>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div class="col-lg-12 p-t-20">
                                    <div class="mdl-textfield mdl-js-textfield txt-full-width form-group
                                       {{ $errors->has('meta_description') ? 'has-error' : '' }}">
                                        <textarea class="mdl-textfield__input" rows="5" name="meta_description"
                                                  id="education">@if(isset($blog)){{$blog->meta_description}}@elseif(old('meta_description')){{old('meta_description')}}@endif</textarea>
                                        <label class="mdl-textfield__label">Meta description</label>
                                        {!! $errors->first('meta_description', '<small class="help-block">:message</small>') !!}
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12 p-t-20 text-center">
                                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-primary">Сохранять</button>
                            </div>
                        </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/dropzone.js"></script>
    <script type="text/javascript">
        let uploadedImages = [];
        Dropzone.autoDiscover = false;
        new Dropzone("#model_image", {
            maxFiles: 1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            maxFilesize: 5, // MB
            init: function() {
                this.on("success", function(file, response) {
                    uploadedImages.push(response.image)
                    document.getElementById('image').value = uploadedImages;
                });
            }
        });
    </script>

@endsection
