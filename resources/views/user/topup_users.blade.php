@extends('layouts.app')

@section('content')

<style>
    .form-control{
        display:inline !important;
    }
    @media only screen and (max-width: 600px) {
        .form-control{
            display: inline-block !important;
        width: 40% !important;
    }
    .upper{
        margin-top:12px;
    }
    }
        </style>
    <div class="content-wrapper pt-5">
        <section class="content">
            <div class="container-fluid">
                <div class="row mt-2 text-center">
                <div class="col-md-12">
            
                <div class="box-header with-border pt-1"><h3 class="box-title"><strong>List of downline (Total:-)</strong></h3></div>
            
            <div class="box-body padding">
                <div>
                            
                            <div class='span12'><button class="btn btn-primary mb-3" style="" onclick='selectForm()' >Change Filter</button></div>
                            <form action="" method ="get" class="form1" >
                                <label> Search From</label><br>
                                <select name="select_type" class="form-control w-25 mb-3" id="select_search" onchange="searchSelect()">
                                    
                                </select>    
                                <input type="text" class="form-control w-25" name="v" value="" placeholder="Please enter your keyword" required> <br>
                                <input type="submit"  class="btn btn-primary upper" name="submit" value="Search" > 
                                <a href="downline.php"><input class="btn btn-primary upper" type="button" name="reset" value="Reset" > </a>
                            </form>
                            <script>
                                function selectForm() {
                                    jQuery(".form1").toggle();
                                    jQuery(".form2").toggle();
                                }
                            </script>
                          
                        </div>
                        
                        <ul class="pagination">
                                <li style="">Page </li>
                                
                            </ul>
                 
                 
            </div>
        </div>
        <div style="width:100%; float:left;">
      <p>&nbsp;</p>
      <div class="col-12">
        
                    <h3 class="box-title"><strong>My Downline</strong>
                </h3>
          
            
            <div class="box-body">
                <div class="table-responsive">
                            <div class="table-responsive">
                            <table id="myTable" class="table table-striped">
                                <thead>
                                    <tr class="first">
    
                                        <th>#</th>
                                        <th>Name</th>
                                        <th style="min-width:120px;">User id</th>
                                        <th>Sponsor</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                            </table>
                        </div>
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
            
            jQuery( ".menu3>ul" ).show();
            jQuery( ".menu3" ).addClass( "active" );
            
        </script>


@endsection