<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
body {
    background-color: #f2f2f2; /* Background abu-abu muda */
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #333; /* Warna teks */
}

.btn-warning {
    background-color: #ff9900; /* Warna tombol oranye */
    border-color: #ff9900;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.btn-warning:hover {
    background-color: #e68a00; /* Warna tombol hover oranye tua */
    color: #fff; /* Warna teks saat hover */
}

.container {
    margin-top: 50px;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    background-color: #bce8f1; /* Background biru muda */
}

h1 {
    color: #007bff; /* Warna teks judul biru */
    margin-bottom: 20px;
    animation: fadeInUp 1s ease; /* Animasi muncul */
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

hr {
    border-color: #ccc;
}

.form-label {
    color: #555;
}

.form-control {
    border-color: #ccc;
    background-color: #fff; /* Background input putih */
    border-radius: 5px; /* Border radius input */
}

/* Tambahkan sedikit ruang di sekitar tombol */
.btn-warning {
    margin-top: 20px;
}
</style>


</head>
<body>

@extends('layouts.app')

@section('body')
<div class="container">
    <h1>Edit Profile</h1>
    <hr>
    <form action="{{ route('update.profile') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ Auth::user()->name }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Username" value="{{ Auth::user()->username }}">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
