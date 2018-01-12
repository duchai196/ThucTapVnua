<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Http\Requests\CategoryRequest;
use DB, Session;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parents = Category::all();
        return view('admin.category.add', compact('parents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parents = Category::all();
        $categories = Category::paginate(10);
        return view('admin.category.add', compact('parents', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->parent = $request->parent_cate;
        $category->banner = $request->filepath;
        $category->save();
        Session::flash('message', 'Thêm danh mục thành công!');

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
        $parent = Category::all();
        $cate = Category::findOrFail($id);
        return view('admin.category.edit', compact('parent', 'cate'));
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
        $this->validate($request, [
            'name' => 'required'
        ], [
            'name.required' => 'Bạn chưa nhập tên danh mục'
        ]);
        $cate_update = Category::find($id);
        $cate_update->name = $request->name;
        $cate_update->banner = $request->filepath;
        $cate_update->parent = $request->parent_cate;

        $cate_update->save();
        Session::flash('message', 'Cập nhật thành công!');

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
        $category = Category::findOrFail($id)->delete();
        return redirect()->route('category.create');
    }

    public function postDelete(Request $request)
    {
        $id = $request->id_cate;
        $action = $request->action;
        if ($action == "DeleteCate") {
            $cate = DB::table('categories')->where('parent', '=', $id)->count();

            if ($cate == 0) {
                $cate_item = Category::findOrFail($id);

                if ($cate_item->delete()) {
                    return json_encode(true);
                }
            }
            return json_encode(false);
        }
    }
}
