<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class mycontroller extends Controller
{
    //
    function insert(Request $req){
        $name=$req->get('pname');
        $price=$req->get('pprice');
        $pimage=$req->file('image')->getClientOriginalName();

        $req->image->move(public_path('images'),$pimage);
        

    $prod=new product();
    $prod->PName=$name;
    $prod->PPrice=$price;
    $prod->PImage=$pimage;
    $prod->save();
    return redirect('/');
    
    }

    function readdata(){
        $pdata=product::all();
        return view('insertRead',['data'=>$pdata]);
    }

    function updateordelete(Request $req){
        $id=$req->get('id');
        $name=$req->get('name');
        $price=$req->get('price');
        if($req ->get('update')== 'Update'){
            return view('updateview',['pid'=>$id, 'pname'=>$name, 'pprice'=>$price]);
        }
        else{
            $prod=product::find($id);
            $prod->delete();
        }
        return redirect('/');
    }
}
