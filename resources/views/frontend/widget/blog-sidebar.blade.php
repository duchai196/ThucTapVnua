<div class="column col-xs-12 col-sm-3" id="left_column">
    <!-- Blog category -->
    <div class="block left-module">
        <p class="title_block">Chuyên mục</p>
        <div class="block_content">
            <!-- layered -->
            <div class="layered layered-category">
                <div class="layered-content">
                    <ul class="tree-menu">
                        @foreach($type_posts as $tp)
                            <li><span></span><a href="#">{{$tp->name}}</a></li>

                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- ./layered -->
        </div>
    </div>
    <!-- ./blog category  -->
    <!-- Popular Posts -->

    <!-- ./Popular Posts -->
    <!-- Banner -->

    <!-- ./Banner -->
</div>