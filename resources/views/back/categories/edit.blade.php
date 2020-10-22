@extends('back.categories.template')

@section('form-open')
    <form method="post" action="{{ route('categories.update', [$category->id]) }}">
                     {{ csrf_field() }}
                  {{ method_field('PUT') }}
@endsection
