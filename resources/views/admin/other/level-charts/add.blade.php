@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto card border-0 mt-4">
                <div class="card-header mt-3  text-center cstm_form_header">
                    <h5>Add New Target</h5>

                </div>
                <div class="  p-2 p-lg-5 shadow  ">
                    <form action="{{ route('level-chart.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Rank</label>
                            <input type="text" class="form-control" name="rank" id="rank" placeholder="Enter Rank">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Target Amount</label>
                            <input type="text" class="form-control" id="target_amount" name='target_amount' placeholder="Enter Target Amount">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Incentive Level</label>
                            <input type="text" class="form-control" id="incentive_level" name='incentive_level' placeholder=" Enter Incentive Level">
                        </div>
                        <div class="footer">
                            <button type="submit" class="btn cstm_btn"> Add</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
