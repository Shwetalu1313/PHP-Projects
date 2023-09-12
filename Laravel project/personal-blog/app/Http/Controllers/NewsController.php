<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Exception;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::paginate(3);
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
        $data = $request->validate([
            "title" => 'required',
            "content" => 'required',
            "image" => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            "category_id" => 'required',
        ]);        

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->hashName();
            $imagePath = $image->storeAs('public/images',$imageName);
            $data['image'] = $imagePath;
        }

        $news = new News();
        $news->title = $data['title'];
        $news->content = $data['content'];
        $news->image = $data['image'];
        $news->category_id = $data['category_id'];
        try {
            $news->save();
        } catch (Exception $th) {
            return dd('Message: ' .$th->getMessage());
        }
        

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
