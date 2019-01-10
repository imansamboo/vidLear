<?php

namespace App\Http\Controllers;

use App\Address;
use App\Fee;
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
        return redirect(url('/products/' . $invoice->product_id ));


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

}
