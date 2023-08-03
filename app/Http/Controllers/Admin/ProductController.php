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
        $rules = [
            'main_image' => 'image|mimes:jpeg,png|max:2048',
            'gallery1' => 'image|mimes:jpeg,png|max:2048',
            'gallery2' => 'image|mimes:jpeg,png|max:2048',
            'gallery3' => 'image|mimes:jpeg,png|max:2048',
            'gallery4' => 'image|mimes:jpeg,png|max:2048',
        ];

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

        if ($request->hasFile('image1')) {
            $file = $request->file('image1');
            $name1 = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images'), $name1);
            $path1 = 'uploads/images/' . $name1;
        }
        if ($request->hasFile('image2')) {
            $file = $request->file('image2');
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
        if ($request->hasFile('image3')) {
            $file = $request->file('image3');
            $name3 = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images'), $name3);
            $path3 = 'uploads/images/' . $name3;
        }
        if ($request->hasFile('image4')) {
            $file = $request->file('image4');
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
        if ($request->hasFile('main_image')) {
            $file = $request->file('main_image');
            $main = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images'), $main);
            $mainimage = 'uploads/images/' . $main;
        }else{
            $mainimage = $imaged->main_image;

        }
        if ($request->hasFile('image1')) {
            $file = $request->file('image1');
            $name1 = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images'), $name1);
            $path1 = 'uploads/images/' . $name1;
        }
        else {
            $path1 = $imaged->image1;
        }
        if ($request->hasFile('image2')) {
            $file = $request->file('image2');
            $name2 = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images'), $name2);
            $path2 = 'uploads/images/' . $name2;
        }
        else {
            $path2 = $imaged->image2;
        }
        if ($request->hasFile('image3')) {
            $file = $request->file('image3');
            $name3 = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images'), $name3);
            $path3 = 'uploads/images/' . $name3;
        }
        else {
            $path3 = $imaged->image3;
        }
        if ($request->hasFile('image4')) {
            $file = $request->file('image4');
            $name4 = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images'), $name4);
            $path4 = 'uploads/images/' . $name4;
        }
        else {
            $path4 = $imaged->image4;
        }

            // dd($data);

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
        // dd($id);
        //  dd($id);
        return redirect()->back()->with('success', 'Product Deleted Successfully');
    }
}
