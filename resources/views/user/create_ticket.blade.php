@extends('layouts.app')
@section('content')
<div class="content-wrapper pt-3">
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-6 col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create Ticket if you have any Enquiry</h3>
                        </div>
                        <form action="controller/support.php" method="post">
                        
                            <div class="card-body">
                            <div class="form-group">
                                <label class="control-label">Select topic </label>                               
                                <select name="topic" class="form-control dropdown" >
                                    <option selected="selected" value="">-- Select a topic --</option>
                                    <option value="General">General</option>
                                    <option value="Tech Support">Tech Support</option>
                                    <option value="Enquiries">Enquiries</option>
                                    <option value="Account">Account</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Your Subject</label>
                                <input class="form-control" name="sub" type="text" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Your Message</label>
                                <textarea class="form-control " name="BPg"  required></textarea>  
                            </div>
                            </div>
                            <div class="card-footer">
                            <button  type="submit" name="support" class="btn btn-primary loginpassword">Submit</button>
                            <button type="reset" class="btn btn-primary">Cancel</button>
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