@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <h3 class="py-3">Change Password</h3>
            <div class="card p-2 p-lg-5 shadow border-0 mt-4">
                <form action="">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Enter Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Old Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter Old password">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter New password">
                    </div>
                    <div class="footer">
                        <button type="button" class="btn btn-success"> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
