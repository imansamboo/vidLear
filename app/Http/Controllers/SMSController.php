<?php
/**
 * Created by PhpStorm.
 * User: iman
 * Date: 12/5/18
 * Time: 11:07 PM
 */

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class SMSController extends Controller
{
    public function __construct()
    {
        error_log(1 . "\n", 3, __DIR__ . '/sms.log');
        $this->verify();

    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function verify()
    {
        error_log(var_export($_POST, 1), 3, __DIR__ . '/sms.log');
        if(isset($_POST['last_sent_sms_code']) &&
            isset($_POST['userID']) &&
            $_POST['last_sent_sms_code'] == User::find($_POST['userID'])->last_sent_sms_code
        ){
            $user = User::find($_POST['userID']);
            $user->update(
                array(
                    'sms_varified' => 1
                )
            );
            header('HTTP/1.1 200 OK');
            echo json_encode(['success' => true, 'mobile' => $user->mobile]);
            exit();
            //return redirect( '/homepage');
        }else{
            return redirect( 'email/verify');

        }

    }

    /**
     *
     */
    public function reSend()
    {
        $apiKey = 'b12ff8f6ebc6e316d7955bf74e7dfc65';
        $number = Auth::user()->mobile;
        $message = 'کد تایید هویت شما';
        $key = mt_rand(100000,999999);
        $user = User::find(Auth::user()->id);
        $user->update(
            array(
                'last_sent_sms_code' => $key
            )
        );
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
        return redirect( 'email/verify');
    }

    /**
     * @param Request $request
     */
    public function resetPassword(Request $request)
    {
        error_log(__DIR__ .'/reset.log', 3 , '/var/www/html/address.log');
        error_log(/*$_POST['mobile']*/ 123, 3, __DIR__ .'/reset.log');
        if(isset($_POST['mobile'])){
            if(User::where('mobile' , '=', $_POST['mobile'])->count() > 0 ){
                $user = User::where('mobile' , '=', $_POST['mobile'])->get()[0];
                $user->last_sent_sms_code = 123456;
                $user->save();
                header('HTTP/1.1 200 OK');
                echo json_encode(['success' => true , 'userId' => $user->id]);
            }else{
               // throw new Exception('phone number does not exist');
            }

        }
    }

    /**
     * @param Request $request
     */
    public function checkReset(Request $request)
    {
        if(isset($_POST['last_sent_sms_code']) && isset($_POST['userId']) && isset($_POST['password'])){
            if(User::where('id' , '=', $_POST['userId'])->count() > 0 ){
                $user = User::where('id' , '=', $_POST['userId'])->get()[0];
                if($user->last_sent_sms_code == $_POST['last_sent_sms_code']){
                    $user->password = Hash::make($_POST['password']);
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