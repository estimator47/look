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
            @if (session('catalog-ok'))
                @component('back.components.alert')
                    @slot('type')
                        success
                @endslot
                {!! session('catalog-ok') !!}
            @endcomponent
        @endif
        <!-- general form elements -->
            <div class="box box-primary">
                <!-- form start -->
                <div class="box-body">
                    <div class="form-group">       <!-- !!!/img/bg-img/ - custom -->
                        <img class="img_product" src="@if(isset($image)){{asset('public/images/type/' . $image)}}@elseif(old('image')){{asset('public/images/type/' . old('image'))}}@elseif(isset($catalog)){{asset('public/images/type/' . $catalog->image)}}@else{{asset('public/images/nophoto.jpg')}}@endif" alt="" style="width: 150px; margin-top: 5px;" />
                        @if (\Request::is('catalogs/create'))
                            <form method="post" action="{{ route('upload_img') }}" name="form_upload" enctype="multipart/form-data">
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
                    @elseif(isset($catalog)){{$catalog->image}}@else{{'nophoto.jpg'}}@endif">
                    <div class="form-group">
                        <label for="category">@lang('Каталог')</label>
                        <select class="form-control" name="category_id" id="category_id">
                            @foreach($categories as $type)
                                <option value="{{$type->id}}"
                                @if(old('category_id') && old('category_id') == $type->id)
                                    {{'selected'}}
                                    @elseif(isset($catalog) && $catalog->category_id == $type->id)
                                    {{'selected'}}
                                    @endif
                                >{{$type->category_ru}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group {{ $errors->has('name_ru') ? 'has-error' : '' }}">
                        <label for="name_ru">@lang('Название каталога')</label>
                        <input type="text" class="form-control" id="name_ru" name="name_ru" value="@if(isset($catalog)){{$catalog->name_ru}}@elseif(old('name_ru')){{old('name_ru')}}@endif" placeholder="">
                        {!! $errors->first('name_ru', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('name_uz') ? 'has-error' : '' }}">
                        <label for="name_uz">@lang('Katalog nomlanishi')</label>
                        <input type="text" class="form-control" id="name_uz" name="name_uz" value="@if(isset($catalog)){{$catalog->name_uz}}@elseif(old('name_uz')){{old('name_uz')}}@endif" placeholder="">
                        {!! $errors->first('name_uz', '<small class="help-block">:message</small>') !!}
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
