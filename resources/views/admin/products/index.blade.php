@extends('layouts.admin')

@section('content')
    <div class="container mt-4 ">
        <div class=" d-flex">
        <h3>All Products</h3>
        <a href="{{route('product.create')}}" class=' btn btn-success ms-auto'><i class="ri-add-circle-line"></i> Add New Product</a>
    </div>
        {{-- <div class="  ">
        <div class="card border-0 shadow">
            <div class="card-body">
                <form action="" method="" class="form">
                    <div class="row align-items-end">

                        <div class="col-md-2 mt-3 d-grid"><button type="button" name="add_reward"
                                class="btn btn-primary"><i class="ri-filter-fill"></i>Filter</button></div>
                        <div class="col">
                            <label class="form-label">To</label>
                            <select class="custom-select  form-control" name="select_type" id="select_search">
                                <option value="user_id">User Id</option>
                                <option value="name">Name</option>
                                <option value="sponser">Sponsor</option>
                                <option value="sponser_by">Direct</option>
                                <option value="phone">Phone</option>
                                <option value="packageAmount">Package</option>
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label">From</label>
                            <input type="text" class="form-control" placeholder="Enter Your keyword">
                        </div>
                        <div class="col-md-2 mt-3 d-grid"><button type="button" name="add_reward"
                                class="btn btn-success">Submit</button></div>
                        <div class="col-md-2 mt-3 d-grid"><button type="reset" class="btn btn-danger"><i
                                    class="ri-refresh-line"></i> Reset</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
        <div class="table-responsive">
<<<<<<< HEAD
            <table class="table table-responsive  mt-5 table-bordered">
=======
            <table class="table table-responsive  mt-5">
>>>>>>> 2176a109c70b61d8e7618e17d75440b582ce73ee
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Product Id</th>
                        <th>Price</th>
                        <th>Sale Price</th>
                        <th>Image</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->product_id }}</td>
                            <td><del>{{ $product->price }}</del></td>
                             <td>{{ $product->sale_price }}</td>
                            <td>
                                <img src="{{ asset($product->main_image) }}" height="50" width="100" alt="Product Image">
                            </td>

                            <td>
                                <div class='d-flex'>
                                <form action="{{ route('product.destroy', ['product' => $product->id]) }}" method="POST">
                                    @csrf
                                    @method('delete')
<<<<<<< HEAD
                                    <button type="submit" class="btn btn-danger mx-2"><i class="ri-delete-bin-line"></i>
=======
                                    <button type="submit" class="btn btn-danger mx-2"><i class="ri-close-circle-line"></i>
>>>>>>> 2176a109c70b61d8e7618e17d75440b582ce73ee
                                    </button>
                                </form>
                                <a href="{{ route('product.edit', ['product' => $product->id]) }}"
                                    class="btn btn-success"><i class="ri-pencil-line"></i></a>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
