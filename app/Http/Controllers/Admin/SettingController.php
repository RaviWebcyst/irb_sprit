<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = Setting::orderBy('id')->first();
        return view("admin.setting.upload-logo.index", compact('logo'));
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
     * @param  \App\Http\Requests\StoreSettingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSettingRequest $request)
    {
        $array = [
            'address' => $request->address,

        ];
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');

            if ($file->getSize() > 500000) {
                return redirect()->back()->with('error', 'Your Logo is too large.');
            }

            $target_file = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images'), $target_file);
            $imageFileType = 'uploads/images/' . $target_file;

            // Check image dimensions
            $image_info = getimagesize($imageFileType);
            if ($image_info === false) {
                unlink($imageFileType);
                 return redirect()->back()->with('error', ' The uploaded Logo is not a valid image.');
            }

            $image_width = $image_info[0];
            $image_height = $image_info[1];

            if ($image_width > 250 || $image_height > 125) {
                 unlink($imageFileType);
                 return redirect()->back()->with('error', 'Your Logo is too large');
            }

            $array['logo'] = $imageFileType;


        }
        Setting::orderBy('id')->update($array);
        return redirect()->back()->with('success', 'Updated Successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSettingRequest  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
