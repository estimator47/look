@extends('back.kalonkas.template')

@section('form-open')
    <form method="post" action="{{ route('kalonkas.store') }}">
                    {{ csrf_field() }}
                {{ method_field('POST') }}
@endsection
