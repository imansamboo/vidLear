<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
use mysql_xdevapi\Exception;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/homepage';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        sleep(1);
        $this->middleware('guest')->except('logout');
    }

    protected function username() {
        return 'email';
    }

    public function login(Request $request)
    {
        $mobile = $request->only('mobile')['mobile'];
        //error_log(var_export($mobile, 1), 3, __DIR__ .'/logs.log');
        $email = '';
        try{
            $email = User::where('mobile', '=', $mobile)->get()[0]->email;
        }catch(Exception $e){

        }
        if($email = User::where('mobile', '=', $mobile)->get()[0]->sms_varified != 1){
            return response([
                'success' => false,
                'sms_varified' => User::where('mobile', '=',$mobile)->get()[0]->sms_varified == 1 ,
                'mes' => 'شماره تلفن همراه شما ارزیابی نشده است، از گزینه فرموشی رمز عبور استفاده نمایید.']);
            exit();
        }
        $credentials = array_merge(array('email' => $email) ,$request->only( 'password'));
        //error_log(var_export($credentials, 1), 3, __DIR__ .'/logs.log');
        $authSuccess = Auth::attempt($credentials, $request->has('remember'));

        if($authSuccess) {
            $request->session()->regenerate();
            return response([
                'success' => true,
                'isAdmin' => Auth::user()->isAdmin == 1,
                'sms_varified' => User::where('mobile', '=',$mobile)->get()[0]->sms_varified == 1 ,
            ]);
        }

        return
            response(['success' => false,]);
    }
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/homepage');
    }

}
