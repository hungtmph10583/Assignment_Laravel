<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    public $fillable = [
        'name', 'cate_id', 'comp_id', 'price', 'quantity', 'detail'
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'cate_id');
    }

    public function company(){
        return $this->belongsTo(Company::class, 'comp_id');
    }

    public function galleries(){
        return $this->hasMany(ProductGallery::class, 'product_id');
    }
}
