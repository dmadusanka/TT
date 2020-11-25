<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class UserController extends Controller
{
    public function createuser(Request $req){
        DB::table('login_cred')->insertGetId([
            'user_name'=>$req->input('user'),
            'password'=>Hash::make($req->input('password')),
            'status'=>1,
            'delete_status'=>0
        ]);

        return redirect('/createuser');
    }

    public function loguser(Request $req){

        $username = $req->input('user');
        $pass = $req->input('pass');

        $user = DB::table('login_cred')->where('user_name',$username)->first();
        $status = false;
        if (Hash::check($pass, $user->password)) {
           $status = true;
           session(['logged' => true,'username'=>$user->user_name]);
        }

        return [$status];
    }

    public function logout(Request $req){
 
        session(['logged' => false,'username'=>Null]);
       
        return redirect('/');
    }
}
