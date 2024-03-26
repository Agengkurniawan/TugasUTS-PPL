<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>{{ $title }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="{{ asset('front/css/bootstrap.min.css')}}" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">

    <style>
        body {
            background-color: #555555;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #343a40;
        }

        .navbar-nav .nav-link {
            font-size: 1.1rem;
            font-weight: bold;
            color: #343a40;
        }

        .navbar-nav .nav-link:hover {
            color: #0056b3;
        }

        .btn-login {
            font-weight: bold;
            color: #fff;
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-login:hover {
            background-color: #004380;
            border-color: #004380;
        }

        .btn-signup {
            font-weight: bold;
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-signup:hover {
            background-color: #218838;
            border-color: #218838;
        }
    </style>
</head>

<body>

    <main>

        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                <div class="col-md-3 mb-2 mb-md-0">
                    <a href="/" class="navbar-brand">Your Brand</a>
                </div>

                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/" class="nav-link">Home</a></li>
                    <li><a href="/features" class="nav-link">Features</a></li>
                    <li><a href="#" class="nav-link">Pricing</a></li>
                    <li><a href="#" class="nav-link">FAQs</a></li>
                    <li><a href="#" class="nav-link">About</a></li>
                </ul>

                <div class="col-md-3 text-end">
                    <button type="button" class="btn btn-outline-primary me-2 btn-login">Login</button>
                    <button type="button" class="btn btn-primary btn-signup">Sign-up</button>
                </div>
            </header>
        </div>

        @yield('content')

        <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

    </main>

</body>

</html>
