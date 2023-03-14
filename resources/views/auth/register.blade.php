@extends('layouts.layout')

@section('content')
<section class="cown-down">
    <div class="section-inner ">
        <div class="container-fluid no-pd">
            <div class="row">
                <div class="bg-form col-lg-6 col-12 padding-right">
                    <form action="{{route('register')}}" method="POST" class="login100-form">
                        @csrf
                            <span class="login100-form-title p-b-43">
                                CREATE AN ACCOUNT
                            </span>
                            
                            <div class="wrap-input100">
                                <input type="text" name="name" class="form-control"
                                    placeholder="Full Name"
                                    value="{{ old('name') }}" required autofocus/>
                            </div>
                            <div class="wrap-input100">
                                <input type="email" name="email" class="form-control"
                                    placeholder="{{ __('views.auth.register.input_1') }}"
                                    required/>
                            </div>
                            <div class="wrap-input100">
                                <input type="password" name="password" class="form-control"
                                    placeholder="{{ __('views.auth.register.input_2') }}"
                                    required=""/>
                            </div>
                            <div class="wrap-input100">
                                <input type="password" name="password_confirmation" class="form-control"
                                    placeholder="{{ __('views.auth.register.input_3') }}"
                                    required/>
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
                    
                            @if(config('auth.captcha.registration'))
                                @captcha()
                            @endif
                    
                            <div>
                                <button type="submit" class="login100-form-btn submit">{{ __('views.auth.register.action_1') }}</button>
                            </div>
                    
                            <div class="clearfix"></div>
                    
                            <div class="separator">
                                <p class="change_link">{{ __('views.auth.register.message') }}
                                    <a href="{{ route('login') }}" class="to_register"> {{ __('views.auth.register.action_2') }} </a>
                                </p>
                    
                                <div class="clearfix"></div>
                                <br/>
                    
                                {{-- <div>
                                    <div class="h1">{{ config('app.name') }}</div>
                                    <p>&copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('views.auth.register.copyright_0') }}</p>
                                    <p>{{ __('views.auth.register.copyright_1') }}</p>
                                </div> --}}
                            </div>
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
