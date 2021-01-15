<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addProduct() {
        return view("form_product");
    }

    public function edit(Request $request) {
        $data["product"] = Product::find($request->id);
        return view("edit_product",$data);
    }

    public function postProduct(Request $req) {
        $postData = [
            "code" => $req->code,
            "name" => $req->name,
            "categories" => $req->categories,
            "price" => $req->price,
        ];
        $insert = Product::create($postData);
        if ($insert) {
            return redirect()->route('product.view',['message'=>"product berhasil ditambah"]);
        }
    }

    public function saveProduct(Request $req) {
        $postData = [
            "code" => $req->code,
            "name" => $req->name,
            "categories" => $req->categories,
            "price" => $req->price,
        ];
        $Product= Product::find($req->id);
        $update = $Product->update($postData);
        if ($update) {
            return redirect()->route('product.view',['message'=>"product berhasil diupdate"]);
        }
    }

    public function view() {
        $data["product"] = Product::get();
        return view("view_product",$data);
    }
    public function delete(Request $request) {
        Product::find($request->id)->delete();
        return redirect()->route('product.view', ['message' => "product berhasil didelete"]);

    }
    public function destroy($id) {
        Product::find($id)->delete();
        return redirect()->route('product.view', ['message' => "product berhasil didelete"]);

    }
}
