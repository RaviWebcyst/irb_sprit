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
            <tbody>
                <tr>
                    <td>1</td>
                    <td>User</td>
                    <td>JX483803</td>
                    <td>user@gmail.com</td>
                    <td>8989898989</td>
                    <td>Test@123</td>
                    <td>0</td>
                    <td>Free<br>0.00</td>
                    <td>Jx927220</td>
                    <td>0<br>20</td>
                    <td>2023-07-31 10:20:30</td>
                    <td>
                        <button type="button" class=" btn btn-danger mt-1"><i
                                class="ri-arrow-right-line"></i></button>
                        <button type="button" class=" btn btn-success mt-1"><i class="ri-eye-line"></i></button>
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Test</td>
                    <td>JX483983</td>
                    <td>test@gmail.com</td>
                    <td>9090909090</td>
                    <td>User@123</td>
                    <td>2</td>
                    <td>(100)<br>0.00</td>
                    <td>Jx927176</td>
                    <td>365<br>0</td>
                    <td>2023-07-31 10:20:30</td>
                    <td>
                        <button type="button" class=" btn btn-danger mt-1"><i
                                class="ri-arrow-right-line"></i></button>
                        <button type="button" class=" btn btn-success mt-1"><i class="ri-eye-line"></i></button>
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Test</td>
                    <td>JX483983</td>
                    <td>test@gmail.com</td>
                    <td>9090909090</td>
                    <td>User@123</td>
                    <td>2</td>
                    <td>(100)<br>0.00</td>
                    <td>Jx927176</td>
                    <td>365<br>0</td>
                    <td>2023-07-31 10:20:30</td>
                    <td>
                        <button type="button" class=" btn btn-danger mt-1"><i
                                class="ri-arrow-right-line"></i></button>
                        <button type="button" class=" btn btn-success mt-1"><i class="ri-eye-line"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Test</td>
                    <td>JX483983</td>
                    <td>test@gmail.com</td>
                    <td>9090909090</td>
                    <td>User@123</td>
                    <td>2</td>
                    <td>(100)<br>0.00</td>
                    <td>Jx927176</td>
                    <td>365<br>0</td>
                    <td>2023-07-31 10:20:30</td>
                    <td>
                        <button type="button" class=" btn btn-danger mt-1"><i
                                class="ri-arrow-right-line"></i></button>
                        <button type="button" class=" btn btn-success mt-1"><i class="ri-eye-line"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Test</td>
                    <td>JX483983</td>
                    <td>test@gmail.com</td>
                    <td>9090909090</td>
                    <td>User@123</td>
                    <td>2</td>
                    <td>(100)<br>0.00</td>
                    <td>Jx927176</td>
                    <td>365<br>0</td>
                    <td>2023-07-31 10:20:30</td>
                    <td>
                        <button type="button" class=" btn btn-danger mt-1"><i
                                class="ri-arrow-right-line"></i></button>
                        <button type="button" class=" btn btn-success mt-1"><i class="ri-eye-line"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Test</td>
                    <td>JX483983</td>
                    <td>test@gmail.com</td>
                    <td>9090909090</td>
                    <td>User@123</td>
                    <td>2</td>
                    <td>(100)<br>0.00</td>
                    <td>Jx927176</td>
                    <td>365<br>0</td>
                    <td>2023-07-31 10:20:30</td>
                    <td>
                        <button type="button" class=" btn btn-danger mt-1"><i
                                class="ri-arrow-right-line"></i></button>
                        <button type="button" class=" btn btn-success mt-1"><i class="ri-eye-line"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Test</td>
                    <td>JX483983</td>
                    <td>test@gmail.com</td>
                    <td>9090909090</td>
                    <td>User@123</td>
                    <td>2</td>
                    <td>(100)<br>0.00</td>
                    <td>Jx927176</td>
                    <td>365<br>0</td>
                    <td>2023-07-31 10:20:30</td>
                    <td>
                        <button type="button" class=" btn btn-danger mt-1"><i
                                class="ri-arrow-right-line"></i></button>
                        <button type="button" class=" btn btn-success mt-1"><i class="ri-eye-line"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Test</td>
                    <td>JX483983</td>
                    <td>test@gmail.com</td>
                    <td>9090909090</td>
                    <td>User@123</td>
                    <td>2</td>
                    <td>(100)<br>0.00</td>
                    <td>Jx927176</td>
                    <td>365<br>0</td>
                    <td>2023-07-31 10:20:30</td>
                    <td>
                        <button type="button" class=" btn btn-danger mt-1"><i
                                class="ri-arrow-right-line"></i></button>
                        <button type="button" class=" btn btn-success mt-1"><i class="ri-eye-line"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
