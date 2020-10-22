@extends('front.layout')

@section('css')
    <style>
small {
    color: red;
    font-size: medium;
}
label, .email a,  .ombre-table div {
    color: #151414;
}

.email a:hover{
    color: #ce4e4e;
}


    </style>
@endsection

@section('main')

        <!-- MAIN -->
        <main id="main">
            <!-- PAGE TITLE -->
            <div id="page-title">
                <h1><span>{{ __('message.contact-us') }}</span></h1>
            </div>

            <!-- PAGE CONTAINER -->
            <div id="page-container">
                <!-- GRID -->
                <div class="grid">
                    <div class="unit half">
                            @if (session('contact-ok'))
                                @component('back.components.alert')
                                    @slot('type')
                                        success
                                    @endslot
                                    {!! session('contact-ok') !!}
                                @endcomponent
                            @endif
                        <!-- CONTACT FORM -->
                        <form class="form-box" action="{{route('message')}}" method="post">
                                        {{ csrf_field() }}
                            <div class="form-group" {{ $errors->has('name') ? 'has-error' : '' }}>
                                <label>{{ __('message.snn') }}</label> {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                                <input type="text" name="name" id="name" required="required" maxlength="50" value="@if(old('name')){{old('name')}}@endif"/>
                            </div>
                            <div class="form-group" {{ $errors->has('email') ? 'has-error' : '' }}>
                                <label>{{ __('message.email') }}</label> {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                                <input type="email" name="email" id="email" required="required" maxlength="50" value="@if(old('email')){{old('email')}}@endif"/>
                            </div>
                            <div class="form-group" {{ $errors->has('message') ? 'has-error' : '' }}>
                            <label>{{ __('message.message') }}</label> {!! $errors->first('messsage', '<small class="help-block">:message</small>') !!}
                                <textarea name="message" id="message" required="required">@if(old('message')){{old('message')}}@endif</textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" id="sendMessage" name="sendMessage" value="{{ __('message.send-message') }}" />
                            </div>
                        </form>

                    </div>
                    <div class="unit half">
                        <img src="{{ asset('public/images/callcenter.jpeg') }}" class="flex-img" alt="" />
                        <div class="ombre-box">
                            <!-- TABLE -->
                            <ul class="ombre-table">
                                <li>
                                    <div class="ombre-table-left"><i class="ombre-icon fa fa-phone-square"></i>{{ __('message.phone') }}:</div>
                                    <div class="ombre-table-right">+998 55 500 52 52</div>
                                </li>
                                <li>
                                    <div class="ombre-table-left"><i class="ombre-icon fa fa-envelope"></i>{{ __('message.email') }}:</div>
                                    <div class="ombre-table-right email"><a href="mailto:lookatmeuzb@gmail.com">lookatmeuzb@gmail.com</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="ombre-table-left"><i class="ombre-icon fa fa-clock-o"></i>{{ __('message.worktime') }}:</div>
                                    <div class="ombre-table-right">{{ __('message.workday') }}</div>
                                </li>
                                <li>
                                    <div class="ombre-table-left "><i class="ombre-icon fa fa-map-marker"></i>{{ __('message.addres') }}:</div>
                                    <div class="ombre-table-right ">{{ __('message.full-address') }}</div>
                                </li>
                            </ul>
                            <!-- SOCIAL ICONS -->
                            <ul class="social-icons model-social">
                                <li>
                                    <a href="https://www.facebook.com/lookatme.tashkent" class="fa fa-facebook-f tooltip-pink" title="Facebook">Facebook</a>
                                </li>
                                <li>
                                    <a href="https://t.me/lookatmeuw" class="fa fa-paper-plane tooltip-pink" title="Telegram">Telegram</a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/lookatme.uw/" class="fa fa-instagram tooltip-pink" title="Instagram">Instagram</a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UCenGJPaDCPYC4PwoYtNZQcw" class="fa fa-youtube-play tooltip-pink" title="YouTube">YouTube</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>

@endsection

@section('js')


@endsection
