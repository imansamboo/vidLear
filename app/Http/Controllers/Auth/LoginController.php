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
        error_log("constructed", 3, '/var/www/html/logs.log');
        $this->middleware('guest')->except('logout');
    }

    protected function username() {
        return 'email';
    }

    public function login(Request $request)
    {
        $mobile = $request->only('mobile')['mobile'];
        //error_log(var_export($mobile, 1), 3, '/var/www/html/logs.log');
        $email = '';
        try{
            error_log($mobile, 3, '/var/www/html/mobile.log');
            $email = User::where('mobile', '=', $mobile)->get()[0]->email;
        }catch(Exception $e){

        }
        $credentials = array_merge(array('email' => $email) ,$request->only( 'password'));
        //error_log(var_export($credentials, 1), 3, '/var/www/html/logs.log');
        $authSuccess = Auth::attempt($credentials, $request->has('remember'));

        if($authSuccess) {
            $request->session()->regenerate();
            return response(['success' => true,'isAdmin' => Auth::user()->isAdmin == 1]);
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

    /**
     * @param Request $request
     */
    public function resetPassword(Request $request)
    {
        if(isset($_POST['mobile'])){
            if(User::where('mobile' , '=', $request->post('mobile'))->count() > 0 ){
                $user = User::where('mobile' , '=', $request->post('mobile'))->get()[0];
                $user->last_sent_sms_code = 123456;
                $user->save();
                header('HTTP/1.1 200 OK');
                echo json_encode(['success' => true , 'userId' => $user->id]);
            }else{
                throw new Exception('phone number does not exist');
            }

        }
    }

    /**
     * @param Request $request
     */
    public function checkReset(Request $request)
    {
        if(isset($_POST['last_sent_sms_code']) && isset($_POST['userId']) && isset($_POST['password'])){
            if(User::where('id' , '=', $request->post('userId'))->count() > 0 ){
                $user = User::where('id' , '=', $request->post('userId'))->get()[0];
                if($user->last_sent_sms_code == $request->post('last_sent_sms_code')){
                    $user->password = Hash::make($request->post('password'));
                    $user->save();
                    header('HTTP/1.1 200 OK');
                    echo json_encode(['success, true']);
                }
            }else{
                throw new Exception('phone number does not exist');
            }

        }
    }

}
