<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;

class ProviencesController extends Controller
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
        $proviences = Province::where('name', 'LIKE', '%'.$q.'%')
            ->orderBy('name')->paginate(10);
        return view('proviences.index', compact('proviences', 'q'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proviences.create');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    private function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|unique:proviences',
        ]);
        $data = $request->only('name');
        $provience = Province::create($data);
        flash($provience->name . ' saved.')->success()->important();
        return redirect()->route('proviences.index');
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
        $provience = Province::findOrFail($id);
        return view('proviences.edit', compact('provience'));
    }


    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        $provience = Province::findOrFail($id);
        $this->validate($request, [
            'name' => 'required|unique:proviences',
        ]);
        $data = $request->only('name');
        $provience->update($data);
        flash($provience->name . ' updated.')->success()->important();
        return redirect()->route('proviences.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provience = Province::find($id);
        $provience->delete();
        flash($provience->name . ' deleted.')->success()->important();
        return redirect()->route('proviences.index');
    }
}
