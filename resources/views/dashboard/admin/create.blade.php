@extends('dashboard.layout')
@section('content')
<div class="col-lg-12">
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create Admin</h6>
        </div>
        <div class="card-body">
            @csrf
            <form action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Enter Name">
                </div>
                
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Enter Email">
                </div>
                
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Enter Password">
                </div>
                
                <div class="form-group">
                    <button class="btn btn-block btn-primary" role="submit">Add Admin</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection