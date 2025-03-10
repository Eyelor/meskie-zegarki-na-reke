<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'phone_number',
        'special_box',
        'longer_guarantee',
        'delivery_date',
        'additional_information',
        'order_price',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderRecords()
    {
        return $this->hasMany(OrderRecord::class);
    }

    use HasFactory;
}
