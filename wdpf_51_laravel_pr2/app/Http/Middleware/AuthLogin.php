<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class AuthLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next){

        $email = $request->email;
        $password = $request->password;
        $pass = sha1($password);

        $user = new User();
        $data = $user->where('email', $email);
        $data = $data->where('password', $pass);


        if(!$data->count()){
            return redirect('admin')->with('msg', 'Wrong Email OR Password');
        }


        return $next($request);
    }
}
