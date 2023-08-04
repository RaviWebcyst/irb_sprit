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
    <div class="content-wrapper">
        <section class="content">
            <div class="container">
                {{-- <div class="row text-center">
                <div class="col-md-12">
                <div class="box-header with-border pt-5">
                    <h3 class="box-title">
                        <strong> Bonus (Total:-)</strong></h3></div>
            <div class="box-body padding pt-4">
            <div> 
                            <div class='span12'>
                </div>
                <form action="" method ="get" class="form1 form-group" >
                  <label> Search From Date
                  </label>        <br>                       
                  <input type="hidden" name="select_type" value=""> 
                  <input type="hidden" name="v" id="date" value=""> 
                  <input type="hidden" name="type" id="date" value=""> 
                  <span> From
                    <input type="text" class="form-control w-25" name="from" id="datepicker"  > 
                  </span>
                  <span> to 
                    <input type="text" class="form-control w-25" name="to" id="datepicker1"  > 
                  </span><br>
                  <input type="submit"  class="btn  btn-primary upper mt-3" name="submit" value="Search" > 
                  <a href="direct_bonus.php">
                    <input type="button"  class="btn btn-primary upper mt-3" name="reset" value="Reset" > 
                  </a>
                </form>
                        </div>
                        <ul class="pagination">
                  <li style="">Page 
                  </li>
                  
                  <li >
                    <a href="?type=">
                      
                    </a>
                  </li>
                  
                  <li >
                    <a href="type=<?php echo $type; ?>&?page=">
                      
                    </a>
                  </li>
             
                </ul>
                        </div>
                 
            </div>
        </div> --}}
        <div style="width:100%; float:left;" class="mt-2">
      
      <div class="col-md-12">
        
                    <h3 class="box-title mt-3 text-center"><strong>List of Bonus</strong>
                </h3>
          
            
            <div class="box-body padding">
                <div class="table-responsive">
                            <div class="table-responsive">
                            <table id="myTable" class="table table-striped">
                            <thead>
                      <tr class="first">
                        <th>#
                        </th>
                        <th>Amount
                        </th>
                        <th  style="min-width:120px;">From user
                        </th>
                        <th style="min-width:140px;">From user id
                        </th>
                        <th>Date
                        </th>
                        <th>Description
                        </th>
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