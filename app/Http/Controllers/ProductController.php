<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Property;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    const PER_PAGE = 40;

    public function index(Request $request): View
    {
        $properties = json_decode(urldecode($request->query('properties')), true);

        return view('products.index', [
            'products' => Product::query()->filter($properties)->paginate(self::PER_PAGE),
            'properties' => Property::all(),
        ]);
    }
}
