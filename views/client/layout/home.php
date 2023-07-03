<div class="section-003 section-002">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-6">
                <div class="akasha-banner style-01 left-center">
                    <div class="banner-inner">
                        <figure class="banner-thumb">
                            <img src="./assets/client/images/insta7.jpg" class="attachment-full size-full" alt="img">
                        </figure>
                        <div class="banner-info ">
                            <div class="banner-content">
                                <div class="title-wrap">
                                    <h6 class="title">
                                        <?php
                                        $dm = loadone_danhmuc('1');
                                        if (is_array($dm)) {
                                            extract($dm);
                                        }
                                        // $linkdm = "index.php?act=sanpham&iddm=" . $id_dm;
                                        echo '<a target="_self" href="index.php?act=home&iddm=' . $id_dm . '">' . $ten_dm . '</a>';
                                        ?>
                                    </h6>
                                </div>
                                <div class="button-wrap">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="akasha-banner style-01 left-top">
                    <div class="banner-inner">
                        <figure class="banner-thumb">
                            <img src="./assets/client/images/banner13.jpg" class="attachment-full size-full" alt="img">
                        </figure>
                        <div class="banner-info ">
                            <div class="banner-content">
                                <div class="title-wrap">
                                    <h6 class="title">
                                        <?php
                                        $dm = loadone_danhmuc('3');
                                        if (is_array($dm)) {
                                            extract($dm);
                                        }
                                        // $linkdm = "index.php?act=sanpham&iddm=" . $id_dm;
                                        echo '<a target="_self" href="index.php?act=home&iddm=' . $id_dm . '">' . $ten_dm . '</a>';
                                        ?>
                                    </h6>
                                </div>
                                <div class="button-wrap">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="akasha-banner style-01 right-top" style="margin-top: 30px;">
                    <div class="banner-inner">
                        <figure class="banner-thumb">
                            <img src="./assets/client/images/banner12.jpg" class="attachment-full size-full" alt="img">
                        </figure>
                        <div class="banner-info ">
                            <div class="banner-content">
                                <div class="title-wrap">
                                    <h6 class="title">
                                        <?php
                                        $dm = loadone_danhmuc('2');
                                        if (is_array($dm)) {
                                            extract($dm);
                                        }
                                        // $linkdm = "index.php?act=sanpham&iddm=" . $id_dm;
                                        echo '<a target="_self" href="index.php?act=home&iddm=' . $id_dm . '">' . $ten_dm . '</a>';
                                        ?>
                                    </h6>
                                </div>
                                <div class="button-wrap">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-001">
    <div class="container">
        <div class="akasha-heading style-01">
            <div class="heading-inner">
                <h3 class="title">
                    SẢN PHẨM NỔI BẬT</h3>
                <!-- <div class="subtitle">Made with care for your little ones, our products are perfect for every
                    occasion.
                </div> -->
            </div>
        </div>


        <div class="akasha-products style-02">
            <div class="response-product product-list-owl owl-slick equal-container better-height" data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:4,&quot;rows&quot;:2}" data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                <?php

                foreach ($listsp_dm as $sp) {
                    extract($sp);
                    $linkimg = "./assets/uploads/" . $hinh;
                    echo ' <div class="product-item featured_products style-02 rows-space-30 post-34 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock sale featured shipping-taxable product-type-grouped">
                <div class="product-inner tooltip-top">
                    <div class="product-thumb">
                        <a class="thumb-link" href="index.php?act=sanphamct&idsp=' . $id_sp . '" tabindex="0">
                            <img style="height: 345px;" class="img-responsive" src="' . $linkimg . '" alt="Maternity Shoulder" width="270" height="350">
                        </a>
                        <div class="flash">
                            <span class="onnew"><span class="text">New</span></span>
                        </div>
                        <a href="index.php?act=sanphamct&idsp=' . $id_sp . '" class="button yith-wcqv-button">Quick View</a>
                    </div>
                    <div class="product-info">
                       
                        <h3 class="product-name product_title">
                            <a href="index.php?act=sanphamct&idsp=' . $id_sp . '" tabindex="0">' . $ten_sp . '</a>
                        </h3>
                        <span class="price"><span class="akasha-Price-amount amount"><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol"></span>' . number_format($don_gia) . '</span> VNĐ</span>
                    </div>
                    <div style="min-width: 140px !important;" class="group-button clearfix">
                            <div class="add-to-cart">
                            <form action="index.php?act=add_cart" method="POST">
                            <input type="hidden" name="id" value="' . $id_sp . '">
                            <input type="hidden" name="ten_sp" value="' . $ten_sp . '">
                            <input type="hidden" name="img_sp" value="' . $hinh . '">
                            <input type="hidden" name="gia_sp" value="' . $don_gia . '">
                            <input type="hidden" name="so_luong" value="1">
                            <input style="cursor: pointer; background-color: transparent; color: #222; font-size: 15px; font-weight: 500;" type="submit" class="button b" name="add_cart" value="Thêm vào giỏ hàng">
                            </form>
                            </div>
                           
                        </div>
                </div>
            </div>
           ';
                }
                ?>
            </div>
        </div>
    </div>
</div>
<div>
    <div class="akasha-banner style-02 left-center">
        <div class="banner-inner">
            <figure class="banner-thumb">
                <img src="./assets/client/images/banner101.jpg" class="attachment-full size-full" alt="img">
            </figure>
            <div class="banner-info container">
                <div class="banner-content">
                    <div class="title-wrap">
                        <div class="banner-label">
                            Phong cách hiện đại
                        </div>
                        <h6 class="title">
                            Bán chạy nhất </h6>
                    </div>
                    <div class="button-wrap">
                        <!-- <div class="subtitle">
                            Lorem ipsum dolor sit amet consectetur adipiscing elit justo
                        </div> -->
                        <a class="button" target="_self" href="index.php?act=shop"><span>Cửa hàng</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-001">
    <div class="container">
        <div class="akasha-heading style-01">
            <div class="heading-inner">
                <h3 class="title">Sản phẩm mới</h3>
                <!-- <div class="subtitle">
                    Made with care for your little ones, our products are perfect for every occasion. Check it out.
                </div> -->
            </div>
        </div>
        <div class="akasha-products style-01">
            <div class="response-product product-list-owl owl-slick equal-container better-height" data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:4,&quot;rows&quot;:1}" data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                <?php
                foreach ($spnew as $sp) {
                    extract($sp);
                ?>
                    <div class="product-item recent-product style-01 rows-space-0 post-93 product type-product status-publish has-post-thumbnail product_cat-light product_cat-table product_cat-new-arrivals product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-simple  ">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link" href="index.php?act=sanphamct&idsp=<?= $id_sp ?>" tabindex="0">
                                    <img style="height: 345px;" class="img-responsive" src="./assets/uploads/<?= $hinh ?>" alt="Black Shirt" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onsale"><span class="text">New</span></span>
                                </div>
                                <div class="group-button">
                                    <!-- <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                    <div class="akasha product compare-button">
                                        <a href="#" class="compare button">Compare</a>
                                    </div> -->
                                    <a href="index.php?act=sanphamct&idsp=<?= $id_sp ?>" class="button yith-wcqv-button">Quick View</a>
                                    <div class="add-to-cart">
                                        <form action="index.php?act=add_cart" method="POST">
                                            <input type="hidden" name="id" value="<?= $id_sp ?>">
                                            <input type="hidden" name="ten_sp" value="<?= $ten_sp ?>">
                                            <input type="hidden" name="img_sp" value="<?= $hinh ?>">
                                            <input type="hidden" name="gia_sp" value="<?= $don_gia ?>">
                                            <input type="hidden" name="so_luong" value="1">
                                            <input style="cursor: pointer; background-color: transparent; color: #222; font-size: 15px; font-weight: 500;" type="submit" class="button b" name="add_cart" value=" ">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="index.php?act=sanphamct&idsp=<?= $id_sp ?>" tabindex="0"><?= $ten_sp ?></a>
                                </h3>
                                <span class="price"><span class="akasha-Price-amount amount"><?= number_format($don_gia) ?> <span class="akasha-Price-currencySymbol">VNĐ</span></span></span>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
</div>
<div class="section-038">
    <div class="akasha-banner style-07 left-center">
        <div class="banner-inner">
            <figure class="banner-thumb">
                <img src="./assets/client/images/banner28.jpg" class="attachment-full size-full" alt="img">
            </figure>
            <div class="banner-info container">
                <div class="banner-content">
                    <div class="title-wrap">
                        <div class="banner-label">
                            01/12 - 15/12
                        </div>
                        <h6 class="title">
                            Bộ sưu tập mới </h6>
                    </div>
                    <div class="cate">
                        Giảm 50% / Sản phẩm
                    </div>
                    <div class="button-wrap">
                        <!-- <div class="subtitle">
                            Mus venenatis habitasse leo malesuada lacus commodo faucibus torquent donec
                        </div> -->
                        <a class="button mt-5" target="_self" href="index.php?act=shop"><span>Cửa hàng</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-001">
    <div class="container">
        <div class="akasha-heading style-01">
            <div class="heading-inner">
                <h3 class="title">
                    Bài viết của chúng tôi </h3>
                <!-- <div class="subtitle">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit erat vehicula ad, mollis viverra
                    vulputate
                </div> -->
            </div>
        </div>
        <div class="akasha-blog style-01">
            <div class="blog-list-owl owl-slick equal-container better-height" data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:3,&quot;rows&quot;:1}" data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                <article class="post-item post-grid rows-space-0 post-195 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-table category-life-style tag-light tag-life-style">
                    <div class="post-inner blog-grid">
                        <div class="post-thumb">
                            <a href="#" tabindex="0">
                                <img src="./assets/client/images/blogpost1-370x330.jpg" class="img-responsive attachment-370x330 size-370x330" alt="img" width="370" height="330"> </a>
                            <a class="datebox" href="#" tabindex="0">
                                <span>19</span>
                                <span>Dec</span>
                            </a>
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <div class="post-author">
                                    By:<a href="#" tabindex="0">
                                        admin </a>
                                </div>
                                <div class="post-comment-icon">
                                    <a href="#" tabindex="0">
                                        0 </a>
                                </div>
                            </div>
                            <div class="post-info equal-elem">
                                <h2 class="post-title"><a href="#" tabindex="0">Not your ordinary multi service.</a></h2>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales
                                quisque litora dapibus primis lacinia
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-item post-grid rows-space-0 post-192 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-fashion category-multi category-life-style tag-light tag-fashion tag-multi">
                    <div class="post-inner blog-grid">
                        <div class="post-thumb">
                            <a href="#" tabindex="0">
                                <img src="./assets/client/images/blogpost5-370x330.jpg" class="img-responsive attachment-370x330 size-370x330" alt="img" width="370" height="330"> </a>
                            <a class="datebox" href="#" tabindex="0">
                                <span>19</span>
                                <span>Dec</span>
                            </a>
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <div class="post-author">
                                    By:<a href="#" tabindex="0">
                                        admin </a>
                                </div>
                                <div class="post-comment-icon">
                                    <a href="#" tabindex="0">
                                        0 </a>
                                </div>
                            </div>
                            <div class="post-info equal-elem">
                                <h2 class="post-title"><a href="#" tabindex="0">We bring you the best by working</a></h2>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales
                                quisque litora dapibus primis lacinia
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-item post-grid rows-space-0 post-189 post type-post status-publish format-video has-post-thumbnail hentry category-table category-life-style tag-multi tag-life-style post_format-post-format-video">
                    <div class="post-inner blog-grid">
                        <div class="post-thumb">
                            <a href="#" tabindex="0">
                                <img src="./assets/client/images/blogpost9-370x330.jpg" class="img-responsive attachment-370x330 size-370x330" alt="img" width="370" height="330"> </a>
                            <a class="datebox" href="#" tabindex="0">
                                <span>19</span>
                                <span>Dec</span>
                            </a>
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <div class="post-author">
                                    By:<a href="#" tabindex="0">
                                        admin </a>
                                </div>
                                <div class="post-comment-icon">
                                    <a href="#" tabindex="0">
                                        0 </a>
                                </div>
                            </div>
                            <div class="post-info equal-elem">
                                <h2 class="post-title"><a href="#" tabindex="0">We design functional best multi</a></h2>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales
                                quisque litora dapibus primis lacinia
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-item post-grid rows-space-0 post-186 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-life-style tag-life-style">
                    <div class="post-inner blog-grid">
                        <div class="post-thumb">
                            <a href="#" tabindex="-1">
                                <img src="./assets/client/images/blogpost4-370x330.jpg" class="img-responsive attachment-370x330 size-370x330" alt="img" width="370" height="330"> </a>
                            <a class="datebox" href="#" tabindex="-1">
                                <span>19</span>
                                <span>Dec</span>
                            </a>
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <div class="post-author">
                                    By:<a href="#" tabindex="-1">
                                        admin </a>
                                </div>
                                <div class="post-comment-icon">
                                    <a href="#" tabindex="-1">
                                        0 </a>
                                </div>
                            </div>
                            <div class="post-info equal-elem">
                                <h2 class="post-title"><a href="#" tabindex="-1">The child is swimming with a buoy</a></h2>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales
                                quisque litora dapibus primis lacinia
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-item post-grid rows-space-0 post-183 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-fashion tag-light tag-multi">
                    <div class="post-inner blog-grid">
                        <div class="post-thumb">
                            <a href="#" tabindex="-1">
                                <img src="./assets/client/images/blogpost2-370x330.jpg" class="img-responsive attachment-370x330 size-370x330" alt="img" width="370" height="330"> </a>
                            <a class="datebox" href="#" tabindex="-1">
                                <span>19</span>
                                <span>Dec</span>
                            </a>
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <div class="post-author">
                                    By:<a href="#" tabindex="-1">
                                        admin </a>
                                </div>
                                <div class="post-comment-icon">
                                    <a href="#" tabindex="-1">
                                        0 </a>
                                </div>
                            </div>
                            <div class="post-info equal-elem">
                                <h2 class="post-title"><a href="#" tabindex="-1">Collection hiding beside beige wall</a></h2>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales
                                quisque litora dapibus primis lacinia
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
<div style="background-color: #fff;" class="section-014">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="akasha-iconbox style-02">
                    <div class="iconbox-inner">
                        <div class="icon">
                            <span class="flaticon-rocket-ship"></span>
                        </div>
                        <div class="content">
                            <h4 class="title">Vận chuyển toàn cầu</h4>
                            <div class="desc">Với các trang web bằng 5 ngôn ngữ, chúng tôi giao hàng đến hơn 200 quốc gia &amp;
                                khu vực.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="akasha-iconbox style-02">
                    <div class="iconbox-inner">
                        <div class="icon">
                            <span class="flaticon-padlock"></span>
                        </div>
                        <div class="content">
                            <h4 class="title">Vận chuyển an toàn</h4>
                            <div class="desc">
                                Thanh toán bằng các phương thức thanh toán an toàn và phổ biến nhất thế giới.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="akasha-iconbox style-02">
                    <div class="iconbox-inner">
                        <div class="icon">
                            <span class="flaticon-recycle"></span>
                        </div>
                        <div class="content">
                            <h4 class="title">365 ngày hoàn trả sản phẩm</h4>
                            <div class="desc">Hỗ trợ suốt ngày đêm để có trải nghiệm mua sắm suôn sẻ.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="akasha-iconbox style-02">
                    <div class="iconbox-inner">
                        <div class="icon">
                            <span class="flaticon-support"></span>
                        </div>
                        <div class="content">
                            <h4 class="title">Sự tự tin của shop</h4>
                            <div class="desc">
                                Bảo vệ người mua của chúng tôi bao gồm giao dịch mua của bạn từ nhấp chuột đến giao hàng.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>