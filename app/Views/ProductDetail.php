<?php

namespace App\Views;

class ProductDetail {

    public function __construct(
        public readonly int $id, 
        public readonly string $name,
        public readonly float $price,
        ) {
    }


}

