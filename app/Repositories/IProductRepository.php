<?php

namespace App\Repositories;

use App\DTOs\CreateProductDTO;
use Illuminate\Database\Eloquent\Collection;

interface IProductRepository
{
    function store(CreateProductDTO $data) : int;
    function index() : Collection;
}