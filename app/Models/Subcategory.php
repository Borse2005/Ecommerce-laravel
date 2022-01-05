<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'subcategory',
        'category_id'
    ];

    public function category(){
        return $this->belongsToMany(Category::class);
    }

    public function product(){
        return $this->hasOne(Product::class);
    }
}