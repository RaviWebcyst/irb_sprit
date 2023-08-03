@extends('layouts.app')
@section('content')

<div class="content-wrapper pt-3">
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="card-title">My Referral</h3>
                        </div>
                        <div class="card-body table-responsive p-3">
                            <table class="table table-hover table-bordered text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Affiliate ID</th>
                                        <th>Name</th>
                                        <th>Joining Date</th>
                                        <th>Paid Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row mt-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="card-title">My Total Directs Referral</h3>
                        </div>
                        <div class="card-body table-responsive p-3">
                            <table class="table table-hover table-bordered text-nowrap">
                                <thead>
                                    <tr>
                                        <th>S. No.</th>
                                        <th>Affiliate ID</th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Joining Date</th>
                                        <th>Paid Date</th>
                                        <th>Package</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script>
    jQuery( ".treeview-menu" ).hide();
    jQuery( ".treeview" ).removeClass( "active" );
    jQuery( ".menu3>ul" ).show();
    jQuery( ".menu3" ).addClass( "active" );
</script>



@endsection