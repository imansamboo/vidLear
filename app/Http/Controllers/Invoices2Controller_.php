<?php

namespace App\Http\Controllers;

use App\Address;
use App\Fee;
use Illuminate\Http\Request;
use App\Invoice2;
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

        $invoice = Invoice2::find($id);
        $invoice->status = $_POST['status'];
        $invoice->save();
        return redirect(url('/products/' . $invoice->product_id ));


    }

    public function firstStore(Request $request, $productId = null)
    {
        $count = Invoice2::where('user_id', '=', Auth::user()->id)->where('product_id', '=', $productId)->count();
        if($count > 0){
            $invoice = Invoice2::where('user_id', '=', Auth::user()->id)->where('product_id', '=', $productId)->get()[0];
            return view('peymentInvoice', ['id' => $invoice->id, 'price' => $invoice->price]);
        }

        $product = Product::find($productId);
        $invoice = Invoice2::create(
            array(
                'user_id' => Auth::user()->id,
                'price' => ((100 - $product->discount)/100)*$product->price,
                'product_id' => $productId,
            )
        );
        return view('peymentInvoice', ['id' => $invoice->id, 'price' => $invoice->price]);

    }

}
