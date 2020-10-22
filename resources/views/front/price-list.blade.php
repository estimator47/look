@extends('front.layout')

@section('css')
    <style>
        small {
            color: red;
            font-size: medium;
        }
        label {
            color: #151414;
        }
    </style>
@endsection

@section('main')
        <!-- MAIN -->
        <main id="main">
            <!-- PAGE TITLE -->
            <div id="page-title">
                <h1><span>{{ __('message.pricelist') }}</span></h1>
            </div>
            <!-- PAGE CONTAINER -->
            <div id="page-container">
                @if (session('price-ok'))
                    @component('back.components.alert')
                        @slot('type')
                            success
                    @endslot
                    {!! session('price-ok') !!}
                @endcomponent
            @endif
                <!-- GRID -->
                <div class="grid">
                    <p style="color:#151414; text-align: center;">{{ __('message.getting-pricelist') }}:</p>
                        <!-- CONTACT FORM -->
                    <form class="form-box" action="{{url('/ask-price')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group" {{ $errors->has('name') ? 'has-error' : '' }}>
                            <label>{{ __('message.fullname') }} *</label> {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                            <input type="text" name="name" id="name" required="required" maxlength="50" value="@if(old('name')){{old('name')}}@endif"/>
                        </div>
                        <div class="form-group" {{ $errors->has('address') ? 'has-error' : '' }}>
                            <label>{{ __('message.fulladdress') }} *</label> {!! $errors->first('address', '<small class="help-block">:message</small>') !!}
                            <input type="text" name="address" id="address" required="required" maxlength="50" value="@if(old('address')){{old('address')}}@endif"/>
                        </div>
                        <div class="form-group" {{ $errors->has('phone') ? 'has-error' : '' }}>
                            <label>{{ __('message.phone') }} *</label> {!! $errors->first('phone', '<small class="help-block">:message</small>') !!}
                            <input type="text" name="phone" id="phone" required="required" maxlength="50" value="@if(old('phone')){{old('phone')}}@endif"/>
                        </div>
                        <div class="form-group" {{ $errors->has('email') ? 'has-error' : '' }}>
                            <label>{{ __('message.email') }} *</label> {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                            <input type="email" name="email" id="email" required="required" maxlength="50" value="@if(old('email')){{old('email')}}@endif"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" id="sendMessage" name="sendMessage" value="{{ __('message.send-message') }}" />
                        </div>
                    </form>
                </div>
            </div>
        </main>
@endsection

 @section('js')
 @endsection
