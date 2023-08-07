@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-7 mx-auto">
            @if (session('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            <h3 class='py-3'>Send Fund</h3>
            <div class="card p-2 p-lg-5 shadow border-0 mt-4">
                <form action="{{route('e-send.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">User Id</label>
                        <input type="text" class="form-control" id=""
                            placeholder="User Id" name="user_id" onchange="checkSp(this.value)">
                            @error('user_id')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                            <small class="text-danger err"></small>
                            <small class="text-success succ"></small>
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="text" class="form-control" id="amount" placeholder="Enter Amount" name="amount">
                        @error('amount')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="footer">
                        <button type="submit" class="btn btn-success" onclick="return confirm('Are You Sure!');"> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function checkSp(id){
       $.ajax({
        url:"{{route('checkSp')}}",
        data:{
            id:id
        },
        success:function(data){
            // console.log(data);
            $(".err").text('');
            $(".succ").text(data.user_name);
        },
        error:function(err){
            // console.log(err.responseJSON.error);
            $(".succ").text('');
            $(".err").text("Invalid User Id");
        }
       });
    }
</script>
@endsection
