@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="">
        <br>
        <h2>Search From Date</h2>
        <div class="card border-0 shadow">
            <div class="card-body">
                <form action="" method="" class="form">
                    <div class="row align-items-end">
                        <div class="col">
                            <label class="form-label">To</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col">
                            <label class="form-label">From</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-2 mt-3 d-grid"><button type="button" name="add_reward" class="btn btn-success">Submit</button></div>
                        <div class="col-md-2 mt-3 d-grid"><button type="reset" class="btn btn-danger"><i class="ri-refresh-line"></i> Reset</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div>
        <div class="container-fluid px-4">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3 mt-5">
                <div class="col">
                    <div class="card card_height_cstm fw-bold text-center">
                        <div class="card-body box2">
                            <div class="fs-2">{{$total_users}}</div>
                        </div>
                        <div class="card-footer fs-5 box2 text-white">
                            Total User
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card_height_cstm fw-bold text-center">
                        <div class="card-body box2">
                            <div class="fs-2">{{$active_users}}</div>
                        </div>
                        <div class="card-footer fs-5 box2 text-white">
                            Active Users
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card_height_cstm fw-bold text-center">
                        <div class="card-body box2">
                            <div class="fs-2">0</div>
                        </div>
                        <div class="card-footer fs-5 box2 text-white">
                            Total Deposit
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card_height_cstm fw-bold text-center">
                        <div class="card-body box2">
                            <div class="fs-2">10,323</div>
                        </div>
                        <div class="card-footer fs-5 box2 text-white">
                            Total withdraw
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card_height_cstm fw-bold text-center">
                        <div class="card-body box2">
                            <div class="fs-2">8</div>
                        </div>
                        <div class="card-footer fs-5 box2 text-white">
                            Pending withdraw
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
