<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
        $users = User::find(1);

        echo $users->name;
        echo "<br>";
        echo $users->phoneTable[0]->phone;
        echo "<br>";
        echo $users->phoneTable[1]->phone;

        // dd($users);
    }

    public function phoneData(){

        $phone = Phone::find(1);
        echo "Phone ID: ". $phone->id;
        echo "<br>";
        echo "Name: ". $phone->user->name;

        // dd($phone);
    }


}
