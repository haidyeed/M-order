<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(10, ['*'], 'productpage');
        return view('dashboard.products.index', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->sku = $request->sku;

        $product->price = $request->price;
        $product->stock = $request->stock;

        $product->order = $request->order ?? 0;
        $request->status ? $product->status = 1 : $product->status = 0;

        $product->save();
        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $response = false;
        $product = Product::find($id);

        if ($product && $product->delete()) {
            $response = true;
        }
        echo json_encode($response);
        exit;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function changeStatus($id)
    {
        $response['status'] = false;
        $product = Product::find($id);
        if ($product) {
            if ($product->status == 0) {
                $product->status = 1;
                $product->save();
                $response['status'] = true;
                $response['type'] = 1;
            } elseif ($product->status == 1) {
                $product->status = 0;
                $product->save();
                $response['status'] = true;
                $response['type'] = 0;
            }
        }
        
        return response()->json($response);
    }
}
