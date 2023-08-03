<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        .form-control:focus{
            /* box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.25) !important; */
            box-shadow:   0px 0px 0px 0px !important;
            border: 1px solid black !important
        }

        @media (max-width: 768px) {
            .card_width_cstm {


            }
        }
        .cstm_style {

 z-index: 11111;
 color: red;


}
    </Style>
</head>

<body class="">
<div class="container ">

    <div class="row  mt-lg-5 m-1 ">
        <div class="col-lg-6 mx-auto p-5 p-lg-5   card card_width_cstm">
            <div class="mx-auto text-center">
                <img src="{{ asset('users/img/logo.png') }}" class='mx-auto text-center w-750 py-3' alt="">
            </div>
            @if(session('error'))
            <div class="alert  alert-dismissible fade show   cstm_style">
                <strong>{{ session('error') }}</strong>
             </div>
            @endif
                    {{-- <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form> --}}
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Enter Email">
                        </div>


                        <div class=" mx-auto text-center py-4">
                            {{-- <button type='submit ' class="btn btn-primary w-75">Login</button> --}}
                            <button type="submit" class="btn btn-primary w-75">
                                Reset
                            </button>
                        </div>
                        <div class="text-center  ">

                            {{-- <a href="{{ route('password.request') }}">forgotten password</a> --}}
                            <a href="{{ route('login') }}" class='text-decoration-none text-dark'>Go Back to Login</a>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </body>

    </html>
