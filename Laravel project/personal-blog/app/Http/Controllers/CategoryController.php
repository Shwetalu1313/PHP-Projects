<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(5);
        // return view('admin.category');
        return view('admin.category',compact('categories'))->with('success', 'Category added successfully.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = new Category;
        $category->name = $validatedData['name'];
        $category->save();

        $categories = Category::all();


        return redirect('admin/category/')->with('categories', $categories)->with('success', 'Category added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('admin.categoryedit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);
        $old_data = $category->name;
        $category->update([
            'name' => $request->name,
        ]);
        return redirect('/admin/category')->with('successUpdate', $old_data.' was successfully update to '.$category->name);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);

        $category->delete();
        return redirect('admin/category')->with('deletesuccess',$category->id.' '.$category->name.' was successfully deleted!');
    }
}
