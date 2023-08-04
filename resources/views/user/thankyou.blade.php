<!doctype html>
<html>
<head>
  <title>Adesh BoiTech Agri Pvt. Ltd.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body{
        background-size:cover;
        background-image: url("{{ asset('users/img/bg-login.svg') }}");
    }
    .first {
    background: #ffffff9e;
    border-radius: 12px;
}
.table {
  --bs-table-bg: #ffffff00;
  --bs-table-border-color: #683f95;
  
}
.butn, .butn2{
  background-color:#683f95;
  color:white;
}
.btn:hover {
    color: white;
    background-color: #683f95;
    border-color: #683f95;
}
    </style>
</head>

<body>
    <!-- Body main wrapper start -->
    <div class="body-wrapper">

<div class="login-section section-padding login-bg">
	<div class="container">
		<div class="row mt-5">
			 <div class="col-md-12 mt-5 first">
<div class="container mt-5">
  <div>
    <div class="mx-auto text-center">
        <img src="{{ asset('users/img/logo.png') }}" class='mx-auto text-center py-3' width="200">
    </div>
    <div >
      <p class="text-center">
          <strong > CONGRATULATIONS, YOUR REGISTRATION IS SUCCESSFULLY COMPLETED</strong> 
      </p>
      <div>
        @if (Session::has('data'))
        @php
        $data = session('data');
        @endphp
        <table class="mb-4 table table-hover">
          <tr>
            <td>
              <strong>Name
              </strong>
            </td>
            <td>
             {{$data->name}}
            </td>
          </tr>
          <tr>
            <td>
              <strong>Sponsor Id
              </strong>
            </td>
            <td>
                {{$data->spid}}
            </td>
          </tr>
          <tr>
            <td>
              <strong>User id
              </strong>
            </td>
            <td>
                {{$data->uid}}
            </td>
          </tr>
          <tr>
            <td>
              <strong>Phone No.
              </strong>
            </td>
            <td>
                {{$data->phone}}
            </td>
          </tr>
          <tr>
            <td>
              <strong>Password
              </strong>
            </td>
            <td>
                {{$data->showPass}}
            </td>
          </tr>
          <tr>
            <td>
              <strong>Transaction Password
              </strong>
            </td>
            <td>
                {{$data->showPass}}
            </td>
          </tr>
        </table>
        @else
        <script>window.location = "/login";</script>
        @endif
      </div>
      <a href="{{route('register')}}">
        <div class="go-home mb-4 btn butn text-center">Register
        </div>
      </a>
      <a href="{{route('login')}}">
        <div class="go-home mb-4 btn butn2 text-center">Login
        </div>
      </a>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>