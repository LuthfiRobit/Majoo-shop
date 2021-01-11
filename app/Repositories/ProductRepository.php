<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Support\Str;

class ProductRepository
{
    public static function store($data, $name)
    {
        return Product::create([
            'product_name' => $data['product_name'],
            'slug' => Str::slug($data['product_name']),
            'about' => $data['about'],
            'price' => $data['price'],
            'stock' => $data['stock'],
            'image' => $name
        ]);
    }

    public static function update($data, $id, $name)
    {
        return Product::find($id)->update([
            'product_name' => $data['product_name'],
            'slug' => Str::slug($data['product_name']),
            'about' => $data['about'],
            'price' => $data['price'],
            'stock' => $data['stock'],
            'image' => $name
        ]);
    }
}