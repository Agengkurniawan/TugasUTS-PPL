<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body {
            background-color: rgb(240, 240, 240);
            font-family: Arial, sans-serif; /* Font family */
            color: #333; /* Warna teks */
        }

        .btn-success {
            background-color: #20c997; /* Warna tombol hijau */
            border-color: #20c997;
            transition: background-color 0.3s ease;
        }

        .btn-success:hover {
            background-color: #17a2b8; /* Warna tombol hover */
        }

        .card-header {
            background-color: #bce8f1; /* Warna header biru MUDA */
            border-radius: 20px 20px 0 0; /* Border radius header */
            text-align: center;
            font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
            padding: 2rem;
        }

        .card-title {
            margin-bottom: 0;
            font-weight: 00;
            color: #000; /* Warna teks judul */
        }

        .card-body {
            padding: 2rem;
        }

        .form-label {
            color: #555; /* Warna teks label form */
        }

        .form-control {
            border-color: #ced4da; /* Warna border input */
            background-color: #f8f9fa; /* Background input */
            border-radius: 10px; /* Border radius input */
        }

        .btn-success.btn-block {
            border-radius: 10px; /* Border radius tombol */
        }

        .text-center {
            color: #007bff; /* Warna teks tengah */
        }

        .text-center a {
            color: #007bff; /* Warna link */
        }

        .text-center a:hover {
            color: #0056b3; /* Warna link hover */
        }

        /* Gaya untuk tabel */
        .custom-table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px; /* Jarak antara tabel dan elemen di bawahnya */
        }

        .custom-table th, .custom-table td {
            border: 1px solid #ddd; /* Garis tepi sel */
            padding: 8px; /* Ruang dalam sel */
            text-align: left; /* Posisi teks di dalam sel */
        }

        .custom-table th {
            background-color: #007bff; /* Warna latar header kolom */
            color: white; /* Warna teks header kolom */
        }

        /* Efek gelap di samping tabel */
        .custom-table-container {
            padding: 20px; /* Ruang di sekitar tabel */
            border-radius: 30px; /* Border radius */
            position: relative;
        }

        .custom-table-container::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: -20px; /* Adjust as needed */
            width: 20px;
            background: linear-gradient(to right, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0));
        }

        /* Efek bayangan pada card */
        .card {
    border-radius: 20px; /* Border radius card */
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1),
                0 10px 20px rgba(0, 0, 0, 0.1),
                0 20px 40px rgba(0, 0, 0, 0.15); /* Multiple shadows */
}

    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">REGISTER</h1>
                </div>
                <div class="card-body">
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Enter your username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-success btn-block">Register</button>
                            </div>
                            <p class="text-center mt-3" style="color: black;">Already have an account? <a href="/login" class="text-decoration-none">Login here</a>.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
