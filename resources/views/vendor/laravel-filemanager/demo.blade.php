<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Filemanager</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('vendor/laravel-filemanager/img/folder.png') }}">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
    <h1 class="page-header">Integration Demo Page</h1>
    <div class="row">

        <div class="col-md-6">
            <h2>TinyMCE</h2>
            <textarea name="tm" class="form-control"></textarea>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h2>Embed file manager</h2>
            <iframe src="/laravel-filemanager"
                    style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
        </div>
    </div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script>
    var route_prefix = "{{ url(config('lfm.url_prefix', config('lfm.prefix'))) }}";
</script>


<!-- TinyMCE init -->
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
    var editor_config = {
        path_absolute: "",
        selector: "textarea[name=tm]",
        plugins: [
            "link image"
        ],
        relative_urls: false,
        height: 129,
        file_browser_callback: function (field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + route_prefix + '?field_name=' + field_name;
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

<script>
    {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!}
</script>
<script>
    $('#lfm').filemanager('image', {prefix: route_prefix});
    $('#lfm2').filemanager('file', {prefix: route_prefix});
</script>


<script>
    $(document).ready(function () {

        // Define function to open filemanager window
        var lfm = function (options, cb) {
            var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
            window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
            window.SetUrl = cb;
        };

    });
</script>
</body>
</html>
