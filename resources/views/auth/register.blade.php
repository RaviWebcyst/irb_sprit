<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Login</title>
    <link rel="shortcut icon" href="{{ asset('users/img/logo.png')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body{
        background-color: #aaa;
        height: 110vh;
=======
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<Style>
    body{
        background-color: #aaa;
>>>>>>> 2176a109c70b61d8e7618e17d75440b582ce73ee
        background-image: url({{asset('users/img/bg-login.svg')}});
        background-position: center;
        background-repeat : no-repeat;
        background-size:cover;
<<<<<<< HEAD

=======
>>>>>>> 2176a109c70b61d8e7618e17d75440b582ce73ee
    }

    .card{
        background-color: #ffffff99;
        backdrop-filter: blur(10px);
<<<<<<< HEAD


    }
    .form-control:focus{
            /* box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.25) !important; */
            box-shadow:   0px 0px 0px 0px !important;
            border: 1px solid black !important
        }

</style>
=======
    }
    .btn-primary{
        background: #683f95 !important;
        border:#683f95 !important;
    }   
   
</Style>
>>>>>>> 2176a109c70b61d8e7618e17d75440b582ce73ee
</head>

<body>
    <div class="container">

        <div class="row  mt-lg-5 m-1 mt-3">
<<<<<<< HEAD
            <div class="col-lg-6 col-md-6 mx-auto bg_image   p-4 p-lg-5  card  ">
=======
            <div class="col-lg-6 col-md-6 mx-auto bg_image   p-4 p-lg-5  card ">
                @if (Session::has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
                @endif
                @if (Session::has('success'))
                <div class="alert alert-success">{{session('success')}}</div>
                @endif
>>>>>>> 2176a109c70b61d8e7618e17d75440b582ce73ee
                <div class="mx-auto text-center">
                    <img src="{{ asset('users/img/logo.png') }}" class='mx-auto text-center py-3 w-75' alt="">
                </div>

<<<<<<< HEAD
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
=======
                <form method="POST" action="{{ route('user.register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="spid" class="form-label">Sponser Id</label>
                        <input type="text" class="form-control " name="spid" id="spid" onchange="checkSp(this.value)"
                            placeholder="Enter Sponser Id">
                        <div class="text-danger err"></div>
                        <div class="text-success succ"></div>
                            @error('spid')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control " name="name" id="name"
                            placeholder="Enter Name" required>
                            @error('name')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control " name="email" id="email"
                            placeholder="Enter Email" required>
                            @error('email')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="number" class="form-control " name="phone" id="phone"
                            placeholder="Enter Phone" required>
                            @error('phone')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control " name="password" id="password"
                            placeholder="Enter Password" required>
                            @error('password')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label"> Confirm Password</label>
                        <input type="password" class="form-control " name="password_confirmation" id="password-confirm"
                            placeholder="Enter Password" required>
                            @error('password_confirmation')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                    </div>
                    {{-- <a href="#">forgotten password</a> --}}
                    <div class=" mx-auto text-center py-4">
                        <button type='submit' class="btn btn-primary w-75">Register</button>
                    </div>
                    <div class="text-center  ">

                        {{-- <a href="{{ route('password.request') }}">forgotten password</a> --}}
                        <a href="{{ route('login') }}" class='text-success'>Already have an account? </a>
                    </div>

                    <div class="d-flex justify-content-center">
                        <a href="/" class="text-dark text-center pt-3">Home</a>
                        </div>
>>>>>>> 2176a109c70b61d8e7618e17d75440b582ce73ee
                </form>
            </div>

        </div>
    </div>
    </form>
<<<<<<< HEAD
=======

    <script>
        function checkSp(id){
           $.ajax({
            url:"{{route('checkSp')}}",
            data:{
                id:id
            },
            success:function(data){
                // console.log(data);
                $(".err").text('');
                $(".succ").text(data.user_name);
            },
            error:function(err){
                // console.log(err.responseJSON.error);
                $(".succ").text('');
                $(".err").text(err.responseJSON.error);
            }
           });
        }
    </script>
>>>>>>> 2176a109c70b61d8e7618e17d75440b582ce73ee
</body>

</html>
