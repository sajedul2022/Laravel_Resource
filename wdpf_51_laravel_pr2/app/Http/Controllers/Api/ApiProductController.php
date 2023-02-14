<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ApiProductController extends Controller
{

    public function index()
    {
        return Product::orderBy('id', 'desc')->get();
    }


    public function store(Request $request)
    {

        $stores = $request->all();
        // return $stores = $request->prod_detais;

        $request->validate([
            'product_name' => 'required',
            'product_details' => 'required',
            'product_price' => 'required',
            'product_category' => 'required',
            'product_stock' => 'required',
            // 'product_image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);



          Product::create($stores);
          return response()->json(['msg' => 'Successfully Inserted']);
    }


    public function show($id)
    {
        //
    }


    public function update(Request $request, $id)
    {

        $product = Product::findOrFail($id);
        $input = $request->all();
        $product->update($input);
        return response()->json(['msg' => 'Update']);
    }


    public function destroy($id)
    {

        $product = Product::findOrFail($id);

        $product->delete($id);
        return response()->json(['msg' => 'Successfully Deleted']);
    }
}
