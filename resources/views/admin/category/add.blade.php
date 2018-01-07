@extends('admin.master')
@section('content')



    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Nhập đầy đủ thông tin để thêm danh mục</h4>
                    <form class="form-material m-t-40" action="{{route('category.store')}}" method="POST"
                          enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Tên<span class="help"> e.g. "George deo"</span></label>
                            <input type="text" class="form-control form-control-line" placeholder="Nhập tên danh mục..."
                                   name="name"></div>

                        <div class="form-group">
                            <div class="form-group">
                                <label>Danh mục cha</label>
                                <select class="form-control" name="parent_cate">
                                    <option value="0">Chọn danh mục cha</option>
                                    <?php // cate_parent($parent); ?>

                                </select>
                            </div>
                            <fieldset class="form-group">
                                <label>Thêm banner danh mục</label>
                                <label class="custom-file d-block">
                                    <input type="file" id="file" class="custom-file-input" name="banner">
                                    <span class="custom-file-control"></span>
                                </label>
                            </fieldset>
                            <fieldset class="form-group">
                                <label>Thêm ảnh danh mục</label>
                                <label class="custom-file d-block">
                                    <input type="file" id="file" class="custom-file-input" name="image">
                                    <span class="custom-file-control"></span>
                                </label>
                            </fieldset>
                            <button class="btn  btn-success"><i class="fa fa-plus"></i> Thêm danh mục</button>
                    </form>
                </div>
            </div>
        </div>


        @endsection