@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <h3 class='py-3'>Send Fund</h3>
            <div class="card p-2 p-lg-5 shadow border-0 mt-4">
                <form action="">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">User Id</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="User Id">
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="text" class="form-control" id="amount" placeholder="Enter Amount">
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
