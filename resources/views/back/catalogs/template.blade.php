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
                        <header><?php if(isset($catalog->id)) echo 'Изменить'; else echo 'Добавить' ?> Продукты</header>
                    </div>
                    <div class="row">
                        @if (\Request::is('catalogs/create'))
                    <div class="col-lg-6 p-t-20">
                        <h5>Добавить фото продукты</h5>
                        <div class="{{ $errors->has('image') ? 'has-error' : '' }}">       <!-- product image -->

                                <form action="{{route('product-image')}}" method="post" class="dropzone" enctype ='multipart/form-data' id="product_image">
                                    {{ csrf_field() }}
                                </form>

                            {!! $errors->first('image', '<small class="help-block">:message</small>') !!}
                        </div>

                    </div>

                    <div class="col-lg-6 p-t-20">
                        <h5>Добавить фото Цветы</h5>
                        <div class="{{ $errors->has('color_img') ? 'has-error' : '' }}">       <!-- color_img -->

                                <form action="{{route('product-image')}}" method="post" class="dropzone" enctype ='multipart/form-data' id="color_image">
                                    {{ csrf_field() }}
                                </form>

                            {!! $errors->first('color_img', '<small class="help-block">:message</small>') !!}
                        </div>
                    </div>
                        @endif
                    </div>
                    @yield('form-open')
                    <input type="hidden" id="image" name="image"  value="@if(isset($catalog)){{$catalog->image}}@elseif(old('image')){{old('image')}}@endif" />
                    <input type="hidden" id="color_img" name="color_img"  value="@if(isset($catalog)){{$catalog->color_img}}@elseif(old('color_img')){{old('color_img')}}@endif" />
                    <div class="card-body row">
                        @if (\Request::is('catalogs/create'))
                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width
                                form-group {{ $errors->has('color_en') ? 'has-error' : '' }}">
                                <input class="mdl-textfield__input" type="text" name="color_en" id="txtRoomNo"
                                       value="@if(isset($catalog)){{$catalog->color_en}}@elseif(old('color_en')){{old('color_en')}}@endif">
                                <label class="mdl-textfield__label">Color name *</label>
                                {!! $errors->first('color_en', '<small class="help-block">:message</small>') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width
                                form-group {{ $errors->has('color_ru') ? 'has-error' : '' }}">
                                <input class="mdl-textfield__input" type="text" name="color_ru" id="txtRoomNo"
                                       value="@if(isset($catalog)){{$catalog->color_ru}}@elseif(old('color_ru')){{old('color_ru')}}@endif">
                                <label class="mdl-textfield__label">Название Цветы *</label>
                                {!! $errors->first('color_ru', '<small class="help-block">:message</small>') !!}
                            </div>
                        </div>
                        @endif
                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                <input class="mdl-textfield__input" type="text" id="list3" value="" readonly tabIndex="-1">
                                <label for="list3" class="mdl-textfield__label">
                                    Материал
                                </label>
                                <select class="form-control" name="material_id" id="id">
                                    <option>выбирать Материал</option>
                                    @foreach($materials as $material)
                                        <option value="{{$material->id}}"
                                        @if(old('material_id') && old('material_id') == $material->id)
                                            {{'selected'}}
                                            @elseif(isset($catalog) && $catalog->material_id == $material->id)
                                            {{'selected'}}
                                            @endif
                                        >{{$material->material_ru}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                <input class="mdl-textfield__input" type="text" id="list3" value="" readonly tabIndex="-1">
                                <label for="list3" class="mdl-textfield__label">
                                    Каталог
                                </label>
                                <select class="form-control" name="type_id" id="id">
                                    <option>выбирать Каталог</option>
                                    @foreach($types as $type)
                                        <option value="{{$type->id}}"
                                        @if(old('type_id') && old('type_id') == $type->id)
                                            {{'selected'}}
                                            @elseif(isset($catalog) && $catalog->type_id == $type->id)
                                            {{'selected'}}
                                            @endif
                                        >{{$type->type_ru}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width
                                form-group {{ $errors->has('title_en') ? 'has-error' : '' }}">
                                <input class="mdl-textfield__input" type="text" name="title_en" id="title_en"
                                       value="@if(isset($catalog)){{$catalog->title_en}}@elseif(old('title_en')){{old('title_en')}}@endif">
                                <label for="list3" class="mdl-textfield__label">Name *</label>
                                {!! $errors->first('title_en', '<small class="help-block">:message</small>') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width
                                form-group {{ $errors->has('title_ru') ? 'has-error' : '' }}">
                                <input class="mdl-textfield__input" type="text" name="title_ru" id="txtRoomNo"
                                       value="@if(isset($catalog)){{$catalog->title_ru}}@elseif(old('title_ru')){{old('title_ru')}}@endif">
                                <label class="mdl-textfield__label">Название *</label>
                                {!! $errors->first('title_ru', '<small class="help-block">:message</small>') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width
                                form-group {{ $errors->has('info_en') ? 'has-error' : '' }}">
                                <textarea class="mdl-textfield__input" rows="4" name="info_en"
                                          id="education">@if(isset($catalog)){{$catalog->info_en}}@elseif(old('info_en')){{old('info_en')}}@endif</textarea>
                                <label class="mdl-textfield__label">Description *</label>
                                {!! $errors->first('info_en', '<small class="help-block">:message</small>') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width
                                form-group {{ $errors->has('info_ru') ? 'has-error' : '' }}">
                                <textarea class="mdl-textfield__input" rows="4" name="info_ru"
                                          id="education">@if(isset($catalog)){{$catalog->info_ru}}@elseif(old('info_ru')){{old('info_ru')}}@endif</textarea>
                                <label class="mdl-textfield__label">Описание *</label>
                                {!! $errors->first('info_ru', '<small class="help-block">:message</small>') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width
                                form-group {{ $errors->has('description_en') ? 'has-error' : '' }}">
                                <textarea class="mdl-textfield__input" rows="3" name="description_en"
                                          id="education">@if(isset($catalog)){{$catalog->description_en}}@elseif(old('description_en')){{old('description_en')}}@endif</textarea>
                                <label class="mdl-textfield__label">More Description*</label>
                                {!! $errors->first('description_en', '<small class="help-block">:message</small>') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width
                                form-group {{ $errors->has('description_ru') ? 'has-error' : '' }}">
                                <textarea class="mdl-textfield__input" rows="3" name="description_ru"
                                          id="education">@if(isset($catalog)){{$catalog->description_ru}}@elseif(old('description_ru')){{old('description_ru')}}@endif</textarea>
                                <label class="mdl-textfield__label">Больше Описание  *</label>
                                {!! $errors->first('description_ru', '<small class="help-block">:message</small>') !!}
                            </div>
                        </div>
                        <div class="col-lg-12 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width
                                form-group {{ $errors->has('size') ? 'has-error' : '' }}">
                                <input class="mdl-textfield__input" type="text" name="size" id="txtRoomNo"
                                       value="@if(isset($catalog)){{$catalog->size}}@elseif(old('size')){{old('size')}}@endif">
                                <label class="mdl-textfield__label">Размеры  *</label>
                                {!! $errors->first('size', '<small class="help-block">:message</small>') !!}
                            </div>
                        </div>

                            <div class="col-lg-6 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width
                                form-group {{ $errors->has('meta_keywords') ? 'has-error' : '' }}">
                                <textarea class="mdl-textfield__input" rows="3" name="meta_keywords"
                                          id="education">@if(isset($catalog)){{$catalog->meta_keywords}}@elseif(old('meta_keywords')){{old('meta_keywords')}}@endif</textarea>
                                    <label class="mdl-textfield__label">Meta keywords</label>
                                    {!! $errors->first('meta_keywords', '<small class="help-block">:message</small>') !!}
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width
                                form-group {{ $errors->has('meta_description') ? 'has-error' : '' }}">
                                <textarea class="mdl-textfield__input" rows="3" name="meta_description"
                                          id="education">@if(isset($catalog)){{$catalog->meta_description}}@elseif(old('meta_description')){{old('meta_description')}}@endif</textarea>
                                    <label class="mdl-textfield__label">Meta description</label>
                                    {!! $errors->first('meta_description', '<small class="help-block">:message</small>') !!}
                                </div>
                            </div>
                        <div class="col-lg-12 p-t-20 text-center">
                            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Сохранять</button>
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
    <script>
        let uploadedImages = [];
        Dropzone.autoDiscover = false;
        new Dropzone("#product_image", {
            maxFiles: 3,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            maxFilesize: 5, // MB
            init: function() {
                this.on("success", function(file, response) {
                    uploadedImages.push(response.image)
                    document.getElementById('image').value = uploadedImages.join(',');
                });
            }
        });

        let ColorImage = [];
        Dropzone.autoDiscover = false;
        new Dropzone("#color_image", {
            maxFiles: 10,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            maxFilesize: 5, // MB
            init: function() {
                this.on("success", function(file, response) {
                    ColorImage.push(response.image)
                    document.getElementById('color_img').value = ColorImage.join(',');
                });
            }
        });
    </script>

@endsection
