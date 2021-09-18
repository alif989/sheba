<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'available_qty',
        'total_qty',
        'sales_qty',
        'purchase_price',
        'sales_price',
        'status',
        'sales_price',
        'created_at',
        'updated_at'
    ];
}
