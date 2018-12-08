<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Category;
use Flash;
use App\Http\Controllers\Controller as Controller;



class CategoriesController extends Controller
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
      $categories = Category::where('title', 'LIKE', '%'.$q.'%')->orderBy('title')->paginate(5);
      return view('admin.categories.index', compact('categories', 'q'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
          'title' => 'required|string|max:255|unique:categories',
          'description' => 'required|string|unique:categories',
      ]);
      Category::create($request->all());
      flash($request->get('title') . ' category saved.')->success()->important();
      return redirect()->route('admin.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return void
     */
    private function show($id)
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
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    /*
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
        public function update(Request $request, $id)
        {
            $category = Category::findOrFail($id);
            $this->validate($request, [
                'title' => 'required|string|max:255|unique:categories,title,' . $category->id,
                'description' => 'required|string'
            ]);
            $category->update($request->all());
            flash($request->get('title') . ' category updated.')->success()->important();
            return redirect()->route('admin.categories.index');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Category::find($id)->delete();
        flash($request->get('title') . ' category deleted.')->success()->important();
        return redirect()->route('admin.categories.index');
    }
}
