@extends('frontend.master')
@section('page')
    category-page
@endsection

@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <!-- breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="#" title="Return to Home">Home</a>
                <span class="navigation-pipe">&nbsp;</span>
                <span class="navigation_page">Blog</span>
            </div>
            <!-- ./breadcrumb -->
            <!-- row -->
            <div class="row">
                <!-- Left colunm -->
            @include('frontend.widget.blog-sidebar')
            <!-- ./left colunm -->
                <!-- Center colunm-->
                <div class="center_column col-xs-12 col-sm-9" id="center_column">
                    <h1 class="page-heading">
                        <span class="page-heading-title2">Sed ut perspiciatis unde omnis iste natus error</span>
                    </h1>
                    <article class="entry-detail">
                        <div class="entry-meta-data">
                        <span class="author">
                        <i class="fa fa-user"></i> 
                        by: <a href="#">Admin</a></span>
                            <span class="cat">
                            <i class="fa fa-folder-o"></i>
                            <a href="#">News, </a>
                            <a href="#">Promotions</a>
                        </span>
                            <span class="comment-count">
                            <i class="fa fa-comment-o"></i> 3
                        </span>
                            <span class="date"><i class="fa fa-calendar"></i> 2014-08-05 07:01:49</span>
                            <span class="post-star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(7 votes)</span>
                        </span>
                        </div>
                        <div class="entry-photo">
                            <img src="assets/data/blog-full.jpg" alt="Blog">
                        </div>
                        <div class="content-text clearfix">
                            <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi
                                et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor
                                sit amet, consecvtetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet
                                aliquam leo. Ut tellus dolor, dapibus eget, elementum vel.</p>

                            <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu
                                lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus
                                eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros.</p>

                            <p>Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, <a
                                        href="#">malesuada at</a>, neque. Vivamus eget nibh. Etiam cursus leo vel metus.
                                Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et
                                ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. Ut pharetra
                                augue nec augue. </p>

                            <p>Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu
                                massa. Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Donec
                                eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctor pulvinar.
                                Vestibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat
                                ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor.
                                Aliquam congue fermentum nisl. </p>
                            <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu
                                lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus
                                eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros.</p>

                            <p>Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, <a
                                        href="#">malesuada at</a>, neque. Vivamus eget nibh. Etiam cursus leo vel metus.
                                Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et
                                ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. Ut pharetra
                                augue nec augue. </p>
                        </div>
                        <div class="entry-tags">
                            <span>Tags:</span>
                            <a href="#">beauty,</a>
                            <a href="#">medicine,</a>
                            <a href="#">health</a>
                        </div>
                    </article>
                    <!-- Related Posts -->
                    <div class="single-box">
                        <h2>Related Posts</h2>
                        <ul class="related-posts owl-carousel" data-dots="false" data-loop="true" data-nav="true"
                            data-margin="30" data-autoplayTimeout="1000" data-autoplayHoverPause="true"
                            data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":3}}'>
                            <li class="post-item">
                                <article class="entry">
                                    <div class="entry-thumb image-hover2">
                                        <a href="#">
                                            <img src="assets/data/blog-1.jpg" alt="Blog">
                                        </a>
                                    </div>
                                    <div class="entry-ci">
                                        <h3 class="entry-title"><a href="#">Sed ut perspiciatis unde omnis iste natus
                                                error</a></h3>
                                        <div class="entry-meta-data">
                                        <span class="comment-count">
                                            <i class="fa fa-comment-o"></i> 3
                                        </span>
                                            <span class="date">
                                            <i class="fa fa-calendar"></i> 2014-08-05
                                        </span>
                                        </div>
                                        <div class="entry-more">
                                            <a href="#">Read more</a>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="post-item">
                                <article class="entry">
                                    <div class="entry-thumb image-hover2">
                                        <a href="#">
                                            <img src="assets/data/blog-2.jpg" alt="Blog">
                                        </a>
                                    </div>
                                    <div class="entry-ci">
                                        <h3 class="entry-title"><a href="#">Sed ut perspiciatis unde omnis iste natus
                                                error</a></h3>
                                        <div class="entry-meta-data">
                                        <span class="comment-count">
                                            <i class="fa fa-comment-o"></i> 3
                                        </span>
                                            <span class="date">
                                            <i class="fa fa-calendar"></i> 2014-08-05
                                        </span>
                                        </div>
                                        <div class="entry-more">
                                            <a href="#">Read more</a>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="post-item">
                                <article class="entry">
                                    <div class="entry-thumb image-hover2">
                                        <a href="#">
                                            <img src="assets/data/blog-3.jpg" alt="Blog">
                                        </a>
                                    </div>
                                    <div class="entry-ci">
                                        <h3 class="entry-title"><a href="#">Sed ut perspiciatis unde omnis iste natus
                                                error</a></h3>
                                        <div class="entry-meta-data">
                                        <span class="comment-count">
                                            <i class="fa fa-comment-o"></i> 3
                                        </span>
                                            <span class="date">
                                            <i class="fa fa-calendar"></i> 2014-08-05
                                        </span>
                                        </div>
                                        <div class="entry-more">
                                            <a href="#">Read more</a>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="post-item">
                                <article class="entry">
                                    <div class="entry-thumb image-hover2">
                                        <a href="#">
                                            <img src="assets/data/blog-4.jpg" alt="Blog">
                                        </a>
                                    </div>
                                    <div class="entry-ci">
                                        <h3 class="entry-title"><a href="#">Sed ut perspiciatis unde omnis iste natus
                                                error</a></h3>
                                        <div class="entry-meta-data">
                                        <span class="comment-count">
                                            <i class="fa fa-comment-o"></i> 3
                                        </span>
                                            <span class="date">
                                            <i class="fa fa-calendar"></i> 2014-08-05
                                        </span>
                                        </div>
                                        <div class="entry-more">
                                            <a href="#">Read more</a>
                                        </div>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    <!-- ./Related Posts -->
                    <!-- Comment -->
                    <div class="single-box">
                        <h2 class="">Comments</h2>
                        <div class="comment-list">
                            <ul>
                                <li>
                                    <div class="avartar">
                                        <img src="assets/data/avatar.png" alt="Avatar">
                                    </div>
                                    <div class="comment-body">
                                        <div class="comment-meta">
                                            <span class="author"><a href="#">Admin</a></span>
                                            <span class="date">2015-04-01</span>
                                        </div>
                                        <div class="comment">
                                            Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer
                                            rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget,
                                            malesuada at, neque.
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <ul>
                                        <li>
                                            <div class="avartar">
                                                <img src="assets/data/avatar.png" alt="Avatar">
                                            </div>
                                            <div class="comment-body">
                                                <div class="comment-meta">
                                                    <span class="author"><a href="#">Admin</a></span>
                                                    <span class="date">2015-04-01</span>
                                                </div>
                                                <div class="comment">
                                                    Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis.
                                                    Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel,
                                                    scelerisque eget, malesuada at, neque.
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="avartar">
                                                <img src="assets/data/avatar.png" alt="Avatar">
                                            </div>
                                            <div class="comment-body">
                                                <div class="comment-meta">
                                                    <span class="author"><a href="#">Admin</a></span>
                                                    <span class="date">2015-04-01</span>
                                                </div>
                                                <div class="comment">
                                                    Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis.
                                                    Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel,
                                                    scelerisque eget, malesuada at, neque.
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="avartar">
                                        <img src="assets/data/avatar.png" alt="Avatar">
                                    </div>
                                    <div class="comment-body">
                                        <div class="comment-meta">
                                            <span class="author"><a href="#">Admin</a></span>
                                            <span class="date">2015-04-01</span>
                                        </div>
                                        <div class="comment">
                                            Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer
                                            rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget,
                                            malesuada at, neque.
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="avartar">
                                        <img src="assets/data/avatar.png" alt="Avatar">
                                    </div>
                                    <div class="comment-body">
                                        <div class="comment-meta">
                                            <span class="author"><a href="#">Admin</a></span>
                                            <span class="date">2015-04-01</span>
                                        </div>
                                        <div class="comment">
                                            Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer
                                            rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget,
                                            malesuada at, neque.
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-box">
                        <h2>Leave a Comment</h2>
                        <div class="coment-form">
                            <p>Make sure you enter the () required information where indicated. HTML code is not
                                allowed.</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name">Name</label>
                                    <input id="name" type="text" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" class="form-control">
                                </div>
                                <div class="col-sm-12">
                                    <label for="website">Website URL</label>
                                    <input id="website" type="text" class="form-control">
                                </div>
                                <div class="col-sm-12">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" rows="8" class="form-control"></textarea>
                                </div>
                            </div>
                            <button class="btn-comment">Submit</button>
                        </div>
                    </div>
                    <!-- ./Comment -->
                </div>
                <!-- ./ Center colunm -->
            </div>
            <!-- ./row-->
        </div>
    </div>
@endsection
