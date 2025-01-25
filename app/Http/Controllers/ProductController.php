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
        $repository->store(CreateProductDTO::create($request->validated()));
        return response()->make(null, Response::HTTP_CREATED);
    }

    public function index(IProductRepository $repository)
    {
        $product = $repository->index()->map(fn($product) => new ProductDetail($product->iProductId, $product->sName, $product->fPrice));
        return response()->json($product);
    }
}
