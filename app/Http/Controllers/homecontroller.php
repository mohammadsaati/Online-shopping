<?php

namespace App\Http\Controllers;

use App\Product;
use App\Shop;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
    }

    public function home()
    {
        $user = Auth::user();

        $shop = Shop::all()->all();
        return view('home.userhome' , compact('user' , 'shop'));
   }
    public function index()
    {
        $product = Product::all()->take(10);
        $user = User::all()->take(7);
        $shop = Shop::all()->take(7);

        return view('home.home' , compact('product' , 'user' , 'shop'));
    }
}
