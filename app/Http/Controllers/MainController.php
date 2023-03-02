<?php

namespace App\Http\Controllers;

use App\Models\LoginModel;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class MainController extends Controller
{
public function login()
{
    return view('login');
}
public function login_post(Request $request)
    {
       $user = LoginModel::where('email', $request->email)->first();
       if($user){
        if($user->password == $request->password){
            return redirect(route('companytable'));
          }else{
                return redirect(route('login'));
          }

       }else{
        return redirect(route('login'));

       }
    }


}
