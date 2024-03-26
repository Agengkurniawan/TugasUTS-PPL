@extends('layouts.app')

@section('body')
<div class="container mt-5" style="background-color: #bce8f1;">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Detail Addresses</h1>
    </div>
    <hr />

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Street</label>
            <input type="text" name="street" class="form-control" placeholder="Street" value="{{ $addresses->street }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">City</label>
            <input type="text" name="city" class="form-control" placeholder="Price" value="{{ $addresses->city }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Province</label>
            <input type="text" name="province" class="form-control" placeholder="Province" value="{{ $addresses->province }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Country</label>
            <input type="text" name="country" class="form-control" placeholder="Country" value="{{ $addresses->country }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Postal Code</label>
            <input type="text" name="postal_code" class="form-control" placeholder="Postal Code" value="{{ $addresses->postal_code }}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $addresses->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $addresses->updated_at }}" readonly>
        </div>
    </div>
</div>
@endsection
