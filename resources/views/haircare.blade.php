@extends('layouts.layout')

@section('content')
<section class="shop-blog section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Haircare Product</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($products as $product)
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
    </div>
</section>
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
@endsection