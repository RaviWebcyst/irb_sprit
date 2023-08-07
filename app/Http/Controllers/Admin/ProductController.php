<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\Images;
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

        $products->map(function ($data) {
            $details = Images::where('product_id', $data->product_id)->orderBy('id', 'desc')->first();
            // dd($details);
            $data->image = $details->image;

            return $data;
        });

        return view('admin.products.index')->with('products', $products);
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

        // dd($rules);
        $validator = Validator::make($request->all(),  [
            'product_name' => 'required',
            'product_id' => 'required',
            'description' => 'required',
            'price' => 'required',
            'sale_price' => 'required',
            'main_image' => 'required ',

        ]);
        // If validation fails, return the errors to the user
        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->with('error', 'There were validation errors. Please fix them and try again.');
        }

        // foreach ($request->file('main_image') as $file) {
        //     $name =  uniqid() . '_' . $file->getClientOriginalName();
        //     //     $name4 = uniqid() . '_' . $file->getClientOriginalName();

        //     $file->move(public_path('uploads/images'), $name);
        //     $imageNames[]  = $name;
        // }
        Product::insert([
            'product_name' => $request->product_name,
            'product_id' => $request->product_id,
            'product_title' => $request->description,
            'description' => $request->description,
            'price' => $request->price,
            'sale_price' => $request->sale_price,

        ]);
        if ($request->hasfile('main_image')) {

            foreach ($request->file('main_image') as $key => $file) {


                // $name =  uniqid() . '_' . $file->getClientOriginalName();
                // $image_name = uniqid() . $key . '.' . $file->getClientOriginalExtension();


                // $imagePath = 'uploads/images/' . $image_name;
                // $file->move(public_path('uploads/images/'), $name);
                // $file = $request->file('main_image');
                $main = uniqid() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/images'), $main);
                $imagePath = 'uploads/images/' . $main;
                Images::insert(['image' =>  $imagePath, 'product_id' => $request->product_id]);
            }
        }
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

        $validator = Validator::make($request->all(),  [

            'main_image' => 'mimes:jpeg,png,jpg|max:2048',
            'gallery1' => 'mimes:jpeg,png,jpg|max:2048',
            'gallery2' => 'mimes:jpeg,png,jpg|max:2048',
            'gallery3' => 'mimes:jpeg,png,jpg|max:2048',
            'gallery4' => 'mimes:jpeg,png,jpg|max:2048',
        ]);
        // If validation fails, return the errors to the user
        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->with('error', 'Only JPG, JPEG & PNG files are allowed.');
        }
        $imaged = Product::where('id', $product->id)->first();

        $image_paths = [
            $imaged->main_image,
            $imaged->gallery1,
            $imaged->gallery2,
            $imaged->gallery3,
            $imaged->gallery4,
        ];
        // dd($image_paths);
        foreach ($image_paths as $image_path) {
            if (file_exists($image_path)) {
                @unlink($image_path);
            }
        }



        Product::where('id', $product->id)->update([
            'product_name' => $request->product_name,
            'product_id' => $request->product_id,
            'product_title' => $request->description,
            'description' => $request->description,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            // 'main_image' => $mainimage,
            // 'gallery1' => $path1,
            // 'gallery2' => $path2,
            // 'gallery3' => $path3,
            // 'gallery4' => $path4,
        ]);

        if ($request->hasfile('main_image')) {
            foreach ($request->file('main_image') as $key => $file) {
                $main = uniqid() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/images'), $main);
                $imagePath = 'uploads/images/' . $main;
                Images::where('product_id', $product->product_id)->update([
                    'image' =>  $imagePath, 'product_id' => $request->product_id,


                ]);
            }
        };

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
        // dd($id);
        //
        $image = Product::where('id', $id)->first();

        // $product_image = Images::where('product_id', $image->product_id)->get();
        $product_image = Images::where('product_id', $image->product_id)->pluck('image')->toArray();
        Product::find($id)->delete();
        foreach ($product_image as $image_path) {
            if (file_exists($image_path)) {
                @unlink($image_path);
            }
        }

        if (file_exists($image_path)) {

            @unlink($image_path);
        }

        return redirect()->back()->with('success', 'Product Deleted Successfully');
    }
}





// if($request->hasfile('main_image'))
//         {
//             // $imageNames = [];
//              foreach($request->file('main_image') as $file)
//             {
//                 $name =  uniqid() . '_' . $file->getClientOriginalName();
//         //     $name4 = uniqid() . '_' . $file->getClientOriginalName();

//                 $file->move(public_path('uploads/images'), $name);
//                 $imageNames[]  = $name;
//             }
// // dd($imageNames);
//             $product = new Product();
//             $product->main_image = json_encode($imageNames);
//             // Set other product attributes
//             $product->product_name = ' ';
//             $product->product_id = ' ';
//             $product->product_title = '';
//             $product->description = '';
//             $product->price = 22;
//             $product->sale_price = 22;
//             $product->gallery1 = '';
//             $product->gallery2 = '';
//             $product->gallery3 = '';
//             $product->gallery4 = '';
//             $product->save();
//         }
