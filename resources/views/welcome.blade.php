@extends('layouts.front_app')
  @section('content')

    <!-- header start -->
    <div class="container-fluid header_bg pb-5">
        <div class="pt-5 position-relative">
            {{-- <div>
                <img src="{{asset('assets/images/pngwing 3 (2).png')}}" alt=""
                    class="position-absolute header_img_overlay header_img1_animate start-0">
            </div>
            <div>
                <img src="{{asset('assets/images/pngwing 2.png')}}" alt=""
                    class="position-absolute header_img_overlay end-0 header_img2_animate">
            </div> --}}
            <div class="text-center header_content">
                <h2>
                    <span class="badge bg-purple fw-normal mt-lg-0 mt-3 rounded-0 px-5">100% Organic Fig Based
                        Products</span>
                </h2>
                <h1 class="display-3 mt-4 mb-4 fw-bold text-black">100% Organic Fig Based <br> Products</h1>
                <p class="fs-5 text-black fw-bold">
                    Premium quality fig based products. Company based in Rajasthan and <br> we are committed to provide
                    quality products to our customers.
                </p>
                <div class="d-flex justify-content-center mt-4">
                    @auth
                    <a href="{{route('home')}}" class="btn btn-success mx-2 px-4 text-black fw-bold">Home</a>
                    @else
                    <a href="{{route('login')}}" class="btn btn-success mx-2 px-4 text-black fw-bold">Login</a>
                    <a href="{{route('register')}}" class="btn btn-warning mx-2 px-4 text-black fw-bold">Signup</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
    <!-- header end -->

    <!-- about figmal start -->
    <div class="container-fluid mt-5">
        <div class="row align-items-center about_figmal_section">
            <div class="col-sm-7 mb-mt-0 mb-4">
                <div class="figmal_section">
                    <div class="ms-4">
                        <h1 class="mb-4">ABOUT ADESH BIOTECH</h1>
                        <p class="fs-5 mb-4">
                            Welcome to Adesh Biotech, where the magical world of figs converges with the power to create a unique and rewarding experience
                            for both customers and distributors. Adesh Biotech is not just an e-commerce platform; it is a
                            community-driven movement that aims to revolutionize the way we perceive wellness
                            and business.
                        </p>
                        <p class="fs-5 mb-4">
                            At Adesh Biotech, we envision a world where wellness is not just a goal but a way of life.
                            we believe that the natural goodness of figs holds the key to a healtheir and happier
                            existence. Through our premium fig-based products and a dynamic  platform, we strive to
                            empower individuals to take charge of their well-being while achieving financial
                            independence.
                        </p>
                        <p class="fs-5">
                            We are commited to offering the finest fig-infused items that delights the senses
                            and contribute to a healtheir lifestyle. Our dedicated items that delights team of experts
                            works
                            tirelessly to ensure that every prooduct is crafted with precision, using ethically
                            sourced fig extracts and premium ingredients.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 mb-mt-0 mb-4 text-center position-relative">
                <img src="{{asset('assets/images/Rectangle 15.png')}}" alt="" class="w-75 figmal_img_1">
            </div>
        </div>
    </div>
    <!-- about figmal end -->

    <!-- image section start -->
    <div class="container-fluid mt-5 px-3">
        <div class="row align-items-center">
            <div class="col-sm-4 mb-lg-0 mb-4">
                <img src="{{asset('assets/images/g_f4.jpg')}}" alt="" class="w-100 rounded-4">
            </div>
            <div class="col-sm-4 mb-lg-0 mb-4">
                <img src="{{asset('assets/images/g_f2.jpg')}}" alt="" class="w-100 rounded-4">
            </div>
            <div class="col-sm-4 mb-lg-0 mb-4">
                <img src="{{asset('assets/images/g_f3.jpg')}}" alt="" class="w-100 rounded-4">
            </div>
        </div>
    </div>
    <!-- image section end -->

    <div class="container-fluid head_nav mt-5">
        <h1 class="text-center text-black"><span class="border-bottom border-2 border-success">Different types of
                Products</span></h1>
        <div class="row mt-5">
            <div class="col-sm-3 mb-lg-0 mb-4">
                <div class="card cart_card" data-aos="fade-up">
                    <img src="assets/images/p1.png" alt="" class="w-100">
                    <div class="card-body">
                        <h4 class="card-title ">Fig Chutney</h4>
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="card-text">₹380</p>
                            </div>
                            <div>
                                <i class="ri-star-fill text-warning"></i>
                                <i class="ri-star-fill text-warning"></i>
                                <i class="ri-star-fill text-warning"></i>
                                <i class="ri-star-fill text-warning"></i>
                            </div>
                        </div>
                        <a href="" class="btn btn-outline-purple mt-2 w-100">
                            <i class="ri-shopping-cart-fill"></i>
                            Add
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mb-lg-0 mb-4">
                <div class="card cart_card" data-aos="fade-up">
                    <img src="assets/images/product_3.png" alt="" class="w-100">
                    <div class="card-body">
                        <h4 class="card-title ">Fig Pickle</h4>
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="card-text">₹390</p>
                            </div>
                            <div>
                                <i class="ri-star-fill text-warning"></i>
                                <i class="ri-star-fill text-warning"></i>
                                <i class="ri-star-fill text-warning"></i>
                                <i class="ri-star-fill text-warning"></i>
                            </div>
                        </div>
                        <a href="" class="btn btn-outline-purple mt-2 w-100"><i class="ri-shopping-cart-fill"></i>
                            Add</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mb-lg-0 mb-4">
                <div class="card cart_card" data-aos="fade-down">
                    <img src="assets/images/product_1.png" alt="" class="w-100">
                    <div class="card-body">
                        <h4 class="card-title">Fig Jam</h4>
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="card-text">₹450</p>
                            </div>
                            <div>
                                <i class="ri-star-fill text-warning"></i>
                                <i class="ri-star-fill text-warning"></i>
                                <i class="ri-star-fill text-warning"></i>
                                <i class="ri-star-fill text-warning"></i>
                            </div>
                        </div>
                        <a href="" class="btn btn-outline-purple mt-2 w-100"><i class="ri-shopping-cart-fill"></i>
                            Add</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mb-lg-0 mb-4">
                <div class="card cart_card" data-aos="fade-down">
                    <img src="assets/images/product_2.png" alt="" class="w-100">
                    <div class="card-body">
                        <h4 class="card-title">Rog Mukti Amrit</h4>
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="card-text">₹330</p>
                            </div>
                            <div>
                                <i class="ri-star-fill text-warning"></i>
                                <i class="ri-star-fill text-warning"></i>
                                <i class="ri-star-fill text-warning"></i>
                                <i class="ri-star-fill text-warning"></i>
                            </div>
                        </div>
                        <a href="" class="btn btn-outline-purple mt-2 w-100"><i class="ri-shopping-cart-fill"></i>
                            Add</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- our products start -->
    <div class="container mt-5">
        <h1 class="text-center text-black"><span class="border-bottom border-2 border-success">Our Products</span></h1>
        <div class="row mt-5">
            <div class="col-sm-4 mb-lg-0 mb-4">
                <img src="{{asset('assets/images/p1.png')}}" alt="" class="w-100">
            </div>
            <div class="col-sm-4 mb-lg-0 mb-4">
                <img src="{{asset('assets/images/p2.png')}}" alt="" class="w-100">
            </div>
            <div class="col-sm-4 mb-lg-0 mb-4">
                <img src="{{asset('assets/images/product_1.png')}}" alt="" class="w-100">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-4 mb-lg-0 mb-4">
                <img src="{{asset('assets/images/product_2.png')}}" alt="" class="w-100">
            </div>
            <div class="col-sm-4 mb-lg-0 mb-4">
                <img src="{{asset('assets/images/product_3.png')}}" alt="" class="w-100">
            </div>
            <div class="col-sm-4 mb-lg-0 mb-4">
                <img src="{{asset('assets/images/product_4.png')}}" alt="" class="w-100">
            </div>
        </div>
    </div>
    <!-- our products end -->

    <!-- benefits section start -->
    <div class="container-fluid mt-5 p-5 benefits_bg">
        <div class="row mt-5">
            <div class="col-sm-4">
                <div class="row mb-4">
                    <div class="col-9 text-end text-black">
                        <h4 class="fw-bold">Helps Relieve Constipation</h4>
                        <p class="fw-bold benefits_content">Figs are well-thought-out to be an age-old remedy to cure
                            constipation and
                            thus help nourish the intestines. Figs act as a natural laxative due to their high soluble
                            fibre content.</p>
                    </div>
                    <div class="col-3">
                        <img src="{{asset('assets/images/fig 1.png')}}" alt="" class="w-100 bg-white benefits_icons rounded-circle">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-9 text-end text-black">
                        <h4 class="fw-bold">May Aid Weight Loss</h4>
                        <p class="fw-bold benefits_content">Fibre-rich anjeer can be a perfacts snack or mid-morning
                            munchies,
                            especially for weight watchers. Dried Anjeer makes great nutritious snack.</p>
                    </div>
                    <div class="col-3">
                        <img src="{{asset('assets/images/fig 1.png')}}" alt="" class="w-100 bg-white benefits_icons rounded-circle">
                    </div>
                </div>
                <div class="row">
                    <div class="col-9 text-end text-black">
                        <h4 class="fw-bold">Might Control Blood Pressure</h4>
                        <p class="fw-bold benefits_content">
                            Fast-food consumption has been increasing day by day this can lead to high <span class="border-bottom border-dark">
                                blood pressure problems.</span> High blood pressure offten leads to an imbalance of
                            potassium levels in your body.
                        </p>
                    </div>
                    <div class="col-3">
                        <img src="{{asset('assets/images/fig 1.png')}}" alt="" class="w-100 bg-white benefits_icons rounded-circle">
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-mt-0 mb-4 text-center">
                <p class="text-success fw-bold">FRESH FROM OUR FARM</p>
                <h1 class="text-black border-2 border-bottom border-success">Benefits of Fig Products</h1>
                <div class="mt-4">
                    <img src="{{asset('assets/images/food.png')}}" alt="" class="w-75">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row mb-4">
                    <div class="col-3">
                        <img src="{{asset('assets/images/fig 1.png')}}" alt="" class="w-100 bg-white benefits_icons rounded-circle">
                    </div>
                    <div class="col-9 text-start text-black">
                        <h4 class="fw-bold">Can Improve Digestive Wellness</h4>
                        <p class="fw-bold benefits_content">Figs are a great source of prebiotics. Prebiotics can
                            support the function of probiotics can
                            help improve the digestion process and overall gut health. being fibre-rich, also addds.</p>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-3">
                        <img src="{{asset('assets/images/fig 1.png')}}" alt="" class="w-100 bg-white benefits_icons rounded-circle">
                    </div>
                    <div class="col-9 text-start text-black">
                        <h4 class="fw-bold">Figs for Fertility</h4>
                        <p class="fw-bold benefits_content">
                            Figs were reflected as love fruits since ancient Greek times, where figs were considered a
                            symbol of fertility.This was later researched and was termed true based on its high iron
                            content.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <img src="{{asset('assets/images/fig 1.png')}}" alt="" class="w-100 bg-white benefits_icons rounded-circle">
                    </div>
                    <div class="col-9 text-start text-black">
                        <h5 class="fw-bold">Could <span>Improve Heart Health</span></h5>
                        <p class="fw-bold benefits_content">
                            Being high in fibre and potassium helps remove the excess fat from the body and pressure
                            from the heart. This can drastically help improve the health of your heart.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- benefits section end -->

    <!-- video gallery start -->
    <div class="container mt-5">
        <h1 class="text-center text-black">
            <span class="border-2 border-bottom border-success">Video Gallery</span>
        </h1>
        <div class="row mt-5 mx-auto">
            <div class="col-sm-4 mb-lg-0 mb-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item w-100" height="250"
                        src="https://www.youtube.com/embed/rDWPIKVUhm8" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-sm-4 mb-lg-0 mb-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item w-100" height="250"
                        src="https://www.youtube.com/embed/i6XOn2a8SV0" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-sm-4 mb-lg-0 mb-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item w-100" height="250"
                        src="https://www.youtube.com/embed/aD7mQRF2Ik0" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- video gallery end -->

    <!-- video section start -->
    <div class="container-fluid mt-5 p-0">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item w-100" height="600" src="https://www.youtube.com/embed/0eTAD6KDDBM"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
    </div>
    <!-- video section end -->

    <!-- carousel section start -->
    <div class="container-fluid mt-5 carousel_section_bg p-5">
        <h1 class="text-center text-black">Customer's Feedback</h1>
        <div id="carouselExampleDark" class="carousel carousel-dark slide mt-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <div class="text-center">
                        <img src="{{asset('assets/images/Rectangle 21.png')}}" width="100" height="100" alt="...">
                    </div>
                    <div class="container w-75 text-center mt-5">
                        <h3 class="fw-bold text-black">Albert Yusuf</h3>
                        <p class="mx-auto">
                            "Absolutely love my Fig-based products! The quality is top-notch, and the design is simply
                            beautiful. The Fig scent is divine, and it's clear that a lot of care and thought went into
                            creating these products. The customer service was also excellent, and I appreciate the
                            sustainable packaging. 5 stars all the way!"
                        </p>
                        <p>
                            <i class="ri-star-fill text-warning"></i>
                            <i class="ri-star-fill text-warning"></i>
                            <i class="ri-star-fill text-warning"></i>
                            <i class="ri-star-fill text-warning"></i>
                            <i class="ri-star-fill text-warning"></i>
                        </p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <div class="text-center">
                        <img src="{{asset('assets/images/men_2.jpg')}}" width="100" height="100" class="rounded-4" alt="...">
                    </div>
                    <div class="container w-75 text-center mt-5">
                        <h3 class="fw-bold text-black">Michael</h3>
                        <p class="mx-auto">
                            "I've been using Fig-based products for the past few weeks, and I'm impressed with the
                            results. My skin feels hydrated and refreshed, and the fragrance is delightful without
                            being overwhelming. The online shopping experience was smooth, and my order arrived
                            promptly. I'll definitely be coming back for more!"
                        </p>
                        <p class="carousel-content-paragraph">
                            <i class="ri-star-fill text-warning"></i>
                            <i class="ri-star-fill text-warning"></i>
                            <i class="ri-star-fill text-warning"></i>
                            <i class="ri-star-fill text-warning"></i>
                            <i class="ri-star-fill text-warning"></i>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="text-center">
                        <img src="{{asset('assets/images/1.jpg')}}" class="rounded-4" width="100" height="100" alt="...">
                    </div>
                    <div class="container w-75 text-center mt-5">
                        <h3 class="fw-bold text-black">Jennifer</h3>
                        <p class="mx-auto">
                            "I've tried many skincare brands before, but Fig-based products stand out for their
                            effectiveness. The Fig extract seems to work wonders on my sensitive skin, leaving it
                            soft and supple. I also love the minimalist packaging and the eco-friendly approach.
                            Can't recommend these products enough!"
                        </p>
                        <p class="carousel-content-paragraph_2">
                            <i class="ri-star-fill text-warning"></i>
                            <i class="ri-star-fill text-warning"></i>
                            <i class="ri-star-fill text-warning"></i>
                            <i class="ri-star-fill text-warning"></i>
                            <i class="ri-star-fill text-warning"></i>
                        </p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- carousel section end -->

    <!-- footer start -->
    <div class="container-fluid p-4 bg-black">
        <div class="container">
            <div class="row pt-5">
                <div class="col-sm-3 mb-mt-0 mb-5">
                    <div><img src="{{asset('assets/images/footer-logo.png')}}" alt="" class="w-75"></div>
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
                        <i class="ri-facebook-circle-fill text-light fs-3 px-2"></i>
                        <i class="ri-twitter-fill text-light fs-3 px-2"></i>
                        <i class="ri-linkedin-box-fill text-light fs-3 px-2"></i>
                    </p>
                    <p>
                        <i class="ri-instagram-line text-light fs-3 px-2"></i>
                        <i class="ri-youtube-fill text-light fs-3 px-2"></i>
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
