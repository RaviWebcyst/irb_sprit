@extends('layouts.admin')

@section('content')

<div class="container mt-4">
    <h3>Users</h3>
    <div class="">
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

    <div class="table table-responsive mt-5">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>#</th>
                    <th>User Id</th>
                    <th>Topic</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>JX483803</td>
                    <td>General</td>
                    <td>user@gmail.com</td>
                    <td class="td-width">373$ withdrawal on 21-12-2021 but not received jupiterx coin </td>
                    <td>pending</td>

                    <td>2023-07-31 10:20:30</td>
                    <td>
                        <button type="button" class=" btn btn-success mt-1"><i class="ri-check-line"></i>
                            Done</button>
                        <button type="button" class=" btn btn-primary mt-1"><i class="ri-chat-1-line"></i>
                            Chat</button>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>JX483803</td>
                    <td>General</td>
                    <td>user@gmail.com</td>
                    <td class="td-width">373$ withdrawal on 21-12-2021 but not received jupiterx coin </td>
                    <td>pending</td>

                    <td>2023-07-31 10:20:30</td>
                    <td>
                        <button type="button" class=" btn btn-success mt-1"><i class="ri-check-line"></i>
                            Done</button>
                        <button type="button" class=" btn btn-primary mt-1"><i class="ri-chat-1-line"></i>
                            Chat</button>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>JX483803</td>
                    <td>General</td>
                    <td>user@gmail.com</td>
                    <td class="td-width">373$ withdrawal on 21-12-2021 but not received jupiterx coin </td>
                    <td>pending</td>

                    <td>2023-07-31 10:20:30</td>
                    <td>
                        <button type="button" class=" btn btn-success mt-1"><i class="ri-check-line"></i>
                            Done</button>
                        <button type="button" class=" btn btn-primary mt-1"><i class="ri-chat-1-line"></i>
                            Chat</button>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>JX483803</td>
                    <td>General</td>
                    <td>user@gmail.com</td>
                    <td class="td-width">373$ withdrawal on 21-12-2021 but not received jupiterx coin </td>
                    <td>pending</td>

                    <td>2023-07-31 10:20:30</td>
                    <td>
                        <button type="button" class=" btn btn-success mt-1"><i class="ri-check-line"></i>
                            Done</button>
                        <button type="button" class=" btn btn-primary mt-1"><i class="ri-chat-1-line"></i>
                            Chat</button>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>JX483803</td>
                    <td>General</td>
                    <td>user@gmail.com</td>
                    <td class="td-width">373$ withdrawal on 21-12-2021 but not received jupiterx coin </td>
                    <td>pending</td>

                    <td>2023-07-31 10:20:30</td>
                    <td>
                        <button type="button" class=" btn btn-success mt-1"><i class="ri-check-line"></i>
                            Done</button>
                        <button type="button" class=" btn btn-primary mt-1"><i class="ri-chat-1-line"></i>
                            Chat</button>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>JX483803</td>
                    <td>General</td>
                    <td>user@gmail.com</td>
                    <td class="td-width">373$ withdrawal on 21-12-2021 but not received jupiterx coin </td>
                    <td>pending</td>

                    <td>2023-07-31 10:20:30</td>
                    <td>
                        <button type="button" class=" btn btn-success mt-1"><i class="ri-check-line"></i>
                            Done</button>
                        <button type="button" class=" btn btn-primary mt-1"><i class="ri-chat-1-line"></i>
                            Chat</button>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>JX483803</td>
                    <td>General</td>
                    <td>user@gmail.com</td>
                    <td class="td-width">373$ withdrawal on 21-12-2021 but not received jupiterx coin </td>
                    <td>pending</td>

                    <td>2023-07-31 10:20:30</td>
                    <td>
                        <button type="button" class=" btn btn-success mt-1"><i
                                class="ri-check-line"></i> Done</button>
                        <button type="button" class=" btn btn-primary mt-1"><i
                                class="ri-chat-1-line"></i> Chat</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
