@extends('admin.master')
@section('css')
    <link rel="stylesheet" href="plugins/dropify/dist/css/dropify.min.css">
@endsection
@section('content')

    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Nhập thông tin vào các trường dưới đây để thêm bài viết</h4>
                    <form class="form-material m-t-40" enctype="multipart/form-data" action="{{route('post.store')}}"
                          method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Tiêu đề bài viết</label>
                            <input type="text" class="form-control form-control-line" placeholder="Some text value..."
                                   name="name"></div>

                        <div class="form-group">
                            <label>Nội dung bài viết</label>
                            <textarea name="content" class="form-control my-editor"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Danh mục bài viết</label>
                            <select class="form-control selectpicker" name="type_post">
                                <option value="1">-- Tin tức</option>
                                <?php cate_post($type_post);?>
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

                        <div class="radio"><p>Hiển thị bài viết</p>
                            <input type="radio" name="status" id="radio11" value="1" checked="checked">
                            <label for="radio11"> Hiện </label>
                            <input type="radio" name="status" id="radio2" value="0">
                            <label for="radio2"> Ẩn</label>
                        </div>
                        <input class="url" name="url" type="hidden" value="/upload_image">

                        <a href="{{ URL::previous() }}" class="btn btn-inverse waves-effect waves-light">Quay lại</a>
                        <button class="btn btn-success waves-effect waves-light m-r-10 pull-right" type="submit">Thêm
                            bài viết
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
    </script>

@endsection

