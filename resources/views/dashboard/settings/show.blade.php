@extends('dashboard.layout')
@section('content')
    <div class="col-lg-12">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Setting Details</h6>
            </div>
            <div class="card-body">
                @csrf
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Setting</th>
                            <th scope="col">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Name</th>
                            <td>{{ $setting->name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td>{{ $setting->email }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Address</th>
                            <td>{{ $setting->address }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Phone</th>
                            <td>{{ $setting->phone }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Facebook</th>
                            <td>{{ $setting->facebook }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Twitter</th>
                            <td>{{ $setting->twitter }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Instagram</th>
                            <td>{{ $setting->instagram }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Whatsapp</th>
                            <td>{{ $setting->whatsapp }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Logo</th>
                            <td><img src=" {{ asset($setting->logo) }}" width="100" alt=""></td>
                        </tr>

                        <tr>
                            <th scope="row">Favicon</th>
                            <td><img src=" {{ asset($setting->favicon) }}" width="100" alt=""></td>
                        </tr>
                        <tr>
                            <th scope="row">Description</th>
                            <td>{{ $setting->description }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Created At</th>
                            <td>{{ $setting->created_at }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Updated At</th>
                            <td>{{ $setting->updated_at }}</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center ">
                                <a href="{{ route('setting.index') }}">
                                    Back <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
