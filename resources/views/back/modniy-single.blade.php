@extends('back.layout')
@section('css')
    <style>

    </style>
@endsection

@section('main')
    <div class="row padding_body">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body">
                    <div id="spinner" class="text-center"></div>
                    <div class="table-responsive">
                        <section class="ftco-section bg-light">
                            <div class="container">
                                <div class="row">
                                    <h1>{{$form->title_uz}}</h1>
                                    <p>{{$form->info_uz}}
                                    <hr>
                                    <h1>{{$form->title_ru}}</h1>
                                    <p>{{$form->info_ru}}
                                </div>
                            </div>
                        </section>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

    <script>

    </script>

@endsection
