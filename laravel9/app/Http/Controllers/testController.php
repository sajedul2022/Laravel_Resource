<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
 
    }

    public function __invoke($page){

        

        return view('invokable-pages/'.$page);
    }
}
