<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CategorieController extends Controller
{
    public function getCategories()
    {
        $categories = DB::table('categorie')->get();
        return view('categories', ['categories' => $categories]);
    }
}
