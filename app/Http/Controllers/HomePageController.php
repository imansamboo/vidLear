<?php

namespace App\Http\Controllers;

use App\CategoryProduct;
use App\ProductVideo;
use App\Rating;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Favor;
use App\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

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
            )
        );
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
        $categories = Category::all();
        return view('index', compact('products', 'q', 'categories'));
    }


    /**
     * @param $category_id
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function indexProductsOfCategory($category_id, Request $request)
    {
        $categories = Category::all();
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
        return view('indexCatPro', ['productContainer' => $productContainer, 'categoryId' => $category_id, 'categories' => $categories]);
    }

    /**
     * @param $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewProduct($product)
    {
        $isFavored = 0;
        $rating = 0;
        $totalDuration = 0;
        $videos = array();
        $averageRate = "بدون رای";
        if(Auth::user()){
            $count = Favor::where('user_id', '=', Auth::user()->id)->where('product_id', '=', $product)->count();
            if($count > 0){
                $isFavored = Favor::where('user_id', '=', Auth::user()->id)->where('product_id', '=', $product)->get()[0]->isFavored;
            }
            $count = Rating::where('user_id', '=', Auth::user()->id)->where('product_id', '=', $product)->count();
            if($count > 0){
                $rating = Rating::where('user_id', '=', Auth::user()->id)->where('product_id', '=', $product)->get()[0]->rating;
            }
        }
        $voterCount = Rating::where('product_id', '=', $product)->count();
        if($voterCount > 0){
            $ratings = Rating::where('product_id', '=', $product)->get();
            $averageRate = 0;
            foreach ($ratings as $value){
                $averageRate += $value->rating;
            }
            $averageRate = $averageRate/$voterCount;
        }
        $videoCount = ProductVideo::where('product_id', '=', $product)->count();
        if($videoCount > 0){
            $videos = ProductVideo::where('product_id', '=', $product)->get();
            foreach ($videos as $video){
                $totalDuration += $video->duration;
            }
        }
        $categories = Category::all();
        $product = Product::where('id', '=', $product)->first();
        if(count($product->categories) > 0){
            $catId = $product->categories[0]->id;
            $products = Category::find($catId)->products;
        }else{
            $products = Product::all();
        }
        $relatedProducts = array();
        $i = 0;
        foreach ($products as $value){
            if($value->id != $product->id && $i < 100){
                $relatedProducts[] = $value;
                $i++;
            }
        }
        $products = array();

        $count = count($relatedProducts) - 1;
        for($i=0; 3*$i < $count; $i++){
            $innerProducts = array();
            for($j=0; $j<3; $j++){
                if(isset($relatedProducts[3*$i + $j]))
                $innerProducts[] = $relatedProducts[3*$i + $j];
            }
            $products[] = $innerProducts;
        }
        return view('view',
            array(
                'product' => $product ,
                'products' => $products ,
                'categories' => $categories,
                'isFavored'=> $isFavored,
                'rating' => $rating,
                'videos' => $videos,
                'videoCount' => $videoCount,
                'totalDuration' => $totalDuration,
                'voterCount' => $voterCount,
                'averageRate' => $averageRate,
            )
        );
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
