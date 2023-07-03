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
<div class="main-container shop-page no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="shop-control shop-before-control">
                    <div style="display: flex;" class="grid-view-mode">
                        <div style="margin-right: 15px;" id="akasha_product_search-2" class="widget akasha widget_product_search">
                            <form action="index.php?act=shop" method="POST" class="akasha-product-search">
                                <input id="akasha-product-search-field-0" class="search-field" placeholder="Tìm kiếm sản phẩm . . ." name="kyw" type="search">
                                <button type="submit" name="btn1" value="Search">Search</button>
                            </form>
                        </div>
                        <form>
                            <a href="index.php?act=shop" data-toggle="tooltip" data-placement="top" class="modes-mode mode-grid display-mode active" value="grid">
                                <span class="button-inner">
                                    Shop Grid
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </a>
                            <a href="index.php?act=sanpham_list" data-toggle="tooltip" data-placement="top" class="modes-mode mode-list display-mode " value="list">
                                <span class="button-inner">
                                    Shop List
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </a>
                        </form>
                    </div>
                    <form action="index.php?act=shop" method="POST" class="akasha-ordering">
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

                <div class="auto-clear equal-container better-height akasha-products">
                    <ul class="row products columns-3">
                        <?php
                        foreach ($listsp_dm as $sp) {
                            extract($sp);
                            $linkimg = "./assets/uploads/" . $hinh;
                            echo ' <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-24 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock featured shipping-taxable purchasable product-type-variable has-default-attributes"
                    data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                    <div class="product-inner tooltip-left">
                        <div class="product-thumb">
                            <a class="thumb-link" href="index.php?act=sanphamct&idsp=' . $id_sp . '">
                                <img style="height: 345px;" class="img-responsive"
                                     src="' . $linkimg . '"
                                     alt="Women Bags" width="600" height="778">
                            </a>
                            <div class="flash">
                                <span class="onnew"><span class="text">New</span></span></div>
                          
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
                            <span class="price"><span class="akasha-Price-amount amount">
                                           ' . number_format($don_gia) . '</span> <span class="akasha-Price-currencySymbol"> VNĐ</span></span>
                    
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
                </div>
            </div>
        </div>
    </div>
</div>