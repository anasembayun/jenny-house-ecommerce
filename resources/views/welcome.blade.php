@extends('layouts.layout')

@section('content')
    <!-- Slider Area -->
	<section class="hero-slider">
		<!-- Single Slider -->
		<div class="single-slider">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-lg-9 col-12">
						<div class="text-inner">
							<div class="row">
								<div class="col-lg-7 col-12">
									<div class="hero-text">
										<h1><span>UP TO 50% OFF </span>All Product</h1>
										<p>Maboriosam in a nesciung eget magnae <br> dapibus disting tloctio in the find it pereri <br> odiy maboriosm.</p>
										<div class="button">
											<a href="#" class="btn">Shop Now!</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Single Slider -->
	</section>
	<!--/ End Slider Area -->

		<!-- Start Cowndown Area -->
		<section class="cown-down">
			<div class="section-inner ">
				<div class="no-pd container-fluid">
					<div class="row">
						<div class="col-lg-6 col-12 padding-right">
							<div class="content-img">
								<img src="{{ asset('assets/image/home/5.png') }}" alt="#">
                                <div class="bottomright">
                                    <div class="heading-block">
                                        <h3 class="title">Good Vibe, Clean Beauty, Which Aims for A Healty Beauty</h3>
                                        <p class="text">
                                            Jenny House artist's pure passion for beaty is the standard for making healty cosmetics. mils and safe ingredients that anyone can trust and use, vegan certification and no harmful ingredients added, anti-animal testing, etc. </p>
                                    </div>
                                    </div>
							</div>
                            
						</div>	
						<div class="col-lg-6 col-12 padding-left">
							<div class="image">
								<img src="{{ asset('assets/image/home/3.png') }}" alt="#">
							</div>	
                            <div class="image">
								<img src="{{ asset('assets/image/home/4.png') }}" alt="#">
							</div>
						</div>	
					</div>
				</div>
			</div>
		</section>
		<!-- /End Cowndown Area -->

	
	<!-- Start Small Banner  -->
	<section class="small-banner section">
		<div class="container-fluid">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="{{ asset('assets/image/home/6.png') }}" alt="#">
						<div class="content">
							<h3>HAIR COLOR</h3>
							<a href="#" class="btn">Shop Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="{{ asset('assets/image/home/7.png') }}" alt="#">
						<div class="content">
							<h3>COSMETICS</h3>
							<a href="#" class="btn">Shop Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-12">
					<div class="single-banner tab-height">
						<img src="{{ asset('assets/image/home/8.png') }}" alt="#">
						<div class="content">
							<h3>HAIRCARE</h3>
							<a href="#" class="btn">Shop Noww</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
		<br>
	</section>
	<!-- End Small Banner -->
	
	<!-- Start Most Popular -->
	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Shop Our Feeds</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
						<!-- Start Single Product -->
						<div class="single-product">
							<div class="product-img">
								<a href="product-details.html">
									<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
									<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
									<span class="out-of-stock">Hot</span>
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="#">Add to cart</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="product-details.html">Black Sunglass For Women</a></h3>
								<div class="product-price">
									<span class="old">$60.00</span>
									<span>$50.00</span>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                </a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="#">Add to cart</a>
									</div>
								</div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">Women Hot Collection</a></h3>
                                <div class="product-price">
                                    <span>$50.00</span>
                                </div>
                            </div>
                        </div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
									<span class="new">New</span>
                                </a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="#">Add to cart</a>
									</div>
								</div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">Awesome Pink Show</a></h3>
                                <div class="product-price">
                                    <span>$50.00</span>
                                </div>
                            </div>
                        </div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                </a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="#">Add to cart</a>
									</div>
								</div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">Awesome Bags Collection</a></h3>
                                <div class="product-price">
                                    <span>$50.00</span>
                                </div>
                            </div>
                        </div>
						<!-- End Single Product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- End Most Popular Area -->
	
	<!-- Start Most Popular -->
	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="content" style="text-align: center">
					<div class="heading-block">
						<h3 class="title">Reveal Your True Beauty</h3>
                        <p class="small-title">The best skin condition for creating a perfect makeup look.</p>
						<p class="text">Suspendisse massa leo, vestibulum cursus nulla sit amet, frungilla placerat lorem. Cars fermentum, sapien. </p>
					</div>
				</div>	
            </div>
        </div>
    </div>
	<!-- End Most Popular Area -->
	
	<!-- Start Shop Services Area -->
    <section class="shop-services section home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>We’re Available at</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="single-service">
                        <img src="{{ asset('assets/image/store/1.png') }}">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="single-service">
                        <img src="{{ asset('assets/image/store/2.png') }}">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="single-service">
                        <img src="{{ asset('assets/image/store/3.png') }}">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="single-service">
                        <img src="{{ asset('assets/image/store/4.png') }}">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="single-service">
                        <img src="{{ asset('assets/image/store/5.png') }}">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="single-service">
                        <img src="{{ asset('assets/image/store/6.png') }}">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="single-service">
                        <img src="{{ asset('assets/image/store/7.png') }}">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="single-service">
                        <img src="{{ asset('assets/image/store/8.png') }}">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="single-service">
                        <img src="{{ asset('assets/image/store/9.png') }}">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="single-service">
                        <img src="{{ asset('assets/image/store/10.png') }}">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="single-service">
                        <img src="{{ asset('assets/image/store/11.png') }}">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="single-service">
                        <img src="{{ asset('assets/image/store/12.png') }}">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="single-service">
                        <img src="{{ asset('assets/image/store/13.png') }}">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="single-service">
                        <img src="{{ asset('assets/image/store/14.png') }}">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="single-service">
                        <img src="{{ asset('assets/image/store/15.png') }}">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="single-service">
                        <img src="{{ asset('assets/image/store/16.png') }}">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="single-service">
                        <img src="{{ asset('assets/image/store/17.png') }}">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="single-service">
                        <img src="{{ asset('assets/image/store/18.png') }}">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="single-service">
                        <img src="{{ asset('assets/image/store/19.png') }}">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="single-service">
                        <img src="{{ asset('assets/image/store/20.png') }}">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="single-service">
                        <img src="{{ asset('assets/image/store/21.png') }}">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="single-service">
                        <img src="{{ asset('assets/image/store/22.png') }}">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="single-service">
                        <img src="{{ asset('assets/image/store/23.png') }}">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="single-service">
                        <img src="{{ asset('assets/image/store/24.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!-- End Shop Services Area -->
	
	<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
										<div class="quickview-slider-active">
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
										</div>
									</div>
								<!-- End Product slider -->
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content">
                                    <h2>Flared Shift Dress</h2>
                                    <div class="quickview-ratting-review">
                                        <div class="quickview-ratting-wrap">
                                            <div class="quickview-ratting">
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#"> (1 customer review)</a>
                                        </div>
                                        <div class="quickview-stock">
                                            <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                        </div>
                                    </div>
                                    <h3>$29.00</h3>
                                    <div class="quickview-peragraph">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                                    </div>
									<div class="size">
										<div class="row">
											<div class="col-lg-6 col-12">
												<h5 class="title">Size</h5>
												<select>
													<option selected="selected">s</option>
													<option>m</option>
													<option>l</option>
													<option>xl</option>
												</select>
											</div>
											<div class="col-lg-6 col-12">
												<h5 class="title">Color</h5>
												<select>
													<option selected="selected">orange</option>
													<option>purple</option>
													<option>black</option>
													<option>pink</option>
												</select>
											</div>
										</div>
									</div>
                                    <div class="quantity">
										<!-- Input Order -->
										<div class="input-group">
											<div class="button minus">
												<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
													<i class="ti-minus"></i>
												</button>
											</div>
											<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
											<div class="button plus">
												<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
													<i class="ti-plus"></i>
												</button>
											</div>
										</div>
										<!--/ End Input Order -->
									</div>
									<div class="add-to-cart">
										<a href="#" class="btn">Add to cart</a>
										<a href="#" class="btn min"><i class="ti-heart"></i></a>
										<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
									</div>
                                    <div class="default-social">
										<h4 class="share-now">Share:</h4>
                                        <ul>
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Modal end -->
        
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/home.css') }}">
@endsection
