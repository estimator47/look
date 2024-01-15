@extends('back.certificateTypes.template')

@section('form-open')
    <form method="post" action="{{ route('certificate-types.update', [$type->id]) }}">
                     {{ csrf_field() }}
                  {{ method_field('PUT') }}
@endsection
