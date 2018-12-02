<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Null_;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Photo extends Model
{
    protected $fillable = ['patch'];


    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public static function Named(UploadedFile $file)
    {
        $name = time().$file->getClientOriginalName();
        return $name;
    }

    public static function Moved(UploadedFile $file)
    {
        $name = self::Named($file);
        return $file->move("images/shop" , $name);
    }

    public static function SearchShop($shop_id)
    {
        return static::where('shop_id' , $shop_id);
    }


}
