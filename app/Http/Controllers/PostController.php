<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('Post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'title' => 'required|alpha_num|max:100',
                'content' => 'required|string|max:225'
            ],
            [
                'title.required' => 'Title tidak boleh kosong',
                'title.alpha_num' => 'Hanya di isi dengan huruf',
                'content.required' => 'Content tidak boleh kosong',
            ],
        );

        $posts = new Post;
        $posts->title = $request->title;
        $posts->content = $request->content;
        if ($request->hasfile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/post', $name);
            $posts->cover = $name;
        };



        $posts->save();

        session()->flash('success', 'Data berhasi di tambahkan');

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts = Post::findOrFail($id);
        return view('post.show', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts = Post::findOrFail($id);
        return view('Post.edit', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $posts = Post::findOrFail($id);
        $posts->title = $request->title;
        $posts->content = $request->content;
        if ($request->hasfile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/post', $name);
            $posts->cover = $name;
        };

        $posts->save();

        session()->flash('success', 'Data berhasi di tambahkan');

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $posts = Post::findOrFail($id);

        //menghapus file cover jika ada
        if ($posts->cover) {
            $filePath = public_path('images/post/' . $posts->cover);
            if (file::exists($filePath)) {
                file::delete($filePath);
            }
        }
        $posts->delete();
        return redirect()->route('post.index')->with('success', 'Data Berhasil di Hapus');
    }
}
