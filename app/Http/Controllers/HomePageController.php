<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class HomePageController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'homepage',
            array(
                'categories' => Category::limit(7)->get(),
                'products' => Product::all(),

            ));
    }

    public function indexPoduct()
    {
        return view(
            'homepage',
            array(
                'categories' => Category::limit(7)->get(),
                'products' => Product::all(),

            ));
    }
}
