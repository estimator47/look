@extends('back.materials.template')

@section('form-open')
    <form method="post" action="{{ route('materials.update', [$material->id]) }}">
                     {{ csrf_field() }}
                  {{ method_field('PUT') }}
@endsection
