@extends('admin.layouts.admin')

@section('title', __('views.admin.products.index.title'))

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-xs btn-primary" href="{{ route('admin.products.create') }}" data-toggle="tooltip" data-placement="top" data-title="Create">
                <i class="fa fa-plus">Create Product</i>
            </a>
        </div>
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>@sortablelink('product_name', __('views.admin.products.index.table_header_0'),['page' => $products->currentPage()])</th>
                <th>@sortablelink('product_code',  __('views.admin.products.index.table_header_1'),['page' => $products->currentPage()])</th>
                <th>@sortablelink('category', __('views.admin.products.index.table_header_2'),['page' => $products->currentPage()])</th>
                <th>@sortablelink('price', __('views.admin.products.index.table_header_3'),['page' => $products->currentPage()])</th>
                <th>@sortablelink('stock', __('views.admin.products.index.table_header_4'),['page' => $products->currentPage()])</th>
                <th>@sortablelink('description', __('views.admin.products.index.table_header_5'),['page' => $products->currentPage()])</th>
                <th>Images</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_code }}</td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->description }}</td>
                    <td><?php foreach (json_decode($product->image)as $picture) { ?>
                        <img src="{{ asset('/images/'.$picture) }}" style="height:30px; width:30px"/>
                        <?php } ?></td>
                    <td>
                        <a class="btn btn-xs btn-primary" href="{{ route('admin.products.show', [$product->id]) }}" data-toggle="tooltip" data-placement="top" data-title="Show">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a class="btn btn-xs btn-info" href="{{ route('admin.products.edit', [$product->id]) }}" data-toggle="tooltip" data-placement="top" data-title="Edit">
                            <i class="fa fa-pencil"></i>
                        </a>
                            <a href="{{ route('admin.products.destroy', [$product->id]) }}" class="btn btn-xs btn-danger user_destroy" data-toggle="tooltip" data-placement="top" data-title="Delete">
                                <i class="fa fa-trash"></i>
                            </a>
                        
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pull-right">
            {{ $products->links() }}
        </div>
    </div>
@endsection
