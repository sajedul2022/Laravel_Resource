<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class houseController extends Controller{

     public function index( $name = null){
        return "Hi, ". $name;
    }
}
