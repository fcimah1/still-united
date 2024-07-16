@extends('dashboard.layout')
@section('content')
<div class="col-lg-12">
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create Request Quote</h6>
        </div>
        <div class="card-body">
            @csrf
            <form action="{{route('quote.store')}}" method="POST" enctype="multipart/form-data">
                @csrf       
                <div class="form-group">
                    <input type="text" class="form-control" name="first_name" placeholder="Enter First Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name">
                </div>
                
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Enter Email">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="company" placeholder="Enter Company">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="address" placeholder="Enter Address">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="city" placeholder="Enter City">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="zip" placeholder="Enter Zip">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="telephone" placeholder="Enter Telephone">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="no_of_pieces" placeholder="Enter No of Pieces">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="total_weight" placeholder="Enter Total Weight">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="height" placeholder="Enter Height">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="message" placeholder="Enter Message">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="width" placeholder="Enter Width">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="depth" placeholder="Enter Depth">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="commodity" placeholder="Enter Commodity">
                </div>
                
                <div class="form-group">
                    <button class="btn btn-block btn-primary" role="submit">Add Request Quote</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection