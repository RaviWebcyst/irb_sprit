<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="{{ asset('users/img/logo.png')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body{
        background-color: #aaa;
        height: 110vh;
        background-image: url({{asset('users/img/bg-login.svg')}});
        background-position: center;
        background-repeat : no-repeat;
        background-size:cover;
    }

    .card{
        background-color: #ffffff99;
        backdrop-filter: blur(10px);


    }
    .form-control:focus{
            /* box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.25) !important; */
            box-shadow:   0px 0px 0px 0px !important;
            border: 1px solid black !important
        }

</style>
</head>

<body>
    <div class="container">

        <div class="row  mt-lg-5 m-1 mt-3">
            <div class="col-lg-6 col-md-6 mx-auto bg_image   p-4 p-lg-5  card  ">
                <div class="mx-auto text-center">
                    <img src="{{ asset('users/img/logo.png') }}" class='mx-auto text-center py-3 w-75' alt="">
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-2">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name"
                            placeholder="Enter Name">
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Enter Email">
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Enter Password">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label"> Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password-confirm"
                            placeholder="Enter Password">
                    </div>
                    <a href="#" class="text-decoration-none text-dark ">forgotten password</a>
                    <div class=" mx-auto text-center py-4">
                        <button type='submit ' class="btn btn-primary w-75 rounded-pill">Register</button>
                    </div>
                    <div class="text-center  ">

                         <a href="{{ route('login') }}" class='text-decoration-none text-dark'>Already have an account? </a>
                    </div>
                </form>
            </div>

        </div>
    </div>
    </form>
</body>

</html>
