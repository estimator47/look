@extends('back.layout')

@section('css')
<style type="text/css">
.upload_field {
     opacity:0.0;
     z-index:2;
     position:absolute;
     }
.upload_submit {
     z-index:1;
     display:none;
     }

</style>
@endsection

@section('main')

    <div class="row">
        <!-- left column -->
        <div class="col-md-3">
        </div>
        <!-- center column -->
        <div class="col-md-6 margin">
            @if (session('model-ok'))
                @component('back.components.alert')
                    @slot('type')
                        success
                @endslot
                {!! session('model-ok') !!}
            @endcomponent
        @endif
        <!-- general form elements -->
            <div class="box box-primary">
                <!-- form start -->
                <div class="box-body">
                  <div class="row">

                          <div class="col-lg-12">
                              <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">       <!-- third img -->
                                @if (\Request::is('models/create'))
                                      <form action="{{ route('image-upload') }}" method="post" class="dropzone" enctype ='multipart/form-data' id="model_image">
                                          {{ csrf_field() }}
                                      </form>
                                @endif
                                  {!! $errors->first('image', '<small class="help-block">:message</small>') !!}
                              </div>
                          </div>

                  </div>
                @yield('form-open')
                    <input type="hidden" id="image" name="image" />

                    <div class="form-group">
                        <label for="type">@lang('Каталог')</label>
                        <select class="form-control" name="type_id" id="type_id">
                            @foreach($types as $type)
                                <option value="{{$type->id}}"
                                @if(old('type_id') && old('type_id') == $type->id)
                                    {{'selected'}}
                                    @elseif(isset($model) && $model->type_id == $type->id)
                                    {{'selected'}}
                                    @endif
                                >{{$type->name_ru}}  ({{ $type->category->category_ru }})</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group {{ $errors->has('compound_uz') ? 'has-error' : '' }}">
                        <label for="compound_uz">@lang('Tarkibi')</label>
                        <input type="text" class="form-control" id="compound_uz" name="compound_uz" value="@if(isset($model)){{$model->compound_uz}}@elseif(old('compound_uz')){{old('compound_uz')}}@endif" placeholder="">
                        {!! $errors->first('compound_uz', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('color_uz') ? 'has-error' : '' }}">
                        <label for="color_uz">@lang('Rangi')</label>
                        <input type="text" class="form-control" id="color_uz" name="color_uz" value="@if(isset($model)){{$model->color_uz}}@elseif(old('color_uz')){{old('color_uz')}}@endif" placeholder="">
                        {!! $errors->first('color_uz', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('info_uz') ? 'has-error' : '' }}">
                        <label for="info_uz">@lang("Ta'rif")</label>
                        <textarea type="text" class="form-control" id="info_uz" name="info_uz" value="" rows="4" cols="50">@if(isset($model)){{$model->info_uz}}@elseif(old('info_uz')){{old('info_uz')}}@endif</textarea>
                        {!! $errors->first('info_uz', '<small class="help-block">:message</small>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('compound_ru') ? 'has-error' : '' }}">
                        <label for="compound_ru">@lang('Состав')</label>
                        <input type="text" class="form-control" id="compound_ru" name="compound_ru" value="@if(isset($model)){{$model->compound_ru}}@elseif(old('compound_ru')){{old('compound_ru')}}@endif" placeholder="">
                        {!! $errors->first('compound_ru', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('color_ru') ? 'has-error' : '' }}">
                        <label for="color_ru">@lang('Цветы')</label>
                        <input type="text" class="form-control" id="color_ru" name="color_ru" value="@if(isset($model)){{$model->color_ru}}@elseif(old('color_ru')){{old('color_ru')}}@endif" placeholder="">
                        {!! $errors->first('color_ru', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('info_ru') ? 'has-error' : '' }}">
                        <label for="info_ru">@lang('Описание')</label>
                        <textarea type="text" class="form-control" id="info_ru" name="info_ru" value="" rows="4" cols="50">@if(isset($model)){{$model->info_ru}}@elseif(old('info_ru')){{old('info_ru')}}@endif</textarea>
                        {!! $errors->first('info_ru', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('article') ? 'has-error' : '' }}">
                        <label for="article">@lang('Артикуль')</label>
                        <input type="text" class="form-control" id="article" name="article" value="@if(isset($model)){{$model->article}}@elseif(old('article')){{old('article')}}@endif" placeholder="">
                        {!! $errors->first('article', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('size') ? 'has-error' : '' }}">
                        <label for="size">@lang('Размеры')</label>
                        <input type="text" class="form-control" id="size" name="size" value="@if(isset($model)){{$model->size}}@elseif(old('size')){{old('size')}}@endif" placeholder="">
                        {!! $errors->first('size', '<small class="help-block">:message</small>') !!}
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">@lang('Сохранять')</button>
                </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
        <!-- right column -->
        <div class="col-md-3">
        </div>
    </div>
    <!-- /.row -->
@endsection

@section('js')
    <script type="text/javascript">
        var uploadedImages = [];
        Dropzone.autoDiscover = false;
        new Dropzone("#model_image", {
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
    </script>

@endsection
