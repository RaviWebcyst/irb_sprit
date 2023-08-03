<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <Style>
        body {
            background-size: cover !important;
            background-color: #aaa;
            background-image: url({{ asset('users/img/bg-login.svg') }});
            height: 92vh;
            background-position: center;
            background-repeat: no-repeat;
        }

        .card {
            background-color: #ffffff99;
            backdrop-filter: blur(10px);
        }
        .btn-primary{
            background: #683f95 !important;
            border:#683f95 !important;
        }
    </Style>
</head>

<body>
    <div class="container">

        <div class="row  mt-5">
            <div class="col-lg-4  mx-auto px-2 p-lg-5 card">

                @if (Session::has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
                @endif
                @if (Session::has('success'))
                <div class="alert alert-success">{{session('success')}}</div>
                @endif
                
                <div class="mx-auto text-center">
                    <img src="{{ asset('users/img/logo.png') }}" class='mx-auto text-center w-75 py-3' alt="">
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Enter Email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Enter Password">
                    </div>
                    {{-- <a href="#">forgotten password</a> --}}
                    <div class=" mx-auto text-center py-4">
                        <button type='submit ' class="btn btn-primary w-75">Login</button>
                    </div>
                    <div class="text-center  ">

                        {{-- <a href="{{ route('password.request') }}">forgotten password</a> --}}
                        <a href="{{ route('register') }}" class='text-success'>Don't have an account? </a>
                    </div>
                </form>
            </div>

        </div>
    </div>
 </body>

</html>
