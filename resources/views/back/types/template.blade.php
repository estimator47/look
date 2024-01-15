@extends('layouts.back')

@section('css')
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
                        <header>Добавить Каталог</header>
                    </div>

                    @yield('form-open')

                    <div class="card-body row">
                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width
                                form-group {{ $errors->has('type_en') ? 'has-error' : '' }}">
                                <input class="mdl-textfield__input" type="text" name="type_en" id="type_en"
                                       value="@if(isset($type)){{$type->type_en}}@elseif(old('type_en')){{old('type_en')}}@endif">
                                <label for="list3" class="mdl-textfield__label">Каталог *</label>
                                {!! $errors->first('type_en', '<small class="help-block">:message</small>') !!}
                            </div>
                        </div>

                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width
                                form-group {{ $errors->has('type_ru') ? 'has-error' : '' }}">
                                <input class="mdl-textfield__input" type="text" name="type_ru" id="txtRoomNo"
                                       value="@if(isset($type)){{$type->type_ru}}@elseif(old('type_ru')){{old('type_ru')}}@endif">
                                <label class="mdl-textfield__label">Catalog *</label>
                                {!! $errors->first('type_ru', '<small class="help-block">:message</small>') !!}
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
    <script>
    </script>
@endsection
