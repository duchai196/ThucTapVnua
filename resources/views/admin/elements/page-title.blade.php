<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Forms</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Danh mục sản phẩm</li>
        </ol>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        <div class="dropdown pull-right m-r-10 hidden-sm-down">
            <p class="btn btn-block btn-outline-success">{{date('m-Y')}}</p>
        </div>
        @if(Session::has('message'))
            <div class="dropdown pull-right m-r-10 hidden-sm-down">
                <p class=" alert btn btn-success">{{Session::get('message')}}</p>
            </div>
        @endif

    </div>
</div>