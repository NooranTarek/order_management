<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'category_id',
        'price',
        'description',
        'image',
        'code'
    ]; 
    //one product belong to one category
    public function category()
    {
    return $this->belongsTo(Category::class);
    }
}
