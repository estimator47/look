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
                        <header>Добавить Сертификат</header>
                    </div>
                    <div class="col-lg-4 p-t-20">
                        <div class="{{ $errors->has('file') ? 'has-error' : '' }}">       <!-- third img -->
                            @if (\Request::is('certificate/create'))
                                <form action="{{route('certificate-image')}}" method="post" class="dropzone" enctype ='multipart/form-data' id="model_image">
                                    {{ csrf_field() }}
                                </form>
                            @endif
                            {!! $errors->first('image', '<small class="help-block">:message</small>') !!}
                        </div>
                    </div>
                    @yield('form-open')
                    <input type="hidden" id="image" name="image"  value="@if(isset($file)){{$file->file}}@elseif(old('file')){{old('file')}}@endif" />
                    <div class="card-body row">
                        <div class="card-body row">

                            <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                <input class="mdl-textfield__input" type="text" id="list3" value="" readonly tabIndex="-1">
                                <label for="list3" class="mdl-textfield__label">
                                    Материал
                                </label>
                                <select class="form-control" name="certificate_type_id" id="id">
                                    <option>выбирать тип сертификата</option>
                                    @foreach($types as $type)
                                        <option value="{{$type->id}}"
                                        @if(old('certificate_type_id') && old('certificate_type_id') == $type->id)
                                            {{'selected'}}
                                            @elseif(isset($file) && $file->certificate_type_id == $type->id)
                                            {{'selected'}}
                                            @endif
                                        >{{$type->name}}</option>
                                    @endforeach
                                </select>
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
