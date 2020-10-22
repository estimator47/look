@extends('back.categories.template')

@section('form-open')
    <form method="post" action="{{ route('categories.store') }}">
                    {{ csrf_field() }}
                {{ method_field('POST') }}
@endsection
