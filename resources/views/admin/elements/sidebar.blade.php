<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img"><img src="images/users/1.jpg" alt="user"/></div>
            <!-- User profile text-->
            <div class="profile-text"><a href="index.html#" class="dropdown-toggle link u-dropdown"
                                         data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                    @auth
                        {!!Auth::user()->name!!}
                    @endauth
                    <span class="caret"></span></a>
                <div class="dropdown-menu animated flipInY">
                    <a href="index.html#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                    <a href="index.html#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                    <a href="index.html#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                    <div class="dropdown-divider"></div>
                    <a href="index.html#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                    <div class="dropdown-divider"></div>
                    <a href="" class="dropdown-item"
                       onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off"></i> Logout
                    </a>

                    <form id="logout-form" action="" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">Quản lý</li>
                <li>
                    <a class="has-arrow" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Quản trị website <span
                                    class="label label-rounded label-success">5</span></span></a>

                </li>
                <li>
                    <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-drupal"></i><span
                                class="hide-menu">Danh mục sản phẩm</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('category.index')}}">Danh sách </a></li>
                        <li><a href="{{route('category.create')}}">Thêm danh mục mới</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-xbox"></i><span
                                class="hide-menu">Sản phẩm</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('product.index')}}">Danh sách</a></li>
                        <li><a href="{{route('product.create')}}">Thêm sản phẩm mới</a></li>
                        <li><a href="">Thống kê sản phấm</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-newspaper"></i><span
                                class="hide-menu">Bài viết</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('post.index')}}">Danh sách bài viết</a></li>
                        <li><a href="{{route('post.create')}}">Thêm bài viết mới</a></li>
                        <li><a href="{{route('type-post.index')}}">Chuyên mục bài viết</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="index.html#" aria-expanded="false"><i class="mdi mdi-account-circle"></i><span
                                class="hide-menu">Thành viên</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="ui-cards.html">Danh sách thành viên</a></li>
                        <li><a href="ui-user-card.html">Thêm thành viên mới</a></li>

                    </ul>
                </li>
                <li class="nav-devider"></li>
                <li class="nav-small-cap">FORMS, TABLE &amp; WIDGETS</li>
                <li>
                    <a class="has-arrow" href="index.html#" aria-expanded="false"><i class="mdi mdi-file"></i><span
                                class="hide-menu">Forms</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="form-basic.html">Basic Forms</a></li>
                        <li><a href="form-layout.html">Form Layouts</a></li>
                        <li><a href="form-addons.html">Form Addons</a></li>
                        <li><a href="form-material.html">Form Material</a></li>
                        <li><a href="form-float-input.html">Floating Lable</a></li>
                        <li><a href="form-pickers.html">Form Pickers</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow " href="index.html#" aria-expanded="false"><i class="mdi mdi-table"></i><span
                                class="hide-menu">Tables</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="table-basic.html">Basic Tables</a></li>
                        <li><a href="table-layout.html">Table Layouts</a></li>
                        <li><a href="table-data-table.html">Data Tables</a></li>
                        <li><a href="table-footable.html">Footable</a></li>
                        <li><a href="table-jsgrid.html">Js Grid Table</a></li>
                        <li><a href="table-responsive.html">Responsive Table</a></li>
                        <li><a href="table-bootstrap.html">Bootstrap Tables</a></li>
                        <li><a href="table-editable-table.html">Editable Table</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow " href="index.html#" aria-expanded="false"><i class="mdi mdi-widgets"></i><span
                                class="hide-menu">Widgets</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="widget-apps.html">Widget Apps</a></li>
                        <li><a href="widget-data.html">Widget Data</a></li>
                        <li><a href="widget-charts.html">Widget Charts</a></li>
                    </ul>
                </li>
                <li class="nav-devider"></li>
                <li class="nav-small-cap">EXTRA COMPONENTS</li>
                <li>
                    <a class="has-arrow " href="index.html#" aria-expanded="false"><i class="mdi mdi-book-multiple"></i><span
                                class="hide-menu">Page Layout</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="layout-single-column.html">1 Column</a></li>
                        <li><a href="layout-fix-header.html">Fix header</a></li>
                        <li><a href="layout-fix-sidebar.html">Fix sidebar</a></li>
                        <li><a href="layout-fix-header-sidebar.html">Fixe header &amp; Sidebar</a></li>
                        <li><a href="layout-boxed.html">Boxed Layout</a></li>
                        <li><a href="layout-logo-center.html">Logo in Center</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow " href="index.html#" aria-expanded="false"><i
                                class="mdi mdi-book-open-variant"></i><span class="hide-menu">Sample Pages</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="starter-kit.html">Starter Kit</a></li>
                        <li><a href="pages-blank.html">Blank page</a></li>
                        <li><a href="index.html#" class="has-arrow">Authentication <span
                                        class="label label-rounded label-success">6</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="pages-login.html">Login 1</a></li>
                                <li><a href="pages-login-2.html">Login 2</a></li>
                                <li><a href="pages-register.html">Register</a></li>
                                <li><a href="pages-register2.html">Register 2</a></li>
                                <li><a href="pages-lockscreen.html">Lockscreen</a></li>
                                <li><a href="pages-recover-password.html">Recover password</a></li>
                            </ul>
                        </li>
                        <li><a href="pages-profile.html">Profile page</a></li>
                        <li><a href="pages-animation.html">Animation</a></li>
                        <li><a href="pages-fix-innersidebar.html">Sticky Left sidebar</a></li>
                        <li><a href="pages-fix-inner-right-sidebar.html">Sticky Right sidebar</a></li>
                        <li><a href="pages-invoice.html">Invoice</a></li>
                        <li><a href="pages-treeview.html">Treeview</a></li>
                        <li><a href="pages-utility-classes.html">Helper Classes</a></li>
                        <li><a href="pages-search-result.html">Search result</a></li>
                        <li><a href="pages-scroll.html">Scrollbar</a></li>
                        <li><a href="pages-pricing.html">Pricing</a></li>
                        <li><a href="pages-lightbox-popup.html">Lighbox popup</a></li>
                        <li><a href="pages-gallery.html">Gallery</a></li>
                        <li><a href="pages-faq.html">Faqs</a></li>
                        <li><a href="index.html#" class="has-arrow">Error Pages</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="pages-error-400.html">400</a></li>
                                <li><a href="pages-error-403.html">403</a></li>
                                <li><a href="pages-error-404.html">404</a></li>
                                <li><a href="pages-error-500.html">500</a></li>
                                <li><a href="pages-error-503.html">503</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow " href="index.html#" aria-expanded="false"><i
                                class="mdi mdi-file-chart"></i><span class="hide-menu">Charts</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="chart-morris.html">Morris Chart</a></li>
                        <li><a href="chart-chartist.html">Chartis Chart</a></li>
                        <li><a href="chart-echart.html">Echarts</a></li>
                        <li><a href="chart-flot.html">Flot Chart</a></li>
                        <li><a href="chart-knob.html">Knob Chart</a></li>
                        <li><a href="chart-chart-js.html">Chartjs</a></li>
                        <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                        <li><a href="chart-extra-chart.html">Extra chart</a></li>
                        <li><a href="chart-peity.html">Peity Charts</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow " href="index.html#" aria-expanded="false"><i class="mdi mdi-brush"></i><span
                                class="hide-menu">Icons</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="icon-material.html">Material Icons</a></li>
                        <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                        <li><a href="icon-themify.html">Themify Icons</a></li>
                        <li><a href="icon-linea.html">Linea Icons</a></li>
                        <li><a href="icon-weather.html">Weather Icons</a></li>
                        <li><a href="icon-simple-lineicon.html">Simple Lineicons</a></li>
                        <li><a href="icon-flag.html">Flag Icons</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow " href="index.html#" aria-expanded="false"><i
                                class="mdi mdi-map-marker"></i><span class="hide-menu">Maps</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="map-google.html">Google Maps</a></li>
                        <li><a href="map-vector.html">Vector Maps</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow " href="index.html#" aria-expanded="false"><i
                                class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">Multi level dd</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="index.html#">item 1.1</a></li>
                        <li><a href="index.html#">item 1.2</a></li>
                        <li>
                            <a class="has-arrow" href="index.html#" aria-expanded="false">Menu 1.3</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="index.html#">item 1.3.1</a></li>
                                <li><a href="index.html#">item 1.3.2</a></li>
                                <li><a href="index.html#">item 1.3.3</a></li>
                                <li><a href="index.html#">item 1.3.4</a></li>
                            </ul>
                        </li>
                        <li><a href="index.html#">item 1.4</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item-->
        <a href="index.html" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="index.html" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- item-->
        <a href="index.html" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
    </div>
    <!-- End Bottom points-->
</aside>