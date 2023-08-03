@extends('layouts.app')

@section('content')
<div class="content-wrapper pt-3">
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-6 col-12">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="card-title">Personal Info</h3>
                        </div>
                        <div class="card-body table-responsive pt-3">
                            <table class="table table-hover table-bordered text-nowrap">
                                <tbody>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="card-title">Account Details</h3>
                        </div>
                        <div class="card-body table-responsive p-3">
                            <table class="table table-hover table-bordered text-nowrap">
                                <tbody>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script>
    jQuery( ".treeview-menu" ).hide();
    jQuery( ".treeview" ).removeClass( "active" );

    jQuery( ".menu1>ul" ).show();
    jQuery( ".menu1" ).addClass( "active" );
</script>

@endsection