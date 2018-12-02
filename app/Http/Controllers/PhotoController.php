<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Shop;
use App\User;
use Cron\MonthField;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class PhotoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create($shop_id)
    {

        $user = auth()->user();
        $shop = Shop::find($shop_id);
        $shops = Shop::whereId($shop_id)->get();

        $photos = Photo::where('shop_id' , $shop_id)->get();

        if ($user->id == $shop->user_id)
             return view('home.createphoto' , compact('user' , 'shops' , 'photos'));
        else
            return redirect()->route('home');
    }

    public function save(Request $request , $shop_id)
    {
        $photo = new Photo();
       $photocount = count(Photo::SearchShop($shop_id)->get());

       if($photocount == 0)
       {
            $name = Photo::Named($request->file('file'));
            $photo->patch = "/images/shop/".$name;
            $photo->shop_id = $shop_id;
            $photo->save();
            Photo::Moved($request->file('file'));

       }
       else
           abort(403 , "You have one photo");
    }
}
