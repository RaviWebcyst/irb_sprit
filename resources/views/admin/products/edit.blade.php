@extends('layouts.admin')
@section('content')
    {{-- {{ dd( $product->image1) }} --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <h3 class='py-3'>Update Product</h3>
                <div class="card p-2 p-lg-5 shadow border-0 mt-4">
                    <form action="{{ route('product.update', ['product' => $product->id]) }}" method="POST"
                        enctype='multipart/form-data'>
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" name="product_name" id="name"  value="{{ $product->product_name }}">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Product Id</label>
                            <input type="text" class="form-control" id="id" name='product_id'  value="{{ $product->product_id }}">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Description</label>
                            <textarea type="text" class="form-control" id="title" name="description">{{ $product->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Total Price</label>
                            <input type="number" class="form-control" id="title" name="price"   value="{{ $product->price }}">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Sale Price</label>
                            <input type="number" class="form-control" id="saleprice" name="sale_price"   value="{{ $product->sale_price }}">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Main Image</label>
                            <input type="file" class="form-control" id="image" name='main_image'>

                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Gallery Image 1</label>
                            <input type="file" class="form-control" id="image" name='image1'>

                        </div>


                        <div class="mb-3">
                            <label for="image" class="form-label">Gallery Image 2</label>
                            <input type="file" class="form-control" id="image" name='image2'>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Gallery Image 3</label>
                            <input type="file" class="form-control" id="image" name='image3'>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Gallery Image 4</label>
                            <input type="file" class="form-control" id="image" name='image4'>
                        </div>


                        {{-- <div class="owl-carousel owl-theme">
                            <div class="item"> <img src="{{ asset($product->image1) }}" height="50" width="100"
                                    alt="Product Image">
                            </div>
                            <div class="item"> <img src="{{ asset($product->image2) }}" height="50" width="100"
                                    alt="Product Image">
                            </div>
                            <div class="item"> <img src="{{ asset($product->image3) }}" height="50" width="100"
                                    alt="Product Image">
                            </div>
                            <div class="item"> <img src="{{ asset($product->image4) }}" height="50" width="100"
                                    alt="Product Image">
                            </div>


                        </div> --}}

                        <div class="footer mt-3">
                            <button type="submit" class="btn btn-success"> Add</button>
                        </div>
                    </form>
                </div>
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

        </scripr>


@endsection
