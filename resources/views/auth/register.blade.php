@extends('auth.layout2')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Create Account</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row mb-3">

                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input class="form-control @error('name') is-invalid @enderror" id="inputLastName"
                                            type="text" placeholder="Enter your last name" name="name"
                                            value="{{ old('name') }}" />
                                        <label for="inputLastName">Username</label>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" id="inputEmail" type="email"
                                    placeholder="name@example.com" />
                                <label for="inputEmail">Email address</label>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control @error('password') is-invalid @enderror" name="password"
                                            id="password" type="password" placeholder="Create a password" />
                                        <label for="password">Password</label>

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">

                                        <input class="form-control" id="password-confirm" type="password"
                                            placeholder="Confirm password" name="password_confirmation" required
                                            autocomplete="new-password" />
                                        <label for="password-confirm">Confirm Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Create
                                        Account</button></div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small"><a href="{{ route('login') }}">Have an account? Go to login</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
