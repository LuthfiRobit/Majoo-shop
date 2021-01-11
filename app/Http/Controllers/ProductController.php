<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    // public function detail($slug)
    // {
    //     $data['title'] = "Products";
    //     $data['product'] = Product::whereSlug($slug)->first();
    //     return view('web/product_detail', $data);
    // }

    public function index(Request $request, $slug)
    {
        $item = Product::where('slug',$slug)
                ->firstOrFail();
        return view('pages.detail',[
            'item' => $item
        ]);
    }
}
