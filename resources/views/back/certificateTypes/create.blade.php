@extends('back.certificateTypes.template')

@section('form-open')
    <form method="post" action="{{ route('certificate-types.store') }}">
                    {{ csrf_field() }}
                {{ method_field('POST') }}
@endsection
