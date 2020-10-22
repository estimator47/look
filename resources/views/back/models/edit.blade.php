@extends('back.models.template')

@section('form-open')
    <form method="post" action="{{ route('models.update', [$model->id]) }}">
                     {{ csrf_field() }}
                  {{ method_field('PUT') }}
@endsection
