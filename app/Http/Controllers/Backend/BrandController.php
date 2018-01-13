<?php

namespace App\Http\Controllers\Backend;

use App\Model\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brand.add', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required|unique:brands'
            ], [
                'name.required' => 'Bạn chưa nhập tên',
                'name.brands' => 'Tên nhãn hiệu đã tồn tại!'
            ]);
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->logo = $request->logo;
        $brand->save();
        Session::flash('message', 'Thêm chuyên mục thành công!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Brand $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Brand $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $listBrand = Brand::all();
        $brand = Brand::findOrFail($id);
        return view('admin.brand.edit', compact('brand', 'listBrand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Model\Brand $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'name' => 'required|unique:brands'
            ], [
                'name.required' => 'Bạn chưa nhập tên',
                'name.brands' => 'Tên nhãn hiệu đã tồn tại!'
            ]);
        $brand = Brand::findOrFail($id);
        $brand->name = $request->name;
        $brand->logo = $request->logo;
        $brand->save();
        Session::flash('message', 'Cập nhật nhãn hiệu!');
        return redirect()->route('brand.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Brand $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
    }

    public function postDelete(Request $request)
    {
        $id = $request->id_cate;
        $action = $request->action;
        if ($action == "DeleteCate") {
            $cate_item = Brand::findOrFail($id);
            if ($cate_item->delete()) {
                return json_encode(true);
            }
            return json_encode(false);
        }
    }
}
