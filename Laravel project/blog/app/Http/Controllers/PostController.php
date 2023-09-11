<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::paginate(3);
        //return $data;
        return view('post.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'content'=>'required',
        ]);

        $post=Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect(url('/posts'))->with('success','An item -> '.$post->id.' was success fully created.');
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
        $data = Post::find($id);
        return view('post.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'=>'required',
            'content'=>'required',
        ]);

        $data = Post::find($id);
        $data->update([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return redirect('posts')->with('successAlert',"The data was successfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::find($id)->delete();
        return redirect('posts')->with('deleteAlert','An Item was successfully deleted');
    }
}
