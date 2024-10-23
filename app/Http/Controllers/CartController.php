<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart()
    {
        if (Auth::check()) {
            $cart = Auth::user()->cart;
            if (!$cart) {
                $cart = Cart::create(['user_id' => Auth::id()]);
            }
            return view('cart', compact('cart'));  // Trỏ tới cart.blade.php
        } else {
            return redirect()->route('login')->with('error', 'Vui lòng đăng nhập để xem giỏ hàng.');
        }
    }

    public function addToCart(Request $request, $productId)
    {
        try {
            $product = Products::findOrFail($productId);

            if (Auth::check()) {
                $quantity = $request->input('quantity', 1);

                // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
                $cartItem = Cart::where('user_id', Auth::id())
                    ->where('product_id', $productId)
                    ->first();

                if ($cartItem) {
                    // Nếu có, cập nhật số lượng
                    $cartItem->quantity += $quantity;
                    $cartItem->save();
                } else {
                    // Nếu chưa, tạo mới
                    Cart::create([
                        'user_id' => Auth::id(),
                        'product_id' => $productId,
                        'quantity' => $quantity,
                    ]);
                }

                return redirect()->route('cart')->with('success', 'Sản phẩm đã được thêm vào giỏ hàng!');
            } else {
                return redirect()->route('login')->with('error', 'Vui lòng đăng nhập để thêm sản phẩm vào giỏ hàng.');
            }
        } catch (\Exception $e) {
            return redirect()->route('cart')->with('error', 'Có lỗi xảy ra: ' . $e->getMessage());
        }
    }


    public function updateCart(Request $request, $productId)
    {
        if (Auth::check()) {
            $cartItem = Cart::where('user_id', Auth::id())
                ->where('product_id', $productId)
                ->first();

            if ($cartItem) {
                $quantity = $request->input('quantity', 1);

                if ($quantity <= 0) {
                    $cartItem->delete(); // Xóa sản phẩm nếu số lượng <= 0
                } else {
                    $cartItem->quantity = $quantity;
                    $cartItem->save();
                }
            }

            return redirect()->route('cart')->with('success', 'Số lượng sản phẩm đã được cập nhật!');
        } else {
            return redirect()->route('login')->with('error', 'Vui lòng đăng nhập để cập nhật giỏ hàng.');
        }
    }



    public function removeFromCart($productId)
    {
        if (Auth::check()) {
            $cartItem = Cart::where('user_id', Auth::id())
                ->where('product_id', $productId)
                ->first();

            if ($cartItem) {
                $cartItem->delete();
            }

            return redirect()->route('cart')->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng!');
        } else {
            return redirect()->route('login')->with('error', 'Vui lòng đăng nhập để xóa sản phẩm khỏi giỏ hàng.');
        }
    }


}
