@extends('layouts.frontend')

@section('products')
    <section class="categories">
        <div class="container">
            <div class="row">

                <div class="section-title">
                    <h2>All Product</h2>
                </div>

                <div class="categories__slider owl-carousel">

                    @foreach ($products as $product)
                        <div class="col-lg-3">
                            {{-- <div class="categories__item set-bg" data-setbg="/frontendAssets/img/categories/cat-1.jpg"> --}}
                            <div class="categories__item set-bg" data-setbg="{{ $product->image_name }}">
                                <h5><a href="/frontendAssets/#"> {{ $product->name }} </a></h5>
                                <addto-cart product-id={{$product->id}} > </addto-cart>
                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection
