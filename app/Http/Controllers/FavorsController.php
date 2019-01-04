<?php
/**
 * Created by PhpStorm.
 * User: iman
 * Date: 12/31/18
 * Time: 6:17 PM
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Favor;
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;


class FavorsController extends Controller
{
    /**
     * FavorsController constructor.
     */
    public function __construct()
    {
        sleep(1);
        $this->middleware('auth');

    }

    public function update(Request $request)
    {
        $product_id = substr(url()->previous(), strpos(url()->previous(), 'products' ) + 9);
        $user_id = Auth::user()->id;
        $count = Favor::where('user_id', '=', $user_id)->where('product_id', '=', $product_id)->count();
        if($count > 0){
            $favor = Favor::where('user_id', '=', $user_id)->where('product_id', '=', $product_id)->get()[0];
            $favor->isFavored = !($favor->isFavored);
            $favor->save();
            header('HTTP/1.1 200 OK');
            echo json_encode(['success' => true , 'userId' => $user_id, 'product_id' => $product_id, 'isFavored' => !($favor->isFavored)]);
        }else{
            Favor::create(
                array(
                    'user_id' => $user_id,
                    'product_id' => $product_id,
                    'isFavored' => 1
                )
            );

            header('HTTP/1.1 200 OK');
            echo json_encode(['success' => true , 'userId' => $user_id, 'product_id' => $product_id, 'isFavored' => 1]);
        }
    }

}