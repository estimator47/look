@extends('back.CertificateFile.template')

@section('form-open')
    <form method="post" action="{{ route('certificate-files.update', [$file->id]) }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
@endsection
