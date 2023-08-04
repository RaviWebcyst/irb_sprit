@extends('layouts.app')

@section('content')
<div class="content-wrapper p-3">
    <div class=row>
         <!--Start Column-->
        <div class="col-lg-8 col-12">
            <!--Section 1-->
            <section class="content mt-1">
                <div class="container-fluid full">
                    <div class="row">
                        <div class="col-lg-12 col-12 hed">
                            <h2 class="start">Welcome to Adesh Biotech Agri Pvt Ltd</h2>
                            <p class="para start d-none d-lg-block d-md-block"> 100% FIG Based Products Brand</p>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Section 1-->

            <!--Section 2-->
            <section class="content mt-5">
                <div class="container bground p-4">
                    <div class="row">
                        <div class="col-lg-6 col-6 pt-4">
                            <h2 class="bold text-light">100% Safe & Secure <br>Platform</h2>
                        </div>
                        <div class="col-lg-6 col-6 text-right">
                            <img src="{{asset('users/dist/img/first.png')}}" class="banner" width="200">
                        </div>
                    </div>
                  </div>
            </section>
            <!--End-Section 2-->

            <!--Section 3-->
            <section class="content mt-5">
                <div class="container bg-light p-4 sec">
                    <div class="row">
                   
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info back">
                                <div class="inner">
                                <img src="{{asset('users/dist/img/one.png')}}" class="mb-2" width="50">
                                    <p>TOTAL BONUS<br><span class="h4">0 INR</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info back">
                                <div class="inner">
                                    <img src="{{asset('users/dist/img/two.png')}}" class="mb-2" width="50">
                                    <p>TOTAL INCOME<br><span class="h4">0 INR</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info back">
                                <div class="inner">
                                    <img src="{{asset('users/dist/img/three.png')}}" class="mb-2" width="50">
                                    <p>E-WALLET<br><span class="h4"> 0 INR</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info back">
                                <div class="inner">
                                    <img src="{{asset('users/dist/img/four.png')}}" class="mb-2" width="50">
                                    <p>Point Match Bonus<br>
                                    
                                    <span class="h4">0 INR</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info back">
                                <div class="inner">
                                    <img src="{{asset('users/dist/img/five.png')}}" class="mb-2" width="50">
                                    <p>DIRECT BONUS<br><span class="h4">
                                   0 INR</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info back">
                                <div class="inner">
                                    <img src="{{asset('users/dist/img/six.png')}}" class="mb-2" width="50">
                                    <p>Total Withdraw<br>
                                    
                                    <span class="h4">Debit</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info back">
                                <div class="inner">
                                    <img src="{{asset('users/dist/img/seven.png')}}" class="mb-2" width="50">
                                    <p>PENDING BUSINESS<br>
                                  
                                    <span class="h4">0</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info back">
                                <div class="inner">
                                    <img src="{{asset('users/dist/img/eight.png')}}" class="mb-2" width="50">
                                    <p>TOTAL DIRECT<br>
                                   
                                    <span class="h4">{{$users}}</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info back">
                                <div class="inner">
                                    <img src="{{asset('users/dist/img/nine.png')}}" class="mb-2" width="50">
                                    <p>TOTAL TEAM<br>
                                   
                                    <span class="h4">{{$teams}}</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info back">
                                <div class="inner">
                                    <img src="{{asset('users/dist/img/ten.png')}}" class="mb-2" width="50">
                                    <p>Total Active Direct<br>
                                   
                                    <span class="h4"> 0</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info back">
                                <div class="inner">
                                    <img src="{{asset('users/dist/img/11.png')}}" class="mb-2" width="50">
                                    <p>Total Active Team<br><span class="h4">0 </span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info back">
                                <div class="inner">
                                    <img src="{{asset('users/dist/img/twelve.png')}}" class="mb-2" width="50">
                                    <p>TODAY JOINING<br>
                                    
                                    <span class="h4"> 0</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </section>
             <!--End-Section 3-->
        </div>
           <!--End Column-->
          <!--Start New Column-->
        <div class="col-4 d-none d-lg-block d-xl-block">
            <!--Section 1-->
            <section class="content mt-1 pb-5 d-none d-lg-block d-xl-block">
                <div class="container ">
                    <div class="row ">
                        <div class="col-lg-12 col-12 pt-4 mb-5 hed">
                        </div>
                    </div>
                    </div>
                </section>
            <!--End Section 1-->
            <!--Section 2-->
            <section class="content mt-4 d-none d-lg-block d-xl-block">
                <div class="container bground2">
                    <div class="row">
                        <div class="col-lg-12 pt-3 text-center">
                            <img src="{{asset('users/dist/img/avatar5.png')}}" class="user" width="100">
                            <h4 class="bold mt-2 text-light">{{auth()->user()->name}}</h4>
                            <p class="num pb-1">( <strong style="color:#5e1dab;">{{Auth::user()->uid}})</p>
                        </div
                    </div>
            </section>
            <!--End-Section 2-->

            <!--Section 3-->
            <section class="content mt-5 d-none d-lg-block d-xl-block">
                <div class="container clor p-4 sec">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-center">User Profile </h2>
                            <table class="table mt-5">
                                <tbody>
                             
                                </tbody>
                            </table>
                        </div>
                    </div>
            </section>
            <!--End-Section 3-->
        </div>
           <!--End Column-->
    </div>
     <!--End Row-->
      <!--Section 3-->
      <div class="row">
        <div class="col-lg-6 col-12">
      <section class="content mt-5">
                <div class="container bg-light pt-3 sec">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-center">Your Affiliate Link Left</h2>
                            <table class="table mt-2">
                                <tbody>
                                    <tr>
                                        <th class="top"> <input type="text" id="myInput" value="{{route('register',["spid"=>Auth::user()->uid])}}" style="width: 100%;     margin-right: 12px; padding:  4px;font-size:  16px;background: #ffffff;color:  #615b5b; border: 1px solid #ddd; font-weight:  800;" readonly="true"></th>
                                        <td class="top"> <a href="#" class="btn-inverse" onclick="copyToClipboard()" ><button class="btn btn-primary rounded-5"><i class="fa-solid fa-copy"></i></button></a></td>
                                        <p id="pr" style="display:none"></p>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </section>
            </div>
            {{-- <div class="col-lg-6 col-12">
            <section class="content mt-5">
                <div class="container bg-light pt-3 sec">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-center sm-h3">Your Affiliate Link Right</h2>
                            <table class="table mt-2">
                                <tbody>
                                <tr>
                                        <th class="top"> <input type="text" value="www./register.php?sponsor=&position=right" style="width: 100%;padding:  4px;font-size:  16px;background:#ffffff;     margin-right: 12px; border: 1px solid #ddd; color:#615b5b;font-weight:  800;" readonly="true"></th>
                                        <td class="top"> <a href="#" class="btn-inverse" onclick="copyToClipboard('#p1')"> <button class="btn btn-primary rounded-5"><i class="fa-solid fa-copy"></i></button></a></td>
                                        <p id="p1" style="display:none"> </p>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </section>
            </div> --}}
        </div>
            <!--End-Section 3-->
</div>

<script>

function copyToClipboard() {
  // Get the text field
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */
  document.execCommand("copy");
  alert("Copied");
}

// function copyToClipboard(element) {
//     alert("sdf");
//     var $temp = $("<input>");
//     $("body").append($temp);
//     $temp.val($(element).text()).select();
//     document.execCommand("copy");
//     $temp.remove();
// }
</script>

@endsection
