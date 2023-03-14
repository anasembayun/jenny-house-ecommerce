@extends('layouts.welcome')

@section('content')
    <div class="row bg-row-1">
        <div class="home-wd-4">
            <img src="{{ asset('assets/image/home/2.png') }}">
            <a class="btn home-btn" style="font-size: 30px;" href="#">Shop Now!
            </a>
        </div>
        <div class="home-wd-6-img" style="background-image: url('{{ asset('assets/image/home/1.png') }}');"></div>   
    </div>

        <div class="row">
            <div class="home-wd-5-img" style="background-image: url('{{ asset('assets/image/home/5.png') }}');"></div> 
            <div class="home-wd-5">
                <img src="{{ asset('assets/image/home/3.png') }}">
                <img src="{{ asset('assets/image/home/4.png') }}">
            </div>
        </div>
        
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/home.css') }}">
@endsection
