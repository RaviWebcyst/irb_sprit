@extends('layouts.front_app')
  @section('content') 
   <!-- our products start -->
   <div class="container mt-5">
    <section id="introduction">
        <div class="row align-items-center">
            <div class="col-sm-8 mb-mt-0 mb-4" data-aos="fade-right">
                <h2>Introduction</h2>
                <p class="mt-4 fs-5">Welcome to our Organic Fig Based Products branch! At this location, we are
                    thrilled to bring you
                    a wide variety
                    of organic fig-based products that are not only delicious but also packed with the goodness of
                    nature.
                    Our commitment to using the finest organic ingredients ensures that you experience the true
                    essence of
                    figs in every bite.</p>
            </div>
            <div class="col-sm-4 mb-mt-0 mb-4" data-aos="fade-left">
                <img src="assets/images/product_1.png" alt="" class="w-100 rounded">
            </div>
        </div>
    </section>
    <section id="products">
        <div class="row align-items-center">
            <div class="col-sm-4 mb-mt-0 mb-4 braches_section_1" data-aos="fade-right">
                <img src="assets/images/product_3.png" alt="Organic Fig Products" class="w-100 rounded">
            </div>
            <div class="col-sm-8 mb-mt-0 mb-4 braches_section_2" data-aos="fade-left">
                <h2>Our Product Selection</h2>
                <p class="mt-4 fs-5">Discover a diverse range of fig-based products carefully curated to cater to
                    your taste buds and
                    nutritional preferences. From gourmet fig jams to delectable fig-infused spreads, we have
                    something
                    for
                    every fig enthusiast. Our products are created with love and dedication to offer you a genuine
                    farm-to-table experience.</p>
            </div>
        </div>
    </section>
    <section id="cards" class="mt-4">
        <h2 class="text-center">Discover Our Products</h2>
        <div class="row mt-4">
            <div class="col-sm-4 mb-mt-0 mb-4" data-aos="fade-right">
                <div class="card branches_card mh-cstm">
                    <img src="assets/images/g_f3.jpg" alt="Product 1" class="w-100">
                    <div class="card-body">
                        <h4>Fig Jam Delight</h4>
                        <p>Indulge in the rich flavor of our signature fig jam, made from organic figs handpicked at
                            their peak
                            ripeness. Perfect for spreading on toast or adding a sweet twist to your favorite
                            recipes.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-mt-0 mb-4" data-aos="zoom-in">
                <div class="card branches_card mh-cstm">
                    <img src="assets/images/g_f4.jpg" alt="Product 2" class="w-100">
                    <div class="card-body">
                        <h4>Fig-Infused Granola</h4>
                        <p>Start your day with a burst of energy and flavor with our fig-infused granola. Packed
                            with whole
                            grains, dried fruits, and the natural sweetness of figs.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-mt-0 mb-4" data-aos="fade-left">
                <div class="card branches_card mh-cstm">
                    <img src="assets/images/g_f2.jpg" alt="Product 2" class="w-100">
                    <div class="card-body">
                        <h4>Fig Bliss Bites</h4>
                        <p>Experience the delightful combination of figs, nuts, and seeds in our Bliss Bites. These
                            energy-packed treats are perfect for satisfying your cravings on the go.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- our products end -->

  @endsection