<?php
/**
 * Created by PhpStorm.
 * User: iman
 * Date: 12/31/18
 * Time: 6:17 PM
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Rating;
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use mysql_xdevapi\Exception;


class RatingsController extends Controller
{
    /**
     * FavorsController constructor.
     */
    public function __construct()
    {
        sleep(1);
        $this->middleware('auth');

    }

    public function isRated()
    {
        header('HTTP/1.1 200 OK');
        echo json_encode(['success' => true ]);

    }

    /**
     * @param Request $request
     */
    public function store(Request $request)
    {
        $product_id = substr(url()->previous(), strpos(url()->previous(), 'products' ) + 9);
        $user_id = Auth::user()->id;
        $rating = $_GET['rating'];
        $count = Rating::where('user_id', '=', $user_id)->where('product_id', '=', $product_id)->count();
        if($count > 0){
            throw new Exception("you can't access again", 404);
        }else{
            Rating::create(
                array(
                    'user_id' => $user_id,
                    'product_id' => $product_id,
                    'rating' => $rating
                )
            );
            $voterCount = Rating::where('product_id', '=', $product_id)->count();
            $ratings = Rating::where('product_id', '=', $product_id)->get();
            $averageRate = 0;
            foreach ($ratings as $value){
                $averageRate += $value->rating;
            }
            $averageRate = $averageRate/$voterCount;
            header('HTTP/1.1 200 OK');
            echo json_encode([
                'success' => true ,
                'userId' => $user_id,
                'status' => 'OK',
                'product_id' => $product_id,
                'rating' => $rating ,
                'averageRate' =>number_format((float)$averageRate, 1, '.', ''),
                'voterCount' =>$voterCount
            ]);
        }
    }

}