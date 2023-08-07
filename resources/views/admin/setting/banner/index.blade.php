@extends('layouts.admin')
@section('content')
    <div class="container mt-4 ">
        <div class=" d-flex">
            <h3>Home Page Slider </h3>
            <a href="{{ route('slider-images.create') }}" class=' btn btn-success ms-auto '> Add New Image</a>
        </div>

        <div class="table-responsive">
            <table class="table table-responsive  mt-5 table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Link</th>
                        <th>Image</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($images as $key => $data)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $data->link }}</td>
                            <td><img src="{{ asset($data->image) }}" height="50" width="100" alt="">
                            </td>
                            <td>
                                <form action="{{ route('slider-images.destroy', ['slider_image' => $data->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger mx-2"><i class="ri-delete-bin-line"></i>
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @endforeach



                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
@endsection
