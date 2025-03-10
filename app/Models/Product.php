<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public static function getAllProducts()
    {
        return self::all();
    }

    public static function getProductByName($productName)
    {
        return self::where('product_name', $productName)->first();
    }

    public function orderRecords()
    {
        return $this->hasMany(OrderRecord::class);
    }
    
    use HasFactory;
}
