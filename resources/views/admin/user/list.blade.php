@extends('admin.master')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="text-themecolor m-b-0 m-t-0">Sản phẩm</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Sản phẩm</li>
                    </ol>
                </div>
                <div class="col-md-6 col-4 align-self-center">


                </div>
            </div>

            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title">Bảng sản phẩm </h4>
                            <h6 class="card-subtitle"></h6>

                            @if(Session('message'))
                                <div class="alert-success alert"> {{Session('message')}}</div>
                            @endif
                            <div class="table-responsive" id="dataTable">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Cate</th>
                                        <th>Price</th>
                                        <th>Price Promotion</th>

                                        <th class="text-nowrap">Action</th>
                                    </tr>
                                    </thead>
                                    <?php $stt = 0 ?>
                                    <tbody>
                                    @foreach($products as $product)
                                        <?php $stt++ ?>
                                        <tr>
                                            <td>{{$stt}}</td>
                                            <td> {{$product->name}} </td>
                                            <td>
                                                <img src="@if(!empty($product->image))  {{"/img/product/".$product->image}}    @else    {{"/img/product/default.png"}}   @endif"
                                                     width="90px" height="90px" alt=""></td>
                                            <td>{{$product->category}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>@if(empty($product->price_promotion))
                                                    NULL @else {{$product->price_promotion}} @endif</td>
                                            <td class="text-nowrap">
                                                <a href="{{route('product.edit',['idProduct'=>$product->id])}}"
                                                   data-toggle="tooltip" data-original-title="Edit"> <i
                                                            class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                <a data-product_id="{{$product->id}}" class="DeleteClick"> <i
                                                            class="fa fa-close text-danger"></i> </a>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <div>
                    {{$products->links()}}
                </div>
            </div>
        </div>
    </div>
@section('script')

    <script type="text/javascript">
        $(document).on('click', '.DeleteClick', function () {
            if (confirm('Bạn có chắc chắn muốn xóa không?')) {
                var $this = $(this);
                var idProduct = $this.attr('data-product_id');
                if (idProduct > 0) {
                    $.ajax({
                        url: '{{route('product.delete')}}',
                        type: 'POST',
                        dataType: 'json',
                        data: {idProduct: idProduct, 'action': 'DeleteProduct'},
                    })
                        .done(function (data) {
                            if (data == true) {
                                $('#dataTable').load(window.location.href + " #dataTable>table");
                            }
                            else
                                alert('Đã xảy ra lỗi');
                        })

                }
            }
        });

    </script>
@endsection

@endsection