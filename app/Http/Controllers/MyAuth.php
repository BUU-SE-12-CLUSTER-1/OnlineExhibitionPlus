<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\UserModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class MyAuth extends Controller
{
    //
    function login_process(Request $req){
        $req->validate([
            'email' =>'required|email',
            'password' => 'required|min:5|max:12'
        ]);
        $user = UserModel::where('user_email','=',$req->email)->first();
        if(!$user){
            return Redirect::back()->with('error','Invalid email');
        }else{
            if(Hash::check($req->password, $user->user_password)){
                //$req->session()->put('LoggedUser',$user->user_id);
                return redirect('/home');
            }else{
                return Redirect::back()->with('error','Invalid password');
            }
        }

        if(Auth::attempt(['user_email' => $data['email'], 'user_password' => $data['password']])){
            return Redirect::to('/user-list');
            }else{
                return Redirect::to('login');
            }
    }
}
