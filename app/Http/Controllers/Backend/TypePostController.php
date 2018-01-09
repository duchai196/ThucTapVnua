<?php

namespace App\Http\Controllers\Backend;

use App\Model\Post;
use App\Model\Type_post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session, DB;

class TypePostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCate = Type_post::paginate(3);
        return view('admin.type_post.add', compact('listCate'));
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
        $this->validate($request, [
            'name' => 'required|unique:type_posts|max:255'
        ], [
            'name.required' => 'Bạn chưa nhập tên chuyên mục',
            'name.unique' => 'Tên chuyên chuyên mục đã tồn tại',
            'name.max' => 'Tên chuyên mục không được vượt quá 255 ký tự'
        ]);

        $typePost = new Type_post();
        $typePost->name = $request->name;
        $typePost->description = $request->description;
        $typePost->slug = str_slug($typePost->name);
        $typePost->save();
        Session::flash('message', 'Thêm chuyên mục thành công!');
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
        $type_post = Type_post::findOrFail($id);
        $listCate = Type_post::paginate(3);
        return view('admin.type_post.edit', compact('type_post', 'listCate'));

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
        $this->validate($request,
            ['name' => 'required|unique:type_posts|max:255'
            ], ['name.required' => 'Bạn chưa nhập tên chuyên mục',
                'name.unique' => 'Tên chuyên chuyên mục đã tồn tại',
                'name.max' => 'Tên chuyên mục không được vượt quá 255 ký tự'
            ]);
        $type_post = Type_post::findorFail($id);
        $type_post->name = $request->name;
        $type_post->description = $request->description;
        $type_post->slug = str_slug($type_post->name);
        $type_post->save();
        Session::flash('message', 'Cập nhật thành công!');
        return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.'
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
        $id = $request->id;
        $action = $request->action;
        if ($action == "Delete") {
            $posts = DB::table('posts')->where('id_cate', '=', $id)->count();
            $cate = Type_post::find($id);
            if ($cate->delete()) {

                return json_encode(true);
            }
            return json_encode(false);
        }
    }
}
