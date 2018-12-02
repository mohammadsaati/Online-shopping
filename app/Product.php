<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name',
        'product_price',
        'product_discription'
    ];
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function presults()
    {
        return $this->hasMany(Presult::class);
    }
    public static function Permission(Shop $shop , $product_id)
    {
        $newpro = static::where('id' , $product_id)->first();
        return $newpro->shop_id == $shop->id && $shop->user_id == auth()->id() ? '1' : '0';
    }

    public static function Search($product_id)
    {
        return static::where('id' , $product_id)->first();
    }

}
