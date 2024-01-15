@extends('layouts.front')

@section('css')
<style>
    #submit {
        margin-left: 15px;
    }
    #map {
        text-align: center;
    }
    iframe {
        width: 1200px;
        height: 400px;
    }
    small {
        color: red;
    }
    @media (max-width: 1024px){
        iframe {
            width: 980px;
            height: 350px;
        }

    }
    @media only screen and (min-width: 641px) and (max-width: 1023px) {
        iframe {
            width: 630px;
            height: 300px;
        }
    }
    @media only screen and (max-width:640px) {
        iframe {
            width: 500px;
            height: 300px;
        }
    }
    @media only screen and (max-width: 480px) {
        iframe {
            width: 350px;
            height: 200px;
        }
    }
    @media only screen and (max-width: 350px) {
        iframe {
            width: 300px;
            height: 200px;
        }
    }
</style>
@endsection

@section('front')


<!--breadcumb area start -->
    <div class="breadcumb-area overlay pos-rltv" style="background-image: url('/public/images/bg/breadcumb.jpg');">
        <div class="bread-main">
            <div class="bred-hading text-center">
                <h5>{{ __('message.contact-us') }}</h5>
            </div>
            <ol class="breadcrumb">
                <li class="home"><a title="Go to Home Page" href="{{url('/')}}">{{ __('message.home') }}</a></li>
                <li class="active">{{ __('message.contact') }}</li>
            </ol>
        </div>
    </div>
    <!--breadcumb area end -->
    <br>
        @if (session('contact-ok'))
            @component('components.alert')
                @slot('type')
                    success
                @endslot
                {!! session('contact-ok') !!}
            @endcomponent
        @endif
    <!--map area start-->
    <div class="map-area">
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8469.607062861767!2d69.17411374210991!3d41.364126696835086!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDIxJzUwLjMiTiA2OcKwMTAnMzguOCJF!5e0!3m2!1sen!2s!4v1606542890039!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
    <!--map area end-->

    <!--contact info are start-->
    <div class="contact-info ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                     <div class="row">
                         <div class="col-lg-12">
                            <div class="heading-title text-center mb-50">
                            <h5 class="uppercase">{{ __('message.contact-us') }}</h5>
                        </div>

                             <form id="contact-form" class="row" action="{{route('sending_message')}}" method="post">
                                 {{ csrf_field() }}
                                 <div class="col-md-6">
                                     <div class="input-box mb-20" {{ $errors->has('name') ? 'has-error' : '' }}>
                                         <input name="name" class="info" placeholder="Name*" type="text" required="required"
                                                value="@if(old('name')){{old('name')}}@endif">
                                         {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="input-box mb-20" {{ $errors->has('email') ? 'has-error' : '' }}>
                                         <input name="email" class="info" placeholder="Email" type="email" required="required"
                                                value="@if(old('email')){{old('email')}}@endif">
                                         {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="input-box mb-20" {{ $errors->has('phone') ? 'has-error' : '' }}>
                                         <input name="phone" class="info" placeholder="Phone" type="text" required="required"
                                                value="@if(old('phone')){{old('phone')}}@endif">
                                         {!! $errors->first('phone', '<small class="help-block">:message</small>') !!}
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="input-box mb-20" {{ $errors->has('address') ? 'has-error' : '' }}>
                                         <input name="address" class="info" placeholder="Address" type="text" required="required"
                                                value="@if(old('address')){{old('address')}}@endif">
                                         {!! $errors->first('address', '<small class="help-block">:message</small>') !!}
                                     </div>

                                 </div>
                                 <div class="col-md-12">
                                     <div class="input-box mb-20" {{ $errors->has('message') ? 'has-error' : '' }}>
                                         <textarea name="message" class="area-tex" placeholder="Your Message*" required="required">@if(old('message')){{old('message')}}@endif</textarea>
                                         {!! $errors->first('message', '<small class="help-block">:message</small>') !!}
                                     </div>
                                 </div>
                                 <div class="col-xs-12">
                                     <div class="input-box" id="submit">
                                         <input name="submit" class="sbumit-btn" value="{{ __('message.send-message') }}" type="submit">
                                     </div>
                                 </div>
                             </form>

                         </div>
                     </div>
                </div>
                <div class="col-md-6">
                    <div class="single-footer contact-us contact-us-2">
                        <div class="heading-title text-center mb-50">
                            <h5 class="uppercase">{{ __('message.contact-info') }}</h5>
                        </div>
                        <ul class="contact-info" style="padding: 0px;">
                            <li>
                                <div class="contact-icon"> <i class="zmdi zmdi-phone"></i> </div>
                                <div class="contact-text">
                                    <p><span>+99855 500-52-52</span></p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon"> <i class="zmdi zmdi-email-open"></i> </div>
                                <div class="contact-text">
                                    <p><span><a href="#">lookatmeuzb@gmail.com</a></span></p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon"> <i class="zmdi zmdi-pin-drop"></i> </div>
                                <div class="contact-text">
                                    <p><span>Toshkent,</span> <span>Uzbekistan</span></p>
                                </div>
                            </li>
                        </ul>
                        <div class="social-icon-wraper mt-25">
                            <div class="social-icon socile-icon-style-1">
                                <ul>
                                    <li><a href="https://www.facebook.com/lookatme.tashkent" target="_blank"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCenGJPaDCPYC4PwoYtNZQcw" target="_blank"><i class="zmdi zmdi-youtube"></i></a></li>
                                    <li><a href="https://www.pinterest.com/homefeed/" target="_blank"><i class="zmdi zmdi-pinterest"></i></a></li>
                                    <li><a href="mailto://sale@lookatme4you.com"><i class="zmdi zmdi-google"></i></a></li>
                                    <li><a href="https://www.instagram.com/lookatme.uw/" target="_blank"><i class="zmdi zmdi-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--contact info are end-->

@endsection

@section('js')
    <script>

    </script>
@endsection
