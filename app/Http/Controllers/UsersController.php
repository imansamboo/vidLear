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
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\Hash;


class UsersController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request)
    {
        if(isset($_POST['new-password'])  && isset($_POST['new-password-confirm'])){
            if($_POST['new-password'] == $_POST['new-password-confirm']){
                $user = Auth::user();
                $user->password = Hash::make($_POST['new-password']);
                $user->save();

            }
        }
        $updateArray = array();
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
                $updateArray = array_merge($updateArray, $request->only($input));
            }
        }
        $user = User::find(Auth::user()->id);
        $user = $user->update(
            $updateArray
        );
        return redirect(url('/settings'))->with(['user' => $user]);
    }

}