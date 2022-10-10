<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function index(Request $req)
    {
        $data =User::where(['email'=>$req->email])->first();
        if(!$data || Hash::check($req->password, $data->password)){
            return "User name or password not matched";
        }
        else{
            return redirect('/');
        }
       
    }
}
