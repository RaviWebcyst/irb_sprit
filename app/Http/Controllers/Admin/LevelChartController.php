<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use App\Models\LevelChart;
use App\Http\Requests\StoreLevelChartRequest;
use App\Http\Requests\UpdateLevelChartRequest;

class LevelChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $chart = LevelChart::orderBy('id')->paginate('10');
        return view('admin.other.level-charts.index', compact('chart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.other.level-charts.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLevelChartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLevelChartRequest $request)
    {
        //
        $validator = Validator::make($request->all(),  [
            'rank' => 'required',
            'target_amount' => 'required',
            'incentive_level' => 'required',
        ]);
        // If validation fails, return the errors to the user
        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->with('error', 'There were validation errors. Please fix them and try again.');
        }

        LevelChart::insert([
            'rank' => $request->rank,
            'target_amount' => $request->target_amount,
            'incentive_level' => $request->incentive_level,
        ]);

        return redirect()->route('level-chart.index')->with('success', 'Target Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LevelChart  $levelChart
     * @return \Illuminate\Http\Response
     */
    public function show(LevelChart $levelChart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LevelChart  $levelChart
     * @return \Illuminate\Http\Response
     */
    public function edit(LevelChart $levelChart)
    {

        return view('admin.other.level-charts.edit', compact('levelChart'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLevelChartRequest  $request
     * @param  \App\Models\LevelChart  $levelChart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLevelChartRequest $request, LevelChart $levelChart)
    {
        //
        LevelChart::where('id' , $levelChart->id)->update([
            'rank' => $request->rank,
            'target_amount' => $request->target_amount,
            'incentive_level' => $request->incentive_level,
        ]);

        return redirect()->route('level-chart.index')->with('success', 'Target Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LevelChart  $levelChart
     * @return \Illuminate\Http\Response
     */
    public function destroy(LevelChart $levelChart)
    {
        //
        // dd($level);
        LevelChart::find($levelChart->id)->delete();

        return redirect()->back()->with('success', 'Target Deleted Successfully');

    }
}
