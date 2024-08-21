<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;





//product can exist in many orders
    public function orders()
    {
    return $this->belongsToMany(Order::class)->withPivot('quantity');
    }
//one product belong to one category
    public function category()
    {
    return $this->belongsTo(Category::class);
    }
}
