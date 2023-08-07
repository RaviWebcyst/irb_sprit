<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<Style>
    body{
        background-color: #aaa;
        background-image: url({{asset('users/img/bg-login.svg')}});
        background-position: center;
        background-repeat : no-repeat;
        background-size:cover;
    }

    .card{
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

        <div class="row  mt-lg-5 m-1 mt-3">
            <div class="col-lg-6 col-md-6 mx-auto bg_image   p-4 p-lg-5  card ">
                @if (Session::has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
                @endif
                @if (Session::has('success'))
                <div class="alert alert-success">{{session('success')}}</div>
                @endif
                <div class="mx-auto text-center">
                    <img src="{{ asset('users/img/logo.png') }}" class='mx-auto text-center py-3 w-75' alt="">
                </div>

                <form method="POST" action="{{ route('user.register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="spid" class="form-label">Sponser Id</label>
                        <input type="text" class="form-control " name="spid" id="spid" onchange="checkSp(this.value)"
                            placeholder="Enter Sponser Id" value="{{Request()->spid}}">
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
                </form>
            </div>

        </div>
    </div>
    </form>

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
</body>

</html>
