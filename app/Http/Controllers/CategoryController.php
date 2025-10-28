<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){
        return view ('admin.categories.create');
    }

    public function store(Request $request){
        Category::create([
            'name'=>$request->get('name')
        ]);

        return "se guardo xdddddd :V VIVA LA GRASA";
    }
}
