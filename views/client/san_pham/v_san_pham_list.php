<div class="banner-wrapper has_background">
    <img src="./assets/client/images/banner-for-all2.jpg" class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title">Cửa hàng</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="./index.php"><span>Trang chủ</span></a></li>
                <li class="trail-item trail-end active"><span>Cửa hàng</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="main-container shop-page left-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-xl-9 col-lg-8 col-md-8 col-sm-12 has-sidebar">
                <div class="shop-control shop-before-control">
                    <div class="grid-view-mode">
                        <form>
                            <a href="index.php?act=shop" data-toggle="tooltip" data-placement="top" class="modes-mode mode-grid display-mode" value="grid">
                                <span class="button-inner">
                                    Shop Grid
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </a>
                            <a href="index.php?act=sanpham_list" data-toggle="tooltip" data-placement="top" class="modes-mode mode-list display-mode active" value="list">
                                <span class="button-inner">
                                    Shop List
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </a>
                        </form>
                    </div>
                    <form action="index.php?act=sanpham_list" method="POST" class="akasha-ordering">
                        <select title="product_cat" name="iddm" class="orderby">
                            <option value="0" selected="selected">Tất cả danh mục</option>
                            <?php
                            foreach ($list_dm as $dm) {
                                extract($dm);
                            ?>
                                <option class="popularity" value="<?= $id_dm ?>"><?= $ten_dm ?></option>
                            <?php
                            }
                            ?>

                        </select>
                        <input style="font-weight: 500; height: 44px; margin-bottom: 3px; margin-left: 5px;" type="submit" name="btn" value="Tìm kiếm" class="btn btn-light">

                    </form>
                </div>
                <div class=" auto-clear equal-container better-height akasha-products">
                    <ul class="row products columns-3">
                        <?php
                        foreach ($listsp_dm as $sp) {
                            extract($sp);
                            $linkimg = "./assets/uploads/" . $hinh;
                            echo '  <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-28 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple" data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="index.php?act=sanphamct&idsp=' . $id_sp . '">
                                        <img style="height: 345px;" class="img-responsive" src="' . $linkimg . '" alt="Classic Shirt" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <div class="group-button">
                                       
                                        
                                        <a href="index.php?act=sanphamct&idsp=' . $id_sp . '" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                        <form action="index.php?act=add_cart" method="POST">
                                        <input type="hidden" name="id" value="' . $id_sp . '">
                                        <input type="hidden" name="ten_sp" value="' . $ten_sp . '">
                                        <input type="hidden" name="img_sp" value="' . $hinh . '">
                                        <input type="hidden" name="gia_sp" value="' . $don_gia . '">
                                        <input type="hidden" name="so_luong" value="1">
                                        <input style="cursor: pointer; background-color: transparent; color: #222; font-size: 15px; font-weight: 500;" type="submit" class="button b" name="add_cart" value=" ">
                                        </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="index.php?act=sanphamct&idsp=' . $id_sp . '">' . $ten_sp . '</a>
                                    </h3>
                                   
                                    <span class="price"><ins><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol"></span>' . number_format($don_gia) . '</span> VNĐ</ins></span>
                                </div>
                            </div>
                        </li>';
                        }
                        ?>

                    </ul>
                </div>
                <div class="shop-control shop-after-control">
                    <nav class="akasha-pagination">
                        <span class="page-numbers current">1</span>
                        <a class="page-numbers" href="#">2</a>
                        <a class="next page-numbers" href="#">Next</a>
                    </nav>
                    <!-- <p class="akasha-result-count">Showing 1–12 of 20 results</p> -->
                </div>
            </div>
            <div class="sidebar col-xl-3 col-lg-4 col-md-4 col-sm-12">
                <div id="widget-area" class="widget-area shop-sidebar">
                    <div id="akasha_product_search-2" class="widget akasha widget_product_search">
                        <form action="index.php?act=sanpham_list" method="POST" class="akasha-product-search">
                            <input id="akasha-product-search-field-0" class="search-field" placeholder="Tìm kiếm sản phẩm . . ." name="kyw" type="search">
                            <button type="submit" name="btn1" value="Search">Search</button>
                        </form>
                    </div>
                    <!-- <div id="akasha_price_filter-2" class="widget akasha widget_price_filter">
                        <h2 class="widgettitle">Filter By Price<span class="arrow"></span></h2>
                        <form method="get" action="#">
                            <div class="price_slider_wrapper">
                                <div data-label-reasult="Range:" data-min="0" data-max="1000" data-unit="$" class="price_slider" data-value-min="100" data-value-max="800">
                                </div>
                                <div class="price_slider_amount">
                                    <button type="submit" class="button">Filter</button>
                                    <div class="price_label">
                                        Price: <span class="from">$100</span> — <span class="to">$800</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> -->
                    <!-- <div id="akasha_akasha_layered_nav-4" class="widget akasha_widget_layered_nav widget_layered_nav">
                        <h2 class="widgettitle">Filter By Color<span class="arrow"></span></h2>
                        <div class="color-group">
                            <a class="term-color " href="#">
                                <i style="color: #000000"></i>
                                <span class="term-name">Black</span>
                                <span class="count">(4)</span> </a>
                            <a class="term-color " href="#">
                                <i style="color: #3155e2"></i>
                                <span class="term-name">Blue</span>
                                <span class="count">(3)</span> </a>
                            <a class="term-color " href="#">
                                <i style="color: #49aa51"></i>
                                <span class="term-name">Green</span>
                                <span class="count">(1)</span> </a>
                            <a class="term-color " href="#">
                                <i style="color: #ff63cb"></i>
                                <span class="term-name">Pink</span>
                                <span class="count">(3)</span> </a>
                            <a class="term-color " href="#">
                                <i style="color: #a825ea"></i>
                                <span class="term-name">Purple</span>
                                <span class="count">(1)</span> </a>
                            <a class="term-color " href="#">
                                <i style="color: #db2b00"></i>
                                <span class="term-name">Red</span>
                                <span class="count">(5)</span> </a>
                            <a class="term-color " href="#">
                                <i style="color: #FFFFFF"></i>
                                <span class="term-name">White</span>
                                <span class="count">(2)</span> </a>
                            <a class="term-color " href="#s">
                                <i style="color: #e8e120"></i>
                                <span class="term-name">Yellow</span>
                                <span class="count">(2)</span> </a>
                        </div>
                    </div>
                    <div id="akasha_layered_nav-6" class="widget akasha widget_layered_nav akasha-widget-layered-nav">
                        <h2 class="widgettitle">Filter By Size<span class="arrow"></span></h2>
                        <ul class="akasha-widget-layered-nav-list">
                            <li class="akasha-widget-layered-nav-list__item akasha-layered-nav-term ">
                                <a rel="nofollow" href="#">XS</a>
                                <span class="count">(1)</span>
                            </li>
                            <li class="akasha-widget-layered-nav-list__item akasha-layered-nav-term ">
                                <a rel="nofollow" href="#">S</a>
                                <span class="count">(4)</span>
                            </li>
                            <li class="akasha-widget-layered-nav-list__item akasha-layered-nav-term ">
                                <a rel="nofollow" href="#">M</a>
                                <span class="count">(2)</span>
                            </li>
                            <li class="akasha-widget-layered-nav-list__item akasha-layered-nav-term ">
                                <a rel="nofollow" href="#">L</a>
                                <span class="count">(3)</span>
                            </li>
                            <li class="akasha-widget-layered-nav-list__item akasha-layered-nav-term ">
                                <a rel="nofollow" href="#">XL</a>
                                <span class="count">(1)</span>
                            </li>
                            <li class="akasha-widget-layered-nav-list__item akasha-layered-nav-term ">
                                <a rel="nofollow" href="#">XXL</a>
                                <span class="count">(4)</span>
                            </li>
                            <li class="akasha-widget-layered-nav-list__item akasha-layered-nav-term ">
                                <a rel="nofollow" href="#">3XL</a>
                                <span class="count">(4)</span>
                            </li>
                            <li class="akasha-widget-layered-nav-list__item akasha-layered-nav-term ">
                                <a rel="nofollow" href="#">4XL</a>
                                <span class="count">(3)</span>
                            </li>
                        </ul>
                    </div> -->
                    <div id="akasha_product_categories-3" class="widget akasha widget_product_categories">
                        <h2 class="widgettitle">Danh mục sản phẩm<span class="arrow"></span></h2>
                        <ul class="product-categories">
                            <?php
                            foreach ($list_dm as $dm) {
                                extract($dm);
                            ?>
                                <li class="cat-item cat-item-22"><a href="index.php?act=sanpham_list&iddm=<?= $id_dm ?>"><?= $ten_dm ?></a>
                                    <span class="count">(<?= $id_dm ?>)</span>
                                </li>
                            <?php
                            }
                            ?>
                            <!-- <li class="cat-item cat-item-22"><a href="#">Shoes</a>
                                <span class="count">(11)</span>
                            </li>
                            <li class="cat-item cat-item-16"><a href="#">Accessories</a>
                                <span class="count">(9)</span>
                            </li>
                            <li class="cat-item cat-item-24"><a href="#">Bags</a>
                                <span class="count">(6)</span>
                            </li>
                            <li class="cat-item cat-item-27"><a href="#">Life style</a> <span class="count">(6)</span></li>
                            <li class="cat-item cat-item-19"><a href="#">New arrivals</a>
                                <span class="count">(7)</span>
                            </li>
                            <li class="cat-item cat-item-17"><a href="#">Summer Sale</a>
                                <span class="count">(6)</span>
                            </li>
                            <li class="cat-item cat-item-26"><a href="#">Specials</a> <span class="count">(4)</span></li>
                            <li class="cat-item cat-item-18"><a href="#">Women</a> <span class="count">(6)</span></li> -->
                        </ul>
                    </div>
                </div><!-- .widget-area -->
            </div>
        </div>
    </div>
</div>