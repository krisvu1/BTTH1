<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id',
        "status",
        "buy_at",
        "final_total"
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'cart_product')->withPivot('quantity');
    }
}
