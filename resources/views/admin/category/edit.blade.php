@extends('admin.master')
@section('content')



    <div class="row">
        <div class="col-12">
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
                                    <?php cate_parent($parent)?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Update banner</label>
                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                    <div class="form-control" data-trigger="fileinput"><i
                                                class="glyphicon glyphicon-file fileinput-exists"></i> <span
                                                class="fileinput-filename"></span></div>
                                    <span class="input-group-addon btn btn-default btn-file"> <span
                                                class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                   

                                    <input type="file" name="banner"> </span> <a href="form-material.html#"
                                                                                 class="input-group-addon btn btn-default fileinput-exists"
                                                                                 data-dismiss="fileinput">Remove</a>
                                </div>
                                @if(!empty($cate->banner))
                                    <img src="../uploads/category/banner/{{$cate->banner}}">
                                @endif

                            </div>
                            <div class="form-group">
                                <label>Update image</label>
                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                    <div class="form-control" data-trigger="fileinput"><i
                                                class="glyphicon glyphicon-file fileinput-exists"></i> <span
                                                class="fileinput-filename"></span></div>
                                    <span class="input-group-addon btn btn-default btn-file"> <span
                                                class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                    <input type="file" name="image"> </span> <a href="form-material.html#"
                                                                                class="input-group-addon btn btn-default fileinput-exists"
                                                                                data-dismiss="fileinput">Remove</a>
                                </div>
                                @if(!empty($cate->image))
                                    <img src="../uploads/category/image/{{$cate->image}}">
                                @endif
                            </div>

                            <a href="{{route('category.index')}}" class="btn  btn-waring"><i class="fa fa-undo"></i> Hủy
                                bỏ</a>
                            <button class="btn  btn-success" type="submit"><i class="fa fa-refresh"></i> Cập nhật
                            </button>
                    </form>
                </div>
            </div>
        </div>


@endsection