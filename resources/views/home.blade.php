<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ Auth::user()->name }}</title>
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
    <div class="container mt-5">
        <div class="d-flex align-items-center justify-content-between">
            <h1>Welcome, {{ Auth::user()->name }}</h1>
            <form action="{{ route('logout') }}" method="POST" class="d-flex">
                @csrf
                @method('DELETE')
                <div class="btn-group">
                    <a href="/edit" class="btn btn-primary">Edit Profile</a>
                    <button class="btn btn-danger" type="submit">Logout</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
@endsection

</body>
</html>
