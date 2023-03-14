@extends('admin.layouts.admin')

@section('title', __('views.admin.products.show.title', ['name' => $products->product_name]))

@section('content')
    <div class="row">
        <table class="table table-striped table-hover">
            <tbody>

            <tr>
                <th>{{ __('views.admin.products.show.table_header_1') }}</th>
                <td>{{ $products->product_name }}</td>
            </tr>

            <tr>
                <th>{{ __('views.admin.products.show.table_header_2') }}</th>
                <td>{{ $products->product_code }}</td>
            </tr>

            <tr>
                <th>{{ __('views.admin.products.show.table_header_3') }}</th>
                <td>{{ $products->category }}</td>
            </tr>

            <tr>
                <th>{{ __('views.admin.products.show.table_header_4') }}</th>
                <td>{{ $products->price }}</td>
            </tr>

            <tr>
                <th>{{ __('views.admin.products.show.table_header_5') }}</th>
                <td>{{ $products->stock }}</td>
            </tr>

            <tr>
                <th>{{ __('views.admin.products.show.table_header_6') }}</th>
                <td>{{ $products->description }}</td>
            </tr>
            
            </tbody>
        </table>
    </div>
@endsection
