<?php

namespace App\Repositories;

use App\DTOs\CreateProductDTO;

interface IProductRepository
{
    function store(CreateProductDTO $data) : int;
}