@extends('layouts.app')

@section('body')
<div class="container mt-5" style="background-color: #bce8f1;">
        <div class="d-flex align-items-center justify-content-between">
            <h1 class="mb-0">Edit Addresses</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('addresses.update', $address->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="street" class="form-label">Street</label>
                        <input type="text" name="street" id="street" class="form-control" placeholder="Street" value="{{ $address->street }}">
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" name="city" id="city" class="form-control" placeholder="City" value="{{ $address->city }}">
                    </div>
                    <div class="mb-3">
                        <label for="province" class="form-label">Province</label>
                        <input type="text" name="province" id="province" class="form-control" placeholder="Province" value="{{ $address->province }}">
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">Country</label>
                        <input type="text" name="country" id="country" class="form-control" placeholder="Country" value="{{ $address->country }}">
                    </div>
                    <div class="mb-3">
                        <label for="postal_code" class="form-label">Postal Code</label>
                        <input type="text" name="postal_code" id="postal_code" class="form-control" placeholder="Postal Code" value="{{ $address->postal_code }}">
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-warning" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
