<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\Cart;

class DashboardController extends Controller
{
    public function index()
    {
        $userCounts = User::count();
        $categoryCounts = Category::count();
        $productCounts = Product::count();
        $orderCounts = Cart::count();


        return view('dashboard.index', compact('userCounts', 'categoryCounts', 'productCounts', 'orderCounts'));
    }

    public function logout()
    {

        Auth::logout();
        return redirect()->route('login');
    }
}
