@extends('back.catalogs.template')

@section('form-open')
    <form method="post" action="{{ route('catalogs.store') }}">
                    {{ csrf_field() }}
                {{ method_field('POST') }}
@endsection
