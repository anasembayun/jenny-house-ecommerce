@extends('layouts.layout')

@section('content')
<section class="cown-down">
    <div class="section-inner ">
        <div class="container-fluid no-pd">
            <div class="row">
                <div class="bg-form col-lg-6 col-12 padding-right">
                    <form action="{{route('login')}}" method="POST" class="login100-form">
                        @csrf
                            <span class="login100-form-title p-b-43">
                                LOGIN
                            </span>
                            
                            <div class="wrap-input100">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                    placeholder="{{ __('views.auth.login.input_0') }}" required autofocus>
                            </div>
                            <div class="wrap-input100">
                                <input id="password" type="password" class="form-control" name="password"
                                    placeholder="{{ __('views.auth.login.input_1') }}" required>
                            </div>
                            <div class="checkbox al_left">
                                <label>
                                    <input type="checkbox"
                                        name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('views.auth.login.input_2') }}
                                </label>
                            </div>
            
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
            
                            @if (!$errors->isEmpty())
                                <div class="alert alert-danger" role="alert">
                                    {!! $errors->first() !!}
                                </div>
                            @endif
            
                            <div><br>
                                <button class="login100-form-btn submit" type="submit">{{ __('views.auth.login.action_0') }}</button>
                                <a class="reset_pass" href="{{ route('password.request') }}">
                                    {{ __('views.auth.login.action_1') }}
                                </a>
                            </div>
            
                            <div class="clearfix"></div>
            
                            {{-- <div class="separator">
                                <span>{{ __('views.auth.login.message_0') }}</span>
                                <div>
                                    <a href="{{ route('social.redirect', ['facebook']) }}" class="btn btn-success btn-facebook">
                                        <i class="fa fa-facebook"></i>
                                        Facebook
                                    </a>
                                    <a href="{{ route('social.redirect', ['twitter']) }}" class="btn btn-success btn-twitter">
                                        <i class="fa fa-twitter"></i>
                                        Twitter
                                    </a>
                                </div>
                            </div> --}}
            
                            @if(config('auth.users.registration'))
                                <div class="separator">
                                    <p class="change_link">{{ __('views.auth.login.message_1') }}
                                        <a href="{{ route('register') }}" class="to_register"> {{ __('views.auth.login.action_2') }} </a>
                                    </p>
            
                                    <div class="clearfix"></div>
                                    <br/>
            
                                    {{-- <div>
                                        <div class="h1">{{ config('app.name') }}</div>
                                        <p>&copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('views.auth.login.copyright') }}</p>
                                    </div> --}}
                                </div>
                            @endif
                        </form>
                </div>	
                <div class="col-lg-6 col-12 padding-left">
                    <div class="image">
                        <img src="{{ asset('assets/image/bg-login.png') }}" alt="#">
                    </div>	
                </div>	
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
@endsection