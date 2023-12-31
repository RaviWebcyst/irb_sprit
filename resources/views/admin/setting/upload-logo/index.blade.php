@extends('layouts.admin')
@section('content')
    <style>

    </style>
    <div class="container">
        <div class="row">
            <div class="card border-0   col-lg-7 mx-auto mt-4">
                <div class="card-header mt-3  text-center cstm_form_header">
                    <h5>Upload Logo</h5>

                </div>
                <div class=" p-2 p-lg-5 shadow  ">

                    <form action="{{ route('setting.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            {{-- <span>Current logo </span><img src="{{asset('users/img/logo.png')}}" width='150' alt=""> --}}
                            Current : <img src='{{ asset($logo->logo) }}' width='150'>

                        </div>

                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo</label>
                            <input type="file" name='logo' class="form-control" id="logo">
                        </div>

                        <div class="mb-3">
                            <label for="amount" class="form-label">Address</label>
                            <textarea class="form-control" id="address" name='address' placeholder="Address">{{ $logo->address }}</textarea>
                        </div>

                        <div class="footer">
                            <button type="submit" class="btn cstm_btn"> Upload</button>
                        </div>
                    </form>

                </div>
                <div class="">
                    <img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 100%;"
                        class='p-4'>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('logo').addEventListener('change', function(event) {
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
@endsection
