@extends('back.layout')

@section('css')
<style type="text/css">

</style>
@endsection

@section('main')

    <div class="row">
        <!-- left column -->
        <div class="col-md-3">
        </div>
        <!-- center column -->
        <div class="col-md-6 margin">
            @if (session('category-ok'))
                @component('back.components.alert')
                    @slot('type')
                        success
                @endslot
                {!! session('category-ok') !!}
            @endcomponent
        @endif
        <!-- general form elements -->
            <div class="box box-primary">
                <!-- form start -->
                <div class="box-body">
                @yield('form-open')
                    <div class="form-group {{ $errors->has('category_ru') ? 'has-error' : '' }}">
                        <label for="category_ru">@lang('Название каталога')</label>
                        <input type="text" class="form-control" id="category_ru" name="category_ru" value="@if(isset($category)){{$category->category_ru}}@elseif(old('category_ru')){{old('category_ru')}}@endif" placeholder="">
                        {!! $errors->first('category_ru', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('category_uz') ? 'has-error' : '' }}">
                        <label for="category_uz">@lang('Katalog nomlanishi')</label>
                        <input type="text" class="form-control" id="category_uz" name="category_uz" value="@if(isset($category)){{$category->category_uz}}@elseif(old('category_uz')){{old('category_uz')}}@endif" placeholder="">
                        {!! $errors->first('category_uz', '<small class="help-block">:message</small>') !!}
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
