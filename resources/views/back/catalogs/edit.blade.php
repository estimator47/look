@extends('back.catalogs.template')

@section('form-open')
    <form method="post" action="{{ route('catalogs.update', [$catalog->id]) }}">
                     {{ csrf_field() }}
                  {{ method_field('PUT') }}
@endsection
