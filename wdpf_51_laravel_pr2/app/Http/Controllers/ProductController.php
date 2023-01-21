<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $products = Product::latest()->paginate(10);
        $cats = Category::orderBy('cat_name', 'ASC')->get();
        // $data['products'] = Product::orderBy('id', 'DESC')->get();
        // dd($data);
        return view('backend.products.index', compact('products', 'cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        $cats = Category::orderBy('cat_name', 'ASC')->get();
        return view('backend.products.create', compact('cats'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $validate = $request->validate([
            'product_name' => 'required',
            'product_details' => 'required',
            'product_price' => 'required',
            'product_category' => 'required',
            'product_stock' => 'required',
            'product_image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($validate){

            $data = new Product();
            $data->product_name =  $request->product_name;
            $data->product_details =  $request->product_details;
            $data->product_price =  $request->product_price;
            $data->product_category =  $request->product_category;
            $data->product_stock =  $request->product_stock;

            if($request->product_image){
                $imageName = time().'.'.$request->product_image->extension();
                $request->product_image->move(public_path('product_photos'), $imageName);
                $data->product_image =  $imageName;
            }else{
                $data->product_image =  "";
            }


            $data->save();

            // echo "Success";

            return redirect('/products')->with('msg', 'Product Added');


        }else{
            echo "Fail";
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product){

        return view('backend.products.single', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product){

        $cats = Category::get();
        return view('backend.products.edit', compact('product', 'cats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product){

        $validate = $request->validate([
            'product_name' => 'required',
            'product_details' => 'required',
            'product_price' => 'required',
            'product_category' => 'required',
            'product_stock' => 'required',
            'product_image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($validate){
            $product->product_name =  $request->product_name;
            $product->product_details =  $request->product_details;
            $product->product_price =  $request->product_price;
            $product->product_category =  $request->product_category;
            $product->product_stock =  $request->product_stock;

            if($request->product_image){
                $imageName = time().'.'.$request->product_image->extension();
                $request->product_image->move(public_path('product_photos'), $imageName);
                $product->product_image =  $imageName;
            }

            $product->update();


            return redirect('/products')->with('msg', 'Product Updated!');


        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product){

        $product->delete();
        return redirect('/products')->with('msg', 'Product Delete');
    }
}
