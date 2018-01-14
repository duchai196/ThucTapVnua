<?php

namespace App\Http\Controllers;

use App\Model\Post;
use App\Model\Product;
use App\Model\Type_post;
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
        //$newProduct = DB::table('products')->where('','')orderBy('created_at', 'desc')->take(10)->get();
        $saleProduct = DB::table('products')->where('sale_price', '!=', 0)->take(10)->get();
        return view('frontend.pages.index', compact('banners', 'newProduct', 'saleProduct'));
    }

    public function post()
    {
        $post = Post::where('status', 1)->limit(10)->orderBy('id', 'DESC')->get();
        $type_post = DB::table('type_posts')->orderBy('created_at', 'desc')->take(10)->get();
        //dd($post);
        return view('frontend.pages.blog', [
            'posts' => $post,
            'type_posts' => $type_post
        ]);
    }

    public function singlePost($id)
    {
        $post = Post::find($id);
        $type_post = DB::table('type_posts')->orderBy('created_at', 'desc')->take(10)->get();

        return view('frontend.pages.single-post', [
            'posts' => $post,
            'type_posts' => $type_post

        ]);
    }



}
