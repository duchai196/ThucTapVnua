<?php

namespace App\Http\Controllers\Backend;

use App\Model\Post;
use App\Model\Type_post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listPosts = Post::paginate(10);
        $typePost = Type_post::all();
        return view('admin.post.list', compact('listPosts', 'typePost'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type_post = Type_post::all();

        return view('admin.post.add', compact('type_post'));
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
            'name' => 'required|unique:posts|max:255|min:1',
            'content' => 'required|min:1',

        ],

            [
                'title.required' => 'Bạn chưa nhập mô tả',
                'title.unique' => 'Mô tả đã tồn tại',
                'content.required' => 'Vui lòng điền nội dung bài viết'

            ]);

        $post = new Post();
        $post->name = $request->name;
        $post->slug = str_slug($post->name);
        $post->content = $request->content;
        $post->status = $request->status;
        $post->id_cate = $request->type_post;
        $post->image = $request->image;
        $post->save();
        Session::flash('message', 'Thêm bài viết thành công');
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
        $type_post = Type_post::all();
        $post = Post::findOrFail($id);
        return view('admin.post.edit', compact('type_post', 'post'));
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
        $post = Post::findOrFail($id);
        $post->name = $request->name;
        $post->slug = str_slug($post->name);
        $post->content = $request->content;
        $post->status = $request->status;
        $post->id_cate = $request->type_post;
        $post->image = $request->image;
        $post->save();
        Session::flash('message', 'Sửa bài viết thành công');
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
        Post::destroy($id);
        Session::flash('message', 'xóa bài viết viết thành công');
        return redirect()->back();
    }

    public function postDelete(Request $request)
    {
        $id = $request->id;
        $action = $request->action;
        if ($action == "Delete") {
//            $posts = DB::table('posts')->where('id_cate', '=', $id)->count();
            $cate = Type_post::find($id);
            if ($cate->delete()) {

                return json_encode(true);
            }
            return json_encode(false);
        }
    }
}
