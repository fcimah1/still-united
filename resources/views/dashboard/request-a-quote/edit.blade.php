@extends('dashboard.layout')
@section('content')
<div class="col-lg-12">
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Request Quote</h6>
        </div>
        <div class="card-body">
            @csrf
            
            <form action="{{route('quote.update',$requestAQuote->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <input type="text" class="form-control" value="{{$requestAQuote->first_name}}" name="first_name" placeholder="Enter First Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="{{$requestAQuote->last_name}}" name="last_name" placeholder="Enter Last Name">
                </div>
                
                <div class="form-group">
                    <input type="email" class="form-control" value="{{$requestAQuote->email}}" name="email" placeholder="Enter Email">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" value="{{$requestAQuote->company}}" name="company" placeholder="Enter Company">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" value="{{$requestAQuote->address}}" name="address" placeholder="Enter Address">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" value="{{$requestAQuote->city}}" name="city" placeholder="Enter City">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" value="{{$requestAQuote->zip}}" name="zip" placeholder="Enter Zip">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" value="{{$requestAQuote->telephone}}" name="telephone" placeholder="Enter Telephone">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" value="{{$requestAQuote->no_of_pieces}}" name="no_of_pieces" placeholder="Enter No of Pieces">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" value="{{$requestAQuote->total_weight}}" name="total_weight" placeholder="Enter Total Weight">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" value="{{$requestAQuote->height}}" name="height" placeholder="Enter Height">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" value="{{$requestAQuote->message}}" name="message" placeholder="Enter Message">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" value="{{$requestAQuote->width}}" name="width" placeholder="Enter Width">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" value="{{$requestAQuote->depth}}" name="depth" placeholder="Enter Depth">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" value="{{$requestAQuote->commodity}}" name="commodity" placeholder="Enter Commodity">
                </div>
                
                <div class="form-group">
                    <button class="btn btn-block btn-primary" role="submit">Update  Request Quote</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection