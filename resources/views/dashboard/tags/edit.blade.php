@extends('dashboard.layout')
@section('content')
<div class="col-lg-12">
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Tag</h6>
        </div>
        <div class="card-body">
            @csrf
            <form action="{{route('tag.update',$tag->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="name" value="{{$tag->name}}" placeholder="Enter Name">
                </div>
                
                <div class="form-group">
                    <button class="btn btn-block btn-primary" role="submit">Update Tag</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection