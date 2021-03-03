<?php

namespace App\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Contracts\View\View;

class HomepageController extends Controller
{
    /**
     * Show the homepage
     *
     */
    public function homepage(): View
    {
        return view('homepage', [
            'products' => Product::where('active', '=', true)->get()
        ]);
    }
}
