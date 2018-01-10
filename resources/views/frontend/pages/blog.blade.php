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
                    <h2 class="page-heading">
                        <span class="page-heading-title2">Blog post</span>
                    </h2>
                    <div class="sortPagiBar clearfix">
                        <span class="page-noite">Showing 1 to 7 of 45 (15 Pages)</span>
                        <div class="bottom-pagination">
                            <nav>
                                <ul class="pagination">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">Next &raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <ul class="blog-posts">
                        <li class="post-item">
                            <article class="entry">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="entry-thumb image-hover2">
                                            <a href="#">
                                                <img src="assets/data/blog-1.jpg" alt="Blog">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="entry-ci">
                                            <h3 class="entry-title"><a href="#">Sed ut perspiciatis unde omnis iste
                                                    natus error</a></h3>
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
                                                <span class="date"><i
                                                            class="fa fa-calendar"></i> 2014-08-05 07:01:49</span>
                                            </div>
                                            <div class="post-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <span>(7 votes)</span>
                                            </div>
                                            <div class="entry-excerpt">
                                                Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit.
                                                Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec
                                                sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing
                                                elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus
                                                dolor, dapibus eget, elementum vel.
                                            </div>
                                            <div class="entry-more">
                                                <a href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="post-item">
                            <article class="entry">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="entry-thumb image-hover2">
                                            <a href="#">
                                                <img src="assets/data/blog-2.jpg" alt="Blog">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="entry-ci">
                                            <h3 class="entry-title"><a href="#">Sed ut perspiciatis unde omnis iste
                                                    natus error</a></h3>
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
                                                <span class="date"><i
                                                            class="fa fa-calendar"></i> 2014-08-05 07:01:49</span>
                                            </div>
                                            <div class="post-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <span>(7 votes)</span>
                                            </div>
                                            <div class="entry-excerpt">
                                                Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit.
                                                Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec
                                                sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing
                                                elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus
                                                dolor, dapibus eget, elementum vel.
                                            </div>
                                            <div class="entry-more">
                                                <a href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="post-item">
                            <article class="entry">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="entry-thumb image-hover2">
                                            <a href="#">
                                                <img src="assets/data/blog-3.jpg" alt="Blog">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="entry-ci">
                                            <h3 class="entry-title"><a href="#">Sed ut perspiciatis unde omnis iste
                                                    natus error</a></h3>
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
                                                <span class="date"><i
                                                            class="fa fa-calendar"></i> 2014-08-05 07:01:49</span>
                                            </div>
                                            <div class="post-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <span>(7 votes)</span>
                                            </div>
                                            <div class="entry-excerpt">
                                                Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit.
                                                Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec
                                                sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing
                                                elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus
                                                dolor, dapibus eget, elementum vel.
                                            </div>
                                            <div class="entry-more">
                                                <a href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="post-item">
                            <article class="entry">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="entry-thumb image-hover2">
                                            <a href="#">
                                                <img src="assets/data/blog-4.jpg" alt="Blog">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="entry-ci">
                                            <h3 class="entry-title"><a href="#">Sed ut perspiciatis unde omnis iste
                                                    natus error</a></h3>
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
                                                <span class="date"><i
                                                            class="fa fa-calendar"></i> 2014-08-05 07:01:49</span>
                                            </div>
                                            <div class="post-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <span>(7 votes)</span>
                                            </div>
                                            <div class="entry-excerpt">
                                                Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit.
                                                Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec
                                                sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing
                                                elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus
                                                dolor, dapibus eget, elementum vel.
                                            </div>
                                            <div class="entry-more">
                                                <a href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="post-item">
                            <article class="entry">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="entry-thumb image-hover2">
                                            <a href="#">
                                                <img src="assets/data/blog-5.jpg" alt="Blog">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="entry-ci">
                                            <h3 class="entry-title"><a href="#">Sed ut perspiciatis unde omnis iste
                                                    natus error</a></h3>
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
                                                <span class="date"><i
                                                            class="fa fa-calendar"></i> 2014-08-05 07:01:49</span>
                                            </div>
                                            <div class="post-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <span>(7 votes)</span>
                                            </div>
                                            <div class="entry-excerpt">
                                                Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit.
                                                Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec
                                                sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing
                                                elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus
                                                dolor, dapibus eget, elementum vel.
                                            </div>
                                            <div class="entry-more">
                                                <a href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="post-item">
                            <article class="entry">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="entry-thumb image-hover2">
                                            <a href="#">
                                                <img src="assets/data/blog-6.jpg" alt="Blog">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="entry-ci">
                                            <h3 class="entry-title"><a href="#">Sed ut perspiciatis unde omnis iste
                                                    natus error</a></h3>
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
                                                <span class="date"><i
                                                            class="fa fa-calendar"></i> 2014-08-05 07:01:49</span>
                                            </div>
                                            <div class="post-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <span>(7 votes)</span>
                                            </div>
                                            <div class="entry-excerpt">
                                                Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit.
                                                Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec
                                                sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing
                                                elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus
                                                dolor, dapibus eget, elementum vel.
                                            </div>
                                            <div class="entry-more">
                                                <a href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="post-item">
                            <article class="entry">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="entry-thumb image-hover2">
                                            <a href="#">
                                                <img src="assets/data/blog-7.jpg" alt="Blog">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="entry-ci">
                                            <h3 class="entry-title"><a href="#">Sed ut perspiciatis unde omnis iste
                                                    natus error</a></h3>
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
                                                <span class="date"><i
                                                            class="fa fa-calendar"></i> 2014-08-05 07:01:49</span>
                                            </div>
                                            <div class="post-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <span>(7 votes)</span>
                                            </div>
                                            <div class="entry-excerpt">
                                                Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit.
                                                Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec
                                                sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing
                                                elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus
                                                dolor, dapibus eget, elementum vel.
                                            </div>
                                            <div class="entry-more">
                                                <a href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                    </ul>
                    <div class="sortPagiBar clearfix">
                        <div class="bottom-pagination">
                            <nav>
                                <ul class="pagination">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">Next &raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- ./ Center colunm -->
            </div>
            <!-- ./row-->
        </div>
    </div>
@endsection

