<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Repositories\CartRepository;
use App\Repositories\CartRespository;
use App\Services\CartService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $item['title'] = "Cart";
        $item['carts'] = Cart::with('product')->where('user_id', Auth::id())->get();
        $item['total'] = CartRepository::getTotal();
        return view('pages.cart', $item);
    }

    public function store(Request $request)
    {
        try {
            CartService::cekStock($request->all());
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

        return redirect()->to('cart');
    }

    public function delete($id)
    {
        $cart = Cart::findOrFail($id);
        if ($cart->delete()) {
            return redirect()->back();
        }

        return redirect()->back();
    }
}
