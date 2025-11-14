<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

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

    function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0|max:1000000000',
            'category' => 'required|exists:categories,id',
            'brand' => 'required|exists:brand,id',
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category');
        $product->brand_id = $request->input('brand');

        $product->save();

        return redirect()->route('admin.products.table');



    }

    public function table()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);

        return view('products.table', [
            'products' => $products
        ]);
    }


}
