<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\City;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Http\Controllers\Controller as Controller;


class CitiesController extends Controller
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
        $cities = City::where('name', 'LIKE', '%'.$q.'%')
        ->orderBy('name')->paginate(10);
        return view('admin.cities.index', compact('cities', 'q'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cities.create');
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
          'city_id' => 'required',
          'detail' => 'required',
      ]);
      $data = $request->only('name', 'city_id', 'detail');
      $data['user_id'] =
      $city = City::create($data);
      flash($city->name . ' saved.')->success()->important();
      return redirect()->route('admin.cities.index');
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
        $city = City::findOrFail($id);
        return view('admin.cities.edit', compact('city'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        $city = City::findOrFail($id);
        $this->validate($request, [
            'name' => 'required|unique:cities',
            'province_id' => 'required|integer',
        ]);
        $data = $request->only('name', 'province_id');
        $data['id'] = City ::orderBy('id', 'desc')->first()->id + 1;
        $city->update($data);
        flash($city->name . ' updated.')->success()->important();
        return redirect()->route('admin.cities.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = City::find($id);
        $city->delete();
        flash($city->name . ' deleted.')->success()->important();
        return redirect()->route('admin.cities.index');
    }

}
