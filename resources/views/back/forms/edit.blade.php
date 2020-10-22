@extends('back.forms.template')

@section('form-open')
    <form method="post" action="{{ route('forms.update', [$form->id]) }}">
                     {{ csrf_field() }}
                  {{ method_field('PUT') }}
@endsection
