@extends('admin.master')

@section('content')

    <!-- ============================================================== -->
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Nhập thông tin vào các trường dưới đây để thêm bài viết</h4>
                    <form class="form-material m-t-40" action="{{route('type_post.store')}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Tên chuyên mục</label>
                            <input type="text" class="form-control form-control-line" placeholder="Some text value..."
                                   name="name" required="">
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea class="form-control" rows="5" name="description"></textarea>
                        </div>


                        <a href="{{ URL::previous() }}" class="btn btn-inverse waves-effect waves-light">Quay lại</a>
                        <button class="btn btn-success waves-effect waves-light m-r-10 pull-right" type="submit">Thêm
                            chuyên mục
                        </button>

                    </form>
                    <br>

                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Danh sách chuyên mục</h4>
                    <div class="table-responsive" id="dataTable">
                        <table class="table  color-table dark-table">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên</th>
                                <th>Đường dẫn tĩnh</th>
                                <th>Mô tả</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($listCate as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->slug}}</td>
                                    <td>{{$item->description}}</td>
                                    <td class="text-nowrap" style="text-align: center">
                                        <a data-toggle="tooltip" data-original-title="Edit"
                                           href="{{route('type_post.edit',$item->id)}}"> <i
                                                    class="fa fa-pencil text-inverse m-r-10"></i> </a>


                                        <a data-toggle="tooltip" data-original-title="Close" data-id="{{$item->id}}"
                                           class="Delete"> <i class="fa fa-close text-danger"></i> </a>


                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!!$listCate->render()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')

    <script type="text/javascript">
        $(document).on('click', '.Delete', function () {
            if (confirm('Bạn có muốn xóa chuyên mục này không?')) {
                var id = $(this).attr('data-id');
                $.ajax({
                    url: '{{route('type_post.ajax')}}',
                    type: 'POST',
                    dataType: 'json',
                    data: {id: id, 'action': 'Delete'},
                })
                    .done(function (data) {
                        $('#dataTable').load(location.href + " #dataTable>table");
                    })
            }
        });
    </script>
@endsection