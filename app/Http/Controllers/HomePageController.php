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
        $products = array();
        $count = Product::count();
        for($i = 0; 4 * $i < $count-5 && 4 * $i < 36; $i++){
            $products[]= Product::offset(4*$i)->limit(4)->get();
        }
        return view(
            'homepage',
            array(
                'categories' => Category::limit(7)->get(),
                'products' => $products,
            ));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function indexProducts(Request $request)
    {
        $q = $request->get('q');
        $products = Product::where('name', 'LIKE', '%'.$q.'%')
            ->orderBy('name')->paginate(16);
        return view('index', compact('products', 'q'));
    }


    /**
     * @param $category_id
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function indexProductsOfCategory($category_id, Request $request)
    {
        $q = $request->get('q');
        $products = Category::where('id', '=', $category_id)
            ->get()[0]
            ->products;
        $count = count($products);
        $productContainer = array();
        for($i = 0;  4*$i < $count; $i++){
            $productsArray = array();
            for($j=0; $j < 4; $j++){
                if(isset($products[4*$i + $j]))
                $productsArray[]= $products[4*$i + $j];
            }
            $productContainer[] = $productsArray;
        }
        return view('indexCatPro', ['productContainer' => $productContainer]);
    }

    /**
     * @param $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewProduct($product)
    {
        $product = Product::where('id', '=', $product)->first();
        return view('view', array('product' => $product ));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function indexCategories(Request $request)
    {
        $q = $request->get('q');
        $categories = Category::where('title', 'LIKE', '%'.$q.'%')
            ->orderBy('title')->paginate(16);
        return view('indexCategories', compact('categories', 'q'));
    }

}
