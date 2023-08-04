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
                            <input type="text" class="form-control" id="title" name="description"
                                placeholder="Enter Title">
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
                            <input type="file" class="form-control" id="image" name='main_image'>

                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Gallery Image 1</label>
                            <input type="file" class="form-control" id="image" name='gallery1'>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Gallery Image 2</label>
                            <input type="file" class="form-control" id="image" name='gallery2'>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Gallery Image 3</label>
                            <input type="file" class="form-control" id="image" name='gallery3'>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Product Image 4</label>
                            <input type="file" class="form-control" id="image" name='gallery4'>
                        </div>
                        <div class="footer">
                            <button type="submit" class="btn cstm_btn"> Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
