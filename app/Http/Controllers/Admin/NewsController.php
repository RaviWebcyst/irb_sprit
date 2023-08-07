<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $news = News::orderBy('id')->paginate(10);
        return view('admin.other.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.other.news.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNewsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsRequest $request)
    {
        //
        // dd($request);
        $validator = Validator::make($request->all(),  [
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'title' => 'required',
        ]);
        // If validation fails, return the errors to the user
        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->with('error', 'There were validation errors. Please fix them and try again.');
        }
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name1 = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images'), $name1);
            $path = 'uploads/images/' . $name1;
        }
        News::insert([
            'image' => $path,
            'title' => $request->title,
        ]);
        // return redirect()->back()->with('success', 'News Added Successfully');
        return redirect()->route('news.index')->with('success', 'News Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNewsRequest  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
        $image = News::where('id', $news->id)->first();
        //  dd($image);
        News::find($news->id)->delete();

        $image_paths = [
            $image->image,


        ];

        foreach ($image_paths as $image_path) {
            if (file_exists($image_path)) {
                @unlink($image_path);
            }
        }

        if (file_exists($image_path)) {

            @unlink($image_path);
        }

        return redirect()->back()->with('success', 'News Deleted Successfully');
    }

}
