@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h1>DASHBOARD</h1>
                </div>
                <div class="card-body">
                    <h2 class="mb-4">Welcome to Dashboard</h2>
                    <a href="{{ route('contacts.index') }}" class="btn btn-primary">Go to Contacts</a>
                </div>

            </div>
        </div>
    </div>

</div>
<div class="container mt-3 d-flex justify-content-end">
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Cerrar sesión</button>
    </form>
</div>
@endsection
