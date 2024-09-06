<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    const PER_PAGE = 40;

    public function index(): View
    {
        return view('products.index', [
            'products' => Product::query()->paginate(self::PER_PAGE),
        ]);
    }
}
