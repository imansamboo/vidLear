<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request as Request;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/verify';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        sleep(1);
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $data['mobile'] = intval($data['mobile']);
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'mobile' => ['required','numeric','min:10000000', 'max:10000000000', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'mobile' => $data['mobile'],
            'isAdmin' => 0,
            'last_sent_sms_code' => intval(12),
        ]);
        //$lastSendSMSCose = $this->sendSmsCode($data)[1];
        $lastSendSMSCose = 1234;

        $user->last_sent_sms_code = $lastSendSMSCose;
        $user->regsister_sms_count = $user->regsister_sms_count + 1;
        $user->save();
        header('HTTP/1.1 200 OK');
        echo json_encode(['success' => true, 'userID' => $user->id]);
        exit();
    }

    /**
     * @param $data
     * @return array
     */
    public function sendSmsCode($data){
        $apiKey = 'b12ff8f6ebc6e316d7955bf74e7dfc65';
        $number = $data['mobile'];
        $message = 'کد تایید هویت شما';
        $key = mt_rand(100000,999999);
        $message .= "\n" . $key . "\n" ." می باشد.";

        $params = array('api' => $apiKey, 'number' => $number, 'msg' => $message);

        $curl_options = array(
            CURLOPT_URL => 'http://www.pushit.ir/api',
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => http_build_query($params),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false
        );

        $curl = curl_init();
        curl_setopt_array($curl, $curl_options);
        $result = curl_exec($curl);
        curl_close($curl);
        $return = array($result, $key);
        return $return;
    }
}
