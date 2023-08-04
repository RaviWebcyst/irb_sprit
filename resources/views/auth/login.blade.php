<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="{{ asset('users/img/logo.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <Style>
        body {
            background-size: cover !important;
            background-color: #aaa;
            height: 100vh;
            background-image: url({{ asset('users/img/bg-login.svg') }});
            background-position: center;
            background-repeat: no-repeat;
        }

        .card {
            background-color: #ffffff99;
            backdrop-filter: blur(10px);

        }

        .form-control:focus {
            /* box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.25) !important; */
            box-shadow: 0px 0px 0px 0px !important;
            border: 1px solid black !important
        }
        .btn-primary{
            background: #683f95 !important;
            border:#683f95 !important;
        }
    </Style>
</head>

<body class="">

    <div class="container ">

        <div class="row  mt-lg-5 m-1 mt-3 ">
            <div class="col-lg-6 mx-auto p-4 p-lg-5   card ">
                <div class="mx-auto text-center">
                    <img src="{{ asset('users/img/logo.png') }}" class='mx-auto text-center w-75 py-3' alt="">
                </div>
                @if (session('error'))
                    <div class="alert   alert-danger  alert-dismissible fade show   text-danger">
                        <strong>{{ session('error') }}</strong>
                    </div>
                @endif
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class=" mb-3">
                        <label for="email" class="form-label">Email Address</label>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="Enter Email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        {{-- <input type="password" class="form-control" name="password" id="password"
                            placeholder="Enter Password"> --}}
                        <input id="email" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password"
                            value="{{ old('password') }}" required autocomplete="password" autofocus
                            placeholder="Enter Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    {{-- <a href="#" class="text-dark text-decoration-none">forgotten password</a> --}}

                    @if (Route::has('password.request'))
                        <a class="text-dark text-decoration-none" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                    <div class=" mx-auto text-center py-4">
                        <button type='submit ' class="btn btn-primary w-75 rounded-pill">Login</button>
                    </div>
                    <div class="text-center  ">

                        <a href="{{ route('register') }}" class='text-decoration-none text-dark'>Don't have an account?
                        </a>
                    </div>
                    <div class="d-flex justify-content-center">
                    <a href="/" class="text-dark text-center pt-3">Home</a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>

</html>
