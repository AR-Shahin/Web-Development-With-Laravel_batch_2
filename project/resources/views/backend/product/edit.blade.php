@extends('layouts.backend_master')

@section('title', 'Product')

@section('master_content')
    <div class="card pt-3">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-2">
                <h3>Edit Product</h3>
                <div>
                    <a href="{{ route('admin.product.index') }}" class="btn btn-success">Back</a>
                </div>
            </div>
            <hr>
            <form action="{{ route('admin.product.update', $product->slug) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <label for=""><b>Name : </b></label>
                        <input type="text" class="form-control" name="name" placeholder="Product Name"
                            value="{{ $product->name }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for=""><b>Category : </b></label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if ($category->id == $product->category_id) selected @endif>
                                    {{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for=""><b>Sub Category : </b></label>
                        <select name="sub_cat_id" id="sub_cat_id" class="form-control">
                            <option value="">Select Sub Category</option>
                        </select>
                        @error('category_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for=""><b>Color : </b></label>
                        <select name="color_id" id="color_id" class="form-control">
                            <option value="">Select Color</option>
                            @foreach ($colors as $color)
                                <option value="{{ $color->id }}" @if ($color->id == $product->color_id) selected @endif>
                                    {{ $color->name }}</option>
                            @endforeach
                        </select>
                        @error('color_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for=""><b>Size : </b></label>
                        <select name="size_id" id="size_id" class="form-control">
                            <option value="">Select size</option>
                            @foreach ($sizes as $size)
                                <option value="{{ $size->id }}" @if ($size->id == $product->size_id) selected @endif>
                                    {{ $size->name }}</option>
                            @endforeach
                        </select>
                        @error('size_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-2 mb-2">
                        <label for=""><b>Price : </b></label>
                        <input type="text" class="form-control" name="price" placeholder="Product price"
                            value="{{ $product->price }}">
                        @error('price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for=""><b>Sell Price : </b></label>
                        <input type="text" class="form-control" name="sell_price" placeholder="Product sell_price"
                            value="{{ $product->sell_price }}">
                        @error('sell_price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for=""><b>Image: </b></label>
                        <input type="file" class="form-control" name="image">
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <br>
                        <img src="{{ asset($product->image) }}" alt="" width="100px">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for=""><b>Slider Image: </b></label>
                        <input type="file" class="form-control" name="slider_images[]" multiple>
                        @error('slider_images')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for=""><b>Description: </b></label>
                        <textarea class="form-control" id="" cols="30" rows="10" name="description">
                           {{ $product->description }}
                        </textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <button class="btn btn-success">Update Product</button>
            </form>
        </div>
    </div>
@stop

@push('js')
    <script>
        $('body').on('change', '#category_id', function() {

            let url = `${admin_base_url}/product/categories/${this.value}`;

            axios.get(url).then(res => {
                let html = '';
                html += '<option value="">Select Sub Category</option>'
                res.data.data.forEach(element => {
                    html += "<option value=" + element.id + ">" + element.name + "</option>"
                });

                $('#sub_cat_id').html(html)
            })
        })
    </script>
@endpush
