@extends('layouts.admin')

@section('content')
    <div class="container mt-4 ">
        <div class=" d-flex">
            <h3>All News</h3>
            <a href="{{ route('news.create') }}" class=' btn btn-success ms-auto'><i class="ri-file-list-3-line"></i> Add
                News</a>
        </div>

        <div class=" ">
            <table class="table table-responsive  mt-5 table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $key=>$product)
                        <tr>
                            <td>{{ $key + 1}}</td>
                            <td>
                                <img src="{{ asset($product->image) }}" class=' w-50' alt="Product Image">
                            </td>
                            <td class="title_width">{{ $product->title }}</td>
                            <td>
                                <div class='d-flex'>
                                    <form action="{{ route('news.destroy', ['news' => $product->id]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger mx-2"><i
                                                class="ri-delete-bin-line"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="pagination">
                {{ $news->links() }}

            </div>
        </div>
    </div>

    <style>
        .title_width {
            white-space: break-spaces !important;
            width: 100vh;

        }
    </style>
@endsection
