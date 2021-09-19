<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\products;

class orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'mobile_number',
        'address',
        'user_id',
        'product_id',
        'total_qty',
        'payment_amount',
        'payment_method',
        'created_at',
        'updated_at'
    ];
    public function product()
    {
        return $this->belongsTo(products::class, 'product_id');
    }
}
