<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Post;
use Illuminate\Http\Request;
use App\User;
use App\Shop;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function show()
    {

        return view('home.makeshop');
    }


    public function create(Request $request)
    {
        $shope = new Shop();

        $shope->name = $request->name;
        $shope->city = $request->city;
        $shope->adress= $request->adress;
        $shope->str_code = $request->str_code;
        $shope->phonenumber = $request->phonenumber;
        $shope->discription = $request->discription;
        $shope->telegram_id = $request->telegram_id;

        $id = Auth::user()->id;

        $shope->user_id = $id;

        $shope->save();



        return redirect()->route('home');
    }

    public function showshop()
    {
        $shop = Shop::all()->sortByDesc('id');

        return view('home.shops' , compact('shop'));
    }

    public function shoper($shop_id)
    {

        $shops = Shop::whereId($shop_id)->first();
        $photop = Photo::SearchShop($shop_id)->first();
//        dd($photos);
        if (!Shop::find($shop_id))
            abort(403,'این فروشگاه نیست');
        else
            return view('home.shoper' , compact('shops' , 'photop') );
    }

    public function edit($shop_id)
    {
        $shop = Shop::whereId($shop_id)->get();

        return view('home.editshop' , compact('shop'));
    }

    public function update($shop_id , Request $request)
    {
       Shop::whereId($shop_id)
           ->update
           ([
           'name' => $request->name,
           'city' => $request->city,
           'phonenumber' => $request->phonenumber,
           'str_code' => $request->str_code,
           'adress' => $request->adress,
           'telegram_id' => $request->telegram_id,
           'discription' => $request->discription
       ]);

        return redirect()->route('home');
    }

    public function delete($shop_id)

    {
        Shop::whereId($shop_id)->delete();
        return redirect()->route('home');

    }

}
