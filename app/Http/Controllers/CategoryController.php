<?php

namespace App\Http\Controllers;

use App\Category;
use App\Advert;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function getCategories()
    {
        $categories = Category::all();
        return view('layouts.list_of_categories')
            ->with('categories', $categories);
    }

    public function getCategory($id)
    {
        $category = Category::find($id);
        $adverts = Advert::where('category_id', '=', $id)->get();
        return view('pages.category')
            ->with('category', $category)
            ->with('adverts', $adverts);
    }
}
