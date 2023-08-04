@extends('layouts.admin')

@section('content')
<div class="container px-2">
    <div>
        <br>
        <h2>Rewards</h2>
        <p>Add rewards
        </p>
        <div class="container row">
            <div class="col-md-2">
                <div class="control-group">
                    <label class="control-label">Level# </label>
                    <div class="controls">
                        <input class="form-control" name="level" type="text" value="1" required="">
                     </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="control-group">
                    <label class="control-label">Rank Name </label>
                    <div class="controls">
                        <input class="form-control" name="levelName" type="text" value="0" required="">
                     </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="control-group">
                    <label class="control-label">Self direct</label>
                    <div class="controls">
                        <input class="form-control" name="dc" value="0" type="text" required="">
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="control-group">
                    <label class="control-label">Ref. Direct Req.</label>
                    <div class="controls">
                        <input class="form-control" name="total" value="0" type="text" required="">
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="control-group">
                    <label class="control-label">Reward</label>
                    <div class="controls">
                        <input class="form-control" name="p" type="text" value="0" required="">
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="control-group">
                    <label class="control-label">&nbsp;</label>
                    <button type="text" name="add_reward" class="btn btn-success">Submit</button>
                    <button type="text" class="btn btn-danger">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="table table-responsive mt-4">
<<<<<<< HEAD
        <table class="table table-responsive table-bordered">
=======
        <table class="table table-responsive">
>>>>>>> 2176a109c70b61d8e7618e17d75440b582ce73ee
            <thead>
                <tr >
                    <th>#</th>
                    <th>Level</th>
                    <th>Rank</th>
                    <th style="min-width:135px;">Self. Direct Req.</th>
                    <th   style="min-width:135px;">Ref. Direct Req.</th>
                    <th>Bonus</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
@endsection
