<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::paginate(5);
        return view('admin.newsList',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.news',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request ->validate([
            "title" => 'require',
            "content" => 'require',
            "image" => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            "image" => 'require'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images');
            $data['image'] = $imagePath;
        }

        $news = new News();
        $news->title = $data['title'];
        $news->content = $data['content'];
        $news->image = $data['image'];
        $news->category_id = $data['image'];
        $news->save();

        return redirect('admin/news')->with('successCreate','A new Content was succefully created.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
