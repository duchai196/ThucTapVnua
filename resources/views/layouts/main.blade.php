<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/lib/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/lib/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/lib/select2/css/select2.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/lib/jquery.bxslider/jquery.bxslider.css"/>
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/lib/owl.carousel/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/lib/fancyBox/jquery.fancybox.css"/>
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/lib/jquery-ui/jquery-ui.css"/>
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/css/responsive.css"/>

    <title>Kute shop</title>
</head>
<body class="home">
<!-- TOP BANNER -->
<!--<div id="top-banner" class="top-banner">
    <div class="bg-overlay"></div>
    <div class="container">
        <h1>Special Offer!</h1>
        <h2>Additional 40% OFF For Men & Women Clothings</h2>
        <span>This offer is for online only 7PM to middnight ends in 30th July 2015</span>
        <span class="btn-close"></span>
    </div>
</div>-->
<!-- HEADER -->
<div id="header" class="header">
    <div class="top-header">
        <div class="container">
            <div class="nav-top-links">
                <a class="first-item" href="#"><img alt="phone" src="{{url('/')}}/public/images/phone.png"/>0979.438.834</a>
                <a href="#"><img alt="email" src="{{url('/')}}/public/images/email.png"/>Contact us today!</a>
            </div>


            <div class="support-link">

                <a href="#">Hỗ trợ</a>
            </div>

            <div id="user-info-top" class="user-info pull-right">
                <div class="dropdown">
                    <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                       href="#"><span>My Account</span></a>
                    <ul class="dropdown-menu mega_dropdown" role="menu">
                        <li><a href="login.html">Login</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--/.top-header -->
    <!-- MAIN HEADER -->
    <div class="container main-header">
        <div class="row">
            <div class="col-xs-12 col-sm-3 logo">
                <a href="index.html"><img alt="Kute Shop" src="{{url('/')}}/public/images/logo11.png"/></a>
            </div>

            <div id="cart-block" class="col-md-1 shopping-cart-box pull-right">
                <a class="cart-link" href="order.html">
                    <span class="notify notify-left">2</span>
                </a>
                <div class="cart-block">
                    <div class="cart-block-content">
                        <h5 class="cart-title">2 Items in my cart</h5>
                        <div class="cart-block-list">
                            <ul>
                                <li class="product-info">
                                    <div class="p-left">
                                        <a href="#" class="remove_link"></a>
                                        <a href="#">
                                            <img class="img-responsive"
                                                 src="{{url('/')}}/public/data/product-100x122.jpg" alt="p10">
                                        </a>
                                    </div>
                                    <div class="p-right">
                                        <p class="p-name">Donec Ac Tempus</p>
                                        <p class="p-rice">61,19 €</p>
                                        <p>Qty: 1</p>
                                    </div>
                                </li>
                                <li class="product-info">
                                    <div class="p-left">
                                        <a href="#" class="remove_link"></a>
                                        <a href="#">
                                            <img class="img-responsive"
                                                 src="{{url('/')}}/public/data/product-s5-100x122.jpg" alt="p10">
                                        </a>
                                    </div>
                                    <div class="p-right">
                                        <p class="p-name">Donec Ac Tempus</p>
                                        <p class="p-rice">61,19 €</p>
                                        <p>Qty: 1</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="toal-cart">
                            <span>Total</span>
                            <span class="toal-price pull-right">122.38 €</span>
                        </div>
                        <div class="cart-buttons">
                            <a href="order.html" class="btn-check-out">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-2 pull-right header-search-box">
                <form class="form-inline">
                    <div class="form-group form-category">

                    </div>
                    <div class="form-group input-serach">
                        <input type="text" placeholder="Nhập từ khóa...">
                    </div>
                    <button type="submit" class="pull-right btn-search"></button>
                </form>
            </div>
        </div>

    </div>
    <!-- END MANIN HEADER -->
    <div id="nav-top-menu" class="nav-top-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-3" id="box-vertical-megamenus">
                    <!--  cái sửa -->
                    <div class="box-vertical-megamenus">
                        <h4 class="title">
                            <span class="title-menu">Danh mục sản phẩm</span>
                            <span class="btn-open-mobile pull-right home-page"><i class="fa fa-bars"></i></span>
                        </h4>
                        <div class="vertical-menu-content is-home">
                            <ul class="vertical-menu-list">
                                <li><a href="category.html"><img class="icon-menu" alt="Funky roots"
                                                                 src="{{url('/')}}/public/data/1.png">Electronics</a>
                                </li>
                                <li>
                                    <a class="parent" href="category2.html"><img class="icon-menu" alt="Funky roots"
                                                                                 src="{{url('/')}}/public/data/2.png">Sports
                                        &amp; Outdoors</a>
                                    <div class="vertical-dropdown-menu">
                                        <div class="vertical-groups col-sm-12">
                                            <div class="mega-group col-sm-4">
                                                <h4 class="mega-group-header"><span>Tennis</span></h4>
                                                <ul class="group-link-default">
                                                    <li><a href="#">Tennis</a></li>
                                                    <li><a href="#">Coats &amp; Jackets</a></li>
                                                    <li><a href="#">Blouses &amp; Shirts</a></li>
                                                    <li><a href="#">Tops &amp; Tees</a></li>
                                                    <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                                                    <li><a href="#">Intimates</a></li>
                                                </ul>
                                            </div>
                                            <div class="mega-group col-sm-4">
                                                <h4 class="mega-group-header"><span>Swimming</span></h4>
                                                <ul class="group-link-default">
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Coats &amp; Jackets</a></li>
                                                    <li><a href="#">Blouses &amp; Shirts</a></li>
                                                    <li><a href="#">Tops &amp; Tees</a></li>
                                                    <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                                                    <li><a href="#">Intimates</a></li>
                                                </ul>
                                            </div>
                                            <div class="mega-group col-sm-4">
                                                <h4 class="mega-group-header"><span>Shoes</span></h4>
                                                <ul class="group-link-default">
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Coats &amp; Jackets</a></li>
                                                    <li><a href="#">Blouses &amp; Shirts</a></li>
                                                    <li><a href="#">Tops &amp; Tees</a></li>
                                                    <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                                                    <li><a href="#">Intimates</a></li>
                                                </ul>
                                            </div>
                                            <div class="mega-custom-html col-sm-12">
                                                <a href="#"><img src="{{url('/')}}/public/data/banner-megamenu.jpg"
                                                                 alt="Banner"></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="category.html"><img class="icon-menu" alt="Funky roots"
                                                                 src="{{url('/')}}/public/data/3.png">Smartphone &amp;
                                        Tablets</a></li>
                                <li><a href="category2.html"><img class="icon-menu" alt="Funky roots"
                                                                  src="{{url('/')}}/public/data/4.png">Health &amp;
                                        Beauty Bags</a></li>
                                <li>
                                    <a class="parent" href="category.html">
                                        <img class="icon-menu" alt="Funky roots" src="{{url('/')}}/public/data/5.png">Shoes
                                        &amp; Accessories</a>
                                    <div class="vertical-dropdown-menu">
                                        <div class="vertical-groups col-sm-12">
                                            <div class="mega-group col-sm-12">
                                                <h4 class="mega-group-header"><span>Special products</span></h4>
                                                <div class="row mega-products">
                                                    <div class="col-sm-3 mega-product">
                                                        <div class="product-avatar">
                                                            <a href="#"><img src="{{url('/')}}/public/data/p10.jpg"
                                                                             alt="product1"></a>
                                                        </div>
                                                        <div class="product-name">
                                                            <a href="#">Fashion hand bag</a>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="new-price">$38</div>
                                                            <div class="old-price">$45</div>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 mega-product">
                                                        <div class="product-avatar">
                                                            <a href="#"><img src="{{url('/')}}/public/data/p11.jpg"
                                                                             alt="product1"></a>
                                                        </div>
                                                        <div class="product-name">
                                                            <a href="#">Fashion hand bag</a>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="new-price">$38</div>
                                                            <div class="old-price">$45</div>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 mega-product">
                                                        <div class="product-avatar">
                                                            <a href="#"><img src="{{url('/')}}/public/data/p12.jpg"
                                                                             alt="product1"></a>
                                                        </div>
                                                        <div class="product-name">
                                                            <a href="#">Fashion hand bag</a>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="new-price">$38</div>
                                                            <div class="old-price">$45</div>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 mega-product">
                                                        <div class="product-avatar">
                                                            <a href="#"><img src="{{url('/')}}/public/data/p13.jpg"
                                                                             alt="product1"></a>
                                                        </div>
                                                        <div class="product-name">
                                                            <a href="#">Fashion hand bag</a>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="new-price">$38</div>
                                                            <div class="old-price">$45</div>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="category.html"><img class="icon-menu" alt="Funky roots"
                                                                 src="{{url('/')}}/public/data/6.png">Toys &amp; Hobbies</a>
                                </li>
                                <li><a href="category.html"><img class="icon-menu" alt="Funky roots"
                                                                 src="{{url('/')}}/public/data/7.png">Computers &amp;
                                        Networking</a></li>
                                <li><a href="category.html"><img class="icon-menu" alt="Funky roots"
                                                                 src="{{url('/')}}/public/data/8.png">Laptops &amp;
                                        Accessories</a></li>
                                <li><a href="category.html"><img class="icon-menu" alt="Funky roots"
                                                                 src="{{url('/')}}/public/data/9.png">Jewelry &amp;
                                        Watches</a></li>
                                <li><a href="category.html"><img class="icon-menu" alt="Funky roots"
                                                                 src="{{url('/')}}/public/data/10.png">Flashlights &amp;
                                        Lamps</a></li>
                                <li>
                                    <a href="category.html">
                                        <img class="icon-menu" alt="Funky roots" src="{{url('/')}}/public/data/11.png">
                                        Cameras &amp; Photo
                                    </a>
                                </li>
                                <li class="cat-link-orther">
                                    <a href="category.html">
                                        <img class="icon-menu" alt="Funky roots" src="{{url('/')}}/public/data/5.png">
                                        Television
                                    </a>
                                </li>
                                <li class="cat-link-orther">
                                    <a href="category.html">
                                        <img class="icon-menu" alt="Funky roots" src="{{url('/')}}/public/data/7.png">Computers
                                        &amp; Networking
                                    </a>
                                </li>
                                <li class="cat-link-orther">
                                    <a href="category.html">
                                        <img class="icon-menu" alt="Funky roots" src="{{url('/')}}/public/data/6.png">
                                        Toys &amp; Hobbies
                                    </a>
                                </li>
                                <li class="cat-link-orther">
                                    <a href="category.html"><img class="icon-menu" alt="Funky roots"
                                                                 src="{{url('/')}}/public/data/9.png">Jewelry &amp;
                                        Watches</a></li>
                            </ul>
                            <div class="all-category"><span class="open-cate">All Categories</span></div>
                        </div>
                    </div>
                    <!--  cái sửa -->
                </div>
                <div id="main-menu" class="col-sm-9 main-menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a class="navbar-brand" href="#">MENU</a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class="active ">
                                        <a class="" href="#">Trang Chủ</a>

                                    </li>
                                    <li class=" ">
                                        <a class="" href="#">Giới Thiệu</a>

                                    </li>
                                    <li class=" ">
                                        <a class="" href="#">Tin Tức Khuyến Mãi</a>

                                    </li>
                                    <li class=" ">
                                        <a class="" href="#">Cách Thức Thanh Toán</a>

                                    </li>
                                    <li class=" ">
                                        <a class="" href="#">Tư Vấn Tập Luyện</a>

                                    </li>
                                    <li class=" ">
                                        <a class="" href="#">Liên Hệ</a>

                                    </li>

                                </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                    </nav>
                </div>
            </div>
            <!-- userinfo on top-->
            <div id="form-search-opntop">
            </div>
            <!-- userinfo on top-->
            <div id="user-info-opntop">
            </div>
            <!-- CART ICON ON MMENU -->
            <div id="shopping-cart-box-ontop">
                <i class="fa fa-shopping-cart"></i>
                <div class="shopping-cart-box-ontop-content"></div>
            </div>
        </div>
    </div>
</div>

<footer id="footer">
    <div class="container">
        <!-- introduce-box -->
        <div id="introduce-box" class="row">
            <div class="col-md-3">
                <div id="address-box">
                    <a href="#"><img src="{{url('/')}}/public/images/logo11.png" alt=""/></a>
                    <div id="address-list">
                        <div class="tit-name">Địa chỉ:</div>
                        <div class="tit-contain">CS1: 82-Hoàng Như Tiếp-Long Biên-Hà Nội.</div>
                        <div class="tit-name">SDT:</div>
                        <div class="tit-contain">+00 123 456 789</div>
                        <div class="tit-name">Email:</div>
                        <div class="tit-contain">hunghaisport@gmail.com</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                @yield('main')

            </div>
            <div class="col-md-3">
                <div id="contact-box">
                    <div class="introduce-title">Newsletter</div>
                    <div class="input-group" id="mail-box">
                        <input type="text" placeholder="Your Email Address"/>
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">OK</button>
                          </span>
                    </div><!-- /input-group -->
                    <div class="introduce-title">Let's Socialize</div>
                    <div class="social-link">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-vk"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>

            </div>
        </div><!-- /#introduce-box -->

        <!-- #trademark-box -->
        <div id="trademark-box" class="row">
            <div class="col-sm-12">
                <ul id="trademark-list">
                    <li id="payment-methods">Accepted Payment Methods</li>
                    <li>
                        <a href="#"><img src="{{url('/')}}/public/data/trademark-ups.jpg" alt="ups"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{url('/')}}/public/data/trademark-qiwi.jpg" alt="ups"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{url('/')}}/public/data/trademark-wu.jpg" alt="ups"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{url('/')}}/public/data/trademark-cn.jpg" alt="ups"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{url('/')}}/public/data/trademark-visa.jpg" alt="ups"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{url('/')}}/public/data/trademark-mc.jpg" alt="ups"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{url('/')}}/public/data/trademark-ems.jpg" alt="ups"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{url('/')}}/public/data/trademark-dhl.jpg" alt="ups"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{url('/')}}/public/data/trademark-fe.jpg" alt="ups"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{url('/')}}/public/data/trademark-wm.jpg" alt="ups"/></a>
                    </li>
                </ul>
            </div>
        </div> <!-- /#trademark-box -->


        <div id="footer-menu-box">
            <div class="col-sm-12">
                <ul class="footer-menu-list">
                    <li><a href="#">Company Info - Partnerships</a></li>
                </ul>
            </div>
            <div class="col-sm-12">
                <ul class="footer-menu-list">
                    <li><a href="#">Online Shopping</a></li>
                    <li><a href="#">Promotions</a></li>
                    <li><a href="#">My Orders</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Site Map</a></li>
                    <li><a href="#">Customer Service</a></li>
                    <li><a href="#">Support</a></li>
                </ul>
            </div>
            <div class="col-sm-12">
                <ul class="footer-menu-list">
                    <li><a href="#">Most Populars</a></li>
                    <li><a href="#">Best Sellers</a></li>
                    <li><a href="#">New Arrivals</a></li>
                    <li><a href="#">Special Products</a></li>
                    <li><a href="#">Manufacturers</a></li>
                    <li><a href="#">Our Stores</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Payments</a></li>
                    <li><a href="#">Warantee</a></li>
                    <li><a href="#">Refunds</a></li>
                    <li><a href="#">Checkout</a></li>
                    <li><a href="#">Discount</a></li>
                </ul>
            </div>
            <div class="col-sm-12">

            </div>
            <p class="text-center">Copyrights &#169; 2017 LuanNguyen. </p>
        </div><!-- /#footer-menu-box -->
    </div>
</footer>

<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->
<script type="text/javascript" src="{{url('/')}}/public/lib/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/public/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/public/lib/select2/js/select2.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/public/lib/jquery.bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/public/lib/owl.carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/public/lib/jquery.countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/public/js/jquery.actual.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/public/lib/fancyBox/jquery.fancybox.js"></script>
<script type="text/javascript" src="{{url('/')}}/public/lib/jquery.elevatezoom.js"></script>
<script type="text/javascript" src="{{url('/')}}/public/js/theme-script.js"></script>

</body>
</html>