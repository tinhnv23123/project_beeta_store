<?php
extract($onesp);
extract($listhinhanh);

$linkimg = "./assets/uploads/" . $hinh;

?>

<div class="single-thumb-vertical main-container shop-page no-sidebar">
    <div class="banner-wrapper no_background">
        <div class="banner-wrapper-inner">
            <nav style="margin-top: 40px;padding-left: 173px; text-align: left;" class="akasha-breadcrumb"><a href="./index.php">Trang chủ</a><i class="fa fa-angle-right"></i><a href="index.php?act=shop">Cửa hàng</a>
                <i class="fa fa-angle-right"></i>Chi tiết sản phẩm
            </nav>
        </div>
    </div>
    <!--  -->
    <div style="margin-top: 20px;" class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="akasha-notices-wrapper"></div>
                <div id="product-27" class="post-27 product type-product status-publish has-post-thumbnail product_cat-table product_cat-new-arrivals product_cat-lamp product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-variable has-default-attributes">
                    <div class="main-contain-summary">
                        <div class="contain-left has-gallery">
                            <div class="single-left">
                                <div class="akasha-product-gallery akasha-product-gallery--with-images akasha-product-gallery--columns-4 images">
                                    <a href="#" class="akasha-product-gallery__trigger">
                                        <img draggable="false" class="emoji" alt="🔍" src="https://s.w.org/images/core/emoji/11/svg/1f50d.svg" /></a>
                                    <div class="flex-viewport">
                                        <figure class="akasha-product-gallery__wrapper">
                                            <div class="akasha-product-gallery__image">
                                                <img style="width: 100%;" alt="img" src="<?= $linkimg ?>" />
                                            </div>
                                            <?php
                                            foreach ($listhinhanh as $ha) {
                                                $linkmota = "./assets/uploadhinhmt/" . $ha['hinh_mo_ta'];
                                            ?>
                                                <div class="akasha-product-gallery__image">
                                                    <img style="width: 100%;" src="<?= $linkmota ?>" alt="img" />
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </figure>
                                    </div>
                                    <ol class="flex-control-nav flex-control-thumbs">
                                        <div class="akasha-product-gallery__image">
                                            <img style="width: 100%;" alt="img" src="<?= $linkimg ?>" />
                                        </div>
                                        <?php
                                        foreach ($listhinhanh as $ha) {
                                            $linkmota = "./assets/uploadhinhmt/" . $ha['hinh_mo_ta'];
                                        ?>
                                            <div class="akasha-product-gallery__image">
                                                <img style="width: 100%;" src="<?= $linkmota ?>" alt="img" />
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </ol>
                                </div>
                            </div>
                            <div class="summary entry-summary">
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span>
                                </div>
                                <h1 class="product_title entry-title"><?= $ten_sp ?></h1>
                                <p class="price"><span class="akasha-Price-amount amount"><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol"></span><?= number_format($don_gia) ?></span> VNĐ</p>
                                <!-- <p class="stock in-stock">
                                    Tình trạng: <span> Còn hàng</span>
                                </p> -->
                                <div class="akasha-product-details__short-description">
                                    <p><?= $mo_ta ?></p>
                                    <!-- <ul>
                                        <li>Water-resistant fabric with soft lycra detailing inside</li>
                                        <li>CLean zip-front, and three piece hood</li>
                                        <li>Subtle branding and diagonal panel detail</li>
                                    </ul> -->
                                </div>
                                <form action="index.php?act=add_cart" method="POST" class="variations_form cart">
                                    <!-- <table class="variations">
                                        <tbody>
                                            <tr>
                                                <td class="label"><label>Color</label></td>
                                                <td class="value">
                                                    <select title="box_style" data-attributetype="box_style" data-id="pa_color" class="attribute-select " name="attribute_pa_color" data-attribute_name="attribute_pa_color" data-show_option_none="yes">
                                                        <option data-type="" data-pa_color="" value="">Choose an option
                                                        </option>
                                                        <option data-width="30" data-height="30" data-type="color" data-pa_color="#3155e2" value="blue" class="attached enabled">Blue
                                                        </option>
                                                        <option data-width="30" data-height="30" data-type="color" data-pa_color="#ff63cb" value="pink" class="attached enabled">Pink
                                                        </option>
                                                        <option data-width="30" data-height="30" data-type="color" data-pa_color="#db2b00" value="red" class="attached enabled">Red
                                                        </option>
                                                        <option data-width="30" data-height="30" data-type="color" data-pa_color="#e8e120" value="yellow" class="attached enabled">Yellow
                                                        </option>
                                                    </select>
                                                    <div class="data-val attribute-pa_color" data-attributetype="box_style">
                                                        <a class="change-value color" href="#" style="background: #3155e2;" data-value="blue"></a><a class="change-value color" href="#" style="background: #ff63cb;" data-value="pink"></a><a class="change-value color" href="#" style="background: #db2b00;" data-value="red"></a><a class="change-value color" href="#" style="background: #e8e120;" data-value="yellow"></a>
                                                    </div>
                                                    <a class="reset_variations" href="#" style="visibility: hidden;">Clear</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table> -->
                                    <div class="single_variation_wrap">
                                        <div class="akasha-variation single_variation"></div>
                                        <div style="display: flex;" class="akasha-variation-add-to-cart variations_button akasha-variation-add-to-cart-disabled">
                                            <div class="quantity">
                                                <span class="qty-label">Quantiy:</span>
                                                <div class="control">
                                                    <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                    <input type="text" data-step="1" min="1" max="" name="so_luong" value="1" title="Qty" class="input-qty input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
                                                    <a class="btn-number qtyplus quantity-plus" href="#">+</a>
                                                </div>
                                            </div>
                                            <input type="hidden" name="id" value="<?= $id_sp ?>">
                                            <input type="hidden" name="ten_sp" value="<?= $ten_sp ?>">
                                            <input type="hidden" name="img_sp" value="<?= $hinh ?>">
                                            <input type="hidden" name="gia_sp" value="<?= $don_gia ?>">


                                            <input style="height: 47px; width: 175px; color: #fff; font-weight: 500;" type="submit" class="btn btn-dark add" name="add_cart" value="Thêm vào giỏ hàng">

                                            <input name="add-to-cart" value="27" type="hidden">
                                            <input name="product_id" value="27" type="hidden">
                                            <input name="variation_id" class="variation_id" value="0" type="hidden">
                                        </div>
                                    </div>
                                </form>


                                <div class="product_meta">
                                    <div class="wcml-dropdown product wcml_currency_switcher">
                                        <ul>
                                            <li class="wcml-cs-active-currency">
                                                <a class="wcml-cs-item-toggle">USD</a>
                                                <ul class="wcml-cs-submenu">
                                                    <li>
                                                        <a>EUR</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <span class="sku_wrapper">Mã sản phẩm: <span class="sku"><?= $id_sp ?></span></span>
                                    <span class="posted_in">Danh mục: <a href="#" rel="tag"><?= $ten_dm ?></a></span>

                                </div>
                                <div class="akasha-share-socials">
                                    <h5 class="social-heading">Share: </h5>
                                    <a target="_blank" class="facebook" href="#">
                                        <i class="fa fa-facebook-f"></i>
                                    </a>
                                    <a target="_blank" class="twitter" href="#"><i class="fa fa-twitter"></i>
                                    </a>
                                    <a target="_blank" class="pinterest" href="#"> <i class="fa fa-pinterest"></i>
                                    </a>
                                    <a target="_blank" class="googleplus" href="#"><i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $("#binhluan").load("./views/client/binh_luan/v_binh_luan_form.php", {
                                id_sp: <?= $id_sp ?>
                            });
                        });
                    </script>
                    <div id="binhluan" class="comment-detail">

                    </div>
                    <!--  -->
                </div>
            </div>
            <div class="col-md-12 col-sm-12 dreaming_related-product">
                <div class="block-title">
                    <h2 class="product-grid-title">
                        <span>Sản phẩm liên quan</span>
                    </h2>
                </div>
                <div class="owl-slick owl-products equal-container better-height" data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4}" data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                    <?php
                    foreach ($sp_cung_loai as $sp) {
                        extract($sp);
                    ?>
                        <div class="product-item recent-product style-01 rows-space-0 post-93 product type-product status-publish has-post-thumbnail product_cat-light product_cat-table product_cat-new-arrivals product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-simple  ">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="index.php?act=sanphamct&idsp=<?= $id_sp ?>" tabindex="0">
                                        <img style="height: 345px;" class="img-responsive" src="./assets/uploads/<?= $hinh ?>" alt="Black Shirt" width="270" height="350">
                                    </a>
                                    <!-- <div class="flash">
                                        <span class="onsale"><span class="text">New</span></span>
                                    </div> -->
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
                                    <!-- <div class="rating-wapper nostar">
                                    <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                    <span class="review">(0)</span>
                                </div> -->
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
</div>