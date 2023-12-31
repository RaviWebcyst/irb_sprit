<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adesh Biotech</title>
    <link rel="shortcut icon" href="{{ asset('users/img/logo.png') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icons Link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">


    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <style>
        .cstm_style {
            bottom: 10px !important;
            right: 10px ! important;
            position: absolute;
            z-index: 11111;
            background-color: #ff9090;
            color: black;
            position: fixed;
        }

        .cstm_style_success {
            bottom: 10px !important;
            right: 10px ! important;
            position: absolute;
            z-index: 11111;
            background-color: #bee3f8 !important;
            color: black;
            position: fixed;


        }
    </style>
</head>

<body>
    @php $logo = App\Models\Setting::orderBy('id')->first(); @endphp
    @if (session('error'))
        <div class="alert  alert-dismissible fade show   cstm_style">
            <strong>{{ session('error') }}</strong>
            <a class=" text-decoration-none fs-4 " data-bs-dismiss="alert"><i class="ri-close-line text-dark"></i></a>
        </div>
    @endif
    @if (session('success'))
        <div class="alert  alert-dismissible fade show   cstm_style_success">
            <strong class='fs-5'>{{ session('success') }}</strong>
            <a class=" text-decoration-none fs-4 " data-bs-dismiss="alert"><i class="ri-close-line text-dark"></i></a>
        </div>
    @endif
    <div class="sticky-top">
        <header class="header navbar-dark   header-top-bg">
            <nav class="header navbar navbar-expand   header-top-bg">
                <button class="offcanvas text-danger d-lg-none d-md-none d-block ms-auto" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon text-light"></span>
                </button>
                <div class="container">
                    <a class="navbar-brand" href="{{ route('home.index') }}">
                        {{-- <img src="{{ asset($logo->logo) }}" class="w-50 "> --}}
                        <img src="{{asset('assets/images/nav_logo.png')}}" class="w-50 ">
                    </a>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <div class="btn-group dropstart">
                                <button type="button" class="btn border-0" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="{{ asset('admin/images/avtar.jpg') }}" class="head_img rounded-circle "
                                        alt="">
                                </button>
                                <ul class="dropdown-menu border-0 bg-light">
                                    <li>
                                        <a class="dropdown-item cstm_hover"
                                            href="{{ route('change-password.index') }}">
                                            <i class="ri-git-repository-private-fill"></i> Change Password
                                        </a>
                                    </li>
                                    <li>
                                        <a class=" dropdown-item   cstm_hover" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="ri-logout-circle-r-line"></i>Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <nav class="navbar navbar-expand-lg bg-light navbar-light p-0">
            <div class="container">
                <div class="offcanvas offcanvas-start  w-75 " tabindex="-1" id="offcanvasNavbar">
                    <div class="offcanvas-header">
                        <a href="{{ route('home.index') }}">
                            <!-- <img src="assets/images/avtar.jpg" class="w-25" alt=""> -->
                        </a>
                        <button type="button" class="btn-close border-0 mx-2 fs-5" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 p-4 p-lg-2 navbar-font ">
                        <li class="nav-item px-3">
                            <a class="nav-link active" aria-current="page" href="{{ route('home.index') }}"><i
                                    class="ri-dashboard-line"></i>
                                Dashboard</a>
                        </li>
                        <li class="nav-item dropdown px-3">
                            <a class="nav-link " href="" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="ri-user-fill"></i> Users
                            </a>
                            <ul class="dropdown-menu border-0 bg-light shadow ">
                                <li><a class="dropdown-item cstm_hover " href="{{ route('users.index') }}">All Users</a>
                                </li>
                                <li><a class="dropdown-item cstm_hover" href="{{ route('users.index',["enable"=>1]) }}">Active Users</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown px-3">
                            <a class="nav-link " href="" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="ri-shopping-bag-line"></i> Products
                            </a>
                            <ul class="dropdown-menu border-0 bg-light shadow ">
                                {{-- <li><a class="dropdown-item cstm_hover " href="{{route('product.create')}}">Add Product</a></li> --}}
                                <li><a class="dropdown-item cstm_hover" href="{{ route('product.index') }}">View
                                        Product</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown px-3">
                            <a class="nav-link " href="" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="ri-award-fill"></i> Rewards
                            </a>
                            <ul class="dropdown-menu border-0 bg-light shadow">
                                <li><a class="dropdown-item cstm_hover "
                                        href="{{ route('reward.index') }}">Rewards</a></li>
                                <li><a class="dropdown-item cstm_hover " href="#">users</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown px-3">
                            <a class="nav-link  " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="ri-red-packet-line"></i> Package
                            </a>
                            <ul class="dropdown-menu border-0 bg-light shadow">
                                <li><a class="dropdown-item cstm_hover " href="#">Package</a></li>
                                <li><a class="dropdown-item cstm_hover " href="#">Package Details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown px-3">
                            <a class="nav-link  " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="ri-wallet-line"></i> E-send
                            </a>
                            <ul class="dropdown-menu  border-0 bg-light shadow">
                                <li><a class="dropdown-item cstm_hover " href="{{ route('e-send.index') }}">E
                                        Wallet</a></li>
                                <li><a class="dropdown-item cstm_hover " href="#">E Wallet Detils</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown px-3">
                            <a class="nav-link  " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="ri-align-left"></i> Support
                            </a>
                            <ul class="dropdown-menu border-0 bg-light shadow">
                                <li><a class="dropdown-item cstm_hover"
                                        href="{{ route('support.index') }}">Support</a></li>
                                <li><a class="dropdown-item cstm_hover" href="#"> Details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown px-3">
                            <a class="nav-link  " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="ri-settings-2-line"></i>Setting
                            </a>
                            <ul class="dropdown-menu border-0 bg-light shadow">
                                <li><a class="dropdown-item cstm_hover"
                                        href="{{ route('slider-images.index') }}">Home Page Slider</a></li>
                                <li><a class="dropdown-item cstm_hover" href="{{ route('setting.index') }}">Upload
                                        Logo</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown px-3">
                            <a class="nav-link  " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="ri-align-left"></i> Other
                            </a>
                            <ul class="dropdown-menu border-0 bg-light shadow">
                                <li><a class="dropdown-item cstm_hover" href="{{ route('news.index') }}">News</a>
                                </li>
                                <li><a class="dropdown-item cstm_hover" href="{{ route('level-chart.index') }}">
                                        Level chart</a></li>
                            </ul>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <main>
        @yield('content')
    </main>
    {{-- <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(1000, 0).slideUp(1000, function() {
                $(this).remove();
            });
        }, 2000);
    </script> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
