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
                        <header>Добавить Тип сертификата</header>
                    </div>

                    @yield('form-open')

                    <div class="card-body row">
                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width
                                form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                <input class="mdl-textfield__input" type="text" name="name" id="name"
                                       value="@if(isset($type)){{$type->name}}@elseif(old('name')){{old('name')}}@endif">
                                <label for="list3" class="mdl-textfield__label">Название *</label>
                                {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                            </div>
                        </div>
                        <div class="col-lg-12 p-t-20 text-center">
                            <button type="submit"
                                    class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">
                                Сохранять
                            </button>
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
