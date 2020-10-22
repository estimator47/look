@extends('back.tips.template')

@section('form-open')
    <form method="post" action="{{ route('tips.store') }}">
                    {{ csrf_field() }}
                {{ method_field('POST') }}
@endsection
