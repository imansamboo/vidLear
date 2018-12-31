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
    /*public function __construct()
    {
        error_log(1 . "\n", 3, __DIR__ . '/sms.log');
        $this->verify();

    }*/

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function verify()
    {
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
    public function resetPassword()
    {
        if(isset($_GET['mobile'])){
            if(User::where('mobile' , '=', $_GET['mobile'])->count() > 0 ){
                $user = User::where('mobile' , '=', $_GET['mobile'])->get()[0];
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
    public function checkReset()
    {
        if(isset($_GET['last_sent_sms_code']) && isset($_GET['userId']) && isset($_GET['password'])){
            if(User::where('id' , '=', $_GET['userId'])->count() > 0 ){
                $user = User::where('id' , '=', $_GET['userId'])->get()[0];
                if($user->last_sent_sms_code == $_GET['last_sent_sms_code']){
                    $user->password = Hash::make($_GET['password']);
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