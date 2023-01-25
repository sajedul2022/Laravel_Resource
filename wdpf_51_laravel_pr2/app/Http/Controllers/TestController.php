<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use DB;

class TestController extends Controller
{
   public function testdata(){
        $conn = new Test();
        $data = $conn->setConnection('mysqlOne');
        $sql = 'SELECT customerName FROM customers';
        $datas = $data($sql);

        return view('test', $datas);


   }
}
