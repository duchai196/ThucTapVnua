@section('css')
    <link href="plugins/footable/css/footable.core.css" rel="stylesheet">
    <link href="plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet"/>
@endsection
@section('title')
    DANH MỤC SẢN PHẨM
@endsection
@extends('admin.master')
@section('content')


    <div class="row">
        <div class="col-12">
            <!-- Column -->
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Danh mục sản phẩm cho cửa hàng của bạn được quản lý ở đây</h4>
                    <table id="demo-foo-addrow2" class="table table-bordered table-hover toggle-circle"
                           data-page-size="7">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th data-sort-initial="true" data-toggle="true">Tên</th>
                            <th>Danh mục cha</th>
                            <th data-hide="phone, tablet">Banner</th>
                            <th data-hide="phone, tablet">Lượt</th>
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
                        @foreach($parent as $item_cate)
                            <tr>
                                <td>{{$item_cate->id}}</td>
                                <td>{{$item_cate->name}}</td>
                                <td>{{$item_cate->parent}}</td>
                                <td><img src="{{$item_cate->banner}}" alt=""
                                         width="80px" height="60px"></td>
                                <td>
                                    {{$item_cate->times}}

                                </td>
                                {{--   <td> --}}
                                {{--  <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button> --}}
                                <td class="text-nowrap" style="text-align: center">
                                    <a data-toggle="tooltip" data-original-title="Edit"
                                       href="{{route('category.edit',$item_cate->id)}}"> <i
                                                class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                    <a data-toggle="tooltip" data-original-title="Close"
                                       data-cate-id={{$item_cate->id}} class="DeleteCate"> <i
                                                class="fa fa-close text-danger"></i> </a>
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

