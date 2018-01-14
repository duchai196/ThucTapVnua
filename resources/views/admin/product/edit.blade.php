@extends('admin.master')
@section('css')
    <link rel="stylesheet" href="plugins/dropify/dist/css/dropify.min.css">
@endsection
@section('content')

@section('title')
    CHỈNH SỬA SẢN PHẨM
@endsection
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Nhập thông tin vào các trường dưới đây để sửa sản phẩm</h4>
                    <form class="form-material m-t-40" enctype="multipart/form-data"
                          action="{{route('product.update',$product->id)}}" method="POST">
                        {{csrf_field()}}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label>Tên <span class="help"> e.g. "Iphone 8"</span></label>
                            <input type="text" class="form-control form-control-line"
                                   value="{!!old('name'),isset($product)? $product->name:null!!}" name="name"></div>
                        <div class="form-group">
                            <label for="price_unit">Gía sản phẩm <span class="help"> e.g. "200000"</span></label>
                            <input type="number" id="price_unit" name="price_unit" class="form-control"
                                   value="{!!old('price_unit'),isset($product)? $product->price:null!!}">
                        </div>
                        <div class="form-group">
                            <label for="price_promotion">Gía khuyến mãi <span class="help"> e.g. "100000"</span>
                            </label>
                            <input type="number" name="price_promotion" class="form-control"
                                   value="{!!old('price_promotion'),isset($product)? $product->sale_price:null!!}">
                        </div>

                        <div class="form-group">
                            <label>Mô tả ngắn</label>
                            <textarea name="short_description"
                                      class="form-control my-editor">{!!old('short_description',isset($product)? $product->short_description:null)!!}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Mô tả chi tiết</label>
                            <textarea name="description"
                                      class="form-control my-editor">{!!old('description',isset($product)? $product->description:null)!!}</textarea>


                        </div>
                        <div class="form-group">
                            <label>Danh mục sản phẩm</label>
                            <select class="form-control selectpicker" name="cate_id">
                                <option value="0">-- vui lòng chọn</option>
                                <?php cate_parent($categories);?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Chọn thương hiệu</label>
                            <select class="form-control selectpicker" name="id_brand">
                                <option value="0">-- vui lòng chọn</option>
                                @foreach($brands as $item)
                                    <option value="{{$item->id}}"
                                            {!! ($item->id==$product->id_brand)? "selected":null !!}
                                    >{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <label>Ảnh đại diện </label>
                        <div class="input-group">
                           <span class="input-group-btn">
                               <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn ">
                                 <i class="fa fa-picture-o"></i> Choose
                             </a>
                             </span>
                            <input id="thumbnail" class="form-control" type="text" name="image"
                                   value="{!!old('image',isset($product)? $product->image:null)!!}">
                        </div>
                        <img id="holder" style="margin-top:15px;max-height:100px;">
                        @if(isset($product) && !empty($product->image))
                            <img src="{!!$product->image!!}" alt="" height="150px">
                        @endif

                        <div class="radio"><p>Hiển thị sản phẩm?</p>
                            <input type="radio" name="status" id="radio11" value="1" checked="">
                            <label for="radio11"> Hiện </label>
                            <input type="radio" name="status" id="radio2" value="0">
                            <label for="radio2"> Ẩn</label>
                        </div>
                        <input class="url" name="url" type="hidden" value="/upload_image">


                        <br>

                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card card-outline-inverse ">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Đăng bài viết</h4></div>
                <div class="card-block">
                    <p class="card-title">Được tạo lúc: {!!$product->created_at->format('H:i:s d-m-Y')!!}</p>
                    <p class="card-title">Được cập nhật lúc: {!!$product->updated_at->format('H:i:s d-m-Y')!!}</p>
                    <p class="card-text"></p>


                    <button class="btn btn-success waves-effect waves-light m-r-10 pull-right" type="submit">Cập nhật
                        sản phẩm
                    </button>
                    </form>
                    <form action="{{route('product.destroy',$product->id)}}" method="POST">
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                        <button class="btn btn-warning waves-effect waves-light m-r-10 pull-left" type="submit">Xoá
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script src="plugins/dropify/dist/js/dropify.min.js"></script>
    <script src="js/lfm.js"></script>

    <script type="text/javascript">
        var editor_config = {
            path_absolute: "/",
            selector: "textarea.my-editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback: function (field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file: cmsURL,
                    title: 'Filemanager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizable: "yes",
                    close_previous: "no"
                });
            }
        };

        tinymce.init(editor_config);

    </script>

    <script type="text/javascript">
        var domain = "/laravel-filemanager";
        $('#lfm').filemanager('image');
        $('#lfm').filemanager('image', {prefix: domain});
    </script>

@endsection

