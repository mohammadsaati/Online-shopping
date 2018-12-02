<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Static_;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Presult extends Model
{
    protected $fillable = ['patch'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public static function Ceecked($product_id)
    {
        $new = static::where('id' , $product_id)->first();
        return $new->product_id == $product_id ? "1" : "0";
    }
    public static function Searchphoto($product_id)
    {
        return static::where('product_id' , $product_id)->first();
    }
    public static function count($product_id)
    {
        return count(static::where('product_id' , $product_id)->get());
    }

    public static function Photoname(UploadedFile $file)
    {
        $name = time().$file->getClientOriginalName();

        return $name;
    }
}
