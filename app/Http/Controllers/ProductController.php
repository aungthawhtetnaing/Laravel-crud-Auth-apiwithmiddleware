<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator ;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::all();
        return $this->successResponse($products,'product list');
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        // $validated=$request->$value([
        //     'name'=>'required|string',
        //     'description'=>"required|string"
        // ]);

        $validated=$request->validated();

        return $this->successResponse(Product::create($validated),'product Create successfully');
        
        // $validated=Validator::make($request->all(),[
        //     'product_name'=>'required|string',
        //     'product_description'=>"required|string"
        // ]);

        // if($validated->fails()){
        //     return response()->json([
        //         'error'=>false,
        //         'message'=>'productList',
        //         'data'=>$validated->errors()
        //     ]);
        // }

        // $product =Product::create($request->all());

        // return response()->json([
        //     "error"=>false,
        //     "message"=>"product Create successfully",
        //     "data"=>$product
        // ]);
        // return $request->all();
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // return response()->json([
        //     "error"=>false,
        //     "message"=>"product Details",
        //     "data"=>$product
        // ]);
        return new ProductResource($product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Product $product)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated=Validator::make($request->all(),[
            'product_name'=>'required|string',
            'product_description'=>"required|string"
        ]);

        if($validated->fails()){
            return response()->json([
                'error'=>false,
                'message'=>'productList',
                'data'=>$validated->errors()
            ]);
        }
       if ( $product->update($request->all())) {
        return response()->json([
            "error"=>false,
            "message"=>"product update successfully",
            "data"=>$product
        ]);
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        
        if ($product->delete()) {
            return response()->json([
                "error"=>false,
                "message"=>"product delete successfully",
            ]);
        }
    }
}
