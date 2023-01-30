<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::query()->paginate(5);

        return JsonResource::collection($products);
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        Product::query()->create($request->validated());

        return redirect()->back();
    }

    public function update(Product $product, Request $request): \Illuminate\Http\RedirectResponse
    {
        Product::query()->update($request->validated());

        return redirect()->back();
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->back();
    }
}
