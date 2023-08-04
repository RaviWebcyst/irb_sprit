<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use League\CommonMark\Extension\SmartPunct\EllipsesParser;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id')->get();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.products.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StoreProductRequest $request)
    public function store(Request $request)
    {
<<<<<<< HEAD
         $rules = [
=======
        $rules = [
>>>>>>> 2176a109c70b61d8e7618e17d75440b582ce73ee
            'main_image' => 'image|mimes:jpeg,png|max:2048',
            'gallery1' => 'image|mimes:jpeg,png|max:2048',
            'gallery2' => 'image|mimes:jpeg,png|max:2048',
            'gallery3' => 'image|mimes:jpeg,png|max:2048',
            'gallery4' => 'image|mimes:jpeg,png|max:2048',
        ];
<<<<<<< HEAD
=======

>>>>>>> 2176a109c70b61d8e7618e17d75440b582ce73ee
        $validator = Validator::make($request->all(),  [
            'product_name' => 'required',
            'product_id' => 'required',
            'description' => 'required',
            'price' => 'required',
            'sale_price' => 'required',
            'main_image' => 'required',
            'gallery1' => 'required',
            'gallery2' => 'required',
            'gallery3' => 'required',
            'gallery4' => 'required',
        ], $rules);
        // If validation fails, return the errors to the user
        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->with('error', 'There were validation errors. Please fix them and try again.');
        }

<<<<<<< HEAD
        if ($request->hasFile('gallery1')) {
            $file = $request->file('gallery1');
=======
        if ($request->hasFile('image1')) {
            $file = $request->file('image1');
>>>>>>> 2176a109c70b61d8e7618e17d75440b582ce73ee
            $name1 = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images'), $name1);
            $path1 = 'uploads/images/' . $name1;
        }
<<<<<<< HEAD
        if ($request->hasFile('gallery2')) {
            $file = $request->file('gallery2');
=======
        if ($request->hasFile('image2')) {
            $file = $request->file('image2');
>>>>>>> 2176a109c70b61d8e7618e17d75440b582ce73ee
            $name2 = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images'), $name2);
            $path2 = 'uploads/images/' . $name2;
        }
        if ($request->hasFile('main_image')) {
            $file = $request->file('main_image');
            $main = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images'), $main);
            $mainimage = 'uploads/images/' . $main;
        }
<<<<<<< HEAD
        if ($request->hasFile('gallery3')) {
            $file = $request->file('gallery3');
=======
        if ($request->hasFile('image3')) {
            $file = $request->file('image3');
>>>>>>> 2176a109c70b61d8e7618e17d75440b582ce73ee
            $name3 = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images'), $name3);
            $path3 = 'uploads/images/' . $name3;
        }
<<<<<<< HEAD
        if ($request->hasFile('gallery4')) {
            $file = $request->file('gallery4');
=======
        if ($request->hasFile('image4')) {
            $file = $request->file('image4');
>>>>>>> 2176a109c70b61d8e7618e17d75440b582ce73ee
            $name4 = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images'), $name4);
            $path4 = 'uploads/images/' . $name4;
        }
        Product::insert([
            'product_name' => $request->product_name,
            'product_id' => $request->product_id,
            'product_title' => $request->description,
            'description' => $request->description,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'main_image' => $mainimage,
            'gallery1' => $path1,
            'gallery2' => $path2,
            'gallery3' => $path3,
            'gallery4' => $path4,
        ]);
        // return redirect()->back()->with('success', 'Product Added Successfully');
        return redirect()->route('product.index')->with('success', 'Product Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    // public function show(Product $product)
    public function show(Request $request, $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
        $imaged = Product::where('id', $product->id)->first();


<<<<<<< HEAD
=======
        $validator = Validator::make($request->all(), [
            'product_name' => 'required',
            'product_id' => 'required',
            'description' => 'required',
            'price' => 'required',
            'sale_price' => 'required',
            'main_image' => 'required',
            'gallery1' => 'required',
            'gallery2' => 'required',
            'gallery3' => 'required',
            'gallery4' => 'required',
        ]);
        // If validation fails, return the errors to the user
        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->with('error', 'There were validation errors. Please fix them and try again.');
        }
        // dd($imaged);
>>>>>>> 2176a109c70b61d8e7618e17d75440b582ce73ee
        if ($request->hasFile('main_image')) {
            $file = $request->file('main_image');
            $main = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images'), $main);
            $mainimage = 'uploads/images/' . $main;
        }else{
            $mainimage = $imaged->main_image;

        }
<<<<<<< HEAD
        if ($request->hasFile('gallery1')) {
            $file = $request->file('gallery1');
=======
        if ($request->hasFile('image1')) {
            $file = $request->file('image1');
>>>>>>> 2176a109c70b61d8e7618e17d75440b582ce73ee
            $name1 = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images'), $name1);
            $path1 = 'uploads/images/' . $name1;
        }
        else {
<<<<<<< HEAD
            $path1 = $imaged->gallery1;
        }
        if ($request->hasFile('gallery2')) {
            $file = $request->file('gallery2');
=======
            $path1 = $imaged->image1;
        }
        if ($request->hasFile('image2')) {
            $file = $request->file('image2');
>>>>>>> 2176a109c70b61d8e7618e17d75440b582ce73ee
            $name2 = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images'), $name2);
            $path2 = 'uploads/images/' . $name2;
        }
        else {
<<<<<<< HEAD
            $path2 = $imaged->gallery2;
        }
        if ($request->hasFile('gallery3')) {
            $file = $request->file('gallery3');
=======
            $path2 = $imaged->image2;
        }
        if ($request->hasFile('image3')) {
            $file = $request->file('image3');
>>>>>>> 2176a109c70b61d8e7618e17d75440b582ce73ee
            $name3 = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images'), $name3);
            $path3 = 'uploads/images/' . $name3;
        }
        else {
<<<<<<< HEAD
            $path3 = $imaged->gallery3;
        }
        if ($request->hasFile('gallery4')) {
            $file = $request->file('gallery4');
=======
            $path3 = $imaged->image3;
        }
        if ($request->hasFile('image4')) {
            $file = $request->file('image4');
>>>>>>> 2176a109c70b61d8e7618e17d75440b582ce73ee
            $name4 = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images'), $name4);
            $path4 = 'uploads/images/' . $name4;
        }
        else {
<<<<<<< HEAD
            $path4 = $imaged->gallery4;
        }

=======
            $path4 = $imaged->image4;
        }

            // dd($data);

>>>>>>> 2176a109c70b61d8e7618e17d75440b582ce73ee
            Product::where('id', $product->id)->update([
            'product_name' => $request->product_name,
            'product_id' => $request->product_id,
            'product_title' => $request->description,
            'description' => $request->description,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'main_image' => $mainimage,
            'gallery1' => $path1,
            'gallery2' => $path2,
            'gallery3' => $path3,
            'gallery4' => $path4,
        ]);




        return redirect()->route('product.index')->with('success', 'Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Product::find($id)->delete();
<<<<<<< HEAD
=======
        // dd($id);
        //  dd($id);
>>>>>>> 2176a109c70b61d8e7618e17d75440b582ce73ee
        return redirect()->back()->with('success', 'Product Deleted Successfully');
    }
}
