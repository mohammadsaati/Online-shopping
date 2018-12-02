<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use function PHPSTORM_META\elementType;

class Shop extends Model
{
    protected $fillable =[
        'name',
        'city',
        'adress',
        'telegram_id',
        'phonenumber',
        'str_code',
        'discription'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }


    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public static function Search($shop_id)
    {
        return static::where('id' , $shop_id)->first();
    }

    public function addphoto(Photo $photo)
    {
            $this->photos()->save($photo);

        return $this;
    }


}
