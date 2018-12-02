<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Presult;
use App\Product;
use App\Shop;
use Illuminate\Http\Request;

class PresultController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth' , 'throttle:5,2']);
    }

    public function create($product_id)
    {

        $products = Product::Search($product_id);
        $shop_id = $products->shop_id;
        $shop = Shop::Search($shop_id);

        $permission = Product::Permission($shop,$product_id);
        if ($permission == 1)
            return view('home.productphoto' , compact('products'));
        else
            return redirect()->route('index');
    }

    public function save($product_id , Request $request)
    {
        $photocount = Presult::count($product_id);

        if($photocount < 3)
        {
            $result = new Presult();
            $number = Presult::Photoname($request->file('file'));
            $result->patch = "/images/products/".$number;
            $result->product_id = $product_id;

            $request->file('file')->move('images/products' , $number);

            $result->save();
        }
        else
            abort(403 , "whoops");

    }
}
