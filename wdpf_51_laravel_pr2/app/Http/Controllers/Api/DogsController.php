<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dog;
use Illuminate\Http\Request;

class DogsController extends Controller
{
    public function index()
    {
        return Dog::all();
    }
    public function store(Request $request)
    {
        return Dog::create($request->only(['name', 'breed']));
    }
    public function show($id)
    {
        return Dog::findOrFail($id);
    }
    public function update(Request $request, $id)
    {
        $dog = Dog::findOrFail($id);
        $dog->update($request->only(['name', 'breed']));
        return $dog;
    }
    public function destroy($id)
    {
        Dog::findOrFail($id)->delete();
    }
}
