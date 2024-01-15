@extends('back.materials.template')

@section('form-open')
    <form method="post" action="{{ route('materials.store') }}">
                    {{ csrf_field() }}
                {{ method_field('POST') }}
@endsection
