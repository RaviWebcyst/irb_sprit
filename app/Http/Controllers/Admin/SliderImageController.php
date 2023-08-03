<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\SliderImage;
use App\Http\Requests\StoreSliderImageRequest;
use App\Http\Requests\UpdateSliderImageRequest;

class SliderImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSliderImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSliderImageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SliderImage  $sliderImage
     * @return \Illuminate\Http\Response
     */
    public function show(SliderImage $sliderImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SliderImage  $sliderImage
     * @return \Illuminate\Http\Response
     */
    public function edit(SliderImage $sliderImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSliderImageRequest  $request
     * @param  \App\Models\SliderImage  $sliderImage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSliderImageRequest $request, SliderImage $sliderImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SliderImage  $sliderImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(SliderImage $sliderImage)
    {
        //
    }
}
