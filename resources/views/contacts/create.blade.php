@extends('layout')

@section('content')
            <div class="col-md-8 mx-auto my-5"> 
        <div class="row">
            <div class="col-md-8 mx-auto"> 
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Add New Contact</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('contacts.store') }}" method="POST">
                            @csrf
                            <div class="form-group my-2"> 
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter name">
                            </div>
                            <div class="form-group my-2"> 
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter email">
                            </div>
                            <div class="form-group my-2">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="Enter phone">
                            </div>
                            <div class="form-group my-2"> 
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Enter address">
                            </div>
                            <div class="d-flex justify-content-between"> 
                            <button type="submit" class="btn btn-primary my-2">Submit</button>
                                <a href="{{ route('contacts.index') }}" class="btn btn-secondary my-2">Back to Contacts</a> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
