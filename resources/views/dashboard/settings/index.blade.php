@extends('dashboard.layout')
@section('content')
    <div class="col-lg-12">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Show Blogs</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Logo</th>
                                <th>Whatsapp</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($blogs as $blog) --}}
                            <tr>
                                <td>{{ $setting->name }}</td>
                                <td>
                                    <img src="{{ asset($setting->logo) }}" width="100" alt="{{ $setting->name }}"
                                        srcset="">
                                </td>
                                <td>{{ $setting->whatsapp }}</td>
                                <td>{{ $setting->email }}</td>
                                <td>
                                    <a href="{{ route('setting.show', $setting->id) }}" class="text-decoration-none"> <i
                                            class="fa-solid fa-eye mr-3"></i>
                                    </a>
                                    <a href="{{ route('setting.edit', $setting->id) }}" class="text-decoration-none"> <i
                                            class="fa-solid fa-pen mr-3"></i>
                                    </a>
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
@endsection
