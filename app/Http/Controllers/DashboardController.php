<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        
        return view('dashboard', [
            'products' => Product::all(),
            'categories' => Category::all()
        ]);
    }
}
