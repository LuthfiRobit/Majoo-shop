<?php


namespace App\Services;


use App\Models\Product;
use App\Repositories\ProductRepository;
use File;
use ImageResize;

class ProductService
{
    public static function validatePicture($data, $id = null)
    {
        $dataItem = Product::find($id);
        if ($data->hasFile('image')) {

            $image = $data['image'];

            $name = uniqid() . '_' . trim($image->getClientOriginalName());

            $img = ImageResize::make($image->path());

            $img->resize(296, 180)->save('assets/admin/product_images/'.$name);

            if (request()->method() == 'PUT') {
                File::delete('assets/admin/product_images/' . $dataItem->image);
                return ProductRepository::update($data, $id, $name);
            } else {
                return ProductRepository::store($data, $name);
            }
        }

        return ProductRepository::update($data, $id, $dataItem->image);
    }
}