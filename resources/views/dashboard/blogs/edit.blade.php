@extends('dashboard.layout')
@section('content')
<div class="col-lg-12">
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Blog</h6>
        </div>
        {{-- name	short_desc	long_desc	image	category_id --}}
        <div class="card-body">
            @csrf
            <form action="{{route('blog.update',$blog->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="name" value="{{$blog->name}}" placeholder="Enter Name">
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" name="short_desc"  value="{{$blog->short_desc}}" placeholder="Enter Short Description">
                </div>

                <div class="form-group">
                    <textarea name="long_desc" class="form-control" placeholder="Enter Long Description" cols="30" rows="10">{{$blog->long_desc}}</textarea>
                </div>

                <div class="form-group">
                    <input type="file" class="form-control dropify"
                            data-default-file="{{ asset($blog->image) }}" name="image" placeholder="Enter Image">
                </div>
                
                <div class="form-group">
                    <select name="category_id" class="form-control">
                        <option selected disabled >pick category</option>
                        @foreach($categories as $category)
                        <option @selected($blog->category_id == $category->id) value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <select name="tag_id[]" class="form-control" multiple>
                        <option selected disabled >pick Tags</option>
                        @foreach($tags  as $tag)
                        <option @selected(in_array($tag->id ,$selectedTags)) value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <button class="btn btn-block btn-primary" role="submit">Update Blog</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection