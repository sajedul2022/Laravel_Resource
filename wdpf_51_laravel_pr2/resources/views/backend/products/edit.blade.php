@extends('backend.layouts.app');

@section('content')
    <div class="nk-content-body">

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1>Edit Product</h1>

                {{-- error --}}

                @if ($errors->any())
                    <div class="alert alert-danger ">
                        <strong>There are problem</strong>
                    </div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif


                <div class="card">
                    {{-- Message --}}

                    @if ($msg = Session::get('msg'))
                        <div class="alert alert-success">
                            {{ $msg }}
                        </div>
                    @endif

                </div>

                <form action="{{ route('products.update', $product->id ) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{method_field('PATCH')}}
                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-label" for="product-title">Product Name</label>
                            <div class="form-control-wrap">
                                <input type="text" name="product_name" class="form-control" id="product_name"
                                    value="{{ old('product_name') ? old('product_name') : $product->product_name }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="regular-price">Product Details</label>
                            <div class="form-control-wrap">
                                <textarea name="product_details" class="form-control" id="product_details" cols="30" rows="5"> {{ old('product_details') ? old('product_details') : $product->product_details }} </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="regular-price">Product Price</label>
                            <div class="form-control-wrap">
                                <input type="number" name="product_price" class="form-control" id="product_price"
                                    value="{{ old('product_price') ? old('product_price') : $product->product_price }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="sale-price">Stock</label>
                            <div class="form-control-wrap">
                                <input type="number" name="product_stock" class="form-control" id="product_stock"
                                    value="{{ old('product_stock') ? old('product_stock') : $product->product_stock }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="category">Category</label>
                            <div class="form-control-wrap">


                                <select name="product_category" class="form-control" id="product_category">
                                    <option value="" disabled selected>Select One</option>

                                    @foreach ($cats as $cat)
                                        <option {{ old('product_category') ? (old('product_category') == $cat->id ? 'selected' : '') : ($product->product_category == $cat->id ? 'selected' : '' ) }}
                                            value="{{ $cat->id }}">

                                            {{ $cat->cat_name }}

                                        </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                    </div>
                    <br/>

                    <div class="col-md-12 form-group" >
                                <label class="form-label" for="category">Image</label>
                                <input class="form-group" type="file" name="product_image" id="product_image">
                                <img src="/product_photos/{{$product->product_image}}" alt="Image" width="200" >
                    </div>

                    <div class="col-12" class="form-group">
                        <button type="submit" class="btn btn-primary"><em class="icon ni ni-plus"></em>
                            <span>AddNew</span>
                        </button>
                    </div>

                </form>
            </div>
        </div>

    </div>
@endsection
