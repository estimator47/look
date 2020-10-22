@extends('back.forms.template')

@section('form-open')
    <form method="post" action="{{ route('forms.store') }}">
                    {{ csrf_field() }}
                {{ method_field('POST') }}
@endsection
