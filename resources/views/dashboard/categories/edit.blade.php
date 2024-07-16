@extends('dashboard.layout')
@section('content')
<div class="col-lg-12">
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Category</h6>
        </div>
        {{-- name	short_desc	long_desc	image	category_id --}}
        <div class="card-body">
            @csrf
            <form action="{{route('category.update',$category->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="name" value="{{$category->name}}" placeholder="Enter Name">
                </div>
                
                <div class="form-group">
                    <button class="btn btn-block btn-primary" role="submit">Update Category</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection