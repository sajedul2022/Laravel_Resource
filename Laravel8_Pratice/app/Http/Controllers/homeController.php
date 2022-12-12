<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller{

    public function index($name=null, $age=null){
        echo "Name " . $name. ". | Age " . $age;
    }

    public function geturldata(Request $request){
        echo "Name: ".$request->name." <br> Age: ".$request->age;
    }


}
