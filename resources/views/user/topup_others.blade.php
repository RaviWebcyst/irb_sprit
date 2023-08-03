@extends('layouts.app')
@section('content')

<div class="content-wrapper pt-3">
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-6 col-12 ">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Top up </h3>
                        </div>
                        <form name="invest" method="post" action="controller/paymentContrroller.php">
                            <h2 class="text-center"></h2>
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <th>Package
                                            </th>
                                            <td>
                                                <ul style="list-style-type:none; font-weight:bold;">
                                                                                                                                                                                                   
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>User id
                                            </th>
                                            <td>
                                                <input type="text" name="other_user_id" id="uids"
                                                    onChange="checkSponsor()" onFocus="checkSponsor()"
                                                    class="form-control" value=''
                                                    required>
                                                <p id='usernamechk'>
                                                </p>
                                            </td>
                                        </tr>
                                        <!--			<tr>                                                 <th>Order</th>                                               <td>                                                           <span id="share" class="form-control text-left" style="width:18.6%"></span>                                             </td>                                        </tr>    -->
                                        <tr>
                                            <th>Transaction key
                                            </th>
                                            <td>
                                                <input type="password" name="master_key" class="form-control" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="text-center">
                                                <input type="submit" value="Pay with wallet"
                                                    name="pay-with-wallet-other" class="btn btn-info"
                                                    onclick="confirm('Are you sure !!')">
                                                <!--<input type="submit" value="Pay with BTC" name="pay-online" class="btn btn-success">-->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}">
</script>
<script>
function checkSponsor() {
    var uname = document.getElementById("uids").value;
    console.log(uname);
    var params = "id=" + uname;
    var url = "{{route('checkSp')}}";
    $.ajax({
        type: 'GET',
        url: url,
        data: params,
        beforeSend: function() {
            document.getElementById("usernamechk").innerHTML = 'checking';

            $('#pay_sponsor').val(uname);
        },
        complete: function() {},
        success: function(data) {
            document.getElementById("usernamechk").innerHTML = data.user_name;
            //                $('#pay_sponsor').val(uname);   
        },
        error:function(err){
            document.getElementById("usernamechk").innerHTML = err.responseJSON.error;
        }
    });
}
</script>
<script>
    jQuery(".treeview-menu").hide();
    jQuery(".treeview").removeClass("active");
    jQuery(".menu2>ul").show();
    jQuery(".menu2").addClass("active");
</script>


@endsection