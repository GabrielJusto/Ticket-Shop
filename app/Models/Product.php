<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $table = 'product';
    protected $fillable = ['sName', 'fPrice'];
}
