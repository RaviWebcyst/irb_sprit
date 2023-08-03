<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- bootstrap 4 link  -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .card-body {
            background-color: #fff;
        }

        .card {
            border-radius: 0px !important;
        }

        .cstm_background_input {
            background-color: #aaa;
        }

        .form-control:focus {
            /* box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.25) !important; */
            box-shadow: 0px 0px 0px 0px !important;
            border: 1px solid #aaa !important
        }
    </style>

</head>

<body>


    <div id="app">
        <div class="container">
            <div class="row justify-content-center">
                <div class=" col-lg-4 mt-5">
                    <div class="card">
                        <div class="card-header"> <i class="ri-lock-fill"></i> Please enter your login details.


                        </div>
                        <div class="card-body">
                            @if (session('error'))
                                <div class="alert  alert-danger alert-dismissible fade show   text-danger">
                                    <strong>{{ session('error') }}</strong>
                                </div>
                            @endif
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="email">Email</label>

                                    <div class="col-md-6 input-group ">
                                        <span class="input-group-text cstm_background_input" id="email"><i
                                                class="ri-mail-line"></i></span>

                                        <input id="email" type="email"
                                            class="form-control bg-white @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required autocomplete="email"
                                            autofocus placeholder="Enter Email" aria-describedby="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3  ">
                                    <label for="password">Password</label>

                                    <div class="col-md-6 input-group">
                                        <span class="input-group-text cstm_background_input" id="password"><i
                                                class="ri-lock-fill"></i> </span>

                                        <input id="password" type="password"
                                            class="form-control bg-white @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="current-password"
                                            placeholder="Enter Password" aria-describedby="password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="row mb-0">
                                    <div class="mx-auto text-center">
                                        <button type="submit" class="btn btn-primary ">
                                            <i class="ri-key-2-line"></i> Login
                                        </button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
