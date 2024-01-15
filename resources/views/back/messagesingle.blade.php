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
                                <h3>{{$message->name}}
                                    <span style="font-size: small">({{$message->created_at}})</span>
                                </h3>
                                <p>Телефон: {{$message->phone}}</p>
                                <p>E-mail: <a href="mailto:{{$message->email}}">{{$message->email}}</a></p>
                                <p>Адрес: {{$message->address}}</p>
                                <p>Сообщение: {{$message->message}}</p>
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
