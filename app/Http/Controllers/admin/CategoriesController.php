<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Controllers\Controller as Controller;
use File;
use Symfony\Component\HttpFoundation\File\UploadedFile;



class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('role:admin');
    }

    /**
     * @param UploadedFile $photo
     * @return string
     */
    protected function savePhoto(UploadedFile $photo)
    {
        $fileName = str_random(40) . '.' . $photo->guessClientExtension();
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
        $photo->move($destinationPath, $fileName);
        return $fileName;
    }

    /**
     * @param $filename
     * @return mixed
     */
    public function deletePhoto($filename)
    {
        $path = public_path() . DIRECTORY_SEPARATOR . 'img'
            . DIRECTORY_SEPARATOR . $filename;
        return File::delete($path);
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
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255|unique:categories',
            'description' => 'required|string|unique:categories',
            'photo' => 'mimes:jpeg,png,jpg|max:10000240',
        ]);
        $data = $request->only('title','description');
        if ($request->hasFile('photo')) {
            $data['photo'] = $this->savePhoto($request->file('photo'));
        }
        Category::create($data);
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
                'description' => 'required|string',
                'photo' => 'mimes:jpeg,png,jpg|max:10000240',
            ]);
            $data = $request->only('name', 'description');
            if ($request->hasFile('photo')) {
                $data['photo'] = $this->savePhoto($request->file('photo'));
                if ($category->photo !== '') $this->deletePhoto($category->photo);
            }
            $category->update($data);
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
        $category = Category::find($id);
        if ($category->photo !== '') $this->deletePhoto($category->photo);
        $category->delete();
        flash($request->get('title') . ' category deleted.')->success()->important();
        return redirect()->route('admin.categories.index');
    }

}
