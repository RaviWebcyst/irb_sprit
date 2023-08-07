@extends('layouts.admin')
@section('content')
     <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <h3 class='py-3'>Update Level Chart</h3>
                <div class="card p-2 p-lg-5 shadow border-0 mt-4">
                    <form action="{{ route('level-chart.update', ['level_chart' => $levelChart->id]) }}" method="POST"
                        enctype='multipart/form-data'>
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="name" class="form-label">Rank</label>
                            <input type="text" class="form-control" name="rank" id="rank"
                                value="{{ $levelChart->rank }}">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Target Amount</label>
                            <input type="text" class="form-control" id="target_amount" name='target_amount'
                                value="{{ $levelChart->target_amount }}">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Incentive Level</label>
                            <input type="text" class="form-control" id="incentive_level" name='incentive_level'
                                value="{{ $levelChart->incentive_level }}">
                        </div>




                        <div class="footer mt-3">
                            <button type="submit" class="btn btn-success"> Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
