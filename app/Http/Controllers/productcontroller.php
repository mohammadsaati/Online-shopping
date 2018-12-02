<?php

namespace App\Http\Controllers;

use App\Presult;
use App\Product;
use App\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth' , 'throttle:10,3'])->only(['create' , 'save' , 'edit' , 'update' , 'delete']);
        $this->middleware(['auth' , 'throttle:10,3'])->only(['create' , 'save' , 'edit' , 'update' , 'delete']);
    }

    public function create($shop_id)
    {

        $shop = Shop::whereId($shop_id)->get();

        $user = Auth::user()->id;
        $user_id = Shop::find($shop_id)->user_id;

        if ($user != $user_id)
            return redirect()->route('index') ;
        else
            return view('home.addproduct' , compact('shop'));
    }

    public function save($shop_id , Request $request)
    {
        $shop = Shop::find($shop_id)->id;
        $product = new Product();

        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_discription = $request->product_discription;
        $product->shop_id = $shop;
        $product->save();

        return redirect()->route('home');
    }

    public function showproduct()
    {

        $product = Product::all()->sortByDesc('id');

        return view('home.products' , compact('product'));
    }

    public function show($product_id)
    {
        $shop = Shop::where('user_id' , \auth()->id())->first();

        $product = Product::whereId($product_id)->get();

        $presult = Presult::Searchphoto($product_id);

        return view('home.onlyproduct' , compact('product'  , 'shop' , 'presult'));
    }

    public function edit($product_id , $user_id)
    {
        $user = Auth::user()->id;
        if ($user == $user_id) {
            $product = Product::whereId($product_id)->get();
            return view('home.editproduct', compact('product'));
        }
        else
            return redirect()->route('index');

    }
    public function update($product_id , Request $request , $user_id)
    {
        $user = Auth::user()->id;
        if ($user == $user_id) {
            Product::whereId($product_id)->update([
                'product_name' => $request->product_name,
                'product_price' => $request->product_price,
                'product_discription' => $request->product_discription
            ]);
            return redirect()->route('home');
        }
        else
            return redirect()->route('index');
    }

    public function delete($product_id , $user_id)
    {
        $user = Auth::user()->id;
        if ($user == $user_id) {
            Product::whereId($product_id)->delete();

            return redirect()->route('home');
        }
        else
            return redirect()->route('index');
    }
}

