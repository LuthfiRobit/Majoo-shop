<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $items = Product::orderBy('created_at', 'DESC')->get();
        return view('pages.product',[
            'items' => $items
        ]);
    }

    public function detail(Request $request, $slug)
    {
        $item = Product::where('slug',$slug)
                ->firstOrFail();
        return view('pages.detail',[
            'item' => $item
        ]);
    }
}
