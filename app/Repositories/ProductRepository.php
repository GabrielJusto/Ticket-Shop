<?php

namespace App\Repositories;

use App\DTOs\CreateProductDTO;
use App\Models\Product;

class ProductRepository implements IProductRepository
{

    public function store(CreateProductDTO $data) : int
    {
        $product = new Product((array)$data);
        return $product->save();
    }
}