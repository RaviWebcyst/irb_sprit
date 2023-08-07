@extends('layouts.admin')

@section('content')
<div class="container mt-4 ">
    <h3>Users</h3>
    <div class="  ">
        <div class="card border-0 shadow">
            <div class="card-body">
                <form action="" method="" class="form">
                    <div class="row align-items-end">

                        <div class="col-md-2 mt-3 d-grid"><button type="button" name="add_reward"
                                class="btn btn-primary"><i class="ri-filter-fill"></i>Filter</button></div>
                        <div class="col">
                            <label class="form-label">To</label>
                            <select class="custom-select  form-control" name="select_type" id="select_search">
                                <option value="user_id">User Id</option>
                                <option value="name">Name</option>
                                <option value="sponser">Sponsor</option>
                                <option value="sponser_by">Direct</option>
                                <option value="phone">Phone</option>
                                <option value="packageAmount">Package</option>
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label">From</label>
                            <input type="text" class="form-control" placeholder="Enter Your keyword">
                        </div>
                        <div class="col-md-2 mt-3 d-grid"><button type="button" name="add_reward"
                                class="btn btn-success">Submit</button></div>
                        <div class="col-md-2 mt-3 d-grid"><button type="reset" class="btn btn-danger"><i
                                    class="ri-refresh-line"></i> Reset</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-responsive  mt-5">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>User Id</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Password</th>
                    <th>Direct</th>
                    <th>Package Investment</th>
                    <th>Sponser</th>
                    <th>Wallet </th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            @if(!empty($users))
            <tbody>
                @foreach ($users as $key=>$user)
                <tr>
                    <td>{{$users->firstItem()+$key}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->uid}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->showPass}}</td>
                    <td></td>
                    <td></td>
                    <td>{{$user->spid}}</td>
                    <td></td>
                    <td>{{$user->created_at}}</td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
           @endif
        </table>
        {{$users->links()}}
    </div>
</div>
@endsection
