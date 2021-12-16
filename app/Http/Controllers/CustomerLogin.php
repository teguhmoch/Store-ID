<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CustomerLogin extends Controller
{
    public function index()
    {
        return view('Login');
    }

    public function Register(Request $request)
    {
        DB::table('customers')->insert([
            'customer_name' => $request->customer_name,
            'email' => $request->email,
            'address' => $request->address,
            'contact' => $request->contact,
            'password' => $request->password
        ]);
        return redirect('/Login');
    }

    public function Login(Request $request)
    {
        $user = DB::table('customers')->where('email',$request->email)->first();
        if($user->password == $request->password){
            Session::put('id',$user->id);
            echo 'Data disimpan dengan session id = '.$request->session()->get('id');
            return redirect("/");
        }else{
            echo "Login gagal";
        }
    }

    public function logout(){
        Session::forget('id');
        return redirect('/');
    }
}
