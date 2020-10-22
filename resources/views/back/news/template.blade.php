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
            @if (session('news-ok'))
                @component('back.components.alert')
                    @slot('type')
                        success
                @endslot
                {!! session('news-ok') !!}
            @endcomponent
        @endif
        <!-- general form elements -->
            <div class="box box-primary">
                <!-- form start -->
                <div class="box-body">
                    <div class="form-group">       <!-- !!!/img/bg-img/ - custom -->
                        <img class="img_product" src="@if(isset($image)){{asset('public/images/news/' . $image)}}@elseif(old('image')){{asset('public/images/news/' . old('image'))}}@elseif(isset($new)){{asset('public/images/news/' . $new->image)}}@else{{asset('public/images/nophoto.jpg')}}@endif" alt="" style="width: 150px; margin-top: 5px;" />
                        @if (\Request::is('news/create'))
                            <form method="post" action="{{ route('upload') }}" name="form_upload" enctype="multipart/form-data">
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
                    @elseif(isset($new)){{$new->image}}@else{{'nophoto.jpg'}}@endif">
                    <div class="form-group {{ $errors->has('name_uz') ? 'has-error' : '' }}">
                        <label for="name_uz">@lang('Sarlavha')</label>
                        <input type="text" class="form-control" id="name_uz" name="name_uz" value="@if(isset($new)){{$new->name_uz}}@elseif(old('name_uz')){{old('name_uz')}}@endif" placeholder="">
                        {!! $errors->first('name_uz', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('info_uz') ? 'has-error' : '' }}">
                        <label for="info_uz">@lang('Maqola')</label>
                        <textarea type="text" class="form-control" id="info_uz" name="info_uz" value="" rows="4" cols="50">@if(isset($new)){{$new->info_uz}}@elseif(old('info_uz')){{old('info_uz')}}@endif</textarea>
                        {!! $errors->first('info_uz', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('name_ru') ? 'has-error' : '' }}">
                        <label for="name_ru">@lang('Заглавие')</label>
                        <input type="text" class="form-control" id="name_ru" name="name_ru" value="@if(isset($new)){{$new->name_ru}}@elseif(old('name_ru')){{old('name_ru')}}@endif" placeholder="">
                        {!! $errors->first('name_ru', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('info_ru') ? 'has-error' : '' }}">
                        <label for="info_ru">@lang('Статья')</label>
                        <textarea type="text" class="form-control" id="info_ru" name="info_ru" value="" rows="4" cols="50">@if(isset($new)){{$new->info_ru}}@elseif(old('info_ru')){{old('info_ru')}}@endif</textarea>
                        {!! $errors->first('info_ru', '<small class="help-block">:message</small>') !!}
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
