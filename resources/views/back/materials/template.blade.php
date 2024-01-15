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
                        <header>Добавить Материал</header>
                    </div>
                    <div class="col-lg-4 p-t-20">
                        <div class="{{ $errors->has('img') ? 'has-error' : '' }}">       <!-- third img -->
                            @if (\Request::is('materials/create'))
                                <form action="{{route('fabric-image')}}" method="post" class="dropzone" enctype ='multipart/form-data' id="model_image">
                                    {{ csrf_field() }}
                                </form>
                            @endif
                            {!! $errors->first('img', '<small class="help-block">:message</small>') !!}
                        </div>
                    </div>
                    @yield('form-open')
                    <input type="hidden" id="img" name="img"  value="@if(isset($material)){{$material->img}}@elseif(old('img')){{old('img')}}@endif" />
                    <div class="card-body row">
                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width
                                form-group {{ $errors->has('material_en') ? 'has-error' : '' }}">
                                <input class="mdl-textfield__input" type="text" name="material_en" id="material_en"
                                       value="@if(isset($material)){{$material->material_en}}@elseif(old('material_en')){{old('material_en')}}@endif">
                                <label for="list3" class="mdl-textfield__label">Material *</label>
                                {!! $errors->first('material_en', '<small class="help-block">:message</small>') !!}
                            </div>
                        </div>

                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width
                                form-group {{ $errors->has('material_ru') ? 'has-error' : '' }}">
                                <input class="mdl-textfield__input" type="text" name="material_ru" id="txtRoomNo"
                                       value="@if(isset($material)){{$material->material_ru}}@elseif(old('material_ru')){{old('material_ru')}}@endif">
                                <label class="mdl-textfield__label">Материал *</label>
                                {!! $errors->first('material_ru', '<small class="help-block">:message</small>') !!}
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
        new Dropzone("#model_image", {
            maxFiles: 1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            maxFilesize: 5, // MB
            init: function() {
                this.on("success", function(file, response) {
                    uploadedImages.push(response.image)
                    document.getElementById('img').value = uploadedImages;
                });
            }
        });
    </script>

@endsection
