<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Estate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EstateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexEstate()
    {
        $estates = Estate::all();
        return view('admin.estates.index',compact('estates'));
    }

    public function createEstate()
    {
        return view('admin.estates.create');
    }

    public function storeEstate(Request $request)
    {
        $request->validate([
           'title' => 'required',
           'desc' => 'required',
           'image' => 'required',
        ]);

        $estate = new Estate();
        $estate->title = $request->title;
        $estate->desc = $request->desc;
        $estate->title_fa = $request->title_fa;
        $estate->desc_fa = $request->desc_fa;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $path = $file->storeAs('uploads/estates',$filename,'my_files');
            $estate['image'] = $path;
        }
        $estate->save();

        $notif = [
          'alert-type' => 'success',
          'message' => __('messages.toastr.storeSuccess')
        ];

        return redirect(route('admin.indexEstate'))->with($notif);
    }

    public function editEstate($id)
    {
        $estate = Estate::findOrFail($id);
        return view('admin.estates.edit',compact('estate'));
    }

    public function updateEstate(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
        ]);

        $estate = Estate::findOrFail($id);
        $estate->title = $request->title;
        $estate->desc = $request->desc;
        $estate->title_fa = $request->title_fa;
        $estate->desc_fa = $request->desc_fa;
        if ($request->file('image')) {
            $file = $request->file('image');
            Storage::disk('my_files')->delete($estate->image);
            $filename = date('YmdHi').$file->getClientOriginalName();
            $path = $file->storeAs('uploads/estates',$filename,'my_files');
            $estate['image'] = $path;
        }
        $estate->save();

        $notif = [
            'alert-type' => 'success',
            'message' => __('messages.toastr.updateSuccess')
        ];

        return redirect(route('admin.indexEstate'))->with($notif);
    }

    public function deleteEstate($id)
    {
        $estate = Estate::findOrFail($id);
        Storage::disk('my_files')->delete($estate->image);
        $estate->delete();

        $notif = [
            'alert-type' => 'success',
            'message' => __('messages.toastr.deleteSuccessfully')
        ];

        return redirect(route('admin.indexEstate'))->with($notif);
    }
}
