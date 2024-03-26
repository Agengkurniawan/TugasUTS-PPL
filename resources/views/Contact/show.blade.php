@extends('layouts.app')

@section('body')
<div class="container mt-5" style="background-color: #bce8f1; border-radius: 10px; padding: 20px;">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Detail Contact</h1>
        <hr />
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">First Name:</label>
                <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{ $Contact->first_name }}" readonly>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Last Name:</label>
                <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{ $Contact->last_name }}" readonly>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Email:</label>
                <input class="form-control" name="email" placeholder="Email" value="{{ $Contact->email }}" readonly>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Phone:</label>
                <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $Contact->phone }}" readonly>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Created At:</label>
                <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $Contact->created_at }}" readonly>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Updated At:</label>
                <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $Contact->updated_at }}" readonly>
            </div>
        </div>
    </div>
</div>
@endsection
