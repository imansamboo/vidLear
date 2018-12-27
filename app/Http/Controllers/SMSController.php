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

class SMSController extends Controller
{
    public function __construct()
    {
        error_log(1 . "\n", 3, '/var/www/html/sms.log');
        $this->verify();

    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function verify()
    {
        error_log(var_export($_POST, 1), 3, '/var/www/html/sms.log');
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
        $key = mt_rand(1000,9999);
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




}