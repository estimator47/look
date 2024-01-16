@extends('layouts.back')
@section('css')
    <style>
        img {
            width: 100px;
        }
    </style>
@endsection
@section('main')

    <div class="page-content">
        @if (session('catalog-ok'))
            @component('components.alert')
                @slot('type')
                    success
                    text-dark
                @endslot
                {!! session('catalog-ok') !!}
            @endcomponent
        @endif
        <!-- start Payment Details -->
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card  card-box">
                    <div class="card-head">
                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="btn-group">
                                <a href="{{route('certificate-files.create')}}" id="addRow" class="btn btn-info">
                                    Добавить <i class="fa fa-plus"></i>
                                </a>
                            </div>
                            <header>СЕРТИФИКАТЫ</header>
                        </div>

                    </div>
                    <div class="card-body ">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table class="table display product-overview mb-30" id="support_table5">
                                    <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>Тип</th>
                                        <th>Фото</th>
                                    </tr>
                                    </thead>
                                    <tbody id="certificate-pannel">

                                    @include('back.certificate-file-standard')

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{ $files->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('public/js/mine.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.btn-tbl-delete').click(function () {
                BaseRecord.destroyCertificateFile($(this).attr('id'));
                return false;
            });
        });
    </script>

@endsection
