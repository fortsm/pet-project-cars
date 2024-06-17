<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\View;

class CategoryController extends Controller
{
    /**
     * Display a list of categories.
     */
    public function index(): View
    {
        $categories = Category::query()->orderBy('id')->get();
        return view('categories.index', ['categories' => $categories]);
    }

    /**
     * Display the specified category.
     */
    public function show($id): View
    {
        $category = Category::findOrFail($id);
        return view('categories.show', ['category' => $category]);
    }
}
