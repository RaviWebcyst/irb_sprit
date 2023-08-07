@extends('layouts.admin')

@section('content')
    <div class="container mt-4 ">
        <div class=" d-flex">
            <h3>All Target</h3>
            <a href="{{ route('level-chart.create') }}" class=' btn btn-success ms-auto'><i class="ri-file-list-3-line"></i>
                Add
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-responsive  mt-5 table-bordered">
                <thead>
                    <tr>
                        <td>#</td>
                        <th>Rank</th>
                        <th>Target Amount</th>
                        <th>Incentive Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($chart as $key => $data)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $data->rank }}</td>
                            <td>{{ $data->target_amount }}</td>
                            <td>{{ $data->incentive_level }}</td>
                            <td>
                                <div class='d-flex'>
                                    <form action="{{ route('level-chart.destroy', ['level_chart' => $data->id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger mx-2"><i
                                                class="ri-delete-bin-line"></i>
                                        </button>
                                    </form>
                                    <a href="{{ route('level-chart.edit', ['level_chart' => $data->id]) }}"
                                        class="btn btn-success"><i class="ri-pencil-line"></i></a>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="pagination">
                {{ $chart->links() }}
            </div>
        </div>
    </div>
@endsection
