@extends('admin.master')
@section('content')

    <?php $category = DB::table('categories')->get(); ?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="text-themecolor m-b-0 m-t-0">Forms</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Thêm sản phẩm</li>
                    </ol>
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-outline-info">
                        @if(Session('flash-message'))
                            <div class="alert alert-success">{{session('flash-message')}}</div>
                        @endif
                        <div class="card-header">
                            <h4 class="m-b-0 text-white">Nhập vào các trường dưới đây để thêm sản phẩm</h4>
                        </div>
                        <div class="card-block">
                            <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                                {!!csrf_field()!!}
                                <div class="form-body">
                                    <h3 class="card-title">Thông tin sản phẩm</h3>
                                    <hr>
                                    @if(count($errors)>0)
                                        @foreach($errors->all() as $error)
                                            <div class="danger alert-danger"> {{$error}}</div>
                                        @endforeach
                                    @endif
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label"> Name</label>
                                                <input type="text" id="firstName" class="form-control" placeholder=""
                                                       name="name">
                                            </div>
                                            <div class="form-group has-success">
                                                <label class="control-label">Category</label>
                                                <select class="form-control custom-select" name="parent_id">
                                                    @foreach($category as $val)
                                                        <option value="{{$val->id}}">{{$val->name}}</option>
                                                    @endforeach
                                                </select>
                                                <small class="form-control-feedback"> Select category</small>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label">Price</label>

                                                <input type="number" id="" class="form-control" name="price">
                                                <small class="form-control-feedback"> This field has error.</small>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">Price promotion</label>
                                                <input type="number" id="" class="form-control " name="price_promotion">
                                                <small class="form-control-feedback"> This field has error.</small>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label"> Tags</label>
                                                <input type="text" id="" class="form-control" placeholder=""
                                                       name="tags">
                                            </div>

                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-block">
                                                    <h4 class="card-title">File Upload3</h4>
                                                    <label for="input-file-now-custom-2">Bạn có thể set chiều
                                                        cao</label>
                                                    <input type="file" id="input-file-now-custom-2" class="dropify"
                                                           data-height="500" name="image"/>
                                                </div>
                                            </div>
                                        </div>

                                        <!--/span-->
                                    </div>
                                    <!--/row-->

                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-block">
                                                <h4 class="card-title">Desciption</h4>
                                                <div class="form-group">
                                                    <textarea class="textarea_editor form-control" rows="15"
                                                              placeholder="Enter text ..."
                                                              name="description"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Save
                                    </button>
                                    <button type="button" class="btn btn-inverse">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection