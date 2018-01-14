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
                        <span class="page-heading-title2">{{$posts->name}}</span>
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

                        </span>
                        </div>
                        <div class="entry-photo">
                            <img src="{{$posts->image}}" alt="Blog">
                        </div>
                        <div class="content-text clearfix">
                            {!! $posts->content !!}
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

                    </div>

                    <!-- ./Comment -->
                </div>
                <!-- ./ Center colunm -->
            </div>
            <!-- ./row-->
        </div>
    </div>
@endsection
