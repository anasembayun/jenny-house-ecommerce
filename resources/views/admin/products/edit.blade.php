@extends('admin.layouts.admin')

@section('title',__('views.admin.products.edit.title') )

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            {{ Form::open(['route'=>['admin.products.update', $products->id],'method' => 'post','class'=>'form-horizontal form-label-left']) }}

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_name" >
                        Product Name
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="product_name" type="text" class="form-control col-md-7 col-xs-12 @if($errors->has('product_name')) parsley-error @endif"
                            name="product_name" value="{{ $products->product_name }}" required>
                        @if($errors->has('product_name'))
                            <ul class="parsley-errors-list filled">
                                @foreach($errors->get('product_name') as $error)
                                        <li class="parsley-required">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_code" >
                        Product Code
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="product_code" type="text" class="form-control col-md-7 col-xs-12 @if($errors->has('product_code')) parsley-error @endif"
                            name="product_code" value="{{ $products->product_code }}" required>
                        @if($errors->has('product_code'))
                            <ul class="parsley-errors-list filled">
                                @foreach($errors->get('product_code') as $error)
                                        <li class="parsley-required">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="category" >
                        Category
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="category" class="form-control col-md-7 col-xs-12 @if($errors->has('category')) parsley-error @endif" required>
                                <option selected>{{ $products->category }}</option>
                                <option>Haircare</option>
                                <option>Cosmetics</option>
                                <option>Hair Color</option>
                            </select>
                        @if($errors->has('category'))
                            <ul class="parsley-errors-list filled">
                                @foreach($errors->get('category') as $error)
                                        <li class="parsley-required">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price" >
                        Price
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="price" type="text" class="form-control col-md-7 col-xs-12 @if($errors->has('price')) parsley-error @endif"
                            name="price" value="{{ $products->price }}" required>
                        @if($errors->has('price'))
                            <ul class="parsley-errors-list filled">
                                @foreach($errors->get('price') as $error)
                                        <li class="parsley-required">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="stock" >
                        Stock
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="stock" type="text" class="form-control col-md-7 col-xs-12 @if($errors->has('stock')) parsley-error @endif"
                            name="stock" value="{{ $products->stock }}" required>
                        @if($errors->has('stock'))
                            <ul class="parsley-errors-list filled">
                                @foreach($errors->get('stock') as $error)
                                        <li class="parsley-required">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description" >
                        Description
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="description" class="form-control col-md-7 col-xs-12 @if($errors->has('description')) parsley-error @endif"
                            rows="4" required>{{ $products->description }}</textarea>
                        @if($errors->has('description'))
                            <ul class="parsley-errors-list filled">
                                @foreach($errors->get('description') as $error)
                                        <li class="parsley-required">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <a class="btn btn-primary" href="{{ URL::previous() }}"> Cancel</a>
                        <button type="submit" class="btn btn-success"> Save</button>
                    </div>
                </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/users/edit.css')) }}
@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/users/edit.js')) }}
@endsection