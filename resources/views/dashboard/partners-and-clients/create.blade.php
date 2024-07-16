@extends('dashboard.layout')
@section('content')
<div class="col-lg-12">
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create Partner Or Clients</h6>
        </div>
        <div class="card-body">
            @csrf
            <form action="{{route('partnerAndClient.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Enter Name">
                </div>
                
                <div class="form-group">
                    <input type="file" name="image" class="form-control" id="image">
                </div>

                <div class="form-group">
                    <select name="type" class="form-control">
                        <option selected disabled >pick Type</option>
                        <option value="Partner">Partner</option>
                        <option value="Client">Client</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <button class="btn btn-block btn-primary" role="submit">Add</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection