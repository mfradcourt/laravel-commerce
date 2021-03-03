<?php

namespace App\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class HomepageController extends Controller
{
    /**
     * Show the homepage
     *
     * @return View
     */
    public function homepage()
    {
        return view('homepage', [
            'products' => \App\Models\Product::get()
        ]);
    }
}
