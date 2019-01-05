<?php
/**
 * Created by PhpStorm.
 * User: iman
 * Date: 12/31/18
 * Time: 6:17 PM
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use File;

class UsersController extends Controller
{


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update(Request $request)
    {
        $error = array();
        $updateArray = array();
        $user = Auth::user();
        /*this->validate($request, [
            'name' => 'required',
            'email' => 'email',
            'photo' => 'mimes:jpeg,png,jpg|max:10000240',
            'price' => 'required|numeric|min:1000',
            'new-password' => 'min:4',
        ]);*/
        if ($request->hasFile('photo')) {
            $updateArray['photo'] = $this->savePhoto($request->file('photo'));
            if ($user->photo !== '') $this->deletePhoto($user->photo);
        }
        if(isset($_POST['new-password'])  && isset($_POST['new-password-confirm'])){
            if($_POST['new-password'] == $_POST['new-password-confirm']){
                $user = Auth::user();
                $user->password = Hash::make($_POST['new-password']);
                $user->save();

            }else{
                $error = ['هم خوانی  پسوردها چک شود'];
                return view('settings')->with('user' ,User::find(Auth::user()->id))->with( 'error', $error)->with('categories' , Category::all());
            }
        }
        $inputArray = [
            "name",
            "email",
            "day",
            "month",
            "year",
            "job",
            "bio",
            "site",
            "telegram",
            "linkedin",
            "twitter",
            "facebook",
            "instagram",
        ];
        foreach ($inputArray as $input){
            if(isset($_POST[$input])){
                if($input == 'bio'){
                    $updateArray = array_merge($updateArray, ['bio' => htmlentities($_POST['bio'])]);
                }else{
                    $updateArray = array_merge($updateArray, $request->only($input));
                }
            }
        }
        $user = User::find(Auth::user()->id);
        $user->update(
            $updateArray
        );
        return  view('settings')->with('user' ,$user)->with( 'error', $error)->with('categories' , Category::all());
    }

    /**
     * @param UploadedFile $photo
     * @return string
     */
    protected function savePhoto(UploadedFile $photo)
    {
        $fileName = str_random(40) . '.' . $photo->guessClientExtension();
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'pics';
        $photo->move($destinationPath, $fileName);
        return $fileName;
    }

    /**
     * @param $filename
     * @return mixed
     */
    public function deletePhoto($filename)
    {
        $path = public_path() . DIRECTORY_SEPARATOR . 'pics'
            . DIRECTORY_SEPARATOR . $filename;
        return File::delete($path);
    }

}