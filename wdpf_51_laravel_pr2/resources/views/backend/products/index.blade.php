@extends('backend.layouts.app');

@section('content')
    <div class="nk-content-body">

        {{-- Message --}}

        @if ($msg = Session::get('msg'))
            <div class="alert alert-success">
                {{ $msg }}
            </div>
        @endif


        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Products</h3>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                                class="icon ni ni-more-v"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li>
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-search"></em>
                                        </div>
                                        <input type="text" class="form-control" id="default-04"
                                            placeholder="Quick search by id">
                                    </div>
                                </li>
                                <li>
                                    <div class="drodown">
                                        <a href="#"
                                            class="dropdown-toggle dropdown-indicator btn btn-outline-light btn-white"
                                            data-bs-toggle="dropdown">Status</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><span>New Items</span></a></li>
                                                <li><a href="#"><span>Featured</span></a></li>
                                                <li><a href="#"><span>Out of Stock</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="nk-block-tools-opt">

                                    <a href="{{ route('products.create') }}" class=" btn btn-primary"><em
                                            class="icon ni ni-plus"></em><span>Add Product</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->

        {{-- table --}}
        <div class="nk-block">
            <table class="nk-tb-list is-separate nk-tb-ulist">
                <thead>
                    <tr class="nk-tb-item nk-tb-head">

                        <th class="nk-tb-col"><span class="sub-text">ID</span></th>
                        <th class="nk-tb-col"><span class="sub-text">Product Name</span></th>
                        <th class="nk-tb-col"><span class="sub-text">Product Details</span></th>
                        <th class="nk-tb-col"><span class="sub-text">Product Price</span></th>
                        <th class="nk-tb-col"><span class="sub-text">Product Image</span></th>
                        <th class="nk-tb-col"><span class="sub-text">Product Stock</span></th>
                        <th class="nk-tb-col"><span class="sub-text">Product Category</span></th>

                        <th class="nk-tb-col nk-tb-col-tools text-end">
                            <div class="dropdown">
                                <a href="#" class="btn btn-xs btn-trigger btn-icon dropdown-toggle me-n1"
                                    data-bs-toggle="dropdown" data-offset="0,5"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="#"><em class="icon ni ni-check-round-cut"></em><span>Mark As
                                                    Done</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-archive"></em><span>Mark As
                                                    Archive</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove
                                                    Projects</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </th>
                    </tr><!-- .nk-tb-item -->
                </thead>
                <tbody>

                    @foreach ($products as $product)
                        <tr class="nk-tb-item">


                            <td class="nk-tb-col">
                                <span>{{ $product->id }}</span>
                            </td>

                            <td class="nk-tb-col">
                                <div class="project-info">
                                    <h6 class="title">{{ $product->product_name }}</h6>
                                </div>
                            </td>

                            <td class="nk-tb-col tb-col-lg">
                                {{-- <span>{{ Str::of($product->product_details)->words(5,'>>>') }} </span> --}}
                                <span>{{ Str::limit($product->product_details, 30, '>>>') }} </span>
                            </td>

                            <td class="nk-tb-col tb-col-lg">
                                <span>{{ $product->product_price }} </span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                {{-- <span>{{ $product->product_image }} </span> --}}
                                <img height="80" width="80" src="{{ 'product_photos/'.$product->product_image }}" alt="">

                            </td>

                            <td class="nk-tb-col tb-col-lg">
                                <span>{{ $product->product_stock }} </span>
                            </td>

                            <td class="nk-tb-col tb-col-lg">
                                <span>{{ $product->product_category }} </span>
                            </td>


                            <td class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1">
                                    <li>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                                data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li>
                                                        <a href="{{ route('products.show', $product->id ) }}"><em
                                                                class="icon ni ni-eye"></em><span>View Project</span></a>
                                                    </li>
                                                    <li><a href=""><em class="icon ni ni-edit"></em><span>Edit
                                                                Project</span></a></li>
                                                    <li><a href="#"><em
                                                                class="icon ni ni-check-round-cut"></em><span>Mark As
                                                                Done</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr><!-- .nk-tb-item -->
                    @endforeach


                </tbody>
            </table><!-- .nk-tb-list -->

            {{-- pagination --}}
            <div class="card">
                {{ $products->links('vendor.pagination.bootstrap-4') }}
            </div>

            {{-- <div class="card">
                    <div class="card-inner">
                        <div class="nk-block-between-md g-3">

                            <div class="g">

                                <ul class="pagination justify-content-center justify-content-md-start">


                                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul><!-- .pagination -->
                            </div>
                            <div class="g">
                                <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                    <div>Page</div>
                                    <div>
                                        <select class="form-select js-select2" data-search="on" data-dropdown="xs center">
                                            <option value="page-1">1</option>
                                            <option value="page-2">2</option>
                                            <option value="page-4">4</option>
                                            <option value="page-5">5</option>
                                            <option value="page-6">6</option>
                                            <option value="page-7">7</option>
                                            <option value="page-8">8</option>
                                            <option value="page-9">9</option>
                                            <option value="page-10">10</option>
                                            <option value="page-11">11</option>
                                            <option value="page-12">12</option>
                                            <option value="page-13">13</option>
                                            <option value="page-14">14</option>
                                            <option value="page-15">15</option>
                                            <option value="page-16">16</option>
                                            <option value="page-17">17</option>
                                            <option value="page-18">18</option>
                                            <option value="page-19">19</option>
                                            <option value="page-20">20</option>
                                        </select>
                                    </div>
                                    <div>OF 102</div>
                                </div>
                            </div><!-- .pagination-goto -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .card-inner -->
                </div><!-- .card --> --}}

        </div><!-- .nk-block -->
        {{-- End dtable --}}

        <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct" data-toggle-screen="any"
            data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h5 class="nk-block-title">New Product</h5>
                    <div class="nk-block-des">
                        <p>Add information and add new product.</p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="row g-3">

                    <form action="{{ url('/products') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="product-title">Product Name</label>
                                <div class="form-control-wrap">
                                    <input type="text" name="product_name" class="form-control" id="product_name">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="regular-price">Product Details</label>
                                <div class="form-control-wrap">
                                    <textarea name="product_details" class="form-control" id="product_details" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="regular-price">Product Price</label>
                                <div class="form-control-wrap">
                                    <input type="number" name="product_price" class="form-control" id="product_price">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="sale-price">Stock</label>
                                <div class="form-control-wrap">
                                    <input type="number" name="product_stock" class="form-control" id="product_stock">
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
                                            <option value="{{ $cat->id }}"> {{ $cat->cat_name }} </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="upload-zone small bg-lighter my-2">
                                <div class="dz-message">
                                    {{-- <span class="dz-message-text">Drag & drop file Image</span> --}}
                                    <input type="file" name="product_image" id="product_image">
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="button" id="addnew" class="btn btn-primary"><em
                                    class="icon ni ni-plus"></em><span>Add
                                    New</span></button>
                        </div>

                    </form>
                </div>
            </div><!-- .nk-block -->
        </div>

    </div>
@endsection
