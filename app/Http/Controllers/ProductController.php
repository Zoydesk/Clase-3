<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        return view('products.index');
    }

    function detail($id, $category)
    {



        if ($category != null) {
            return view("products.detail", [
                'myId' => $id, 
                'myCategory' => $category]);
        } else {
            return view("products.detail", [
                'myId' => $id, 
                'myCategory' => ""]);
        }
    }

    function create()
    {
        return view("products.create");
    }


}
