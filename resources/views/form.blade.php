<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($address) ? 'Edit Address' : 'Create Address' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
    body {
        background-color: #f0f0f0; /* Background abu-abu muda */
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #333; /* Warna teks */
    }

    .btn-warning {
        background-color: #fd7e14; /* Warna tombol oranye */
        border-color: #fd7e14;
        transition: background-color 0.3s ease;
    }

    .btn-warning:hover {
        background-color: #f76707; /* Warna tombol hover oranye tua */
    }

    .container {
        margin-top: 50px;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #e8f7e6; /* Background hijau muda */
    }

    h1 {
        color: #28a745; /* Warna teks judul hijau */
        margin-bottom: 20px;
    }

    hr {
        border-color: #ccc;
    }

    .form-label {
        color: #555;
    }

    .form-control {
        border-color: #ced4da;
        background-color: #f5f5f5; /* Background input sedikit lebih terang */
        border-radius: 5px; /* Border radius input */
    }

    /* Tambahkan sedikit ruang di sekitar tombol */
    .btn-warning {
        margin-top: 10px;
    }
</style>
</head>
<body>

@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($address) ? 'Edit Address' : 'Create Address' }}</div>

                <div class="card-body">
                    <form action="{{ isset($address) ? route('addresses.update', $address->id) : route('addresses.store') }}" method="POST">
                        @csrf
                        @if(isset($address))
                            @method('PUT')
                        @endif
                        <div class="mb-3">
                            <label for="street" class="form-label">Street</label>
                            <input type="text" class="form-control" id="street" name="street" value="{{ isset($address) ? $address->street : '' }}">
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control" id="city" name="city" value="{{ isset($address) ? $address->city : '' }}">
                        </div>
                        <div class="mb-3">
                            <label for="state" class="form-label">State</label>
                            <input type="text" class="form-control" id="state" name="state" value="{{ isset($address) ? $address->state : '' }}">
                        </div>
                        <div class="mb-3">
                            <label for="postal_code" class="form-label">Postal Code</label>
                            <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{ isset($address) ? $address->postal_code : '' }}">
                        </div>
                        <button type="submit" class="btn btn-primary">{{ isset($address) ? 'Update' : 'Create' }}</button>
                        <a href="{{ route('addresses.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
