<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(10);
        return view('admin.products.index', compact('products'));
    }

    public function create(){
        return view('admin.products.create');

    }

    public function store(Request $request){
        if($request->hasfile('image'))
        {
            foreach($request->file('image') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);  // your folder path
                $data[] = $name; 
            }
        }
        $products = new Product;
        $products->product_name = $request->post('product_name');
        $products->product_code = $request->post('product_code');
        $products->category = $request->post('category');
        $products->description = $request->post('description');
        $products->price = $request->post('price');
        $products->stock = $request->post('stock');
        $products->image = json_encode($data);
        $products->save();
        
        return redirect()->route('admin.products')->withFlashSuccess('Create Successfully!');
        
    }

    public function show($id){
        $products = Product::find($id);
        return view('admin.products.show', compact('products'));
    }

    public function edit($id){
        $products = Product::find($id);
        return view('admin.products.edit', compact('products'));
    }

    public function update(Request $request, $id){
        $products = Product::find($id);
        $products->product_name = $request->post('product_name');
        $products->product_code = $request->post('product_code');
        $products->category = $request->post('category');
        $products->description = $request->post('description');
        $products->price = $request->post('price');
        $products->stock = $request->post('stock');
        $products->update();
        return redirect()->route('admin.products')->withFlashSuccess('Update Successfully!');
    }

    public function destroy($id){
        $data = Product::find($id);
        $data->delete();
        return redirect()->route('admin.products')->withFlashSuccess('Deleted Successfully!');
    }
}
