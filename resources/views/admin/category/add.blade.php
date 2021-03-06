@extends('admin.master')
@section('content')
@section('title')
    Thêm danh mục
@endsection
@if(count($errors)>0)
    @foreach($errors->all() as $err)
        <div class="alert alert-warning alert-rounded">
            {!! $err !!}
        </div>
    @endforeach
@endif

    <div class="row">
        <div class=" col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Nhập đầy đủ thông tin để thêm danh mục</h4>
                    <form class="form-material m-t-40" action="{{route('category.store')}}" method="POST"
                          enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Tên<span class="help"> e.g. "George deo"</span></label>
                            <input type="text" class="form-control form-control-line" placeholder="Nhập tên danh mục..."
                                   name="name">
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <label>Danh mục cha</label>
                                <select class="form-control" name="parent_cate">
                                    <option value="0">Chọn danh mục cha</option>
                                    {!!  cate_parent($parents)  !!}

                                </select>
                            </div>
                        </div>

                        <div class="input-group">
                            <label>Thêm banner danh mục</label>
                            <p></p>
                            <div class="input-group-btn">
                                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-default">
                                    <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </div>
                            <input id="thumbnail" class="form-control " type="text" name="filepath">
                        </div>
                        <img id="holder" style="margin-top:15px;max-height:100px;">
                        <div style="margin-top: 15px">
                            <button type="" class="btn btn-default" onclick="history.back()">Hủy bỏ</button>
                            <button type="submit" class="btn btn-success pull-right">Thêm danh mục</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class=" col-md-6 col-sm-12 col-xs-12 ">
            <!-- Column -->
            <div class="card">
                <div class="card-block">

                    <table id="demo-foo-addrow2" class="table table-bordered table-hover toggle-circle"
                           data-page-size="7">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th data-sort-initial="true">Tên</th>
                            <th>Danh mục cha</th>
                            <th>Lượt</th>
                            <th data-sort-ignore="true" class="min-width" style="text-align: center">Hành động</th>
                        </tr>
                        </thead>

                        <div class="m-t-40" style="margin-top: 0">
                            <div class="col-md-6">
                                <div class="ml-auto">
                                    <h4 class="card-title">Danh mục sản phẩm</h4>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="ml-auto">
                                    <div class="form-group">
                                        <input id="demo-input-search2" type="text" placeholder="Search"
                                               class="form-control" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <tbody>
                        @foreach($categories as $item_cate)
                            <tr>
                                <td>{{$item_cate->id}}</td>
                                <td>{{$item_cate->name}}</td>
                                <td>{{$item_cate->parent}}</td>
                                <td>{{$item_cate->times}}</td>
                                <td class="text-nowrap" style="text-align: center">
                                    <a data-toggle="tooltip" data-original-title="Edit"
                                       href="{{route('category.edit',$item_cate->id)}}"> <i
                                                class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                    <a data-toggle="tooltip" data-original-title="Close"
                                       data-cate-id={{$item_cate->id}} class="DeleteCate"> <i
                                                class="fa fa-close text-danger"></i> </a>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                        {!! $categories->render() !!}
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


        @endsection
        @section('script')
            <script src="plugins/footable/js/footable.all.min.js"></script>
            <script src="plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
            <script src="js/footable-init.js"></script>
            <script type="text/javascript">

                $(document).on('click', '.DeleteCate', function (event) {
                    if (confirm('Bạn có chắc muốn xóa?')) {
                        var id_cate = $(this).attr('data-cate-id');
                        $.ajax({
                            url: '{{ route('category.delete') }}',
                            type: 'POST',
                            dataType: 'json',
                            data: {id_cate: id_cate, action: 'DeleteCate'},
                        })
                            .done(function (data) {
                                if (data == true) {

                                    $('#demo-foo-addrow2').load(window.location.href + " .table");
                                }
                                if (data == false) {
                                    alert('Xoá danh mục con trước!');
                                }

                            })
                    }
                });


            </script>
@endsection


