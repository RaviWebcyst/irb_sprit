@extends('layouts.admin')
@section('content')
<<<<<<< HEAD
    <div class="container">
        <div class="row">
            <div class="card border-0   col-lg-7 mx-auto mt-4">
                <div class="card-header mt-3  text-center cstm_form_header">
                    <h5 >Send Fund</h5>

                </div>
                <div class=" p-2 p-lg-5 shadow  ">

                    <form action="#" method="" >
                        <div class="mb-3">
                            <label for="email" class="form-label">User Id</label>
                            <input type="email" class="form-control" name='uid' id="uid" placeholder="User Id">
                        </div>
                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount</label>
                            <input type="text" class="form-control" name='amount' id="amount" placeholder="Enter Amount">
                        </div>
                        <div class="footer">
                            <button type="button" class="btn cstm_btn"> Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
=======

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
>>>>>>> 2176a109c70b61d8e7618e17d75440b582ce73ee
@endsection
