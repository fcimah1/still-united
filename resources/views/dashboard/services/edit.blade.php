@extends('dashboard.layout')
@section('content')
    <div class="col-lg-12">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Service</h6>
            </div>
            {{-- name	short_desc	long_desc	image	category_id --}}
            <div class="card-body">
                @csrf
                <form action="{{ route('service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" value="{{ $service->name }}"
                            placeholder="Enter Name">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="short_desc" value="{{ $service->short_desc }}"
                            placeholder="Enter Short Description">
                    </div>

                    <div class="form-group">
                        <textarea name="long_desc" class="form-control" placeholder="Enter Long Description" cols="30" rows="10">{{ $service->long_desc }}</textarea>
                    </div>

                    <div class="form-group">
                        <input type="file" class="form-control dropify" data-default-file="{{ asset($service->image) }}"
                            name="image" placeholder="Enter Image">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-block btn-primary" role="submit">Update Service</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
