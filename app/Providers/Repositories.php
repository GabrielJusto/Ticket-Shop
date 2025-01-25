<?php

namespace App\Providers;

use App\Repositories\IProductRepository;
use App\Repositories\ProductRepository;
use Illuminate\Support\ServiceProvider;

class Repositories extends ServiceProvider
{
   public $bindings = [
        IProductRepository::class => ProductRepository::class,
   ];
}
