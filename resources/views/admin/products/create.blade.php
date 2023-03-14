@extends('admin.layouts.admin')

@section('title',__('views.admin.products.create.title') )

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <form method="post" action="{{route('admin.products.store')}}" class="form-horizontal form-label-left" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_name" >
                        Product Name
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="product_name" type="text" class="form-control col-md-7 col-xs-12 @if($errors->has('product_name')) parsley-error @endif"
                            name="product_name" required>
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
                            name="product_code" required>
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
                                <option selected>Category Option</option>
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
                            name="price" required>
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
                            name="stock" required>
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
                            rows="4" required></textarea>
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
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image" >
                        Images
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group control-group increment" >
                            <input type="file" name="image[]" class="form-control">
                            <div class="input-group-btn"> 
                            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                            </div>
                        </div>

                        <div class="clone hide">
                            <div class="control-group input-group" style="margin-top:10px">
                                <input type="file" name="image[]" class="form-control">
                                <div class="input-group-btn"> 
                                    <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_varian" >
                        Product Variant
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="group_wrapper">
                            <a href="javascript:void(0);" class="add_group big instagram fluid ui button" title="Add Group"><i class="fa fa-plus"></i>Add Product Variant</a>
                                <table id="itemTable" class="table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody class="field_wrapper">
                                        <tr class="item-group">
                                            <td><input type="text" class="form-control" name="addvariant[0][variant_name]" placeholder="Product variant name"></td>
                                        </tr>	
                                        <tr class="item">
                                            <td><input type="text" class="form-control" name="addvariant[0][item[]]" placeholder="Item name" required></td>
                                            <td><a href="javascript:void(0);" class="add_button btn btn-sm btn-primary" title="Add field"><i class="fa fa-plus"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div> --}}

                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <a class="btn btn-primary" href="{{ URL::previous() }}"> Cancel</a>
                        <button type="submit" class="btn btn-primary"> Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/users/edit.css')) }}
    <link rel="stylesheet" type="text/css" class="ui" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/button.min.css">
@endsection

@section('scripts')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script type="text/javascript">
            $(document).ready(function() {
            $(".btn-success").click(function(){ 
                var html = $(".clone").html();
                $(".increment").after(html);
            });
            $("body").on("click",".btn-danger",function(){ 
                $(this).parents(".control-group").remove();
            });
            });   
    </script>
    {{-- <script>
        var max_group = 5;
        var add_group = $('.add_group');
        var group_wrapper = $('.group_wrapper');

        var max_field = 10;
        var add_button = $('.add_button');
        var wrapper = $('.field_wrapper');
	
        var html_group =''+
        '<div class="group_wrapper">'+
            '<a href="javascript:void(0);" class="remove_group btn btn-sm btn-danger pull-right"><i class="fa fa-minus"></i> remove group</a>'+
            '<table id="itemTable" class="table">'+
            '<thead>'+
                '<tr>'+
                    '<th></th>'+
                    '<th></th>'+
                '</tr>'+
            '</thead>'+
        '<tbody class="field_wrapper">'+
        '<tr class="item-group">'+
            '<td><input type="text" class="form-control" name="addvariant[0][variant_name]" placeholder="Product variant name"></td>'+
        '</tr>'+
            '<tr class="item">'+
                '<td><input type="text" class="form-control" name="addvariant[0][item[]]" placeholder="Item name"></td>'+
                '<td><a href="javascript:void(0);" class="add_button btn btn-sm btn-primary" title="Add field"><i class="fa fa-plus"></i></a></td>'+
            '</tr>'+
            '</tbody>'+
            '</table>'+
        '</div>';
        
        var html_fields = '' +
            '<tr class="item">' +
            '<td> <div class="form-group mb-0"> <input type="text" class="form-control" name="addvariant[0][item[]]" placeholder="Item name"> </div> </td> ' +
            '<td> <a href="javascript:void(0);" class="remove_button btn btn-sm btn-danger"><i class="fa fa-minus"></i></a> </td>' +
            '</tr>';

        var x = 1;
        var y = 1;
        
        $(add_group).click(function(){
            if( y < max_group){
                y++;
                $(group_wrapper).append(html_group);
            }
        });
        
        $(group_wrapper).on('click', '.remove_group', function(e){
            e.preventDefault();
        $(this).parent(group_wrapper).remove();
            y--;
        });

        $('body').on('click','.add_button',function(){
            if(x < max_field){
                x++;
                $(this).closest('.field_wrapper').append(html_fields);
            }
        });
        
        $('body').on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).closest('tr').remove();
            x--;
        });
    </script> --}}
    @parent
    {{ Html::script(mix('assets/admin/js/users/edit.js')) }}
@endsection