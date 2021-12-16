<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        return view('main',['products' => $products]);
    }

    public function store(Request $request){

        $this->validate($request, [
            'file' => 'required|max:2048'
        ]);
        $file = $request->file('file');
        $file_name = time()."_".$file->getClientOriginalName();
        $destination_upload = 'data_file';
        if($file->move($destination_upload,$file_name)){
            $data = product::create([                              
                'name'          => $request->name,
                'detail'        => $request->detail,
                'price'         => $request->price,
                'image'         => $file_name
            ]);
            $res['message'] = "Success!";
            $res['values'] = $data;
            return response($res);
        }   
    }
}
