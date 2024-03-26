@extends('layouts.app')

@section('body')
<div class="container mt-5" style="background-color: #bce8f1;">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Add Addresses</h1>
    </div>
    <hr />

    <form action="{{ route('addresses.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Street</label>
                <input type="text" name="street" class="form-control" placeholder="Street" value="{{ $addresses->street }}">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">City</label>
                <input type="text" name="city" class="form-control" placeholder="City" value="{{ $addresses->city }}">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Postal Code</label>
                <input type="text" name="postal_code" class="form-control" placeholder="Postal Code" value="{{ $addresses->postal_code }}">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Province</label>
                <input type="text" name="province" class="form-control" placeholder="Province" value="{{ $addresses->province }}">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Country</label>
                <input type="text" name="country" class="form-control" placeholder="Country" value="{{ $addresses->country }}">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <button class="btn btn-warning">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
