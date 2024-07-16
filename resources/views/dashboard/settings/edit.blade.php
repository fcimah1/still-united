@extends('dashboard.layout')
@section('content')
    <div class="col-lg-12">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Settings</h6>
            </div>
            <div class="card-body">
                @csrf

                <form action="{{ route('setting.update', $setting->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @if ($errors->any())
                        {!! implode('', $errors->all('<div>:message</div>')) !!}
                    @endif

                    <div class="form-group">
                        <input type="text" class="form-control" name="name" value="{{ $setting->name }}"
                            placeholder="Enter Name">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="email" value="{{ $setting->email }}"
                            placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <textarea name="description" class="form-control" placeholder="Enter description" cols="30" rows="10">{{ $setting->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <input type="file" class="form-control dropify" data-default-file="{{ asset($setting->logo) }}"
                            name="logo" placeholder="Enter Image">
                    </div>

                    <div class="form-group">
                        <input type="file" class="form-control dropify"
                            data-default-file="{{ asset($setting->favicon) }}" name="favicon" placeholder="Enter Image">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" value="{{ $setting->phone }}"
                            placeholder="Enter Phone">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="address" value="{{ $setting->address }}"
                            placeholder="Enter Address">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="facebook" value="{{ $setting->facebook }}"
                            placeholder="Enter Facebook">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="twitter" value="{{ $setting->twitter }}"
                            placeholder="Enter Twitter">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="instagram" value="{{ $setting->instagram }}"
                            placeholder="Enter Instagram">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="whatsapp" value="{{ $setting->whatsapp }}"
                            placeholder="Enter Whatsapp">
                    </div>



                    <div class="form-group">
                        <button class="btn btn-block btn-primary" role="submit">Update Settings</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
