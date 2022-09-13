<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'image' => 'required|mimes:jpg,jpeg,png',
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->desc = $request->desc;
        $blog->title_fa = $request->title_fa;
        $blog->desc_fa= $request->desc_fa;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $path = $file->storeAs('uploads/blogs',$filename,'my_files');
            $blog['image'] = $path;
        }
        $blog->save();

        $notif = [
            'alert-type' => 'success',
            'message' => __('messages.toastr.storeSuccess')
        ];

        return redirect(route('admin.indexBlog'))->with($notif);
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
            'image' => 'required|mimes:jpg,jpeg,png'
        ]);

        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->desc = $request->desc;
        $blog->title_fa = $request->title_fa;
        $blog->desc_fa = $request->desc_fa;
        if ($request->file('image')) {
            $file = $request->file('image');
            Storage::disk('my_files')->delete($blog->image);
            $filename = date('YmdHi').$file->getClientOriginalName();
            $path = $file->storeAs('uploads/blogs',$filename,'my_files');
            $blog['image'] = $path;
        }
        $blog->save();

        $notif = [
            'alert-type' => 'success',
            'message' => __('messages.toastr.updateSuccess')
        ];

        return redirect(route('admin.indexBlog'))->with($notif);
    }

    public function deleteBlog($id)
    {
        $blog = Blog::findOrFail($id);
        Storage::disk('my_files')->delete($blog->image);
        $blog->delete();

        $notif = [
            'alert-type' => 'success',
            'message' => __('messages.toastr.deleteSuccessfully')
        ];

        return redirect(route('admin.indexBlog'))->with($notif);
    }
}
