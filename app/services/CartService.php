<?php


namespace App\Services;


use App\Models\Cart;
use App\Models\Product;
use App\Repositories\CartRepository;
use Exception;
use Illuminate\Support\Facades\Auth;

class CartService
{
    public static function cekStock($data)
    {
        $product = Product::find($data['product_id']);
        $cart = Cart::whereProductId($data['product_id'])->whereUserId(Auth::id())->first();
        if ($product->stock < 2 OR $data['qty'] > $product->stock) {
            throw new Exception('Out of stock, stock minim !');
        } elseif (is_null($cart)) {
            return Cart::create([
                'product_id' => $data['product_id'],
                'qty' => $data['qty'],
                'user_id' => Auth::id()
            ]);
        }

        if (($data['qty'] + $cart->qty) > $product->stock) {
            throw new Exception('Failed to add cart !');
        }

        $cart->qty += $data['qty'];
        return $cart->update();
    }
}