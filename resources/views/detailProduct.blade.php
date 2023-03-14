@extends('layouts.layout')

@section('content')
<br><br>
<section class="cown-down">
    <div class="section-inner ">
        <div class="container">
            <div class="row">
                <div class="col-lg-1 col-12 padding-right">
                    <div class="image">
                        <ul>
                            <?php foreach (json_decode($products->image)as $picture) { ?>
                                <li><img src="{{ asset('/images/'.$picture) }}"/><br></li>
                            <?php } ?>
                            
                        </ul>
                        
                    </div>	
                </div>	

                <div class="col-lg-6 col-12 padding-right">
                    <div class="image">
                        <?php  $images = json_decode($products->image);?>
                        <img src="{{ asset('images/'. $images[0]) }}" alt="#">
                    </div>	
                </div>	

                <div class="col-lg-5 col-12 padding-left">
                    <div class="content text-left">
                        <div class="heading-block">
                            <h3 class="title">{{$products->product_name}}</h3>
                            <p class="small-title">Deal of day</p>
                            <p><img src="{{ asset('assets/image/testimoni.png') }}" style="width: 150px; margin-top:5px; margin-bottom:20px"></p>
                            <p class="text">{{$products->description}} </p><br>
                            <h4>Rp.{{$products->price}}/pcs</h4>
                            <p class="small-title">Buy now by free shipping*</p>
                            <a href="" class="more-btn bg-btn">Buy</a>
                        </div>
                    </div>	
                </div>	
            </div><br>
            
        </div>
    </div><br>
</section>

<section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 padding-left">
                    <div class="content text-left">
                        <div class="heading-block">
                            <h3 class="title">Get hair like Son Ye Jin with 7 series of Self Up haircare!</h3>
                            <p class="text">Hydrokeratin Curl Serum can be used before styling hair to provide nutrition, volume and make styling results more perfect. This product is the fourth in the SELF UP Hair Series, which was formulated from 20 years of experience at Jennyhouse salons in Korea. This product is made from natural ingredients free of 12 harmful ingredients and specially formulated for hair loss problems, dry hair that is damaged and split ends due to coloring and styling.</p><br>
                            <h3>How to use :</h3>
                            <p class="text">Hydrokeratin Curl Serum can be used before styling hair to provide nutrition, volume and make styling results more perfect. This product is the fourth in the SELF UP Hair Series, which was formulated from 20 years of experience at Jennyhouse salons in Korea. This product is made from natural ingredients free of 12 harmful ingredients and specially formulated for hair loss problems, dry hair that is damaged and split ends due to coloring and styling.</p><br>
                            <br>
                            <h3 style="color:red">Get it now, while stocks last!</h3>
                        </div>
                    </div>	
                </div>	
            </div>
        </div><br>
</section>

<section class="shop-blog section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Related Products</h2>
                </div>
            </div>
        </div>

        @if($products->category = "Cosmetics")
            <div class="row">
                @foreach($cosmetic as $product)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="shop-single-blog">
                        <?php  $images = json_decode($product->image);?>
                        <img src="{{ asset('images/'. $images[0]) }}" alt="#">
                        <div class="content">
                            <h4>{{$product->product_name}}</h4>
                            <p>{{$product->description}}</p>
                            <p><img src="{{ asset('assets/image/testimoni.png') }}" style="width: 150px; margin-top:10px; margin-bottom:10px"></p>
                            <h5>Rp.{{$product->price}}</h5>
                            <p><img src="{{ asset('assets/image/varian.png') }}" style="width: 90px; margin-top:10px"></p>
                            <a href="{{route('detail.product', $product->id)}}" class="more-btn">Buy</a>
                        </div>
                    </div>
                </div>
                @endforeach           
            </div>
        @endif
        
    </div>
</section>

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
                    <img src="{{ asset('assets/image/shop/1.png') }}">
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-12">
                <div class="single-service">
                    <img src="{{ asset('assets/image/shop/2.png') }}">
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-12">
                <div class="single-service">
                    <img src="{{ asset('assets/image/shop/3.png') }}">
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-12">
                <div class="single-service">
                    <img src="{{ asset('assets/image/shop/4.png') }}">
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-12">
                <div class="single-service">
                    <img src="{{ asset('assets/image/shop/5.png') }}">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="single-service">
                    <img src="{{ asset('assets/image/shop/7.png') }}">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
@endsection

