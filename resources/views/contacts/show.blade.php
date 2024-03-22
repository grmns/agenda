@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Contact Details
                    </div>
                    <div class="card-body">
                        <p><strong>Name:</strong> {{ $contact->name }}</p>
                        <p><strong>Email:</strong> {{ $contact->email }}</p>
                        <p><strong>Phone:</strong> {{ $contact->phone }}</p>
                        <p><strong>Address:</strong> {{ $contact->address }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
