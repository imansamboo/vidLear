<?php

namespace App\Http\Controllers;

use App\Category;
use App\ProductVideo;
use App\Rating;
use App\Favor;
use Illuminate\Http\Request;
use App\PtOrder;
use App\Product;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller as Controller;
use mysql_xdevapi\Exception;


class Invoices2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('invoices.create');
    }


    /**
     * @param Request $request
     * @param null $id
     * @param null $productId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function store(Request $request, $id = null)
    {

        $invoice = PtOrder::find($id);
        $invoice->payment_result = $_POST['payment_result'];
        $invoice->au = $_POST['au'];
        $invoice->save();
        $product = Product::find($invoice->product_id);
        $product->update(
            array(
                'total_sell_price' => $invoice->price + $product->total_sell_price,
                'total_sell_amount' => 1 + $product->total_sell_amount,
            )
        );

        return $this->viewProduct($product->id, $_POST['payment_result']);


    }

    public function firstStore(Request $request, $productId = null)
    {
        $count = PtOrder::where('user_id', '=', Auth::user()->id)->where('product_id', '=', $productId)->count();
        if($count > 0){
            $invoice = PtOrder::where('user_id', '=', Auth::user()->id)->where('product_id', '=', $productId)->get()[0];
            return view('peymentInvoice', ['id' => $invoice->id, 'price' => $invoice->price]);
        }
        $date = new \jDateTime(true, true, 'Asia/Tehran');
        $shamsiDate = $date->date("j F Y H:i");
        $product = Product::find($productId);
        $invoice = PtOrder::create(
            array(
                'user_id' => Auth::user()->id,
                'price' => ((100 - $product->discount)/100)*$product->price,
                'product_id' => $productId,
                'date' =>  date("Y-m-d",time()),
                'shamsi_date' => $shamsiDate,
                'payment_result' => null,
                'au' => null,
            )
        );
        return view('peymentInvoice', ['id' => $invoice->id, 'price' => $invoice->price]);

    }

    public function viewProduct($product, $result)
    {
        if(Product::find($product)->isPublish == 0)
            throw new \Exception('you can\'t access to this product');
        $isFavored = 0;
        $rating = 0;
        $totalDuration = 0;
        $videos = array();
        $averageRate = "بدون رای";
        $productBuy = false;
        if(Auth::user()){
            $count = Favor::where('user_id', '=', Auth::user()->id)->where('product_id', '=', $product)->count();
            if($count > 0){
                $isFavored = Favor::where('user_id', '=', Auth::user()->id)->where('product_id', '=', $product)->get()[0]->isFavored;
            }
            $count = Rating::where('user_id', '=', Auth::user()->id)->where('product_id', '=', $product)->count();
            if($count > 0){
                $rating = Rating::where('user_id', '=', Auth::user()->id)->where('product_id', '=', $product)->get()[0]->rating;
            }
            $count = PtOrder::where('user_id', '=', Auth::user()->id)->where('product_id', '=', $product)->count();
            if($count > 0){
                $buyStatus = PtOrder::where('user_id', '=', Auth::user()->id)->where('product_id', '=', $product)->get()[0]->payment_result;
                if($buyStatus == 0){
                    $productBuy = true;
                }
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
                'productBuy' => $productBuy,
                'result' => $result,
            )
        );
    }

}
