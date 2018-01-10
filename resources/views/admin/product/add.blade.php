@extends('admin.master')
@section('css')
    <link rel="stylesheet" href="plugins/dropify/dist/css/dropify.min.css">
@endsection
@section('content')
@section('title')
    THÊM MỚI SẢN PHẨM
@endsection

@if(count($errors)>0)
    @foreach($errors->all() as $err)
        <div class="alert alert-warning alert-rounded">
            {!! $err !!}
        </div>
    @endforeach
@endif

    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Nhập thông tin vào các trường dưới đây để thêm sản phẩm</h4>
                    <form class="form-material m-t-40" enctype="multipart/form-data" action="{{route('product.store')}}"
                          method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Tên <span class="help"> e.g. "Iphone 8"</span></label>
                            <input type="text" class="form-control form-control-line" placeholder="Some text value..."
                                   name="name"></div>
                        <div class="form-group">
                            <label for="price_unit">Gía sản phẩm <span class="help"> e.g. "200000"</span></label>
                            <input type="number" id="price_unit" name="price_unit" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="price_promotion">Gía khuyến mãi <span class="help"> e.g. "100000"</span>
                            </label>
                            <input type="number" name="price_promotion" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Mô tả ngắn</label>
                            <textarea name="short_description" class="form-control my-editor"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Mô tả chi tiết</label>
                            <textarea name="description" class="form-control my-editor"></textarea>


                        </div>
                        <div class="form-group">
                            <label>Danh mục sản phẩm</label>
                            <select class="form-control selectpicker" name="cate_id">
                                <option>-- vui lòng chọn</option>
                                <?php cate_parent($categories);?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Chọn thương hiệu</label>
                            <select class="form-control selectpicker" name="id_brand">
                                <option value="0">-- vui lòng chọn</option>
                                @foreach($brands as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
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

                        <div class="radio"><p>Hiển thị sản phẩm?</p>
                            <input type="radio" name="Avail" id="radio11" value="1" checked>
                            <label for="radio11"> Hiện </label>
                            <input type="radio" name="Avail" id="radio2" value="0">
                            <label for="radio2"> Ẩn</label>
                        </div>
                        <input class="url" name="url" type="hidden" value="/upload_image">

                        <a href="{{ URL::previous() }}" class="btn btn-inverse waves-effect waves-light">Quay lại</a>
                        <button class="btn btn-success waves-effect waves-light m-r-10 pull-right" type="submit">Thêm
                            sản phẩm
                        </button>

                    </form>
                    <br>

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

        for (var i = 0; i < 7; i++) {
            $('#lfm' + i).filemanager('image');
            $('#lfm' + i).filemanager('image', {prefix: domain});
        }
    </script>

@endsection

