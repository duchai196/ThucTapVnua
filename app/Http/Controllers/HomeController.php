<?php

namespace App\Http\Controllers;

use App\Model\Post;
use App\Model\Product;
use Illuminate\Http\Request;
use App\Model\Banner;
use Illuminate\Support\Facades\DB;

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
        $banners = Banner::where('status', 1)->limit(3)->orderBy('id', 'DESC')->get();
        $newProduct = DB::table('products')->orderBy('created_at', 'desc')->take(10)->get();
        $lastestProduct = DB::table('products')->orderBy('created_at', 'desc')->first();
        $listCate = DB::table('categories')->get();
        $saleProduct = DB::table('products')->where('sale_price', '!=', 0)->take(10)->get();


        $hotDeal = DB::table('products')->select('id', 'price', 'sale_price', 'image', 'name')->where([['sale_price', '!=', null], ['price', '!=', null], ['status', 1]])->take(10)->get();


        return view('frontend.pages.index', compact('banners', 'newProduct', 'saleProduct', 'hotDeal'));
    }

    public function post()
    {
        $post = Post::where('status', 1)->limit(10)->orderBy('id', 'DESC')->get();
        //dd($post);
        return view('frontend.pages.blog', [
            'posts' => $post
        ]);
    }

}
