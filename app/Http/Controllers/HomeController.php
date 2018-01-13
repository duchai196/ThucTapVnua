<?php

namespace App\Http\Controllers;

use App\Model\Banner;
use App\Model\Brand;
use App\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newProduct = DB::table('products')->orderBy('created_at', 'desc')->get();
        $listBrand = Brand::all();
        $listBanner = DB::table('banners')->where('status', 1)->take(3)->get();
        $saleProduct = Product::where('sale_price', '!=', 0)->take(10)->get();
        $badmintonProduct = Product::where('id_cate', 15);

        return view('frontend.pages.index', compact('newProduct', 'listBrand', 'listBanner', 'saleProduct', 'badmintonProduct'));
    }

}
