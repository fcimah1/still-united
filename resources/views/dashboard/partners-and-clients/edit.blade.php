@extends('dashboard.layout')
@section('content')
<div class="col-lg-12">
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="ri-edit-box-line"></i> Edit {{$editedPartnerOrClient->type}} </h6>
        </div>
        <div class="card-body">
            <form action="{{route('partnerAndClient.update',$editedPartnerOrClient->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{$editedPartnerOrClient->name}}">
                </div>
                
                <div class="form-group">
                    <input type="file" name="image" class="form-control dropify"
                    data-default-file="{{ asset($editedPartnerOrClient->image) }}" id="image">
            </div>
                
            <div class="form-group">
                <select name="type" class="form-control">
                    <option selected  disabled >pick Type</option>
                    <option {{$editedPartnerOrClient->type == 'partner' ? 'selected' : ''}} value="partner">Partner</option>
                    <option {{ $editedPartnerOrClient->type == 'client' ? 'selected' : '' }} value="client">Client</option>
                </select>
            </div>
                <div class="form-group">
                    <button class="btn btn-block btn-primary" role="submit">Update</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection