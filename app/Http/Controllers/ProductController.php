<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;

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
        $brands = Brand::all();
        $categories = Category::all();

        return view('products.create',[
            'brands' => $brands,
            'categories' => $categories
        ]);
    }


}
