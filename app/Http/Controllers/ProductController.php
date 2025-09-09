<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        return "list products";
    }

     function detail($id, $category) {
    if ($category != null){
    return "Detail products: " . $id . " With Category: " . $category;
    } else {
        return "Detail products: " . $id;
    }}

    function create(){
        return "FORM FOR CREATE PRODUCTS";
    }
}
