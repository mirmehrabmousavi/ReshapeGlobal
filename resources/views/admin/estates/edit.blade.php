@extends('admin.layout.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Estate</div>
                    <hr>
                    <form action="{{route('admin.updateEstate',['id' => $estate->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="input-1">title</label>
                            <input type="text" class="form-control" name="title" id="input-1" value="{{$estate->title}}" placeholder="Enter Title" required>
                        </div>
                        <div class="form-group">
                            <label for="editor">description</label>
                            <textarea class="form-control ckeditor" id="editor"  name="desc" placeholder="Enter Description" required>{{$estate->desc}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="input-1">title (FA)</label>
                            <input type="text" class="form-control" dir="rtl" name="title_fa" id="input-1" value="{{$estate->title}}" placeholder="عنوان را وارد کنید" required>
                        </div>
                        <div class="form-group">
                            <label for="editor">description (FA)</label>
                            <textarea class="form-control ckeditor" dir="rtl" id="editor"  name="desc_fa" placeholder="متن محتوا را وارد کنید" required>{{$estate->desc}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="input-3">image</label>
                            <input type="file" class="form-control" name="image" id="input-3">
                            <img src="{{asset($estate->image)}}" alt="{{$estate->title}}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-light px-5">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="//cdn.ckeditor.com/4.19.0/full/ckeditor.js"></script>
@endsection
