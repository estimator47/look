@extends('back.tips.template')

@section('form-open')
    <form method="post" action="{{ route('tips.update', [$tip->id]) }}">
                     {{ csrf_field() }}
                  {{ method_field('PUT') }}
@endsection
