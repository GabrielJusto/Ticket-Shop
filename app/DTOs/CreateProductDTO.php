<?php

namespace App\DTOs;



class CreateProductDTO
{

    public function __construct(
        public readonly string $sName,
        public readonly float $fPrice,
    )
    {
        
    }


    public static function create(array $data)
    {
        return new CreateProductDTO($data['productName'], $data['price']);
    }

}