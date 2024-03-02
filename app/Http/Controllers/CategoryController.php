<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('articles.category.index', ['categories' => Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->all());

        return redirect()->route('categories.index')->with(['success' => 'Categoria creata correttamente!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('articles.category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCategoryRequest $request, Category $category)
    {
        $category->update($request->all());

        return redirect()->back()->with(['success' => 'Categoria modificata correttamente']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {

        if ($category->articles->count()) {
            return redirect()->route('categories.index')->with(['error' => 'Impossibile cancellare la categoria perchè ci sono articoli collegati!']);
        }

        $category->delete();

        return redirect()->route('categories.index')->with(['success' => 'Categoria cancellata correttamente!']);
    }
}
