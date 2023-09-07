<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable = ['id', 'name', 'price', 'property', 'description', 'image', 'image_slider_1', 'image_slider_2', 'image_front_product', 'image_color', 'category_id', 'color_id'];

}
