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
                <span class="navigation_page">Fashion</span>
            </div>
            <!-- ./breadcrumb -->
            <!-- row -->
            <div class="row">
                <!-- Left colunm -->
            @include('frontend.widget.shop-sidebar')
            <!-- ./left colunm -->
                <!-- Center colunm-->
                <div class="center_column col-xs-12 col-sm-9" id="center_column">
                    <!-- category-slider -->
                    <div class="category-slider">
                        <ul class="owl-carousel owl-style2" data-dots="false" data-loop="true" data-nav="true"
                            data-autoplayTimeout="1000" data-autoplayHoverPause="true" data-items="1">
                            <li>
                                <img src="assets/data/category-slide.jpg" alt="category-slider">
                            </li>
                            <li>
                                <img src="assets/data/slide-cart2.jpg" alt="category-slider">
                            </li>
                        </ul>
                    </div>
                    <!-- ./category-slider -->
                    <!-- subcategories -->
                    <div class="subcategories">
                        <ul>
                            <li class="current-categorie">
                                <a href="#">Women's Fashion</a>
                            </li>
                            <li>
                                <a href="#">Tops</a>
                            </li>
                            <li>
                                <a href="#">Dresses</a>
                            </li>
                            <li>
                                <a href="#">Bags & Shoes</a>
                            </li>
                            <li>
                                <a href="#">Pants</a>
                            </li>
                            <li>
                                <a href="#">Blouses</a>
                            </li>
                        </ul>
                    </div>
                    <!-- ./subcategories -->
                    <!-- view-product-list-->
                    <div id="view-product-list" class="view-product-list">
                        <h2 class="page-heading">
                            <span class="page-heading-title">Women</span>
                        </h2>
                        <ul class="display-product-option">
                            <li class="view-as-grid selected">
                                <span>grid</span>
                            </li>
                            <li class="view-as-list">
                                <span>list</span>
                            </li>
                        </ul>
                        <!-- PRODUCT LIST -->
                        <ul class="row product-list grid">
                            <li class="col-sx-12 col-sm-4">
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="detail.html">
                                            <img class="img-responsive" alt="product" src="assets/data/p40.jpg"/>
                                        </a>

                                        <div class="add-to-cart">
                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a>
                                        </h5>
                                        <div class="product-star">

                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                        </div>
                                        <div class="info-orther">
                                            <p>Item Code: #453217907</p>
                                            <p class="availability">Availability: <span>In stock</span></p>
                                            <div class="product-desc">
                                                Vestibulum eu odio. Suspendisse potenti. Morbi mollis tellus ac sapien.
                                                Praesent egestas tristique nibh. Nullam dictum felis eu pede mollis
                                                pretium. Fusce egestas elit eget lorem. In auctor lobortis lacus.
                                                Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis
                                                tellus, vitae iaculis lacus elit id tortor.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sx-12 col-sm-4">
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="detail.html">
                                            <img class="img-responsive" alt="product" src="assets/data/p35.jpg"/>
                                        </a>

                                        <div class="add-to-cart">
                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a>
                                        </h5>
                                        <div class="product-star">

                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                        </div>
                                        <div class="info-orther">
                                            <p>Item Code: #453217907</p>
                                            <p class="availability">Availability: <span>In stock</span></p>
                                            <div class="product-desc">
                                                Vestibulum eu odio. Suspendisse potenti. Morbi mollis tellus ac sapien.
                                                Praesent egestas tristique nibh. Nullam dictum felis eu pede mollis
                                                pretium. Fusce egestas elit eget lorem. In auctor lobortis lacus.
                                                Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis
                                                tellus, vitae iaculis lacus elit id tortor.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sx-12 col-sm-4">
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="detail.html">
                                            <img class="img-responsive" alt="product" src="assets/data/p41.jpg"/>
                                        </a>

                                        <div class="add-to-cart">
                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a>
                                        </h5>
                                        <div class="product-star">

                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                        </div>
                                        <div class="info-orther">
                                            <p>Item Code: #453217907</p>
                                            <p class="availability">Availability: <span>In stock</span></p>
                                            <div class="product-desc">
                                                Vestibulum eu odio. Suspendisse potenti. Morbi mollis tellus ac sapien.
                                                Praesent egestas tristique nibh. Nullam dictum felis eu pede mollis
                                                pretium. Fusce egestas elit eget lorem. In auctor lobortis lacus.
                                                Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis
                                                tellus, vitae iaculis lacus elit id tortor.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sx-12 col-sm-4">
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="detail.html">
                                            <img class="img-responsive" alt="product" src="assets/data/p37.jpg"/>
                                        </a>

                                        <div class="add-to-cart">
                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a>
                                        </h5>
                                        <div class="product-star">

                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                        </div>
                                        <div class="info-orther">
                                            <p>Item Code: #453217907</p>
                                            <p class="availability">Availability: <span>In stock</span></p>
                                            <div class="product-desc">
                                                Vestibulum eu odio. Suspendisse potenti. Morbi mollis tellus ac sapien.
                                                Praesent egestas tristique nibh. Nullam dictum felis eu pede mollis
                                                pretium. Fusce egestas elit eget lorem. In auctor lobortis lacus.
                                                Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis
                                                tellus, vitae iaculis lacus elit id tortor.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sx-12 col-sm-4">
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="detail.html">
                                            <img class="img-responsive" alt="product" src="assets/data/p38.jpg"/>
                                        </a>

                                        <div class="add-to-cart">
                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a>
                                        </h5>
                                        <div class="product-star">

                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                        </div>
                                        <div class="info-orther">
                                            <p>Item Code: #453217907</p>
                                            <p class="availability">Availability: <span>In stock</span></p>
                                            <div class="product-desc">
                                                Vestibulum eu odio. Suspendisse potenti. Morbi mollis tellus ac sapien.
                                                Praesent egestas tristique nibh. Nullam dictum felis eu pede mollis
                                                pretium. Fusce egestas elit eget lorem. In auctor lobortis lacus.
                                                Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis
                                                tellus, vitae iaculis lacus elit id tortor.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sx-12 col-sm-4">
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="detail.html">
                                            <img class="img-responsive" alt="product" src="assets/data/p39.jpg"/>
                                        </a>

                                        <div class="add-to-cart">
                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a>
                                        </h5>
                                        <div class="product-star">

                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                        </div>
                                        <div class="info-orther">
                                            <p>Item Code: #453217907</p>
                                            <p class="availability">Availability: <span>In stock</span></p>
                                            <div class="product-desc">
                                                Vestibulum eu odio. Suspendisse potenti. Morbi mollis tellus ac sapien.
                                                Praesent egestas tristique nibh. Nullam dictum felis eu pede mollis
                                                pretium. Fusce egestas elit eget lorem. In auctor lobortis lacus.
                                                Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis
                                                tellus, vitae iaculis lacus elit id tortor.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sx-12 col-sm-4">
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="detail.html">
                                            <img class="img-responsive" alt="product"
                                                 src="assets/data/product-300x366.jpg"/>
                                        </a>

                                        <div class="add-to-cart">
                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a>
                                        </h5>
                                        <div class="product-star">

                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                        </div>
                                        <div class="info-orther">
                                            <p>Item Code: #453217907</p>
                                            <p class="availability">Availability: <span>In stock</span></p>
                                            <div class="product-desc">
                                                Vestibulum eu odio. Suspendisse potenti. Morbi mollis tellus ac sapien.
                                                Praesent egestas tristique nibh. Nullam dictum felis eu pede mollis
                                                pretium. Fusce egestas elit eget lorem. In auctor lobortis lacus.
                                                Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis
                                                tellus, vitae iaculis lacus elit id tortor.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sx-12 col-sm-4">
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="detail.html">
                                            <img class="img-responsive" alt="product" src="assets/data/p36.jpg"/>
                                        </a>

                                        <div class="add-to-cart">
                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a>
                                        </h5>
                                        <div class="product-star">

                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                        </div>
                                        <div class="info-orther">
                                            <p>Item Code: #453217907</p>
                                            <p class="availability">Availability: <span>In stock</span></p>
                                            <div class="product-desc">
                                                Vestibulum eu odio. Suspendisse potenti. Morbi mollis tellus ac sapien.
                                                Praesent egestas tristique nibh. Nullam dictum felis eu pede mollis
                                                pretium. Fusce egestas elit eget lorem. In auctor lobortis lacus.
                                                Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis
                                                tellus, vitae iaculis lacus elit id tortor.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sx-12 col-sm-4">
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="detail.html">
                                            <img class="img-responsive" alt="product" src="assets/data/p42.jpg"/>
                                        </a>

                                        <div class="add-to-cart">
                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a>
                                        </h5>
                                        <div class="product-star">

                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                        </div>
                                        <div class="info-orther">
                                            <p>Item Code: #453217907</p>
                                            <p class="availability">Availability: <span>In stock</span></p>
                                            <div class="product-desc">
                                                Vestibulum eu odio. Suspendisse potenti. Morbi mollis tellus ac sapien.
                                                Praesent egestas tristique nibh. Nullam dictum felis eu pede mollis
                                                pretium. Fusce egestas elit eget lorem. In auctor lobortis lacus.
                                                Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis
                                                tellus, vitae iaculis lacus elit id tortor.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sx-12 col-sm-4">
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="detail.html">
                                            <img class="img-responsive" alt="product" src="assets/data/p34.jpg"/>
                                        </a>

                                        <div class="add-to-cart">
                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a>
                                        </h5>
                                        <div class="product-star">

                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                        </div>
                                        <div class="info-orther">
                                            <p>Item Code: #453217907</p>
                                            <p class="availability">Availability: <span>In stock</span></p>
                                            <div class="product-desc">
                                                Vestibulum eu odio. Suspendisse potenti. Morbi mollis tellus ac sapien.
                                                Praesent egestas tristique nibh. Nullam dictum felis eu pede mollis
                                                pretium. Fusce egestas elit eget lorem. In auctor lobortis lacus.
                                                Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis
                                                tellus, vitae iaculis lacus elit id tortor.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sx-12 col-sm-4">
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="detail.html">
                                            <img class="img-responsive" alt="product" src="assets/data/p89.jpg"/>
                                        </a>

                                        <div class="add-to-cart">
                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a>
                                        </h5>
                                        <div class="product-star">

                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                        </div>
                                        <div class="info-orther">
                                            <p>Item Code: #453217907</p>
                                            <p class="availability">Availability: <span>In stock</span></p>
                                            <div class="product-desc">
                                                Vestibulum eu odio. Suspendisse potenti. Morbi mollis tellus ac sapien.
                                                Praesent egestas tristique nibh. Nullam dictum felis eu pede mollis
                                                pretium. Fusce egestas elit eget lorem. In auctor lobortis lacus.
                                                Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis
                                                tellus, vitae iaculis lacus elit id tortor.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sx-12 col-sm-4">
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="detail.html">
                                            <img class="img-responsive" alt="product" src="assets/data/p90.jpg"/>
                                        </a>

                                        <div class="add-to-cart">
                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a>
                                        </h5>
                                        <div class="product-star">

                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                        </div>
                                        <div class="info-orther">
                                            <p>Item Code: #453217907</p>
                                            <p class="availability">Availability: <span>In stock</span></p>
                                            <div class="product-desc">
                                                Vestibulum eu odio. Suspendisse potenti. Morbi mollis tellus ac sapien.
                                                Praesent egestas tristique nibh. Nullam dictum felis eu pede mollis
                                                pretium. Fusce egestas elit eget lorem. In auctor lobortis lacus.
                                                Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis
                                                tellus, vitae iaculis lacus elit id tortor.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sx-12 col-sm-4">
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="detail.html">
                                            <img class="img-responsive" alt="product" src="assets/data/p91.jpg"/>
                                        </a>

                                        <div class="add-to-cart">
                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a>
                                        </h5>
                                        <div class="product-star">

                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                        </div>
                                        <div class="info-orther">
                                            <p>Item Code: #453217907</p>
                                            <p class="availability">Availability: <span>In stock</span></p>
                                            <div class="product-desc">
                                                Vestibulum eu odio. Suspendisse potenti. Morbi mollis tellus ac sapien.
                                                Praesent egestas tristique nibh. Nullam dictum felis eu pede mollis
                                                pretium. Fusce egestas elit eget lorem. In auctor lobortis lacus.
                                                Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis
                                                tellus, vitae iaculis lacus elit id tortor.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sx-12 col-sm-4">
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="detail.html">
                                            <img class="img-responsive" alt="product" src="assets/data/p92.jpg"/>
                                        </a>

                                        <div class="add-to-cart">
                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a>
                                        </h5>
                                        <div class="product-star">

                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                        </div>
                                        <div class="info-orther">
                                            <p>Item Code: #453217907</p>
                                            <p class="availability">Availability: <span>In stock</span></p>
                                            <div class="product-desc">
                                                Vestibulum eu odio. Suspendisse potenti. Morbi mollis tellus ac sapien.
                                                Praesent egestas tristique nibh. Nullam dictum felis eu pede mollis
                                                pretium. Fusce egestas elit eget lorem. In auctor lobortis lacus.
                                                Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis
                                                tellus, vitae iaculis lacus elit id tortor.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sx-12 col-sm-4">
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="detail.html">
                                            <img class="img-responsive" alt="product" src="assets/data/p93.jpg"/>
                                        </a>

                                        <div class="add-to-cart">
                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a>
                                        </h5>
                                        <div class="product-star">

                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                        </div>
                                        <div class="info-orther">
                                            <p>Item Code: #453217907</p>
                                            <p class="availability">Availability: <span>In stock</span></p>
                                            <div class="product-desc">
                                                Vestibulum eu odio. Suspendisse potenti. Morbi mollis tellus ac sapien.
                                                Praesent egestas tristique nibh. Nullam dictum felis eu pede mollis
                                                pretium. Fusce egestas elit eget lorem. In auctor lobortis lacus.
                                                Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis
                                                tellus, vitae iaculis lacus elit id tortor.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sx-12 col-sm-4">
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="detail.html">
                                            <img class="img-responsive" alt="product" src="assets/data/p94.jpg"/>
                                        </a>

                                        <div class="add-to-cart">
                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a>
                                        </h5>
                                        <div class="product-star">

                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                        </div>
                                        <div class="info-orther">
                                            <p>Item Code: #453217907</p>
                                            <p class="availability">Availability: <span>In stock</span></p>
                                            <div class="product-desc">
                                                Vestibulum eu odio. Suspendisse potenti. Morbi mollis tellus ac sapien.
                                                Praesent egestas tristique nibh. Nullam dictum felis eu pede mollis
                                                pretium. Fusce egestas elit eget lorem. In auctor lobortis lacus.
                                                Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis
                                                tellus, vitae iaculis lacus elit id tortor.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sx-12 col-sm-4">
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="detail.html">
                                            <img class="img-responsive" alt="product" src="assets/data/p95.jpg"/>
                                        </a>

                                        <div class="add-to-cart">
                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a>
                                        </h5>
                                        <div class="product-star">

                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                        </div>
                                        <div class="info-orther">
                                            <p>Item Code: #453217907</p>
                                            <p class="availability">Availability: <span>In stock</span></p>
                                            <div class="product-desc">
                                                Vestibulum eu odio. Suspendisse potenti. Morbi mollis tellus ac sapien.
                                                Praesent egestas tristique nibh. Nullam dictum felis eu pede mollis
                                                pretium. Fusce egestas elit eget lorem. In auctor lobortis lacus.
                                                Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis
                                                tellus, vitae iaculis lacus elit id tortor.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sx-12 col-sm-4">
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="detail.html">
                                            <img class="img-responsive" alt="product" src="assets/data/p96.jpg"/>
                                        </a>

                                        <div class="add-to-cart">
                                            <a title="Add to Cart" href="#add">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a>
                                        </h5>
                                        <div class="product-star">

                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                        </div>
                                        <div class="info-orther">
                                            <p>Item Code: #453217907</p>
                                            <p class="availability">Availability: <span>In stock</span></p>
                                            <div class="product-desc">
                                                Vestibulum eu odio. Suspendisse potenti. Morbi mollis tellus ac sapien.
                                                Praesent egestas tristique nibh. Nullam dictum felis eu pede mollis
                                                pretium. Fusce egestas elit eget lorem. In auctor lobortis lacus.
                                                Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis
                                                tellus, vitae iaculis lacus elit id tortor.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- ./PRODUCT LIST -->
                    </div>
                    <!-- ./view-product-list-->
                    <div class="sortPagiBar">
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
                        <div class="show-product-item">
                            <select name="">
                                <option value="">Show 18</option>
                                <option value="">Show 20</option>
                                <option value="">Show 50</option>
                                <option value="">Show 100</option>
                            </select>
                        </div>
                        <div class="sort-product">
                            <select>
                                <option value="">Product Name</option>
                                <option value="">Price</option>
                            </select>
                            <div class="sort-product-icon">
                                <i class="fa fa-sort-alpha-asc"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./ Center colunm -->
            </div>
            <!-- ./row-->
        </div>
    </div>
@endsection
