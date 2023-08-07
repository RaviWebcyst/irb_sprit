<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use File;

use App\Models\SliderImage;
use App\Http\Requests\StoreSliderImageRequest;
use App\Http\Requests\UpdateSliderImageRequest;
use Illuminate\Support\Facades\Validator;

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
        $images = SliderImage::orderBy('id')->get();
        // dd($images);
        return view('admin.setting.banner.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $image = SliderImage::orderby('id')->get();
        return view('admin.setting.banner.add', compact('image'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSliderImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSliderImageRequest $request)
    {
        $rules = [
            'image' => 'image|mimes:jpeg,png|max:2048',

        ];
        $validator = Validator::make($request->all(),  [
            'image' => 'required',
            'link' => 'required',

        ], $rules);

         if ($validator->fails()) {

            return redirect()->back()->withErrors(['image', 'link' => "Please recheck Your Details"]);
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images'), $name);
            $path = 'uploads/images/' . $name;
        }

        SliderImage::insert([
            'title' => '',
            'link' => $request->link,
            'image' => $path,

        ]);
        return redirect()->route('slider-images.index')->with('success', "Slider Image Added");
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
    // public function destroy(SliderImage $sliderImage)
    public function destroy($id)
    {
         //
         $image = SliderImage::where('id', $id)->first();
        //  dd($image);
         $image_path = $image->image;
         if (file_exists($image_path)) {

            @unlink($image_path);

        }
         SliderImage::find($id)->delete();


        return redirect()->back()->with('success', 'Image  Deleted Successfully');
    }
}
