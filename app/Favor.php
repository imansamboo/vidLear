<?php
/**
 * Created by PhpStorm.
 * User: iman
 * Date: 12/31/18
 * Time: 6:14 PM
 */

namespace App;
use App\User;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Favor extends Model
{
    protected $fillable = ['user_id', 'product_id', 'isFavored'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}