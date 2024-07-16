@extends('dashboard.layout')
@section('content')
    <div class="col-lg-12">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Contact Details</h6>
            </div>
            <div class="card-body">
                @csrf
                <p>Name: {{ $contact->name }}</p>
                <p>Email: {{ $contact->email }}</p>
                <p>Subject: {{ $contact->subject }}</p>
                <p>Created At: {{ $contact->created_at }}</p>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Contact Message</h6>
            </div>
            <div class="card-body">
                <p>{{ $contact->message }}</p>
            </div>
        </div>
    </div>
@endsection
