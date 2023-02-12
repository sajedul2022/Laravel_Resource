<?php

namespace App\Http\Api\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        return $request->all();
    }
}
