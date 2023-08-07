@extends('layouts.front_app')
  @section('content') 

    <!-- our products start -->
    <div class="container mt-5">
        <h1 class="text-center text-black"><span class="border-bottom border-2 border-success">All Products</span></h1>
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

  @endsection