@extends('admin.master')

@section('content')
@section('title')
    Sửa danh mục
@endsection

@if(count($errors)>0)
    @foreach($errors->all() as $err)
        <div class="alert alert-warning alert-rounded">
            {!! $err !!}
        </div>
    @endforeach
@endif

    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Sửa danh mục</h4>
                    <form class="form-material m-t-40" action="{{route('category.update',$cate->id)}}" method="POST"
                          enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <label>Tên</label>
                            <input type="text" class="form-control form-control-line" name="name"
                                   value="{!!old('name', isset($cate) ? $cate->name : NULL)!!}"></div>

                        <div class="form-group">
                            <div class="form-group">
                                <label>Danh mục cha</label>
                                <select class="form-control" name="parent_cate">
                                    <option value="0">Chọn danh mục cha</option>
                                    <?php cate_parent($parent)?>
                                </select>
                            </div>

                                @if(!empty($cate->banner))
                                <img src="{{$cate->banner}}" width="150px" height="auto">
                                @endif

                            <div class="input-group">
                                <label>Banner danh mục</label>
                                <div class="input-group-btn">
                                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-default">
                                        <i class="fa fa-picture-o"></i> Choose
                                    </a>
                                </div>
                                <input id="thumbnail" class="form-control " type="text" name="filepath"
                                       value="{!! old('filepath',isset($cate)? $cate->banner: NULL) !!}">
                            </div>
                            <img id="holder" style="margin-top:15px;max-height:100px;">


                            <a href="{{route('category.index')}}" class="btn  btn-waring"><i class="fa fa-undo"></i> Hủy
                                bỏ</a>
                            <button class="btn  btn-success" type="submit"><i class="fa fa-refresh"></i> Cập nhật
                            </button>
                    </form>
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
