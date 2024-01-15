@extends('back.types.template')

@section('form-open')
    <form method="post" action="{{ route('types.update', [$type->id]) }}">
                     {{ csrf_field() }}
                  {{ method_field('PUT') }}
@endsection
