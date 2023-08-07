@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto card border-0 mt-4">
                <div class="card-header mt-3  text-center cstm_form_header">
                    <h5>Add Slider Image</h5>

                </div>
                <div class="  p-2 p-lg-5 shadow  ">
                    <form action="{{ route('slider-images.store') }}" method="POST" enctype='multipart/form-data'>
                        @csrf

                        <div class=" mb-3">
                            <label for="image" class="form-label">Image</label>

                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror"
                                name="image" required autocomplete="image">

                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class=" mb-3">
                            <label for="image" class="form-label">Link </label>
                            <input id="link" type="url" class="form-control @error('link') is-invalid @enderror"
                                name="link" value="{{ old('link') }}" required autocomplete="link"
                                placeholder='Enter Link'>

                            @error('link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="footer">
                            <button type="submit" class="btn cstm_btn"> Add</button>
                        </div>
                    </form>
                </div>
                {{-- <h4>All Slider</h4> --}}
                {{-- <div class="row mt-4">
                    <h3>Slider Image</h3>
                    <div class="owl-carousel owl-theme">
                        @foreach ($image as $data)
                            <div class="item position-relative">
                                <img src="{{ asset($data->image) }}" height="150" width="80" alt=""
                                    class='' alt='Home Slider Image'>
                                <form action="{{ route('slider-images.destroy', ['slider_image' => $data->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-close text-danger" title="Delete Image"></button>
                                    </button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                </div> --}}
                <div>
                <img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 100%;">
            </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('image').addEventListener('change', function(event) {
            const image = event.target.files[0];
            const imagePreview = document.getElementById('imagePreview');

            if (image) {
                imagePreview.style.display = 'block';
                const reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                }

                reader.readAsDataURL(image);
            } else {
                imagePreview.style.display = 'none';
                imagePreview.src = '#';
            }
        });
    </script>
    <style>
        .item {
            position: relative;
        }

        .btn-close {
            position: absolute;
            top: 3px;
            right: 3px;
            padding: 10px;
            border: none;
            height: 10px;
            width: 10px;
            border-radius: 50%;
            background-color: white !important;
            color: white;
        }

        /* .owl-dots{
                    display:none;
                } */
        .owl-nav {
            display: none;
        }
    </style>
    {{-- <script>
        $('.owl-carousel').owlCarousel({
            loop: false,
            margin: 10,
            stagePadding: 10,
            nav: false,

            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    </script> --}}
@endsection
