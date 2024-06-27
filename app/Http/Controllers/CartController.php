<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\CartProduct;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $cartItems = session()->get('cart', []);
        $totalItems = count($cartItems);
        return view('cart.index', compact('cartItems', 'totalItems'));
    }

    public function destroy($id)
    {
        // Xóa sản phẩm khỏi giỏ hàng
        $cartItems = session()->get('cart', []);
        unset($cartItems[$id]);
        session()->put('cart', $cartItems);




        return redirect()->route('cart.index')->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng.');
    }

    public function create(Request $request, $id)
    {
        $product = Product::find($id);
        $cart = session()->get('cart');
        if (!$cart) {
            $cart = [
                $id => [
                    'id' => $product->id,
                    'name' => $product->name,
                    'quantity' => 1,
                    'price' => $product->price,
                    "image" => $product->image

                ]
            ];
        } else {
            // Nếu sản phẩm đã có trong giỏ hàng, tăng số lượng
            if (isset($cart[$id])) {
                $cart[$id]['quantity']++;
            } else {
                // Nếu sản phẩm chưa có trong giỏ hàng, thêm mới
                $cart[$id] = [
                    'id' => $product->id,
                    'name' => $product->name,
                    'quantity' => 1,
                    'price' => $product->price,
                    "image" => $product->image

                    // Thêm các trường khác nếu cần
                ];
            }
        }
        session()->put('cart', $cart);
        $data = session()->get('cart');
        // dd($data);
        return redirect()->route('show.product-dasboard');
    }

    public function placeOrder()
    {

        // dd(session()->all());
        // Lấy dữ liệu giỏ hàng từ session
        $cartItems = session()->get('cart', []);

        if (empty($cartItems)) {
            return redirect()->route('cart.index')->with('error', 'Giỏ hàng trống.');
        }

        // Tạo một bản ghi mới trong bảng carts
        $cart = Cart::create([
            'user_id' => Auth::id(), // Giả sử người dùng đã đăng nhập
            'status' => 'Pending',
            'buy_at' => now(),
            'final_total' => array_sum(array_column($cartItems, 'price')) // Tổng giá tiền
        ]);

        // Tạo các bản ghi mới trong bảng cart_products
        foreach ($cartItems as $item) {
            CartProduct::create([
                'cart_id' => $cart->id,
                'product_id' => $item['id'],
                'quantity' => $item['quantity'],
                'total_product' => $item['price'] * $item['quantity']
            ]);
        }

        // Xóa giỏ hàng khỏi session sau khi đặt hàng thành công
        session()->forget('cart');

        return response()->json([
            'message' => 'Đặt hàng thành công.'
        ]);
    }
}
