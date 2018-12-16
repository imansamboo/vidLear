<?php

namespace App\Http\Controllers\Admin;

use App\Province;
use Illuminate\Http\Request;
use App\Fee;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Http\Controllers\Controller as Controller;


class FeesController extends Controller
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
        $fees = Fee::where('destination', 'LIKE', '%'.$q.'%')
            ->orderBy('destination')->paginate(10);
        return view('admin.fees.index', compact('fees', 'q'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fees.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

      $this->validate($request, [
          'destination' => 'required|unique:provinces',
          'cost' => 'required|integer',
      ]);
      $data = $request->only('destination', 'cost');
      $data['origin'] = Province::where('name', '=', 'تهران')->get()[0]->id;
      $data['id'] = intval(Fee ::orderBy('id', 'desc')->first()->id) + 1;
      $fee = Fee::create($data);
      flash($fee->name . ' saved.')->success()->important();
      return redirect()->route('admin.fees.index');
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
        $fee = Fee::findOrFail($id);
        return view('admin.fees.edit', compact('fee'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        $fee = Fee::findOrFail($id);
        $this->validate($request, [
            'destination' => 'required',
            'cost' => 'required|integer',
        ]);
        $data = $request->only('destination', 'cost');
        $data['origin'] = Province::where('name', '=', 'تهران')->get()[0]->id;
        $fee->update($data);
        flash($fee->name . ' updated.')->success()->important();
        return redirect()->route('admin.fees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fee = Fee::find($id);
        $fee->delete();
        flash($fee->name . ' deleted.')->success()->important();
        return redirect()->route('admin.fees.index');
    }

}
