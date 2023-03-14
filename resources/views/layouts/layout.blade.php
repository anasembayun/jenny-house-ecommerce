<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Jenny House</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{ asset('assets/icon/Jennyhouse.png') }}">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
	<!-- Fancybox -->
	<link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/niceselect.css') }}">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/flex-slider.min.css') }}">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}">
	<!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="{{ asset('assets/css/reset.css') }} ">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }} ">

    @yield('styles')

	
	
</head>
<body class="js">
	
	{{-- <!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader --> --}}
	
	
	<!-- Header -->
	<header class="header shop">
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col">
						<!-- Logo -->
						<div style="text-align: center;">
							<a href="index.html"><img src="{{ asset('assets/icon/Jennyhouse.png') }}" alt="logo" style="width: 250px;"></a>
						</div>
						<!--/ End Logo -->
						<div class="mobile-nav"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-3">
							<div class="float-left right-bar">
								<div class="sinlge-bar">
									<a href="#" class="single-icon"><img src="{{ asset('assets/icon/youtube.png') }}" style="width: 24px;"></a>
								</div>
								<div class="sinlge-bar">
									<a href="#" class="single-icon"><img src="{{ asset('assets/icon/instagram.png') }}" style="width: 24px;"></a>
								</div>
								<div class="sinlge-bar">
									<a href="#" class="single-icon"><img src="{{ asset('assets/icon/facebook.png') }}" style="width: 24px;"></a>
								</div>
								<div class="sinlge-bar">
									<a href="#" class="single-icon"><img src="{{ asset('assets/icon/tiktok.png') }}" style="width: 24px;"></a>
								</div>
							</div>

						</div>
						<div class="col-lg-7 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
													<li><a href="/">HOME</a></li>
													<li><a href="{{route('brand')}}">BRAND</a></li>												
													<li><a href="{{route('haircare')}}">HAIRCARE</a></li>
													<li><a href="{{route('cosmetics')}}">COSMETIC</a></li>									
													<li><a href="{{route('haircolor')}}">HAIR COLOR</a></li>
													<li><a href="">FIND US</a></li>
                                                  
												</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->	
							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-12">
							<div class="right-bar">
								<!-- Search Form -->
								<div class="sinlge-bar shopping">
									<a href="#" class="single-icon"><img src="{{ asset('assets/icon/profile.png') }}" style="width: 24px;"></a>
                                    <div class="shopping-item">
										<ul class="shopping-list">
                                            {{-- <a href="{{ route('protection.membership') }}">{{ __('views.welcome.member_area') }}</a> --}}
                                            @if (Route::has('login'))
                                                @if (!Auth::check())
                                                    @if(config('auth.users.registration'))
                                                    <li><a href="{{ url('/register') }}">{{ __('views.welcome.register') }}</a></li>
                                                    @endif
                                                    <li><a href="{{ url('/login') }}">{{ __('views.welcome.login') }}</a></li>
                                                @else
                                                    @if(auth()->user()->hasRole('administrator'))
                                                    <li><a href="{{ url('/admin') }}">{{ __('views.welcome.admin') }}</a></li>
                                                    @endif
                                                    <li><a href="{{ url('/logout') }}">{{ __('views.welcome.logout') }}</a></li>
                                                @endif
                                            @endif
										</ul>
									</div>
								</div>
								<div class="sinlge-bar">
									<a href="#" class="single-icon"><img src="{{ asset('assets/icon/search.png') }}" style="width: 24px;"></a>
								</div>
								<div class="sinlge-bar shopping">
									<a href="#" class="single-icon"><img src="{{ asset('assets/icon/bag.png') }}" style="width: 24px;"> <span class="total-count">2</span></a>
									<!-- Shopping Item -->
									<div class="shopping-item">
										<div class="dropdown-cart-header">
											<span>2 Items</span>
											<a href="#">View Cart</a>
										</div>
										<ul class="shopping-list">
											<li>
												<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
												<a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
												<h4><a href="#">Woman Ring</a></h4>
												<p class="quantity">1x - <span class="amount">$99.00</span></p>
											</li>
											<li>
												<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
												<a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
												<h4><a href="#">Woman Necklace</a></h4>
												<p class="quantity">1x - <span class="amount">$35.00</span></p>
											</li>
										</ul>
										<div class="bottom">
											<div class="total">
												<span>Total</span>
												<span class="total-amount">$134.00</span>
											</div>
											<a href="checkout.html" class="btn animate">Checkout</a>
										</div>
									</div>
									<!--/ End Shopping Item -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->
	
    @yield('content')
	
	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="index.html"><img src="{{ asset('assets/icon/Jennyhouse-white.png') }}" alt="#"></a>
							</div>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<ul>
								<li><a href="#">Haircare</a></li>
								<li><a href="#">Cosmetics</a></li>
								<li><a href="#">Hair Color</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<ul>
								<li><a href="#">+62 822 8888​ 5456</a></li>
								<li><a href="#">mail@jennyhouse.id</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<!-- End Single Widget -->
							<ul>
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-twitter"></i></a></li>
								<li><a href="#"><i class="ti-flickr"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="bg-footer copyright">
			<div class="container-fluid no-pd">
				<div class="inner">
					<div style="text-align: center">
                        <p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a>  -  All Rights Reserved.</p>
                    </div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->
 
	<!-- Jquery -->
    <script src="{{ asset('assets/js/jquery.min.js') }} "></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.0.0.js') }} "></script>
	<script src="{{ asset('assets/js/jquery-ui.min.js') }} "></script>
	<!-- Popper JS -->
	<script src="{{ asset('assets/js/popper.min.js') }} "></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('assets/js/bootstrap.min.js') }} "></script>
	<!-- Color JS -->
	<script src="{{ asset('assets/js/colors.js') }} "></script>
	<!-- Slicknav JS -->
	<script src="{{ asset('assets/js/slicknav.min.js') }} "></script>
	<!-- Owl Carousel JS -->
	<script src="{{ asset('assets/js/owl-carousel.js') }} "></script>
	<!-- Magnific Popup JS -->
	<script src="{{ asset('assets/js/magnific-popup.js') }} "></script>
	<!-- Waypoints JS -->
	<script src="{{ asset('assets/js/waypoints.min.js') }} "></script>
	<!-- Countdown JS -->
	<script src="{{ asset('assets/js/finalcountdown.min.js') }} "></script>
	<!-- Nice Select JS -->
	<script src="{{ asset('assets/js/nicesellect.js') }} "></script>
	<!-- Flex Slider JS -->
	<script src="{{ asset('assets/js/flex-slider.js') }} "></script>
	<!-- ScrollUp JS -->
	<script src="{{ asset('assets/js/scrollup.js') }} "></script>
	<!-- Onepage Nav JS -->
	<script src="{{ asset('assets/js/onepage-nav.min.js') }} "></script>
	<!-- Easing JS -->
	<script src="{{ asset('assets/js/easing.js') }}"></script>
	<!-- Active JS -->
	<script src="{{ asset('assets/js/active.js') }} "></script>

    @yield('script')
</body>
</html>