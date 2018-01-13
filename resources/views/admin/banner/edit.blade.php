@extends('admin.master')

@section('content')

    <!-- ============================================================== -->
    <div class="row">
        <div class="col-5">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Nhập thông tin vào các trường dưới đây để thêm banner</h4>
                    <form class="form-material m-t-40" action="{{route('banner.update',$banner->id)}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('put')}}
                        <div class="form-group">
                            <label>Tên Banner</label>
                            <input type="text" class="form-control form-control-line"
                                   name="name" value="{!! old('name'),isset($banner)? $banner->name:Null !!}">
                        </div>

                        <div class="form-group">
                            <label>Link banner</label>
                            <input type="text" class="form-control form-control-line"
                                   name="link" value="{!! old('link'),isset($banner)? $banner->link:Null !!}">
                        </div>


                        <label>Ảnh đại diện </label>
                        <div class="input-group">
                           <span class="input-group-btn">
                               <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn ">
                                 <i class="fa fa-picture-o"></i> Choose
                             </a>
                             </span>
                            <input id="thumbnail" class="form-control" type="text" name="image"
                                   value="{{$banner->image}}" required>
                        </div>
                        <img src="{{$banner->image}}" alt="{{str_slug($banner->name)}}" class="img-responsive">
                        <img id="holder" style="margin-top:15px;max-height:100px;">


                        <div class="radio"><p>Hiển thị banner</p>
                            <input type="radio" name="status" id="radio11" value="1" checked="checked">
                            <label for="radio11"> Hiện </label>
                            <input type="radio" name="status" id="radio2" value="0">
                            <label for="radio2"> Ẩn</label>
                        </div>


                        <a href="{{ URL::previous() }}" class="btn btn-inverse waves-effect waves-light">Quay lại</a>
                        <button class="btn btn-success waves-effect waves-light m-r-10 pull-right" type="submit">Thêm
                            banner
                        </button>

                    </form>
                    <br>

                </div>
            </div>
        </div>
        <div class="col-7">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Danh sách banner</h4>
                    <div class="table-responsive" id="dataTable">
                        <table class="table  color-table dark-table">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên</th>
                                <th>Trạng thái</th>
                                <th>Ảnh</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($listBanner as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{!! ($item->status==1)? "Hiện": "Ẩn" !!}</td>
                                    <td><img src="{!! $item->image !!}" alt="{{$item->name}}" width="50" height="50">
                                    </td>


                                    <td class="text-nowrap" style="text-align: center">
                                        <a data-toggle="tooltip" data-original-title="Edit"
                                           href="{{route('banner.edit',$item->id)}}"> <i
                                                    class="fa fa-pencil text-inverse m-r-10"></i> </a>


                                        <a data-toggle="tooltip" data-original-title="Close" data-id="{{$item->id}}"
                                           class="Delete"> <i class="fa fa-close text-danger"></i> </a>


                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

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
                    url: '{{route('banner.delete')}}',
                    type: 'POST',
                    dataType: 'json',
                    data: {id: id, 'action': 'Delete'},
                })
                    .done(function (data) {
                        $('#dataTable').reload(location.href + " #dataTable>table");
                    })
            }
        });
    </script>
@endsection