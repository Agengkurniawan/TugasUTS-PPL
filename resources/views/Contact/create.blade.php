@extends('layouts.app')

@section('body')
<div class="container mt-5" style="background-color: #bce8f1;">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Add Contact</h1>
        <hr />
    </div>
    <form action="{{ route('Contact.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">First Name</label>
                <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{ $Contact->first_name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{ $Contact->last_name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input class="form-control" name="email" placeholder="email" value= "{{$Contact->email}}"> </input>
            </div>
            <div class="col mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $Contact->phone }}" > </input>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
