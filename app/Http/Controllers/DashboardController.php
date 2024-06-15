<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $userCounts = User::count();

        return view('dashboard.index', compact('userCounts'));
    }
}