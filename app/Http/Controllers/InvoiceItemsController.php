<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\InvoiceItem;
use App\Invoice;
use App\Product;
use App\Http\Controllers\Controller as Controller;

class InvoiceItemsController extends Controller
{
    /**
     * InvoiceItemsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($invoice_id)
    {
        return view('admin.invoiceItems.create', ['invoice_id' => $invoice_id]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer',
        ]);
        $invoiceItemData = $request->only('product_id', 'quantity', 'taxed', 'invoice_id');
        $invoiceItemData['price'] = Product::find($invoiceItemData['product_id'])->price;
        $invoiceItemData['user_id'] = Invoice::find($invoiceItemData['invoice_id'])->user_id;
        InvoiceItem::create($invoiceItemData);
        return (new InvoicesController())->finalStore($invoiceItemData['invoice_id']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function destroy($id)
    {
        $invoice_id = InvoiceItem::find($id)->invoice->id;
        $invoiceItem = InvoiceItem::find($id);
        $invoiceItem->delete();
        if(Invoice::find($invoice_id)->items->count() == 0 )
            return (new InvoicesController())->destroy($invoice_id);
        return (new InvoicesController())->finalStore($invoice_id);
    }
}
