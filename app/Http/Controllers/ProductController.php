<?php

namespace App\Http\Controllers;

use App\DTOs\CreateProductDTO;
use App\Http\Requests\CreateProductRequest;
use App\Repositories\IProductRepository;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    

    public function store(CreateProductRequest $request, IProductRepository $repository)
    {
        $repository->store(CreateProductDTO::create($request->validated()));
        return response(Response::HTTP_CREATED);
    }
}
