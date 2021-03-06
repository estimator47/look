@extends('back.layout')
@section('css')
    <style>
        #tip-pannel img {
            width: 120px;
        }
    </style>
@endsection
@section('main')
    <div class="row padding_body">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body">
                    <div id="spinner" class="text-center"></div>
                    <div class="table-responsive">
                        @if (session('tip-ok'))
                            @component('back.components.alert')
                                @slot('type')
                                    success
                                @endslot
                                {!! session('tip-ok') !!}
                            @endcomponent
                        @endif
                        <table>
                            <thead>
                            <tr>
                                <td>Фото</td>
                                <td>Заглавие</td>
                                <td>Cтатья</td>
                                <td>Источник</td>
                                <td>Дата</td>

                            </tr>
                            </thead>
                            <tbody id="tip-pannel">

                            @include('back.tips-standard')

                            </tbody>
                        </table>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

    <script>
        $(document).ready(function(){
            $('.listbuttonremove').click(function(){
                BaseRecord.destroytip($(this).attr('id'));
                return false;
            });
        });
    </script>

@endsection
