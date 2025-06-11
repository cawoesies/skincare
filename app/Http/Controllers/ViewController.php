<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 

class ViewController extends Controller
{
    public function landingPage() {
        return view('skincare.landing-page');
    }
    
    public function home() {
        return view('skincare.home');
    }
    
    public function admin() {
        return view('skincare.admin');
    }

    public function produk()
    {
    $products = Product::all(); // Ambil semua produk dari database
    return view('auth.produk', compact('products')); // Kirim ke view
    }

    public function skincare()
    {
        $products = Product::all();
        return view('skincare.skincare', compact( 'products'));
    }

    public function showProduct($id)
    {
        $product = Product::findOrFail($id);
        return view('skincare.beli', compact('product'));
    }


    public function aboutUs()
    {
        return view('skincare.about-us');
    }

    public function ingredients()
    {
        return view('skincare.ingredients');
    }
}
