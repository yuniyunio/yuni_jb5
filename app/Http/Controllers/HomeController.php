<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Import model Product

class HomeController extends Controller
{
    public function index()
    {
        // Ambil semua produk dari tabel products
        $products = Product::all();
        
        // Kembalikan tampilan dengan data produk
        return view('welcome', ['products' => $products]);
    }
}
