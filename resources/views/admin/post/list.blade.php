@section('css')
    <link href="plugins/footable/css/footable.core.css" rel="stylesheet">
    <link href="plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet"/>
@endsection

@extends('admin.master')
@section('content')


    <div class="row">
        <div class="col-12">
            <!-- Column -->
            <div class="card">
                <div class="card-block">
                    <table id="demo-foo-addrow2" class="table table-bordered table-hover toggle-circle"
                           data-page-size="7">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th data-hide="phone, tablet">Image</th>
                            <th data-sort-initial="true" data-toggle="true" width="300">Tên</th>
                            <th>Danh mục</th>
                            <th data-hide="phone, tablet" width="400">Tóm tắt</th>
                            <th data-sort-ignore="true" class="min-width" style="text-align: center">Hành động</th>
                        </tr>
                        </thead>
                        <div class="m-t-40">
                            <div class="d-flex">
                                <div class="ml-auto">
                                    <div class="form-group">
                                        <input id="demo-input-search2" type="text" placeholder="Search"
                                               class="form-control" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <tbody>
                        @foreach($listPost as $item_post)
                            <tr>
                                <td>{{$item_post->id}}</td>
                                <td><img src="{{$item_post->image}}" alt="" width="80px" height="60px"></td>
                                <td>{{$item_post->title}}</td>
                                <td>{{$item_post->cate_post['name']}}</td>
                                <td>{!!str_limit(strip_tags($item_post->content,200))!!}</td>
                                <td class="text-nowrap" style="text-align: center">
                                    <a data-toggle="tooltip" data-original-title="Edit"
                                       href="{{route('post.edit',$item_post->id)}}"> <i
                                                class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                    <span>
                                <form action="{{route('post.destroy',$item_post->id)}}" method="POST"
                                      style="display: inline-block;" clas="form">
                                    {!!csrf_field()!!}
                                    {{method_field('DELETE')}}
                                    <button type="submit"><i class="fa fa-close text-danger"></i> </button>
                                </form>
                            </span>
                                </td>
                                {{--  </td> --}}
                            </tr>
                        @endforeach


                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="6">
                                <div class="text-right">
                                    <ul class="pagination">
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="plugins/footable/js/footable.all.min.js"></script>
    <script src="plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="js/footable-init.js"></script>


@endsection

