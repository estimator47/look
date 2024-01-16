@extends('back.CertificateFile.template')

@section('form-open')
    <form method="post" action="{{ route('certificate-files.store') }}">
    {{ csrf_field() }}
    {{ method_field('POST') }}
@endsection
