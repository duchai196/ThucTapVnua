
@section('css')
    <link href="plugins/footable/css/footable.core.css" rel="stylesheet">
    <link href="plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet"/>
@endsection

@extends('admin.master')
@section('content')

@section('title')
    DANH SÁCH SẢN PHẨM
@endsection

    <div class="row">
        <div class="col-12">
            <!-- Column -->
            <div class="card">
                <div class="card-block">

                    @if(count($list_product)>0)
                        <table id="demo-foo-addrow2" class="table table-bordered table-hover toggle-circle"
                               data-page-size="7">
                            <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th data-hide="phone, tablet">Ảnh</th>
                                <th data-sort-initial="true" data-toggle="true">Tên</th>
                                <th class="text-center">Giá sản phẩm</th>
                                <th class="text-center">Danh mục</th>
                                <th data-hide="phone, tablet " class="text-center">Tình trạng</th>
                                <th data-sort-ignore="true" class="min-width" style="text-align: center">Action</th>
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
                            @foreach($list_product as $item)
                                <tr>

                                    <td class="text-center">{{$item->id}}</td>
                                    <td><img src="{!!$item->image!!}" alt="" width="auto" height="60px"></td>
                                    <td>{{$item->name}}</td>
                                    <td class="text-center">{{number_format($item->price)}} VND</td>
                                    <td class="text-center">
                                        <?php
                                        $cate = DB::table('categories')->select('id', 'name')->where('id', '=', $item->id_cate)->first();
                                        echo $cate->name;
                                        ?>

                                    </td>
                                    <td class="text-center">
                                        @if($item->status==1)
                                            {{"Hiện"}}
                                        @else
                                            {{"Ẩn"}}
                                        @endif

                                    </td>

                                    <td class="text-nowrap" style="text-align: center">
                                        <a data-toggle="tooltip" data-original-title="Edit"
                                           href="{{route('product.edit',$item->id)}}"> <i
                                                    class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                        <a data-toggle="tooltip" data-original-title="Close"
                                           data-product-id={{$item->id}} class="DeleteProduct"> <i
                                                    class="fa fa-trash-o"></i> </a>
                                    </td>
                                    {{--  </td> --}}
                                </tr>
                            @endforeach


                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="6">
                                    {!! $list_product->render() !!}
                                </td>
                            </tr>
                            </tfoot>
                        </table>

                    @else
                        <h3>Chưa có sản phẩm nào!! Vui lòng <a href="{{route('product.create')}}">Thêm sản phẩm</a></h3>
                    @endif

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

        $(document).on('click', '.DeleteProduct', function (event) {
            if (confirm('Bạn có chắc muốn xóa?')) {
                var id_product = $(this).attr('data-product-id');
                $.ajax({
                    url: '{{route('product.delete')}}',
                    type: 'POST',
                    dataType: 'json',
                    data: {id_product: id_product, action: 'DeleteProduct'},
                })
                    .done(function (data) {
                        if (data == true) {
                            $('#demo-foo-addrow2').load(window.location.href + " #demo-foo-addrow2");
                        }
                    })
            }
        });


    </script>
@endsection

