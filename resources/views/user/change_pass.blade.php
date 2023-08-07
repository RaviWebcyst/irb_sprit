@extends('layouts.app')

@section('content')


<div class="content-wrapper pt-3">
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-5">
                

                <div class="col-lg-6 col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Change login password</h3>
                        </div>
                        <form action="" method="post">
                           

                            <div class="card-body">
                                <span id="ctl00_ContentPlaceHolder1_Label1" style="color:Red;"></span>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Old Password</label>
                                    <input class="form-control" name="password" type="password" id="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">New Password</label>
                                    <input class="form-control" name="npassword" id="password_new" type="password">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Confirm New Password</label>
                                    <input class="form-control" name="rnpassword" type="password">
                                </div>
                            </div>

                            <div class="card-footer">
                                <input type="hidden" name="account3" value="true">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="reset" class="btn btn-primary">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- <div class="col-lg-6 col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Change Transaction password</h3>
                        </div>
                        <form action="controller/function.php" method="post">
                            

                            <div class="card-body">
                                <span id="ctl00_ContentPlaceHolder1_Label1" style="color:Red;"></span>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Current Tran. password</label>
                                    <input class="form-control" name="master" type="password" id="">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">New Tran. password</label>
                                    <input class="form-control" name="nmaster" id="password_new" type="password">
                                </div>

                                <div class="form-group">
                                <label class="control-label">Confirm Tran. password</label> 
                                <input class="form-control" name="rnmasters" type="password">   
                                </div>
                            </div>

                            <div class="card-footer">
                            <input type="hidden" name="account4" value="true">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="reset" class="btn btn-primary">Cancel</button>
                                </div>
                        </form>
                    </div>
                </div> --}}
            </div>

        </div>
    </section>
</div>
<script src="bower_components/jquery/dist/jquery.min.js">
</script>    
<script>        jQuery( ".treeview-menu" ).hide();
  jQuery( ".treeview" ).removeClass( "active" );
  jQuery( ".menu1>ul" ).show();
  jQuery( ".menu1" ).addClass( "active" );
</script>

@endsection