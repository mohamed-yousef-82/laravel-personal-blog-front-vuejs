<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view("../dashboard.categories.showcategories",compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("../dashboard.categories.addcategory");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|unique:categories',
        ]);
        Category::create([
            'category'=>$request->category,
            'user_id' => auth()->id()
        ]);
        return redirect()->route("showcategories")->with("message","Category added Succefully");

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view("../dashboard.categories.editcategory",compact("category"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        $request->validate([
            
            'category' => 'required|unique:categories,category,'.$id,
        ]);
        $category->update([
            'category'=>$request->category,
            'user_id' => auth()->id()
        ]);
        return redirect()->route("showcategories")->with("message","Category Updated Succefully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);  
        return redirect()->route("showcategories")->with("message","Category Deleted Succefully");
    }
}
