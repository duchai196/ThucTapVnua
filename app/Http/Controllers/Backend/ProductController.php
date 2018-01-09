<?php

namespace App\Http\Controllers\Backend;

use App\Model\Category;
use App\Model\Img_product;
use App\Model\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PHPUnit\Util\RegularExpressionTest;
use App\Http\Requests\ProductRequest;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_product = Product::paginate(15);
        return view('admin.product.list', compact('list_product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->slug = str_slug($product->name);
        $product->price = $request->price_unit;
        $product->sale_price = $request->price_promotion;
        $product->id_cate = $request->cate_id;
        $product->image = $request->image;
        $product->description = $request->description;
        $product->short_description = $request->short_description;
        $product->status = $request->status;

        $product->save();
        $id_cate = $product->id_cate;
        $cate_update = Category::findOrFail($id_cate);
        $cate_update->times = $cate_update->times + 1;
        $cate_update->save();


        $id = $product->id;

        if ($request->imageDetail != NULL) {
            $image_details = $request->imageDetail;
            foreach ($image_details as $item) {
                $image = new Img_product();
                if (isset($item)) {
                    $image->id_product = $id;
                    $image->image = $item;
                    $image->save();
                }

            }
        }
        Session::flash('message', 'Thêm sản phẩm thành công!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
//        foreach ($categories as $val){
//            echo $val['parent']."<br>";
//        }
//        dd();
        $product = Product::findOrFail($id);

        return view('admin.product.edit', compact('categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->slug = str_slug($product->name);
        $product->price = $request->price_unit;
        $product->sale_price = $request->price_promotion;
        $product->id_cate = $request->cate_id;
        $product->image = $request->image;
        $product->description = $request->description;
        $product->short_description = $request->short_description;
        $product->status = $request->status;

        $product->save();
        $id_cate = $product->id_cate;
        $cate_update = Category::findOrFail($id_cate);
        $cate_update->times = $cate_update->times + 1;
        $cate_update->save();
        Session::flash('message', 'Cập nhật sản phẩm thành công!');

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function postDelete(Request $request)
    {
        $id = $request->id_product;
        $action = $request->action;
        if ($action == "DeleteProduct") {
            $product = Product::findOrFail($id);
            if ($product->delete()) {
                $id_cate = $product->id_cate;
                $cate = Category::findOrFail($id_cate);
                $cate->times = $cate->times - 1;
                $cate->save();
                return json_encode(true);
            }
            return json_encode(false);
        }
    }
}
