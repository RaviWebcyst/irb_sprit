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
            <div class="container-fluid">
                {{-- <div class="row text-center">
                <div class="col-12">
            
                <div class="box-header with-border pt-5">
                    <h3 class="box-title"><strong>List of downline(Total:)</strong></h3></div>
            
            <div class="box-body padding pt-4">
            <div>
                            <div class='span12'><button class="btn btn-primary mb-3" style="" onclick='selectForm()' >Change Filter</button></div>
                            <form action="" method ="get" class="form1 from-group" >
                                <label> Search From</label><br>
                                <select name="select_type" class="form-control w-25 mb-3" id="select_search" onchange="searchSelect()">
                                </select>    
                                <input type="text" name="v" class="form-control w-25" value="" placeholder="Please enter your keyword" required> <br>
                                <input type="submit"  class="btn btn-primary upper" name="submit" value="Search" > 
                                <a href="downline.php"><input class="btn btn-primary upper" type="button" name="reset" value="Reset" > </a>
                            </form>
                            <script>
                                function selectForm() {
                                    jQuery(".form1").toggle();
                                    jQuery(".form2").toggle();
                                }
                            </script>
                            <form action="" method ="get" class="form2 form-group" >
                                <label> Search From Date</label> <br>                              
                                <input type="hidden" name="select_type" value=""> 
                                <input type="hidden" name="v" id="date" value=""> 
                                <span> From<input type="text" class="form-control w-25" name="from" id="datepicker"  > </span>
                                <span> to <input type="text" class="form-control w-25" name="to" id="datepicker1"  > </span><br>
                                <input type="submit" name="submit" class="btn btn-primary upper mt-3" value="Search" > 
                                <a href="Users.php"><input type="button" class="btn btn-primary upper mt-3" name="reset" value="Reset" > </a>
                            </form>
                        </div>
                        <ul class="pagination">
                                <li style="">Page </li>
                                
                            </ul>
                        </div>
                 
            </div>
        </div> --}}
        <div style="width:100%;">
      <div class="col-md-12 mt-3">
        
                    <h3 class="box-title text-center"><strong>My Downline</strong>
                </h3>
          
            
            <div class="box-body padding">
                <div class="table-responsive">
                            <div class="table-responsive">
                            <table id="myTable" class="table table-striped">
                            <thead>
                                    <tr class="first">
    
                                        <th>#</th>
                                        <th>Level</th>
                                        <th>Name</th>
                                        <th style="min-width:100px;">User Id</th>
                                        <th>Sponsor</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @if(!empty($users))
                                  @foreach($users as $key=>$user)
                                  <tr>
                                    <td>{{$users->firstItem()+$key}}</td>
                                    <td>{{$user->level}}</td>
                                    <td>{{$user->user->name}}</td>
                                    <td>{{$user->user_id}}</td>
                                    <td>{{$user->spid}}</td>
                                    <td>{{$user->created_at}}</td>
                                  </tr>
                                  @endforeach
                                  @endif
    
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