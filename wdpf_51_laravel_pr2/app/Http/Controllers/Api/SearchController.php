<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request){
        // return $request->all();

         $term =  $request->item;

        $result = DB::table('products')
        ->where('product_name', 'like', "%$term%")->get();
        return $result;
    }
}

