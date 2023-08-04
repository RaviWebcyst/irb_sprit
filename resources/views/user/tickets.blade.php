@extends('layouts.app')
@section('content')

<div class="content-wrapper pt-3">
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-5 justify-content-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="card-title">Recent Tickets</h3>
                        </div>
                        <div class="card-body table-responsive pt-3">
                            <table class="table table-hover table-bordered text-nowrap">
                            <thead>
                                <tr>
                                     <th>#</th>
                                     <th>Topic</th>
                                     <th>Subject</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
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

<script src="{{asset('users/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script>
    jQuery( ".treeview-menu" ).hide();
    jQuery( ".treeview" ).removeClass( "active" );

    jQuery( ".menu1>ul" ).show();
    jQuery( ".menu1" ).addClass( "active" );
</script>



@endsection