<?php

namespace App\Http\Controllers\Backend;

use App\Model\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listBanner = Banner::all();
        return view('admin.banner.add', compact('listBanner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required',

        ], [
            'name.required' => 'Vui lòng nhập tên ',
            'name.image' => 'Vui lòng chọn ảnh ',

        ]);
        $banner = new Banner();
        $banner->name = $request->name;
        $banner->image = $request->image;
        $banner->link = $request->link;
        $banner->status = $request->status;
        $banner->save();
        Session::flash('message', 'Thêm banner thành công');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Banner $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Banner $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Model\Banner $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Banner $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        //
    }

    public function postDelete(Request $request)
    {

        $id = $request->id;
        $action = $request->action;
        if ($action == 'Delete') {
            $banner = Banner::findOrFail($id);
            if ($banner->delete()) {
                return json_encode(true);
            }
            return json_encode(false);
        }


    }
}
