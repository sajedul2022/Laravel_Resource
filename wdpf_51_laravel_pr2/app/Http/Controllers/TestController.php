<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
   public function testdata(){


        $conn = DB::connection('mysqlOne');
        $datas =   $conn->table('offices')->select('*')->get();

        // echo "<pre>";
        // print_r($datas);

        return view('test', compact('datas'));


   }
}
