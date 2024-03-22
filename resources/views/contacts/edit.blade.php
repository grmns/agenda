@extends('layout')

@section('content')
<div class="col-md-8 mx-auto my-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
            <div class="card-header text-center">
            <h1>Edit Contact</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group my-2">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" value="{{ $contact->name }}" />
                        </div>
                        <div class="form-group my-2">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" value="{{ $contact->email }}" />
                        </div>
                        <div class="form-group my-2">
                            <label for="phone">Phone:</label>
                            <input type="text" class="form-control" name="phone" value="{{ $contact->phone }}" />
                        </div>
                        <div class="form-group my-2">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" name="address" value="{{ $contact->address }}" />
                        </div>
                        <div class="d-flex justify-content-between"> 
                            <button type="submit" class="btn btn-primary">Update</button> 
                            <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Back to Contacts</a> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection