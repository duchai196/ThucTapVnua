@extends('admin.master')

@section('content')

    <!-- ============================================================== -->
    <div class="row">
        <div class="col-5">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Nhập thông tin vào các trường dưới đây để thêm banner</h4>
                    <form class="form-material m-t-40" action="{{route('type-post.store')}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Tên Banner</label>
                            <input type="text" class="form-control form-control-line" placeholder="Some text value..."
                                   name="name" required="">
                        </div>
                        <div class="form-group">
                            <label>Sắp xếp</label>
                            <textarea class="form-control" rows="5" name="odoring"></textarea>
                        </div>

                        <label>Ảnh đại diện </label>
                        <div class="input-group">
                           <span class="input-group-btn">
                               <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn ">
                                 <i class="fa fa-picture-o"></i> Choose
                             </a>
                             </span>
                            <input id="thumbnail" class="form-control" type="text" name="image">
                        </div>
                        <img id="holder" style="margin-top:15px;max-height:100px;">

                        {{-- thư viện ảnh --}}
                        <label>Bộ sưu tập ảnh </label>
                        <div class="row">
                            @for($lfm=1;$lfm<7;$lfm++)
                                <div class="col-md-3">
                                    <div class="input-group ">
                            <span class="input-group-btn">
                                <a id="lfm{{$lfm}}" data-input="thumbnail{{$lfm}}" data-preview="holder" class="btn ">
                                  <i class="fa fa-picture-o"></i> Choose
                              </a>
                              </span>
                                        <input id="thumbnail{{$lfm}}" class="form-control" type="text"
                                               name="imageDetail[]">
                                    </div>
                                    <img id="holder" style="margin-top:15px;max-height:100px;">
                                </div>
                            @endfor
                        </div>
                        <div class="form-group">
                            <label>Sắp xếp</label>
                            <textarea class="form-control" rows="5" name="odoring"></textarea>
                        </div>
                        <div class="radio"><p>Hiển thị banner</p>
                            <input type="radio" name="status" id="radio11" value="1" checked="checked">
                            <label for="radio11"> Hiện </label>
                            <input type="radio" name="status" id="radio2" value="0">
                            <label for="radio2"> Ẩn</label>
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
        <div class="col-7">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Danh sách chuyên mục</h4>
                    <div class="table-responsive" id="dataTable">
                        <table class="table  color-table dark-table">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên</th>
                                <th>Sắp xếp</th>
                                <th>Ảnh</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($listCate as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->odering}}</td>
                                    <td>{{$item->status}}</td>
                                    <td class="text-nowrap" style="text-align: center">
                                        <a data-toggle="tooltip" data-original-title="Edit"
                                           href="{{route('type-post.edit',$item->id)}}"> <i
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
                    url: '{{route('type-post.ajax')}}',
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