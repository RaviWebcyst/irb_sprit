@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto card border-0 mt-4">
                <div class="card-header mt-3  text-center cstm_form_header">
                    <h5>Add New Product</h5>

                </div>
                <div class="  p-2 p-lg-5 shadow  ">
                    <form action="{{ route('product.store') }}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" name="product_name" id="name"
                                placeholder="Enter product Name">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Product Id</label>
                            <input type="text" class="form-control" id="id" name='product_id'
                                placeholder="Product Id">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Description</label>
                            <textarea name="description" class='form-control' id='description'></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Total Price</label>
                            <input type="number" class="form-control" id="price" name="price"
                                placeholder="Enter Price">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Sale Price</label>
                            <input type="number" class="form-control" id="saleprice" name="sale_price"
                                placeholder="Enter Sale Price">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Main Image</label>
                            <input type="file" class="form-control main_image" id="main_image" name='main_image[]' multiple >

                        </div>
                        {{-- <div class="mb-3">
                            <label for="image" class="form-label">Gallery Image 1</label>
                            <input type="file" class="form-control main_image" id="gallery1" name='gallery1'>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Gallery Image 2</label>
                            <input type="file" class="form-control main_image" id="gallery2" name='gallery2'>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Gallery Image 3</label>
                            <input type="file" class="form-control main_image" id="gallery3" name='gallery3'>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Product Image 4</label>
                            <input type="file" class="form-control main_image" id="gallery4" name='gallery4'>
                        </div> --}}
                        <div class="footer">
                            <button type="submit" class="btn cstm_btn"> Add</button>
                        </div>
                    </form>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div id="imagePreviews"></div>
                    </div>

                </div>
                <img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 100%;">
            </div>

        </div>
    </div>

    <script>
        $('.owl-carousel').owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        });

        const imageInputs = document.querySelectorAll('.main_image');
        const imagePreviewsContainer = document.getElementById('imagePreviews');

        imageInputs.forEach(function(input) {
            input.addEventListener('change', function(event) {
                const image = event.target.files[0];

                if (image) {
                    const imagePreview = document.createElement('img');
                    imagePreview.style.maxWidth = '100%';
                    imagePreviewsContainer.appendChild(imagePreview);

                    const reader = new FileReader();
                    reader.onload = function(e) {
                        imagePreview.src = e.target.result;
                    }

                    reader.readAsDataURL(image);
                }
            });
        });
    </script>

@endsection
