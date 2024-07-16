@extends('dashboard.layout')
@section('content')
<div class="col-lg-12">
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create Blog</h6>
        </div>
        {{-- name	short_desc	long_desc	image	category_id --}}
        <div class="card-body">
            @csrf
            <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Enter Name">
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" name="short_desc" placeholder="Enter Short Description">
                </div>

                <div class="form-group">
                    <textarea name="long_desc" class="form-control" placeholder="Enter Long Description" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <input type="file" class="form-control" name="image" placeholder="Enter Image">
                </div>
                
                <div class="form-group">
                    <select name="category_id" class="form-control">
                        <option selected disabled >pick category</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <select name="tag_id[]" class="form-control" multiple>
                        <option selected disabled >pick Tags</option>
                        @foreach($tags  as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <button class="btn btn-block btn-primary" role="submit">Add Blog</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection