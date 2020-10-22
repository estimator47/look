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
            @if (session('tip-ok'))
                @component('back.components.alert')
                    @slot('type')
                        success
                @endslot
                {!! session('tip-ok') !!}
            @endcomponent
        @endif
        <!-- general form elements -->
            <div class="box box-primary">
                <!-- form start -->
                <div class="box-body">
                    <div class="form-group">       <!-- !!!/img/bg-img/ - custom -->
                        <img class="img_product" src="@if(isset($image)){{asset('public/images/rubrika/' . $image)}}@elseif(old('image')){{asset('public/images/rubrika/' . old('image'))}}@elseif(isset($tip)){{asset('public/images/rubrika/' . $tip->image)}}@else{{asset('public/images/nophoto.jpg')}}@endif" alt="" style="width: 150px; margin-top: 5px;" />
                        @if (\Request::is('tips/create'))
                            <form method="post" action="{{ route('upload_image') }}" name="form_upload" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="file" name="image" class="upload_field">
                                <button type="submit" class="upload_submit">Go</button>
                                <button type="button" class="btn btn-primary" style="width: 150px; margin-top: 5px;">Выбрать</button>
                            </form>
                        @endif
                    </div>
                @yield('form-open')
                <!-- 'bg-img/' . - custom -->
                    <input type="hidden" id="image" name="image" value="@if(isset($image)){{$image}}
                    @elseif(old('image')){{old('image')}}
                    @elseif(isset($tip)){{$tip->image}}@else{{'nophoto.jpg'}}@endif">
                    <div class="form-group {{ $errors->has('title_uz') ? 'has-error' : '' }}">
                        <label for="title_uz">@lang('Sarlavha')</label>
                        <input type="text" class="form-control" id="title_uz" name="title_uz" value="@if(isset($tip)){{$tip->title_uz}}@elseif(old('title_uz')){{old('title_uz')}}@endif" placeholder="">
                        {!! $errors->first('title_uz', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('info_uz') ? 'has-error' : '' }}">
                        <label for="info_uz">@lang('Maqola')</label>
                        <textarea type="text" class="form-control" id="info_uz" name="info_uz" value="" rows="4" cols="50">@if(isset($tip)){{$tip->info_uz}}@elseif(old('info_uz')){{old('info_uz')}}@endif</textarea>
                        {!! $errors->first('info_uz', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('source') ? 'has-error' : '' }}">
                        <label for="source">@lang('Заглавие')</label>
                        <input type="text" class="form-control" id="title_ru" name="title_ru" value="@if(isset($tip)){{$tip->title_ru}}@elseif(old('title_ru')){{old('title_ru')}}@endif" placeholder="">
                        {!! $errors->first('title_ru', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('info_ru') ? 'has-error' : '' }}">
                        <label for="info_ru">@lang('Статья')</label>
                        <textarea type="text" class="form-control" id="info_ru" name="info_ru" value="" rows="4" cols="50">@if(isset($tip)){{$tip->info_ru}}@elseif(old('info_ru')){{old('info_ru')}}@endif</textarea>
                        {!! $errors->first('info_ru', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('source') ? 'has-error' : '' }}">
                        <label for="source">@lang('Источник')</label>
                        <input type="text" class="form-control" id="source" name="source" value="@if(isset($tip)){{$tip->source}}@elseif(old('source')){{old('source')}}@endif" placeholder="">
                        {!! $errors->first('source', '<small class="help-block">:message</small>') !!}
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
    <script>
        $(document).ready(function(){
            $("body").on("change", ".upload_field", function(){
                $(".upload_submit").click();
            });
        });
    </script>
@endsection
