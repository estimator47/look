@extends('back.models.template')

@section('form-open')
    <form method="post" action="{{ route('models.store') }}">
                    {{ csrf_field() }}
                {{ method_field('POST') }}
@endsection
