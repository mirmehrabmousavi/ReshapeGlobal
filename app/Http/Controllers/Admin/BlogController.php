<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexBlog()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index',compact('blogs'));
    }

    public function createBlog()
    {
        return view('admin.blogs.create');
    }

    public function storeBlog(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'image' => 'required',
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->desc = $request->desc;
        $blog->title_fa = $request->title_fa;
        $blog->desc_fa= $request->desc_fa;
        $blog->save();

        return redirect(route('admin.indexBlog'))->with('done');
    }

    public function editBlog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit',compact('blog'));
    }

    public function updateBlog(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'image' => 'required',
        ]);

        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->desc = $request->desc;
        $blog->title_fa = $request->title_fa;
        $blog->desc_fa = $request->desc_fa;
        $blog->save();

        return redirect(route('admin.indexBlog'))->with('done');
    }

    public function deleteBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect(route('admin.indexBlog'))->with('done');
    }
}
