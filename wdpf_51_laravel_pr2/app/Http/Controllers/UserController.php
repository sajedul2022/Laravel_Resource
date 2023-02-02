<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::find(1);

        echo $users->name;
        echo "<br>";
        echo $users->phoneTable[0]->phone;
        echo "<br>";
        echo $users->phoneTable[1]->phone;

        // dd($users);
    }

    public function phoneData()
    {

        $phone = Phone::find(1);
        echo "Phone ID: " . $phone->id;
        echo "<br>";
        echo "Name: " . $phone->user->name;

        // dd($phone);
    }

    public function roleAssign()
    {
        // $user = User::find(2);

        // $roleIds = [1, 3];
        // $user->roles()->attach($roleIds);

        $user = User::find(1);

        $roleIds = [1, 4];
        $user->roles()->sync($roleIds);
    }

    public function roleShow()
    {
        $user = User::find(1);
        $role = Role::find(1);

        // dd($user->roles);

        return response()->json($role);
    }
}
