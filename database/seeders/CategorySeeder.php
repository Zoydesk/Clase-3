<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    public function run(): void{

       $categoryPhones = new Category();
       $categoryPhones->name = 'Phones';
       $categoryPhones->save();

       $categoryPhones = new Category();
       $categoryPhones->name = 'Computers';
       $categoryPhones->save();


    }

}