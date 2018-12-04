<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;

class ProvincesController extends Controller
{
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
        $provinces = Province::where('name', 'LIKE', '%'.$q.'%')
            ->orderBy('name')->paginate(10);
        return view('provinces.index', compact('provinces', 'q'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('provinces.create');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    private function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|unique:provinces',
        ]);
        $data = $request->only('name');
        $province = Province::create($data);
        flash($province->name . ' saved.')->success()->important();
        return redirect()->route('provinces.index');
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
        $province = Province::findOrFail($id);
        return view('provinces.edit', compact('province'));
    }


    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        $province = Province::findOrFail($id);
        $this->validate($request, [
            'name' => 'required|unique:provinces',
        ]);
        $data = $request->only('name');
        $province->update($data);
        flash($province->name . ' updated.')->success()->important();
        return redirect()->route('provinces.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $province = Province::find($id);
        $province->delete();
        flash($province->name . ' deleted.')->success()->important();
        return redirect()->route('provinces.index');
    }
}
