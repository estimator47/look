@extends('front.layout')

@section('css')
    <style>
        h3 {
            color: red;
            text-align: center;
        }
        th {
            background-color: #ce4e4e;
            color: white;
        }
        p, ol {
         color: black;
        }
    </style>
@endsection

@section('main')
        <!-- MAIN -->
        <main id="main">
            <div id="page-title">
                <h1><span>{{__('message.pay&del')}}</span></h1>
            </div>
            <!-- PAGE CONTAINER -->
            <div id="page-container">
                <!-- GRID -->
                <div class="grid">
                    <div class="grid"><h3>{{__('message.delivery')}}</h3></div>
                    <div class="unit whole table-responsive">
                        <table class="table table-hover table-secondary">
                            <thead>
                            <tr>
                                <th scope="col">{{__('text.typedel')}}</th>
                                <th scope="col">{{__('text.deltime')}}</th>
                                <th scope="col">{{__('text.costdel')}}</th>
                                <th scope="col">{{__('text.pere')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr >
                                <td>{{__('text.fromtashkent')}}</td>
                                <td>{{__('text.thatday')}}</td>
                                <td>{{__('text.free')}}</td>
                                <td> - </td>
                            </tr>
                            <tr >
                                <td>{{__('text.kur_tash')}}</td>
                                <td>{{__('text.one-three')}}</td>
                                <td>{{__('text.free')}}</td>
                                <td>{{__('text.morethan')}}</td>
                            </tr>
                            <tr >
                                <td>{{__('text.kur_tash')}}</td>
                                <td>{{__('text.one-three')}}</td>
                                <td>20 000 {{__('text.som')}}</td>
                                <td>{{__('text.fewthan')}}</td>
                            </tr>
                            <tr >
                                <td>{{__('text.mytaxi')}}</td>
                                <td>{{__('text.thatday')}}</td>
                                <td>{{__('text.tarif')}}</td>
                                <td> - </td>
                            </tr>
                            <tr >
                                <td>{{__('text.wholeuzb')}}</td>
                                <td>{{__('text.three-ten')}}</td>
                                <td>{{__('text.tarif')}}</td>
                                <td> - </td>
                            </tr>
                            <tr >
                                <td>{{__('text.uzbpost')}}</td>
                                <td>{{__('text.two-three-week')}}</td>
                                <td> - </td>
                                <td>{{__('text.pay_advance')}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="grid"> <ol>
                            <li>{{__('text.del_first')}}</li>
                            <li>{{__('text.del_second')}}</li>
                            <li>{{__('text.del_third')}}</li>
                            <li>{{__('text.del_fourth')}}</li>
                            <li>{{__('text.del_fifth')}}</li>
                            <li>{{__('text.del_sixth')}}</li>
                        </ol></div>

                   <div class="grid"><h3>{{__('text.payment')}}</h3></div>
                <div class="unit whole table-responsive">
                    <table class="table table-hover table-secondary">
                        <thead>
                        <tr>
                            <th scope="col">{{__('text.typepay')}}</th>
                            <th scope="col">{{__('text.placepay')}}</th>
                            <th scope="col">{{__('text.region')}}</th>
                            <th scope="col">{{__('text.pere')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr >
                            <td>{{__('text.cash_pay')}}</td>
                            <td>{{__('text.takefrom')}}</td>
                            <td>{{__('text.only_tash')}}</td>
                            <td> - </td>
                        </tr>
                        <tr >
                            <td>{{__('text.pay_adv')}}</td>
                            <td>{{__('text.bank_kar')}}</td>
                            <td>{{__('text.uzb')}}</td>
                            <td>CLICK, PAYME, VISA</td>
                        </tr>
                        <tr >
                            <td>{{__('text.more_pay')}}</td>
                            <td>{{__('text.uzbpost')}}</td>
                            <td>{{__('text.uzb')}}</td>
                            <td>{{__('text.post_kam')}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="grid"> <p>{{__('text.contactwith')}} <a href="mailto:lookatmeuzb@gmail.com" style="color: #e30909; font-weight: bold;">lookatmeuzb@gmail.com</a></p></div>
                <!-- GRID BORDER -->
                <div class="grid-border"></div>
            </div>
            </div>
        </main>
@endsection

@section('js')
    <script>
    </script>
@endsection
