@extends('layouts.admin')
@section('content')
<style>
    .form-control:focus {
        box-shadow: 0 0 0 0 black !important;
    }
</style>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto card border-0 mt-4">
                <div class="card-header mt-3  text-center cstm_form_header">
                    <h5>Add News</h5>

                </div>
                <div class="  p-2 p-lg-5 shadow  ">
                    <form action="{{ route('news.store') }}" method="POST" enctype='multipart/form-data'>
                        @csrf

                        <div class=" mb-3">
                            <label for="image" class="form-label">Image</label>

                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror"
                                name="image" required autocomplete="image">

                        </div>
                        <div class=" mb-3">
                            <label for="image" class="form-label">Title </label>

                                <textarea name="title" id="title" class='form-control'></textarea>

                        </div>
                        <div class="footer">
                            <button type="submit" class="btn cstm_btn"> Add</button>
                        </div>
                    </form>
                </div>
                <div>
                    <img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 100%;">
                </div>


            </div>
        </div>
    </div>
    {{-- <img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 100%;"> --}}

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
@endsection
