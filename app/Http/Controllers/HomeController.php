<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function haircareIndex()
    {
        $products = Product::where('category','Haircare')->get();
        return view('haircare', compact('products'));
    }

    public function cosmeticIndex()
    {
        $products = Product::where('category','Cosmetics')->get();
        return view('cosmetic', compact('products'));
    }

    public function hairColorIndex()
    {
        $products = Product::where('category','Hair Color')->get();
        return view('haircolor', compact('products'));
    }

    public function detailProduct($id){
        $products = Product::find($id);
        $haircare = Product::where('category','Haircare')->get();
        $cosmetic = Product::where('category','Cosmetics')->paginate(3);
        $haircolor = Product::where('category','Hair Color')->get();

        return view('detailProduct', compact('products','haircare', 'cosmetic', 'haircolor'));
    }

    public function brandIndex()
    {
        return view('brand');
    }
}
