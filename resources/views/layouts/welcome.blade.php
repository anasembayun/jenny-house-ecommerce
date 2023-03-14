<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Meta title & meta -->
    @meta

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        {{-- bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">
        <link href="{{ asset('assets/css/blog.css') }}" rel="stylesheet">
        @yield('styles')


        <!-- Styles -->
        <style>
        

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top{
                position: absolute;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .footer {
                width:100%;
                height:50px;
                padding:5px;
                bottom:0px;
                text-align: center;
                font-size: smaller;
                background-color: #CB8397;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        }

        @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
        </style>

        <!-- Laravel variables for js -->
        @tojs
    </head>
    <body>
        <header class="lh-1 py-3">
            <div class="row align-items-center text-center">
                <img class="d-block mx-auto" src="{{ asset('assets/icon/Jennyhouse.png') }}" style="width: 250px; align:center;">
            </div>
        </header>
        <div>
            <div class="row flex-nowrap justify-content-between align-items-center blog-header">
                <div class="col-3 pt-1 mb-2">
                    <ul class="nav list-unstyled d-flex">
                        <li class="ms-3"><a href="#"><img src="{{ asset('assets/icon/youtube.png') }}" style="width: 24px; margin-left:5rem"></a></li>
                        <li class="ms-3"><a href="#"><img src="{{ asset('assets/icon/instagram.png') }}" style="width: 24px;"></a></li>
                        <li class="ms-3"><a href="#"><img src="{{ asset('assets/icon/facebook.png') }}" style="width: 24px;"></a></li>
                        <li class="ms-3"><a href="#"><img src="{{ asset('assets/icon/tiktok.png') }}" style="width: 24px;"></a></li>
                    </ul>
                </div>
                <div class="col-5 text-center mb-2">
                    <nav class="links d-flex justify-content-between">
                        <a class="p-2 link-secondary" href="#">HOME</a>
                        <a class="p-2 link-secondary" href="#">BRAND</a>
                        <a class="p-2 link-secondary" href="#">HAIRCARE</a>
                        <a class="p-2 link-secondary" href="#">COSMETIC</a>
                        <a class="p-2 link-secondary" href="#">HAIR COLOR</a>
                        <a class="p-2 link-secondary" href="#">FIND US</a>
                        <a class="p-2 link-secondary" href="#">CONTACT US</a>
                    </nav>
                </div>
                <div class="col-3 d-flex justify-content-end align-items-center mb-2">
                    <ul class="nav list-unstyled">
                        <li class="ms-3">
                            <div class="dropdown">
                                <a class="btn btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('assets/icon/profile.png') }}" style="width: 24px;">
                                </a>
                            
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('protection.membership') }}">{{ __('views.welcome.member_area') }}</a>
                                    @if (Route::has('login'))
                                        @if (!Auth::check())
                                            @if(config('auth.users.registration'))
                                            <li><a class="dropdown-item" href="{{ url('/register') }}">{{ __('views.welcome.register') }}</a></li>
                                            @endif
                                            <li><a class="dropdown-item" href="{{ url('/login') }}">{{ __('views.welcome.login') }}</a></li>
                                        @else
                                            @if(auth()->user()->hasRole('administrator'))
                                            <li><a class="dropdown-item" href="{{ url('/admin') }}">{{ __('views.welcome.admin') }}</a></li>
                                            @endif
                                            <li><a class="dropdown-item" href="{{ url('/logout') }}">{{ __('views.welcome.logout') }}</a></li>
                                        @endif
                                    @endif
                                </ul>
                            </div>
                        </li>
                        <li class="ms-3"><a class="btn btn-sm" href="#"><img src="{{ asset('assets/icon/bag.png') }}" style="width: 24px;"></a></li>
                        <li class="ms-3" style="margin-right:5rem"><a class="btn btn-sm" href="#"><img src="{{ asset('assets/icon/search.png') }}" style="width: 24px;"></a></li>
                    </ul>
                </div>
            </div>
        </div>
                
        <div>
        @yield('content')
        </div>

        <footer class="blog-footer row row-cols-1 row-cols-sm-2 row-cols-md-4">
            <div class="col mb-3">
            <a href="/" >
                <img class="d-block mx-auto" src="{{ asset('assets/icon/Jennyhouse.png') }}" style="width: 180px">
            </a>
            </div>
            <div class="col mb-3 py-5">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Haircare</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Cosmetics</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Hair Colors</a></li>
                </ul>
            </div>
            <div class="col mb-3 py-5">
                <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                </ul>
            </div>
            <div class="col mb-3 py-5">
                <ul class="nav list-unstyled d-flex">
                    <li class="ms-3"><a href="#"><img src="{{ asset('assets/icon/youtube.png') }}" style="width: 24px; margin-left:5rem"></a></li>
                    <li class="ms-3"><a href="#"><img src="{{ asset('assets/icon/instagram.png') }}" style="width: 24px;"></a></li>
                    <li class="ms-3"><a href="#"><img src="{{ asset('assets/icon/facebook.png') }}" style="width: 24px;"></a></li>
                    <li class="ms-3"><a href="#"><img src="{{ asset('assets/icon/tiktok.png') }}" style="width: 24px;"></a></li>
                </ul>
            </div>
            <div class="footer">
                <p>Copyright@ PT.Distrindo Kosmeta Utama</p>
            </div>
        </footer>    
        
        @yield('script')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>  
</html>
