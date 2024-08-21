<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'status',
        'total_amount',
    ];

    //one order belongs to one user
    public function user()
    {
    return $this->belongsTo(User::class);
    }
    //one order can contain many products
    public function products()
    {
    return $this->belongsToMany(Product::class)->withPivot('quantity');
    }
}
