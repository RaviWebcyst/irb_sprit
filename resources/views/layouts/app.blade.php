<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="Adesh Biotech">
  <title> User Panel</title>
  <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback" />
  <link rel="stylesheet" href="{{asset('users/dist/css/main.css')}}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="{{asset('users/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <script src="{{asset('users/dist/js/jquery.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>



    {{-- <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> --}}
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light d-lg-none d-xl-none">
      <img src="{{asset('users/dist/img/logo.png')}}" width="100">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link"><i class="fas fa-share-alt shr"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary">
      <a href="#" class="brand-link">
        <img src="{{asset('users/dist/img/logo.png')}}" alt="Logo" class="brand-image"/>
      </a>
      <div class="sidebar">
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image" />
          </div>
          <div class="info">
            <a href="#" class="d-block"> Alex</a>
          </div>
        </div> -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="{{route('home')}}" class="nav-link {{\Request::route()->getName() == 'home'?'active':''}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link  {{(\Request::route()->getName() == 'user.profile'  || \Request::route()->getName() == 'user.edit_profile' || \Request::route()->getName() == 'user.password') ?'active':''}}">
              <i class=" nav-icon fas fa-user"></i>
                <p>
                  Personal Info
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('user.profile')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Account detail</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('user.edit_profile')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Edit Information	</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('user.password')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Change password	</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link {{(\Request::route()->getName() == 'user.invest'  || \Request::route()->getName() == 'user.invest_details' ) ?'active':''}}">
              <i class="nav-icon fa-solid fa-chart-area"></i>
                <p>
                Activation
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('user.invest')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Upgrade</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('user.invest_details')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Upgrade detail</p>
                  </a>
                </li>
                
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link {{(\Request::route()->getName() == 'user.direct_list'  || \Request::route()->getName() == 'user.team_list' ) ?'active':''}}">
              <i class="nav-icon fa-solid fa-people-group"></i>
                <p>
                Team Detail
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                {{-- <li class="nav-item">
                  <a href="tree.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Team Tree</p>
                  </a>
                </li> --}}
                <li class="nav-item">
                  <a href="{{route('user.direct_list')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>My Referral</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('user.team_list')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Downline</p>
                  </a>
                </li>
                {{-- <li class="nav-item">
                  <a href="level.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Level</p>
                  </a>
                </li> --}}
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link {{(\Request::route()->getName() == 'user.direct_bonus'  || \Request::route()->getName() == 'user.transactions' ) ?'active':''}}">
              <i class="nav-icon fa-brands fa-google-wallet"></i>
                <p>
                 Bonus
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('user.direct_bonus')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Direct Bonus	</p>
                  </a>
                </li>
                {{-- <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p> Point Matching Sponsor	</p>
                  </a>
                </li> --}}
                <li class="nav-item">
                  <a href="{{route('user.transactions')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p> All Transaction	</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link {{(\Request::route()->getName() == 'user.wallet_details') ?'active':''}}">
              <i class="nav-icon fa-solid fa-pen-to-square"></i>
                <p>
                Activation Credits
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('user.wallet_details')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>E-wallet Summary	</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link {{(\Request::route()->getName() == 'user.withdraw_details') ?'active':''}}">
              <i class="nav-icon fa-brands fa-google-wallet"></i>
                <p>
                Withdraw
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('user.withdraw_details')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Withdraw Summary</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link {{(\Request::route()->getName() == 'user.create_ticket'  || \Request::route()->getName() == 'user.tickets') ?'active':''}}">
                <i class="nav-icon fas fa-handshake"></i>
                <p>
                  Support
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('user.create_ticket')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Create New Ticket</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('user.tickets')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Recent Created Ticket</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="nav-icon fa-solid fa-power-off"></i>
                <p>
                  Sign Out
                </p>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </li>
          </ul>
        </nav>
      </div>
    </aside>


            @yield('content')
        </main>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
 <script>
   window.setTimeout(function() {
     $(".alert").fadeTo(1000, 0).slideUp(1000, function() {
       $(this).remove();
     });
   }, 2000);
 </script>

<script src="{{asset('users/dist/js/main.js')}}"></script>



</body>

</html>
