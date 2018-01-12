<?php

namespace App\Http\Controllers;

use App\Model\Brand;
use App\Model\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listProduct = Product::select('name', 'price', 'sale_price', 'image', 'status', 'id_cate')->get();
        $listBrand = Brand::all();
        return view('frontend.pages.index');
    }

}
