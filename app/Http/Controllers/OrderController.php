<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function Order(Request $request)
    {
        DB::table('cart')->insert([
            'id_user' => Session::get('id'),
            'id_product' => $request->id_product,
            'jumlah' => $request->jumlah
        ]);

        return redirect('/');
    }

    public function Cart(){
        $v_cart = DB::table('v_cart')->get();
        return view('v_cart',['v_cart' => $v_cart]);
    }

    public function Checkout(){
        $id_check =rand().rand().rand();
        $total = 0;
        $data = DB::table('cart')->where('id_user',Session::get('id'))->get();
        // dd(Session::get('id_user'));
        foreach ($data as $c){
            $products = DB::table('products')->where('id_product',$c->id_product)->get();
            foreach ($products as $p){
                $total += ($c->jumlah * $p->price);
                DB::table('detail_checkout')->insert([
                    'id_checkout'   => $id_check,
                    'id_product'    => $c->id_product,
                    'jumlah'        => $c->jumlah
                ]);
            }
            
    

        }
        DB::table('checkout')->insert([
            'id_checkout' => $id_check,
            'id_user' => Session::get('id'),
            'total' => $total
        ]);

        return redirect('/Checkout_List');
            }

        public function Checkout_List(){
            $v_checkout = DB::table('v_checkout')->get();
            return view('Checkout',['v_checkout' => $v_checkout]);
        }

        public function Confirm(){
            return view('Confirm');
        }

        public function Save_Confirm(Request $request){
            $this->validate($request, [
                'file' => 'required|max:2048'
            ]);
            $file = $request->file('file');
            $file_name = time()."_".$file->getClientOriginalName();
            
            $dest_file = 'data_file';
            if($file->move($dest_file,$file_name)){
                DB::table('confirm')->insert([
                    'id_user' => Session::get('id'),
                    'id_checkout' => $request->id_token,
                    'bukti' => $file_name
                ]);
                return redirect('/Confirm');
            }
        }
}
