@extends('admin.layout.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Blog</h5>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Desc</th>
                                <th scope="col">Title (FA)</th>
                                <th scope="col">Desc (FA)</th>
                                <th scope="col">Image</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($blogs as $val)
                                <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td>{{$val->title}}</td>
                                    <td>{{$val->desc}}</td>
                                    <td>{{$val->title_fa}}</td>
                                    <td>{{$val->desc_fa}}</td>
                                    <td><img src="{{asset($val->image)}}" alt="{{$val->title}}" height="70" width="70"></td>
                                    <td>
                                        <a href="{{route('admin.editBlog',['id' => $val->id])}}" class="btn btn-light px-5">Edit</a>
                                        <a href="{{route('admin.deleteBlog',['id' => $val->id])}}" class="btn btn-light px-5" onclick="event.preventDefault();
                                                     document.getElementById('del').submit();">Delete</a>
                                        <form id="del" action="{{ route('admin.deleteBlog',['id' => $val->id]) }}" method="POST" class="d-none">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
