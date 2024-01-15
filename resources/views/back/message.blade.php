@extends('layouts.back')
@section('css')
    <style>
        .bolt_text{
            font-weight: bold;
        }
    </style>
@endsection
@section('main')

    <div class="page-content">
    <!-- start Payment Details -->
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card  card-box">
                    <div class="card-head">
                        <div class="col-md-6 col-sm-6 col-6">
                            <header>Сообщение</header>
                        </div>

                    </div>
                    <div class="card-body ">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table class="table display product-overview mb-30" id="support_table5">
                                    <thead>
                                    <tr>
                                        <th>Имя</th>
                                        <th>E-mail</th>
                                        <th>Телефон</th>
                                        <th>Адрес</th>
                                        <th>Сообщение</th>
                                        <th>Дата</th>
                                        <th>Изминить</th>
                                    </tr>
                                    </thead>
                                    <tbody id="message-pannel">

                                    @include('back.message-standard')

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{ $messages->links() }}
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
                        swal(BaseRecord.destroyMessage($(this).attr('id')))
                        } else  {
                            swal.close();
                        }
                    });
                return false;
            });

        });
    </script>

@endsection
