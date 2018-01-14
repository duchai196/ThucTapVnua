@extends('frontend.master')
@section('page')
    home
@endsection
@section('content')


    <div id="home-slider">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 slider-left"></div>
                <div class="col-sm-9 header-top-right">

                            <ul id="contenhomeslider">
                                @foreach($banners as $b)
                                    <li><img alt="Funky roots" src="{{$b->image}}" title="Funky roots"/></li>
                                @endforeach;
                            </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- END Home slideder-->
    <!-- servives -->
    <div class="container">
        <div class="service ">
            <div class="col-xs-6 col-sm-4 service-item">
                <div class="icon">
                    <img alt="services" src="assets/data/s1.png"/>
                </div>
                <div class="info">
                    <a href="#"><h3>Miễn phí vận chuyển</h3></a>
                    <span>Với đơn hàng trên 500k</span>

                </div>
            </div>

            <div class="col-xs-6 col-sm-4 service-item">
                <div class="icon">
                    <img alt="services" src="assets/data/s3.png"/>
                </div>

                <div class="info">
                    <a href="#"><h3>HỖ TRỢ 24/7 </h3></a>
                    <span>Tư vấn trực tuyến</span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 service-item">
                <div class="icon">
                    <img alt="services" src="assets/data/s4.png"/>
                </div>
                <div class="info">
                    <a href="#"><h3>MUA SẮM AN TOÀN</h3></a>
                    <span>Bảo đảm mua sắm an toàn</span>
                </div>
            </div>
        </div>
    </div>
    <!-- end services -->

    <div class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9 page-top-left">
                    <div class="popular-tabs">
                        <ul class="nav-tab">
                            <li class="active"><a data-toggle="tab" href="#tab-1">Bán chạy nhất</a></li>
                            @if(count($saleProduct)>0)
                            <li><a data-toggle="tab" href="#tab-2">Giảm giá</a></li>
                            @endif

                            <li><a data-toggle="tab" href="#tab-3">Sản phẩm mới</a></li>
                        </ul>
                        <div class="tab-container">
                            <div id="tab-1" class="tab-panel active">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav="true"
                                    data-margin="30" data-autoplayTimeout="1000" data-autoplayHoverPause="true"
                                    data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                    <li>
                                        <div class="left-block">
                                            <a href="detail.html">
                                                <img class="img-responsive" alt="product" src="assets/data/bs1.jpg"/>
                                            </a>

                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                            <div class="group-price">
                                                <span class="product-new">NEW</span>
                                                <span class="product-sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="detail.html">Sexy Lady</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="detail.html"><img class="img-responsive" alt="product"
                                                                       src="assets/data/bs2.jpg"/></a>

                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="detail.html">Perfect Dress</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="detail.html"><img class="img-responsive" alt="product"
                                                                       src="assets/data/bs3.jpg"/></a>

                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="group-price">
                                            <span class="product-new">NEW</span>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="detail.html">Fresh Summer</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="detail.html"><img class="img-responsive" alt="product"
                                                                       src="assets/data/bs4.jpg"/></a>

                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="detail.html">Flowers Dress</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            @if(count($saleProduct)>0)
                            <div id="tab-2" class="tab-panel">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav="true"
                                    data-margin="30" data-autoplayTimeout="1000" data-autoplayHoverPause="true"
                                    data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                    @foreach($saleProduct as $item)
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html">
                                                    <img height="327px" alt="product" src="{!! $item->image !!}"/>
                                                </a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                                <div class="group-price">
                                                    {{--<span class="product-new">NEW</span>--}}
                                                    <span class="product-sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">{!! $item->name !!}</a>
                                                </h5>
                                                <div class="content_price">
                                                    <span class="price product-price">{!! number_format($item->sale_price) !!}
                                                        VND</span>
                                                    <span class="price old-price">{!! number_format($item->price) !!}
                                                        VND</span>
                                                </div>

                                            </div>
                                        </li>

                                    @endforeach

                                </ul>
                            </div>
                            @endif
                            <div id="tab-3" class="tab-panel">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav="true"
                                    data-margin="30" data-autoplayTimeout="1000" data-autoplayHoverPause="true"
                                    data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                    @foreach($newProduct as $item)
                                    <li>
                                        <div class="left-block">
                                            <a href="detail.html"><img alt="product"
                                                                       src="{{$item->image}}" height="327px"/></a>

                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="detail.html">{{$item->name}}</a>
                                            </h5>
                                            <div class="content_price">
                                                <span class="price product-price">{{number_format($item->sale_price)}}
                                                    VND</span>
                                                <span class="price old-price">{{number_format($item->price)}} VND</span>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 page-top-right">
                    <div class="latest-deals">
                        <h2 class="latest-deal-title">Sieu khuyen mai</h2>
                        <div class="latest-deal-content">
                            <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav="true"
                                data-autoplayTimeout="1000" data-autoplayHoverPause="true"
                                data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":1}}'>
                                @foreach($hotDeal as $hot)
                                <li>
                                    <div class="count-down-time" data-countdown="2018/01/15"></div>
                                    <div class="left-block">
                                        <a href="detail.html"><img alt="product"
                                                                   src="{!!$hot->image!!}" height="265"/></a>
                                        <div class="add-to-cart">
                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="detail.html">{!!$hot->name!!}</a>
                                        </h5>
                                        <div class="content_price">
                                            <span class="price product-price">{!!number_format($hot->sale_price) !!}
                                                VND</span>
                                            <span class="price old-price">{!!number_format($hot->price) !!} VND</span>
                                            <span class="colreduce-percentage">(-{!! number_format((($hot->price-$hot->sale_price)/$hot->price)*100,2)!!}
                                                %)</span>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---->
    <div class="content-page">
        <div class="container">
            <!-- featured category fashion -->
            <div class="category-featured">
                <nav class="navbar nav-menu nav-menu-red show-brand">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-brand"><a href="#"><img alt="fashion" src="assets/data/fashion.png"/>Cầu lông</a>
                        </div>
                        <span class="toggle-menu"></span>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <?php $badminton = DB::table('categories')->where('parent', 15)->get();?>
                                @foreach($badminton as $key=>$item)
                                    <li class="{{($key==0)? "active":null}}"><a data-toggle="tab"
                                                                                href="#tab-{{$item->id}}">{!! $item->name !!}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                    <div id="elevator-1" class="floor-elevator">
                        <a href="#" class="btn-elevator up disabled fa fa-angle-up"></a>
                        <a href="#elevator-2" class="btn-elevator down fa fa-angle-down"></a>
                    </div>
                </nav>
                <div class="category-banner">
                    <div class="col-sm-6 banner">
                        <a href="#"><img alt="ads2" class="img-responsive" src="assets/data/ads2.jpg"/></a>
                    </div>
                    <div class="col-sm-6 banner">
                        <a href="#"><img alt="ads2" class="img-responsive" src="assets/data/ads3.jpg"/></a>
                    </div>
                </div>
                <div class="product-featured clearfix">
                    <div class="banner-featured">
                        <div class="featured-text"><span>featured</span></div>
                        <div class="banner-img">
                            <a href="#"><img alt="Featurered 1" src="assets/data/f1.jpg"/></a>
                        </div>
                    </div>
                    <div class="product-featured-content">
                        <div class="product-featured-list">
                            <div class="tab-container">
                            @foreach($badminton as $k=>$item)
                                <!-- tab product -->
                                    <div class="tab-panel {{($k==0)? "active":null}}" id="tab-{{$item->id}}">
                                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true"
                                        data-nav="true" data-margin="0" data-autoplayTimeout="1000"
                                        data-autoplayHoverPause="true"
                                        data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                        <?php $products = DB::table('products')->where('id_cate', $item->id)->take(8)->get();?>
                                        @foreach($products as $key=>$i)

                                            <li clas="{!! ($key==0)? "active":null !!}">
                                            <div class="left-block">
                                                <a href="detail.html">
                                                    <img alt="product"
                                                         src="{{$i->image}}" height="327px"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">{!! $i->name !!}</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                    </div>

                                @endforeach
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- end featured category fashion -->
            <!-- featured category sports -->
            <div class="category-featured">
                <nav class="navbar nav-menu nav-menu-green show-brand">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-brand"><a href="#"><img alt="fashion"
                                                                   src="assets/data/sports.png"/>sports</a></div>
                        <span class="toggle-menu"></span>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a data-toggle="tab" href="#tab-6">Bán chạy nhất</a></li>
                                <li><a data-toggle="tab" href="#tab-7">Xem nhiều nhất</a></li>
                                <li><a href="#">Tennis</a></li>
                                <li><a href="#">Football</a></li>
                                <li><a href="#">Swimming</a></li>
                                <li><a href="#">Climbing</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                    <div id="elevator-2" class="floor-elevator">
                        <a href="#elevator-1" class="btn-elevator up fa fa-angle-up"></a>
                        <a href="#elevator-3" class="btn-elevator down fa fa-angle-down"></a>
                    </div>
                </nav>
                <div class="category-banner">
                    <div class="col-sm-6 banner">
                        <a href="#"><img alt="ads2" class="img-responsive" src="assets/data/ads6.jpg"/></a>
                    </div>
                    <div class="col-sm-6 banner">
                        <a href="#"><img alt="ads2" class="img-responsive" src="assets/data/ads7.jpg"/></a>
                    </div>
                </div>
                <div class="product-featured clearfix">
                    <div class="banner-featured">
                        <div class="featured-text"><span>featured</span></div>
                        <div class="banner-img">
                            <a href="#"><img alt="Featurered 1" src="assets/data/f2.jpg"/></a>
                        </div>
                    </div>
                    <div class="product-featured-content">
                        <div class="product-featured-list">
                            <div class="tab-container autoheight">
                                <!-- tab product -->
                                <div class="tab-panel active" id="tab-6">
                                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true"
                                        data-nav="true" data-margin="0" data-autoplayTimeout="1000"
                                        data-autoplayHoverPause="true"
                                        data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p14.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <!-- tab product -->
                                <div class="tab-panel" id="tab-7">
                                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true"
                                        data-nav="true" data-margin="0" data-autoplayTimeout="1000"
                                        data-autoplayHoverPause="true"
                                        data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>

                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p17.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p16.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p15.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p17.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p14.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="detail.html">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p17.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end featured category sports-->

            <!-- featured category electronic -->
            <div class="category-featured">
                <nav class="navbar nav-menu nav-menu-orange show-brand">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-brand"><a href="#"><img alt="fashion" src="assets/data/electronic.png"/>electronic</a>
                        </div>
                        <span class="toggle-menu"></span>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a data-toggle="tab" href="#tab-8">Bán chạy nhất</a></li>
                                <li><a data-toggle="tab" href="#tab-9">Xem nhiều nhất</a></li>
                                <li><a href="#">Television</a></li>
                                <li><a href="#">Air Conditional</a></li>
                                <li><a href="#">ARM</a></li>
                                <li><a href="#">Theater</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                    <div id="elevator-3" class="floor-elevator">
                        <a href="#elevator-2" class="btn-elevator up fa fa-angle-up"></a>
                        <a href="#elevator-4" class="btn-elevator down fa fa-angle-down"></a>
                    </div>
                </nav>
                <div class="category-banner">
                    <div class="col-sm-6 banner">
                        <a href="#"><img alt="ads2" class="img-responsive" src="assets/data/ads8.jpg"/></a>
                    </div>
                    <div class="col-sm-6 banner">
                        <a href="#"><img alt="ads2" class="img-responsive" src="assets/data/ads9.jpg"/></a>
                    </div>
                </div>
                <div class="product-featured clearfix">
                    <div class="banner-featured">
                        <div class="featured-text"><span>featured</span></div>
                        <div class="banner-img">
                            <a href="#"><img alt="Featurered 1" src="assets/data/f3.jpg"/></a>
                        </div>
                    </div>
                    <div class="product-featured-content">
                        <div class="product-featured-list">
                            <div class="tab-container autoheight">
                                <!-- tab product -->
                                <div class="tab-panel active" id="tab-8">
                                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true"
                                        data-nav="true" data-margin="0" data-autoplayTimeout="1000"
                                        data-autoplayHoverPause="true"
                                        data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p18.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p19.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p20.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p18.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p21.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- tab product -->
                                <div class="tab-panel" id="tab-9">
                                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true"
                                        data-nav="true" data-margin="0" data-autoplayTimeout="1000"
                                        data-autoplayHoverPause="true"
                                        data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p21.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product"
                                                                 src="assets/data/p21.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p20.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p19.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p18.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end featured category electronic-->
            <!-- featured category Digital -->
            <div class="category-featured">
                <nav class="navbar nav-menu nav-menu-blue show-brand">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-brand"><a href="#"><img alt="fashion" src="assets/data/digital.png"/>Digital</a>
                        </div>
                        <span class="toggle-menu"></span>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a data-toggle="tab" href="#tab-10">Bán chạy nhất</a></li>
                                <li><a data-toggle="tab" href="#tab-11">Xem nhiều nhất</a></li>
                                <li><a href="#">Mobile</a></li>
                                <li><a href="#">Camera</a></li>
                                <li><a href="#">Laptop</a></li>
                                <li><a href="#">Notebook</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                    <div id="elevator-4" class="floor-elevator">
                        <a href="#elevator-3" class="btn-elevator up fa fa-angle-up"></a>
                        <a href="#elevator-5" class="btn-elevator down fa fa-angle-down"></a>
                    </div>
                </nav>
                <div class="category-banner">
                    <div class="col-sm-6 banner">
                        <a href="#"><img alt="ads2" class="img-responsive" src="assets/data/ads10.jpg"/></a>
                    </div>
                    <div class="col-sm-6 banner">
                        <a href="#"><img alt="ads2" class="img-responsive" src="assets/data/ads11.jpg"/></a>
                    </div>
                </div>
                <div class="product-featured clearfix">
                    <div class="banner-featured">
                        <div class="featured-text"><span>featured</span></div>
                        <div class="banner-img">
                            <a href="#"><img alt="Featurered 1" src="assets/data/f4.jpg"/></a>
                        </div>
                    </div>
                    <div class="product-featured-content">
                        <div class="product-featured-list">
                            <div class="tab-container autoheight">
                                <!-- tab product -->
                                <div class="tab-panel active" id="tab-10">
                                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true"
                                        data-nav="true" data-margin="0" data-autoplayTimeout="1000"
                                        data-autoplayHoverPause="true"
                                        data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p22.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p23.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p24.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p25.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p23.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- tab product -->
                                <div class="tab-panel" id="tab-11">
                                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true"
                                        data-nav="true" data-margin="0" data-autoplayTimeout="1000"
                                        data-autoplayHoverPause="true"
                                        data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p25.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p24.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p23.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p23.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p22.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p23.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end featured category Digital-->
            <!-- featured category furniture -->
            <div class="category-featured">
                <nav class="navbar nav-menu nav-menu-blue2 show-brand">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-brand"><a href="#"><img alt="fashion" src="assets/data/furniture.png"/>furniture</a>
                        </div>
                        <span class="toggle-menu"></span>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a data-toggle="tab" href="#tab-12">Bán chạy nhất</a></li>
                                <li><a data-toggle="tab" href="#tab-13">Xem nhiều nhất</a></li>
                                <li><a href="#">Television</a></li>
                                <li><a href="#">Air Conditional</a></li>
                                <li><a href="#">Theater</a></li>
                                <li><a href="#">Accessories</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                    <div id="elevator-5" class="floor-elevator">
                        <a href="#elevator-4" class="btn-elevator up fa fa-angle-up"></a>
                        <a href="#elevator-6" class="btn-elevator down fa fa-angle-down"></a>
                    </div>
                </nav>
                <div class="category-banner">
                    <div class="col-sm-6 banner">
                        <a href="#"><img alt="ads2" class="img-responsive" src="assets/data/ads12.jpg"/></a>
                    </div>
                    <div class="col-sm-6 banner">
                        <a href="#"><img alt="ads2" class="img-responsive" src="assets/data/ads13.jpg"/></a>
                    </div>
                </div>
                <div class="product-featured clearfix">
                    <div class="banner-featured">
                        <div class="featured-text"><span>featured</span></div>
                        <div class="banner-img">
                            <a href="#"><img alt="Featurered 1" src="assets/data/f5.jpg"/></a>
                        </div>
                    </div>
                    <div class="product-featured-content">
                        <div class="product-featured-list">
                            <div class="tab-container autoheight">
                                <!-- tab product -->
                                <div class="tab-panel active" id="tab-12">
                                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true"
                                        data-nav="true" data-margin="0" data-autoplayTimeout="1000"
                                        data-autoplayHoverPause="true"
                                        data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p26.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p27.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p28.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p29.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p28.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- tab product -->
                                <div class="tab-panel" id="tab-13">
                                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true"
                                        data-nav="true" data-margin="0" data-autoplayTimeout="1000"
                                        data-autoplayHoverPause="true"
                                        data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p29.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p28.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p28.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p27.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p26.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end featured category furniture-->
            <!-- featured category jewelry -->
            <div class="category-featured">
                <nav class="navbar nav-menu nav-menu-gray show-brand">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-brand"><a href="#"><img alt="fashion" src="assets/data/jewelry.png"/>jewelry</a>
                        </div>
                        <span class="toggle-menu"></span>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a data-toggle="tab" href="#tab-14">Bán chạy nhất</a></li>
                                <li><a data-toggle="tab" href="#tab-15">Xem nhiều nhất</a></li>
                                <li><a href="#">Mobile</a></li>
                                <li><a href="#">Camera</a></li>
                                <li><a href="#">Laptop</a></li>
                                <li><a href="#">Notebook</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                    <div id="elevator-6" class="floor-elevator">
                        <a href="#elevator-5" class="btn-elevator up fa fa-angle-up"></a>
                        <a href="#" class="btn-elevator disabled down fa fa-angle-down"></a>
                    </div>
                </nav>
                <div class="category-banner">
                    <div class="col-sm-6 banner">
                        <a href="#"><img alt="ads2" class="img-responsive" src="assets/data/ads14.jpg"/></a>
                    </div>
                    <div class="col-sm-6 banner">
                        <a href="#"><img alt="ads2" class="img-responsive" src="assets/data/ads15.jpg"/></a>
                    </div>
                </div>
                <div class="product-featured clearfix">
                    <div class="banner-featured">
                        <div class="featured-text"><span>featured</span></div>
                        <div class="banner-img">
                            <a href="#"><img alt="Featurered 1" src="assets/data/f6.jpg"/></a>
                        </div>
                    </div>
                    <div class="product-featured-content">
                        <div class="product-featured-list">
                            <div class="tab-container autoheight">
                                <!-- tab product -->
                                <div class="tab-panel active" id="tab-14">
                                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true"
                                        data-nav="true" data-margin="0" data-autoplayTimeout="1000"
                                        data-autoplayHoverPause="true"
                                        data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p30.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p31.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p32.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p33.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p31.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- tab product -->
                                <div class="tab-panel" id="tab-15">
                                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true"
                                        data-nav="true" data-margin="0" data-autoplayTimeout="1000"
                                        data-autoplayHoverPause="true"
                                        data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p33.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p31.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p31.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p32.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p31.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="detail.html"><img class="img-responsive" alt="product"
                                                                           src="assets/data/p30.jpg"/></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="detail.html">Maecenas consequat
                                                        mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">


                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end featured category jewelry-->

            <!-- Baner bottom -->
            <div class="row banner-bottom">
                <div class="col-sm-6">
                    <div class="banner-boder-zoom">
                        <a href="#"><img alt="ads" class="img-responsive" src="assets/data/ads17.jpg"/></a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="banner-boder-zoom">
                        <a href="#"><img alt="ads" class="img-responsive" src="assets/data/ads18.jpg"/></a>
                    </div>
                </div>
            </div>
            <!-- end banner bottom -->
        </div>
    </div>

    <div class="container">
        <div class="brand-showcase">
            <h2 class="brand-showcase-title">
                Các nhãn hiệu
            </h2>
            <div class="brand-showcase-box">
                <ul class="brand-showcase-logo owl-carousel" data-loop="true" data-nav="true" data-dots="false"
                    data-margin="1" data-autoplayTimeout="1000" data-autoplayHoverPause="true"
                    data-responsive='{"0":{"items":2},"600":{"items":5},"1000":{"items":8}}'>
                    <li data-tab="showcase-1" class="item active"><img src="assets/data/gucci.png" alt="logo"
                                                                       class="item-img"/></li>
                    <li data-tab="showcase-2" class="item"><img src="assets/data/gucci.png" alt="logo"
                                                                class="item-img"/></li>
                    <li data-tab="showcase-3" class="item"><img src="assets/data/gucci.png" alt="logo"
                                                                class="item-img"/></li>
                    <li data-tab="showcase-4" class="item"><img src="assets/data/gucci.png" alt="logo"
                                                                class="item-img"/></li>
                    <li data-tab="showcase-5" class="item"><img src="assets/data/gucci.png" alt="logo"
                                                                class="item-img"/></li>
                    <li data-tab="showcase-6" class="item"><img src="assets/data/gucci.png" alt="logo"
                                                                class="item-img"/></li>
                    <li data-tab="showcase-7" class="item"><img src="assets/data/gucci.png" alt="logo"
                                                                class="item-img"/></li>
                    <li data-tab="showcase-8" class="item"><img src="assets/data/gucci.png" alt="logo"
                                                                class="item-img"/></li>
                    <li data-tab="showcase-9" class="item"><img src="assets/data/gucci.png" alt="logo"
                                                                class="item-img"/></li>
                </ul>

            </div>

        </div>
    </div>

    <div id="content-wrap">
        <div class="container">
            <div id="hot-categories" class="row">
                <div class="col-sm-12 group-title-box">
                    <h2 class="group-title ">
                        <span>Tin tức cập nhật</span>
                    </h2>
                </div>

                <div class="col-sm-6  col-lg-3 cate-box">
                    <div class="cate-tit">
                        <div class="div-1" style="width: 46%;">
                            <div class="cate-name-wrap">
                                <p class="cate-name">Electronics</p>
                            </div>
                            <a href="" class="cate-link link-active" data-ac="flipInX"><span>shop now</span></a>
                        </div>
                        <div class="div-2">
                            <a href="#">
                                <img src="assets/data/cate-product1.png" alt="Electronics" class="hot-cate-img"/>
                            </a>
                        </div>

                    </div>
                    <div class="cate-content">
                        <ul>
                            <li><a href="#">Batteries & Chargers</a></li>
                            <li><a href="#">Headphone, Headset</a></li>
                            <li><a href="#">Home Audio</a></li>
                            <li><a href="#">Mp3 Player Accessories</a></li>
                        </ul>
                    </div>
                </div> <!-- /.cate-box -->

                <div class="col-sm-6  col-lg-3 cate-box">
                    <div class="cate-tit">
                        <div class="div-1" style="width: 46%;">
                            <div class="cate-name-wrap">
                                <p class="cate-name">Sport & Outdoors</p>
                            </div>
                            <a href="" class="cate-link" data-ac="flipInX"><span>shop now</span></a>
                        </div>
                        <div class="div-2">
                            <a href="#">
                                <img src="assets/data/cate-product2.png" alt="Electronics" class="hot-cate-img"/>
                            </a>
                        </div>
                    </div>
                    <div class="cate-content">
                        <ul>
                            <li><a href="#">Golf Supplies</a></li>
                            <li><a href="#">Outdoor & Traveling Supplies</a></li>
                            <li><a href="#">Camping & Hiking</a></li>
                            <li><a href="#">Fishing</a></li>
                        </ul>
                    </div>
                </div> <!-- /.cate-box -->
                <div class="col-sm-6  col-lg-3 cate-box">
                    <div class="cate-tit">
                        <div class="div-1" style="width: 46%;">
                            <div class="cate-name-wrap">
                                <p class="cate-name">Fashion</p>
                            </div>
                            <a href="" class="cate-link" data-ac="flipInX"><span>shop now</span></a>
                        </div>
                        <div class="div-2">
                            <a href="#">
                                <img src="assets/data/cate-product3.png" alt="Electronics" class="hot-cate-img"/>
                            </a>
                        </div>

                    </div>
                    <div class="cate-content">
                        <ul>
                            <li><a href="#">Batteries & Chargers</a></li>
                            <li><a href="#">Headphone, Headset</a></li>
                            <li><a href="#">Home Audio</a></li>
                            <li><a href="#">Mp3 Player Accessories</a></li>
                        </ul>
                    </div>
                </div> <!-- /.cate-box -->
                <div class="col-sm-6  col-lg-3 cate-box">
                    <div class="cate-tit">
                        <div class="div-1" style="width: 46%;">
                            <div class="cate-name-wrap">
                                <p class="cate-name">Health & Beauty</p>
                            </div>
                            <a href="" class="cate-link" data-ac="flipInX"><span>shop now</span></a>
                        </div>
                        <div class="div-2">
                            <a href="#">
                                <img src="assets/data/cate-product4.png" alt="Electronics" class="hot-cate-img"/>
                            </a>
                        </div>

                    </div>
                    <div class="cate-content">
                        <ul>
                            <li><a href="#">Bath & Body</a></li>
                            <li><a href="#">Shaving & Hair Removal</a></li>
                            <li><a href="#">Fragrances</a></li>
                            <li><a href="#">Salon & Spa Equipment</a></li>
                        </ul>
                    </div>
                </div> <!-- /.cate-box -->
                <div class="col-sm-6  col-lg-3 cate-box">
                    <div class="cate-tit">
                        <div class="div-1" style="width: 46%;">
                            <div class="cate-name-wrap">
                                <p class="cate-name">Jewelry & Watches</p>
                            </div>
                            <a href="" class="cate-link" data-ac="flipInX"><span>shop now</span></a>
                        </div>
                        <div class="div-2">
                            <a href="#">
                                <img src="assets/data/cate-product5.png" alt="Electronics" class="hot-cate-img"/>
                            </a>
                        </div>
                    </div>
                    <div class="cate-content">
                        <ul>
                            <li><a href="#">Men Watches</a></li>
                            <li><a href="#">Wedding Rings</a></li>
                            <li><a href="#">Earring</a></li>
                            <li><a href="#">Necklaces</a></li>
                        </ul>
                    </div>
                </div> <!-- /.cate-box -->

                <div class="col-sm-6  col-lg-3 cate-box">
                    <div class="cate-tit">
                        <div class="div-1" style="width: 46%;">
                            <div class="cate-name-wrap">
                                <p class="cate-name">Digital</p>
                            </div>
                            <a href="" class="cate-link" data-ac="flipInX"><span>shop now</span></a>
                        </div>
                        <div class="div-2">
                            <a href="#">
                                <img src="assets/data/cate-product6.png" alt="Electronics" class="hot-cate-img"/>
                            </a>
                        </div>
                    </div>
                    <div class="cate-content">
                        <ul>
                            <li><a href="#">Accessories for iPhone</a></li>
                            <li><a href="#">Accessories for iPad</a></li>
                            <li><a href="#">Accessories for Tablet PC</a></li>
                            <li><a href="#">Tablet PC</a></li>
                        </ul>
                    </div>
                </div><!-- /.cate-box -->
                <div class="col-sm-6  col-lg-3 cate-box">
                    <div class="cate-tit">
                        <div class="div-1" style="width: 46%;">
                            <div class="cate-name-wrap">
                                <p class="cate-name">Furniture</p>
                            </div>
                            <a href="" class="cate-link" data-ac="flipInX"><span>shop now</span></a>
                        </div>
                        <div class="div-2">
                            <a href="#">
                                <img src="assets/data/cate-product7.png" alt="Electronics" class="hot-cate-img"/>
                            </a>
                        </div>

                    </div>
                    <div class="cate-content">
                        <ul>
                            <li><a href="#">Batteries & Chargers</a></li>
                            <li><a href="#">Headphone, Headset</a></li>
                            <li><a href="#">Home Audio</a></li>
                            <li><a href="#">Mp3 Player Accessories</a></li>
                        </ul>
                    </div>
                </div> <!-- /.cate-box -->
                <div class="col-sm-6  col-lg-3 cate-box">
                    <div class="cate-tit">
                        <div class="div-1" style="width: 46%;">
                            <div class="cate-name-wrap">
                                <p class="cate-name">Toys & Hobbies</p>
                            </div>
                            <a href="" class="cate-link" data-ac="flipInX"><span>shop now</span></a>
                        </div>
                        <div class="div-2">
                            <a href="#">
                                <img src="assets/data/cate-product8.png" alt="Electronics" class="hot-cate-img"/>
                            </a>
                        </div>
                    </div>
                    <div class="cate-content">
                        <ul>
                            <li><a href="#">Walkera</a></li>
                            <li><a href="#">Fpv System & Parts</a></li>
                            <li><a href="#">RC Cars & Parts</a></li>
                            <li><a href="#">Helicopters & Part</a></li>
                        </ul>
                    </div>
                </div><!-- /.cate-box -->
            </div> <!-- /#hot-categories -->

        </div> <!-- /.container -->
    </div>


@endsection
@section('script')
    <script type="text/javascript" src="assets/lib/jquery.bxslider/jquery.bxslider.min.js"></script>
@endsection