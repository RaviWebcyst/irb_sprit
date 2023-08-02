@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <h3 class='py-3'>Add New Product</h3>
                <div class="card p-2 p-lg-5 shadow border-0 mt-4">
                    <form action="{{route('product.store')}}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" name="product_name" id="name" placeholder="Enter product Name">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Product Id</label>
                            <input type="text" class="form-control" id="id" name='product_id' placeholder="Product Id">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Description</label>
                            <input type="text" class="form-control" id="title" name="description" placeholder="Enter Title">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Total Price</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Sale Price</label>
                            <input type="number" class="form-control" id="saleprice" name="sale_price" placeholder="Enter Sale Price">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Product Image</label>
                            <input type="file" class="form-control" id="image" name='main_image'>

                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Product Image 1</label>
                            <input type="file" class="form-control" id="image" name='image1'>

                        </div>


                        <div class="mb-3">
                            <label for="image" class="form-label">Product Image 2</label>
                            <input type="file" class="form-control" id="image" name='image2'>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Product Image 3</label>
                            <input type="file" class="form-control" id="image" name='image3'>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Product Image 4</label>
                            <input type="file" class="form-control" id="image" name='image4'>
                        </div>
                        <div class="footer">
                            <button type="submit" class="btn btn-success"> Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
