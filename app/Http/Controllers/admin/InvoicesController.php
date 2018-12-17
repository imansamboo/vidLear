<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Invoice;
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
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|unique:invoices',
            'detail' => 'required',
            'city_id' => 'required|integer|exists:cities,id',
        ]);
        $data = $request->only('name', 'city_id', 'detail');
        $data['user_id'] = Auth::user()->id;
        $invoice = Invoice::create($data);
        flash($invoice->name . ' saved.')->success()->important();
        return redirect()->route('admin.invoices.index');
    }

    /**
     * @param $id
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
