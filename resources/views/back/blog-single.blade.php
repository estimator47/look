@extends('layouts.back')
@section('css')
    <style>
    </style>
@endsection
@section('main')

    <div class="page-content">
        <!-- start Payment Details -->
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card  card-box">
                    <div class="card-body ">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <h3>{{$blog->title_en}}</h3>
                                <p>{{$blog->text_en}}</p>
                                <h3>{{$blog->title_ru}}</h3>
                                <p>{{$blog->text_ru}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

    <script>
    </script>

@endsection
