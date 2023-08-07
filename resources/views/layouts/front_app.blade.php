<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="author" content="Adesh Biotech">
    <title>ADESH BIOTECH</title>

    <!-- custom style start -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- custom style end -->

    <!-- Bootstrap links start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Bootstrap links end -->

    <!-- Remixicon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        .cart_card:hover {
            box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
        }
        .cart_card {
            transition: all 0.3s;
        }
        .btn-outline-purple {
  border: 1px solid #683f95 !important;
  color: #683f95 !important;
}
.btn-outline-purple:hover {
  background-color: #683f95 !important;
  color: #fff !important;
}
.mh-cstm{
    min-height: 460px;
}
    </style>
</head>


<body>
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container-fluid head_nav">
            <a class="navbar-brand" href="/">
                <img src="{{asset('assets/images/nav_logo.png')}}" alt="nav_logo" class="w-75">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="ri-menu-line fs-1 text-black"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 mt-lg-0 mt-3">
                    <li class="nav-item">
                        <a class="nav-link text-dark fs-5 px-3 active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fs-5 px-3" href="{{route('about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fs-5 px-3" href="{{route('products')}}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fs-5 px-3" href="{{route('branch')}}">Branch</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fs-5 px-3" href="{{route('gallery')}}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fs-5 px-3" href="{{route('contact')}}">Contact</a>
                    </li>
                </ul>
                <div class="d-flex">
                    @auth
                    <a href="{{route('home')}}" class="btn btn-success mx-2 px-4 text-black fw-bold">Home</a>
                    @else
                    <a href="{{route('login')}}" class="btn btn-success mx-2 px-4 text-black fw-bold">Login</a>
                    <a href="{{route('register')}}" class="btn btn-warning mx-2 px-4 text-black fw-bold">Signup</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->


    @yield('content')
  {{-- <div class="container-fluid bg-purple p-2">
        <p class="text-center text-light pt-3">
            2023 Figwell. All Rights Reserved 2023
        </p>
    </div> --}}
    <!-- footer end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>