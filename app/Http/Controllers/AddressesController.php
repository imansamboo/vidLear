<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Regency;
use App\Address;

class AddressesController extends Controller
{
    public function regencies(Request $request)
    {
        $this->validate($request, [
            'province_id' => 'required|exists:provinces,id'
        ]);

        return Regency::where('province_id', $request->get('province_id'))
            ->get();
    }

    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('role:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->get('q');
        $addresses = Address::where('name', 'LIKE', '%'.$q.'%')
            ->orderBy('name')->paginate(10);
        return view('addresses.index', compact('addresses', 'q'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addresses.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|unique:addresses',
            'detail' => 'required',
            'city_id' => 'required|integer|exists:cities,id',
        ]);
        $data = $request->only('name', 'province_id');
        $data['id'] = mt_rand(1000,2000);
        $address = Address::create($data);
        flash($address->name . ' saved.')->success()->important();
        return redirect()->route('addresses.index');
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
        $address = Address::findOrFail($id);
        return view('addresses.edit', compact('address'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        $address = Address::findOrFail($id);
        $this->validate($request, [
            'name' => 'required|unique:addresses',
            'province_id' => 'required|integer',
        ]);
        $data = $request->only('name', 'province_id');
        $data['id'] = Address ::orderBy('id', 'desc')->first()->id + 1;
        $address->update($data);
        flash($address->name . ' updated.')->success()->important();
        return redirect()->route('addresses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $address = Address::find($id);
        $address->delete();
        flash($address->name . ' deleted.')->success()->important();
        return redirect()->route('addresses.index');
    }
}
