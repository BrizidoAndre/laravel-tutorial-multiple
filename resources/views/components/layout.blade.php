<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap.min.css')}}">
    <title>Prova B</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('companies.index')}}" class="nav-link">Companies</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('products.index')}}" class="nav-link">Products</a>
                    </li>
                    @session('admin')
                    <li class="nav-item">
                        <a href="{{route('logout')}}" class="btn btn-danger">Logout</a>
                    </li>
                    @else
                        <li class="nav-item">
                            <a href="{{route('login')}}" class="nav-link">Login</a>
                        </li>
                        @endsession
                </ul>
            </div>
        </div>
    </nav>
</header>
<main class="container">
    {{$slot}}
</main>
</body>
</html>
