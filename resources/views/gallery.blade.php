@extends('layouts.front_app')
  @section('content') 

     <!-- our products start -->
     <div class="container mt-5">
        <h1 class="text-center text-black"><span class="border-bottom border-2 border-success">Gallery</span></h1>
        <div class="row mt-5">
            <div class="col-sm-4 mb-lg-0 mb-4">
                <img src="assets/images/Fig-BG.jpg" alt="" class="w-100" data-aos="zoom-in">
            </div>
            <div class="col-sm-4 mb-lg-0 mb-4">
                <img src="assets/images/Fig-BG1.jpg" alt="" class="w-100" data-aos="zoom-in" data-aos-delay="200">
            </div>
            <div class="col-sm-4 mb-lg-0 mb-4">
                <img src="assets/images/product_1.png" alt="" class="w-100" data-aos="zoom-in" data-aos-delay="400">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-4 mb-lg-0 mb-4">
                <img src="assets/images/product_2.png" alt="" class="w-100" data-aos="zoom-in">
            </div>
            <div class="col-sm-4 mb-lg-0 mb-4">
                <img src="assets/images/product_3.png" alt="" class="w-100" data-aos="zoom-in" data-aos-delay="200">
            </div>
            <div class="col-sm-4 mb-lg-0 mb-4">
                <img src="assets/images/product_4.png" alt="" class="w-100" data-aos="zoom-in" data-aos-delay="400">
            </div>
        </div>
    </div>
    <!-- our products end -->

    <!-- footer start -->
    <div class="container-fluid p-4 mt-5 bg-black">
        <div class="container">
            <div class="row pt-5">
                <div class="col-sm-3 mb-mt-0 mb-5">
                    <div><img src="assets/images/footer-logo.png" alt="" class="w-75"></div>
                    <div class="row">
                        <div class="col-2">
                            <i class="ri-map-pin-line text-light"></i>
                        </div>
                        <div class="col-10">
                            <address class="text-light">
                                1, 1 Prabhunath Sigh Ind Est, Marol Naka, <br>
                                Opp, Chimatpada, J.B Nagar, Mumbai City, <br>
                                Maharashtra 40059
                            </address>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <i class="ri-phone-fill text-light"></i>
                        </div>
                        <div class="col-10">
                            <p class="text-light">
                                (+91)0022678954
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3  mb-mt-0 mb-5">
                    <h4 class="text-green mb-4">Important Links</h4>
                    <p><a href="" class="text-light text-decoration-none">Home</a></p>
                    <p><a href="" class="text-light text-decoration-none">About</a></p>
                    <p><a href="" class="text-light text-decoration-none">Products</a></p>
                    <p><a href="" class="text-light text-decoration-none">Gallery</a></p>
                </div>
                <div class="col-sm-3 mb-mt-0 mb-5">
                    <h4 class="text-orange mb-4">Social Media</h4>
                    <p>
                        <a href="" class="text-decoration-none text-light"><i class="ri-facebook-circle-fill text-light fs-3 px-2"></i></a>
                        <a href="" class="text-decoration-none text-light"><i class="ri-twitter-fill text-light fs-3 px-2"></i></a>
                        <a href="" class="text-decoration-none text-light"><i class="ri-linkedin-box-fill text-light fs-3 px-2"></i></a>
                    </p>
                    <p>
                        <a href="" class="text-decoration-none text-light"><i class="ri-instagram-line text-light fs-3 px-2"></i></a>
                        <a href="" class="text-decoration-none text-light"><i class="ri-youtube-fill text-light fs-3 px-2"></i></a>
                    </p>
                </div>
                <div class="col-sm-3 mb-mt-0 mb-5">
                    <h4 class="text-purple mb-4">NewsLetter</h4>
                    <p class="text-light">Subscribe to our weekly Newsletter and recieve updates via email.</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control rounded-0" aria-label="Recipient's username"
                            aria-describedby="basic-addon2">
                        <span class="input-group-text text-light rounded-0" id="basic-addon2">
                            <i class="ri-send-plane-fill"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  @endsection