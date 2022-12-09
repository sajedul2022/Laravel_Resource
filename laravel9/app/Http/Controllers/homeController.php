<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class homeController extends Controller{

    public function index($name,$age){
        echo "Welcome $name You're $age years old";
    }
    
     public function getUrlData(Request $request){
        echo "Name: ".$request->fname." <br>".$request->yearage;
    }
 
}