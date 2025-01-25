<?php

namespace App\Http\Controllers;

use App\DTOs\CreateProductDTO;
use App\Http\Requests\CreateProductRequest;
use App\Repositories\IProductRepository;
use App\Views\ProductDetail;
use Illuminate\Http\Response;

class ProductController
{
    

    public function store(CreateProductRequest $request, IProductRepository $repository)
    {
        try {
            $repository->store(CreateProductDTO::create($request->validated()));
            return response()->noContent(Response::HTTP_CREATED);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Failed to create product', 
                'message' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function index(IProductRepository $repository)
    {
        $products = $repository->index()->transform(fn($product) => new ProductDetail($product->iProductId, $product->sName, $product->fPrice));
        return response()->json($products);
    }
}
