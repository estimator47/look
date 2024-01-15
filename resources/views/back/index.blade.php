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
        @if (session('news-ok'))
            @component('components.alert')
                @slot('type')
                    success
                    text-dark
            @endslot
            {!! session('news-ok') !!}
        @endcomponent
    @endif
        <!-- start Payment Details -->
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card  card-box">
                    <div class="card-head">
                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="btn-group">
                                <a href="{{route('blogs.create')}}" id="addRow" class="btn btn-info">
                                    Добавить <i class="fa fa-plus"></i>
                                </a>
                            </div>
                            <header>Блог</header>
                        </div>

                    </div>
                    <div class="card-body ">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table class="table display product-overview mb-30" id="support_table5">
                                    <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>Фото</th>
                                        <th>Название</th>
                                        <th>Cтатья</th>
                                        <th>Видео</th>
                                        <th>Дата</th>
                                        <th>Изминить</th>
                                    </tr>
                                    </thead>
                                    <tbody id="blog-pannel">

                                    @include('back.index-standard')

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{ $blogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('public/js/mine.js') }}"></script>
    <script>
        $(document).ready(function() {

            $('.btn-tbl-delete').click(function(){
                swal({
                    title: "Вы уверены ?",
                    text: "После удаления вы не сможете восстановить этот файл",
                    icon: "warning",
                    buttons: {
                        confirm: "Да",
                        cancel: "Нет",
                    },
                    dangerMode: true,
                })
                    .then((value) => {
                        if (value) {
                            swal(BaseRecord.destroyBlog($(this).attr('id')))
                        } else  {
                            swal.close();
                        }
                    });
                return false;
            });
        });
    </script>

@endsection
