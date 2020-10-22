@extends('back.kalonkas.template')

@section('form-open')
    <form method="post" action="{{ route('kalonkas.update', [$kalonka->id]) }}">
                     {{ csrf_field() }}
                  {{ method_field('PUT') }}
@endsection
