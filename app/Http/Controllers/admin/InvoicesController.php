<?php

namespace App\Http\Controllers\Admin;

use App\Address;
use App\Fee;
use App\InvoiceItem;
use Illuminate\Http\Request;
use App\Invoice;
use App\Product;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller as Controller;



class InvoicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->get('q');
        $invoices = Invoice::where('id', 'LIKE', '%'.$q.'%')
            ->orderBy('id')->paginate(10);
        return view('admin.invoices.index', compact('invoices', 'q'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.invoices.create');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        if(0){

        }else{
            $this->validate($request, [
                'user_id' => 'required|exists:users,id',
                'product_id' => 'required|exists:products,id',
                'quantity' => 'required',
                'address_id' => 'required|exists:addresses,id',
                'status' => 'required',
            ]);
            $invoiceData = $request->only('user_id', 'address_id', 'status');
            $invoiceData['fee'] = number_format(
                (float)Fee::where(
                    'destination',
                    '=',
                    Address::find($request['address_id'])->city->province->id
                )->get()[0]->cost,
                2,
                '.',
                '');
            $invoice = Invoice::create($invoiceData);
            $invoiceItemData = $request->only('user_id', 'product_id', 'quantity', 'taxed');
            $invoiceItemData['price'] = Product::find($request['product_id'])->price;
            $invoiceItemData['invoice_id'] = $invoice->id;
            InvoiceItem::create($invoiceItemData);
            return $this->finalStore($invoice->id);

        }


    }


    /**
     * @param $invoice_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function finalStore($invoice_id)
    {
        $invoiceInsert = array();
        $invoiceInsert['sub_total_payment'] = 0;
        $invoiceInsert['tax_payment'] = 0;
        $invoiceInsert['total_payment'] = 0;
        $invoice = Invoice::find($invoice_id);
        $invoiceItems = $invoice->items;
        foreach ($invoiceItems as $invoiceItem){
            $invoiceInsert['sub_total_payment'] +=  $invoiceItem->quantity * $invoiceItem->price;
            $invoiceInsert['tax_payment'] +=  ($invoiceItem->taxed == 1) ?
                                                                            $invoiceItem->quantity * 0.09*$invoiceItem->price
                                                                         :  0.00;
            $invoiceInsert['total_payment'] +=  ($invoiceItem->taxed == 1)?
                                                                            ( $invoiceItem->quantity * 1.09*$invoiceItem->price) + $invoice->fee
                                                                          : ( $invoiceItem->quantity * $invoiceItem->price);
        }
        $invoice['total_payment'] +=  $invoice->fee;
        (Invoice::find($invoice_id))->update(
            array(
                'sub_total_payment' => $invoiceInsert['sub_total_payment'],
                'tax_payment' => $invoiceInsert['tax_payment'],
                'total_payment' => $invoiceInsert['total_payment'] + $invoice->fee,
            )
        );
        return $this->show($invoice_id);

    }


    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        flash('invoice id: ' . $id . ' saved.')->success()->important();
        return view('admin.invoices.view', ['invoice' => Invoice::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('admin.invoices.edit', compact('invoice'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        $invoice = Invoice::findOrFail($id);
        $this->validate($request, [
            'name' => 'required',
            'detail' => 'required',
            'city_id' => 'required|integer|exists:cities,id',
        ]);
        $data = $request->only('name', 'city_id', 'detail');
        $invoice->update($data);
        flash($invoice->name . ' updated.')->success()->important();
        return redirect()->route('admin.invoices.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice = Invoice::find($id);
        $invoice->delete();
        flash($invoice->name . ' deleted.')->success()->important();
        return redirect()->route('admin.invoices.index');
    }
}
