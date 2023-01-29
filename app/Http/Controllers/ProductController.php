<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductController extends Controller
{
    public function index(){
        $products = Product::query()->paginate(5);
        return JsonResource::collection($products);
    }

    public function store(Request $request) {
        // logic for creating and validating the request
        $fields = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);
        Product::query()->create($fields);
        return redirect()->back();
    }

    public function update(Product $product, Request $request){
        $fields = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);
        Product::query()->update($fields);
        return redirect()->back();
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->back();
    }
}
