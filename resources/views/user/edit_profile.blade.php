@extends('layouts.app')

@section('content')

<div class="content-wrapper pt-3">
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-6 col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Personal Profile</h3>
                        </div>
                        <form action="controller/function.php" method="post">
                            
                            <div class="card-body">
                                <span id="ctl00_ContentPlaceHolder1_Label1" style="color:Red;"></span>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Date of birth </label><br>

                                   
                                    </select>
                                    <select id="DateOfBirth_Day" name="dday" style="padding:10px; float:left">
                                        <option value="0">- Day - </option>
                                    </select>
                                    <select id="" name="dyear" class="span4 input-left-top-margins"
                                        style="padding:10px;">
                                        <option>- Year - </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Pan Card </label>
                                    <input class="form-control" style="text-transform:uppercase" name="pan" id=""
                                        required type="text" value="" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Address</label>
                                    <textarea id="txtAddress" name="address"
                                        class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">City</label>
                                    <div class="controls">
                                        <input class="form-control" name="city" id="" required type="text"
                                            value="" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Zip Code</label>
                                    <div class="controls">
                                        <input class="form-control" name="zip" id="txtZipCode" required type="text"
                                            value="" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">State</label>
                                    <div class="controls">
                                        <input class="form-control" name="state" id="txtState" required type="text"
                                            value="" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Country</label>
                                    <div class="controls">
                                        <select id="" name="country" class="form-control">
                                            <option value="0">Select </option>
                                            <option > </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" name="account1" class="btn btn-primary">Submit</button>
                                <input type="reset" class="btn btn-primary" value="Reset" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Account</h3>
                        </div>
                        <form action="" method="post">
                            <?php //if(isset($_GET["master_key"])) echo "<div class='flse_msg'>Master Key Eror!</div>";   ?>

                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="control-label">Bank Name</label>
                                    <input class="form-control" name="bank_name"
                                        value="" required type="text"
                                        id="txtName" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Branch Address</label>
                                    <input class="form-control" name="bank_address"
                                        value="" required type="text" />
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Bank IFSC Code</label>
                                    <input class="form-control" name="bank_ifsc"
                                        value="" required type="text" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Account Name</label>
                                    <input class="form-control" name="account_name" value="" required type="text" id="txtName" />
                                </div>
                                <div class="form-group">
                                <label class="control-label">Account Number</label>
                                    <input class="form-control" name="account_number" value="" required type="text" id="txtName" />
                                    <!--<input type="hidden" name="userId" class="btn" value="<?php // echo $userData["id"] ?>">-->
                            </div>
                            <div class="form-group">
                                <label class="control-label">Phone Pay/Google Pay/Paytm Any one</label>                               
                                    <select class="form-control" name='pay_type'>
                                        <option value='phone_pay'>Phone Pay</option>
                                        <option value='google_pay'>Google Pay</option>
                                        <option value='paytm'>Paytm</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Enter number</label>
                                    <input class="form-control" name="pay_number" value="" type="text" id="txtName" />
                                    <input type="hidden" name="userId" class="btn" value="">
                            </div>
                            </div>

                            <div class="card-footer">
                            <button type="submit" name="account_bank" class="btn btn-primary">Submit</button>
                                <input type="reset" class="btn btn-primary" value="Reset">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                <div class="row">
                <div class="col-lg-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Update KYC</h3>
                        </div>
                        <form id="" action="" method="post" enctype="multipart/form-data">
                       
                        <p id="response-msg-bitcoin" style="color:#000;"> </p>
                            <div class="card-body">
                           
                                <div class="form-group text-center">
                                    <label for="exampleInputPassword1" class="control-label">Adhar id</label>
                                   
                                        <input class="form-control" name="national_id" type="file" value="">
                                    
                                    <img src=""
                                        onerror="" alt="005" title="005" style="width: 100px;">
                                </div>
                                <div class="form-group text-center">
                                <label class="control-label">Photo id</label>
                                        
                                    <input class="form-control" name="photo_id" type="file" value="">
                                   
                                    <img src=""
                                        onerror="" alt="005" title="005" style="width: 100px;">
                            </div>

                            <div class="form-group text-center">
                                <label class="control-label">Your Photo</label>
                                    <input class="form-control" name="user_pic" type="file" value="">
                                    <img src=""
                                        onerror="" alt="005" title="005" style="width: 100px;">
                            </div>
                           
                            </div>

                            <div class="card-footer">
                            <input type="hidden" name="userId" value="128">
<button type="submit" name="kyc" class="btn btn-primary accountdata">Submit</button>
<button type="button" class="btn btn-primary">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>

 </div>
        </div>
    </section>
</div>
<script src="{{asset('users/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script>
jQuery(".treeview-menu").hide();
jQuery(".treeview").removeClass("active");

jQuery(".menu1>ul").show();
jQuery(".menu1").addClass("active");
</script>


@endsection