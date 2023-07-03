<div class="banner-wrapper has_background">
    <img src="./assets/client/images/banner-for-all2.jpg" class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title">Giỏ hàng</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="./index.php"><span>Trang chủ</span></a></li>
                <li class="trail-item trail-end active"><span>Giỏ hàng</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main class="site-main main-container no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="page-main-content">
                    <div class="akasha">
                        <div class="akasha-notices-wrapper"></div>

                        <form action="index.php?act=update_cart" method="POST" class="akasha-cart-form">
                            <table class="shop_table shop_table_responsive cart akasha-cart-form__contents" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="product-remove">&nbsp;</th>
                                        <th class="product-thumbnail">&nbsp;</th>
                                        <th class="product-name">Sản phẩm</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product-quantity">Số lượng</th>
                                        <th class="product-subtotal">Tổng tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $tong = 0;
                                    $i = 0;
                                    foreach ($_SESSION['myCart'] as $key => $cart) {
                                        $ttien = $cart[2] * $cart[3];
                                        $tong += $ttien;
                                    ?>
                                        <tr class="akasha-cart-form__cart-item cart_item">
                                            <td class="product-remove">
                                                <a href="index.php?act=del_cart&idcart=<?= $i ?>" class="remove" aria-label="Remove this item" data-product_id="27" data-product_sku="885B712">×</a>
                                            </td>
                                            <td class="product-thumbnail">
                                                <a href="index.php?act=sanphamct&idsp=<?= $cart[0] ?>"><img style="height: 100px;" src="./assets/uploads/<?= $cart[5] ?>" class="attachment-akasha_thumbnail size-akasha_thumbnail" alt="img" width="600" height="778"></a>
                                            </td>
                                            <td class="product-name" data-title="Product">
                                                <a href="index.php?act=sanphamct&idsp=<?= $cart[0] ?>"><?= $cart[1] ?></a>
                                            </td>
                                            <td class="product-price" data-title="Price">
                                                <span class="akasha-Price-amount amount"><?= number_format($cart[2]) ?> VNĐ</span>
                                            </td>
                                            <td class="product-quantity" data-title="Quantity">
                                                <div class="quantity">
                                                    <span class="qty-label">Quantiy:</span>
                                                    <div class="control">
                                                        <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                        <input type="text" data-step="1" name="so_luong[]" min="1" max="" value="<?= $cart[3] ?>" title="Qty" class="input-qty input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
                                                        <a class="btn-number qtyplus quantity-plus" href="#">+</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="product-subtotal" data-title="Total">
                                                <span class="akasha-Price-amount amount"><?= number_format($ttien) ?> VNĐ</span>
                                            </td>
                                        </tr>
                                        <input type="hidden" name="id[]" value="<?= $cart[0] ?>">
                                    <?php
                                        $i++;
                                    }
                                    ?>
                                    <tr>
                                        <td colspan="6" class="actions">
                                            <!-- <div class="coupon">
                                                <label for="coupon_code">Coupon:</label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code">
                                                <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon
                                                </button>
                                            </div> -->
                                            <button style="cursor: pointer;" type="submit" class="button" name="update_cart" value="Update cart">Cập nhật
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>

                        <div class="cart-collaterals">
                            <div class="cart_totals ">
                                <!-- <h2>Tổng tiền thanh toán</h2> -->
                                <table class="shop_table shop_table_responsive" cellspacing="0">
                                    <tbody>
                                        <!-- <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td data-title="Subtotal"><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>418.00</span></td>
                                        </tr> -->
                                        <tr class="order-total">
                                            <th>Tổng tiền thanh toán:</th>
                                            <td data-title="Total"><strong><span class="akasha-Price-amount amount"><?= number_format($tong) ?> VNĐ</span></strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="akasha-proceed-to-checkout">
                                    <a href="index.php?act=hoa_don" class="checkout-button button alt akasha-forward">
                                        Đặt hàng</a>
                                </div>
                            </div>
                        </div>
                        <?php
                        ?>
                        <!--  -->
                        <!-- <script>
                            function myFunction() {
                                $(document).ready(function() {
                                    $('.click').click();
                                });
                            }
                        </script> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>