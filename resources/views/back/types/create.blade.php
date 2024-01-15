@extends('back.types.template')

@section('form-open')
    <form method="post" action="{{ route('types.store') }}">
                    {{ csrf_field() }}
                {{ method_field('POST') }}
@endsection
