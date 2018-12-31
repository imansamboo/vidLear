<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\ProductVideo;
use App\Product;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use File;
use App\Http\Controllers\Controller as Controller;


class VideosController extends Controller
{
    protected function saveVideo(UploadedFile $photo)
    {
        $fileName = str_random(40) . '.' . $photo->guessClientExtension();
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'videos';
        $photo->move($destinationPath, $fileName);
        return $fileName;
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
        $productVideos = ProductVideo::where('title', 'LIKE', '%'.$q.'%')
        ->orderBy('name')->paginate(10);
        return view('admin.videos.index', compact('productVideos', 'q'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.videos.create');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

      $this->validate($request, [
          'title' => 'required|unique:product_videos',
          'product_id' => 'required|exists:products',
          'video' => 'required',
      ]);
      $data = $request->only('title', 'product_id', 'duration');

      if ($request->hasFile('video')) {
          $data['photo'] = $this->saveVideo($request->file('video'));
      }

      $productVideo = ProductVideo::create($data);
      flash($productVideo->name . ' saved.')->success()->important();
      return redirect()->route('admin.videos.index');
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

    }


    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productVideo = ProductVideo::find($id);
        if ($productVideo->video !== '') $this->deleteVideo($productVideo->video);
        $productVideo->delete();
        flash($productVideo->title . ' deleted.')->success()->important();
        return redirect()->route('admin.videos.index');
    }

    /**
     * @param $filename
     * @return mixed
     */
    public function deleteVideo($filename)
    {
        $path = public_path() . DIRECTORY_SEPARATOR . 'videos'
            . DIRECTORY_SEPARATOR . $filename;
        return File::delete($path);
    }
}
