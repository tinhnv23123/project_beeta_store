<?php
error_reporting(0);
if (isset($_POST['dat_hang'])) {
    // validate email
    $email = $_POST['email'];
    if (empty($email)) {
        $err = "Vui lòng nhập email";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $err = "Vui lòng nhập đúng định dạng ";
    }
}
?>
<div class="banner-wrapper has_background">
    <img src="./assets/client/images/banner-for-all2.jpg" class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title">Thủ tục thanh toán</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="./index.php"><span>Trang chủ</span></a></li>
                <li class="trail-item trail-end active"><span>Thủ tục thanh toán</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main class="site-main  main-container no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="page-main-content">
                    <div class="akasha">
                        <div class="akasha-notices-wrapper"></div>

                        <form name="checkout" class="checkout akasha-checkout" action="index.php?act=billcofirm" method="POST">

                            <div class="col2-set" id="customer_details">
                                <div class="col-1">
                                    <div class="akasha-billing-fields">
                                        <h3>Chi tiết thanh toán</h3>
                                        <div class="akasha-billing-fields__field-wrapper">
                                            <p class="form-row form-row-wide" id="billing_company_field" data-priority="30"><label for="billing_company" class="">Họ & Tên&nbsp;<span style="color: red;" class="optional">*</span></label><span class="akasha-input-wrapper"><input type="text" class="input-text " name="ho_ten" id="billing_company" placeholder="Họ Tên" value="<?= $ho_ten ?>" autocomplete="organization" required></span>

                                            </p>
                                            <p class="form-row form-row-wide adchair-field update_totals_on_change validate-required" id="billing_country_field" data-priority="40"><label for="billing_country" class="">Giới Tính&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                <span class="akasha-input-wrapper">
                                                    <select name="gioi_tinh" id="billing_country" class="country_to_state country_select" autocomplete="country" tabindex="-1" aria-hidden="true" required>
                                                        <option value="">Giới tính</option>
                                                        <option value="0">Nam</option>
                                                        <option value="1">Nữ</option>
                                                    </select>
                                                </span>
                                            </p>
                                            <p class="form-row form-row-wide adchair-field validate-required" id="billing_adchair_1_field" data-priority="50"><label for="billing_adchair_1" class="">Ngày sinh&nbsp;<abbr class="required" title="required">*</abbr></label><span class="akasha-input-wrapper"><input required type="date" class="input-text " name="ngay_sinh" id="billing_adchair_1" placeholder="House number and street name" value="" autocomplete="adchair-line1" data-placeholder=""></span>
                                            </p>


                                            <p class="form-row form-row-wide adchair-field validate-required" id="billing_city_field" data-priority="70" data-o_class="form-row form-row-wide adchair-field validate-required">
                                                <label for="billing_city" class="">Địa chỉ &nbsp;<abbr class="required" title="required">*</abbr></label><span class="akasha-input-wrapper">
                                                    <input type="text" class="input-text " name="dia_chi" id="billing_city" placeholder="" value="" required></span>
                                            </p>

                                            <p class="form-row form-row-wide validate-required validate-phone" id="billing_phone_field" data-priority="100"><label for="billing_phone" class="">Điện thoại &nbsp;<abbr class="required" title="required">*</abbr></label><span class="akasha-input-wrapper">
                                                    <input type="tel" class="input-text " name="sdt" id="billing_phone" placeholder="0xxx xxx xxx" value="" autocomplete="tel" pattern="0[9|8|1|7|3|5]([0-9]|\s|-|\.){8,12}" maxlength="10" required></span>
                                            <p class="form-row form-row-wide validate-required validate-email" id="billing_email_field" data-priority="110"><label for="billing_email" class="">Email
                                                    &nbsp;<abbr class="required" title="required">*</abbr></label><span class="akasha-input-wrapper">
                                                    <input type="email" class="input-text " name="email" id="billing_email" placeholder="" value="<?= $email ?>" required></span>
                                            <p style="color: red;"><?php echo $err ?></p>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- <div class="akasha-account-fields">
                                        <p class="form-row form-row-wide create-account akasha-validated">
                                            <label class="akasha-form__label akasha-form__label-for-checkbox checkbox">
                                                <input class="akasha-form__input akasha-form__input-checkbox input-checkbox" id="createaccount" type="checkbox" name="createaccount" value="1"> <span>Create an account?</span>
                                            </label>
                                        </p>
                                    </div> -->
                                </div>
                                <div class="col-2">
                                    <div class="akasha-shipping-fields">
                                    </div>
                                    <div class="akasha-additional-fields">
                                        <!-- <h3>Additional information</h3> -->
                                        <div class="akasha-additional-fields__field-wrapper">
                                            <p class="form-row notes" id="order_comments_field" data-priority=""><label for="order_comments" class="">Ghi chú &nbsp;<span class="optional">(không bắt buộc)</span></label><span class="akasha-input-wrapper"><textarea name="ghi_chu" class="input-text " id="order_comments" placeholder="" rows="2" cols="5"></textarea></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if (isset($_SESSION['email'])) {
                                $ho_ten = $_SESSION['email']['ho_ten'];
                                $email =  $_SESSION['email']['email'];
                            } else {
                                $ho_ten = "";
                                $email =  "";
                            }
                            ?>
                            <h3 id="order_review_heading">Đơn hàng của bạn</h3>
                            <div id="order_review" class="akasha-checkout-review-order">
                                <table class="shop_table akasha-checkout-review-order-table">
                                    <thead>
                                        <tr>
                                            <th class="product-name">Sản phẩm</th>
                                            <th class="product-total">Tổng</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $tong = 0;
                                    $i = 0;
                                    foreach ($_SESSION['myCart'] as $key => $cart) {
                                        $ttien = $cart[2] * $cart[3];
                                        $tong += $ttien;
                                    ?>

                                        <tbody>
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    <?= $cart[1] ?>&nbsp;&nbsp;<strong class="product-quantity">×
                                                        <?= $cart[3] ?></strong></td>
                                                <td class="product-total">
                                                    <span class="akasha-Price-amount amount"> <?= number_format($cart[2]) ?> <span class="akasha-Price-currencySymbol">VNĐ</span></span>
                                                </td>
                                            </tr>

                                        <?php
                                        $i++;
                                    }

                                        ?>

                                        <!-- <tr class="cart_item">
                                            <td class="product-name">
                                                Abstract Sweatshirt&nbsp;&nbsp; <strong class="product-quantity">× 1</strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>129.00</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                Mini Dress&nbsp;&nbsp; <strong class="product-quantity">×
                                                    1</strong></td>
                                            <td class="product-total">
                                                <span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>139.00</span>
                                            </td>
                                        </tr> -->
                                        </tbody>
                                        <tfoot>
                                            <!-- <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>418.00</span></td>
                                        </tr> -->
                                            <tr class="order-total">
                                                <th>Thanh toán:</th>
                                                <td><strong><span class="akasha-Price-amount amount"><?= number_format($tong) ?> <span class="akasha-Price-currencySymbol">VNĐ</span></span></strong>
                                                </td>
                                            </tr>
                                        </tfoot>
                                        <?php
                                        ?>
                                </table>
                                <input type="hidden" name="lang" value="en">
                                <div id="payment" class="akasha-checkout-payment">
                                    <ul class="wc_payment_methods payment_methods methods">
                                        <li class="wc_payment_method payment_method_bacs">
                                            <input id="payment_method_bacs" type="radio" class="input-radio" name="pttt" value="1" checked="checked" data-order_button_text="">
                                            <label for="payment_method_bacs">
                                                Thanh toán khi nhận hàng </label>
                                            <!-- <div class="payment_box payment_method_bacs">
                                                <p>Make your payment directly into our bank account. Please use your
                                                    Order ID as the payment reference. Your order will not be shipped
                                                    until the funds have cleared in our account.</p>
                                            </div> -->
                                        </li>
                                        <!-- <li class="wc_payment_method payment_method_cheque">
                                            <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque" data-order_button_text="">
                                            <label for="payment_method_cheque">
                                                Check payments </label>
                                            <div class="payment_box payment_method_cheque" style="display:none;">
                                                <p>Please send a check to Store Name, Store Street, Store Town, Store
                                                    State / County, Store Postcode.</p>
                                            </div>
                                        </li> -->
                                        <li class="wc_payment_method payment_method_cod">
                                            <input id="payment_method_cod" type="radio" class="input-radio" name="pttt" value="2" data-order_button_text="">
                                            <label for="payment_method_cod">
                                                Chuyển khoản trực tiếp </label>
                                            <div class="payment_box payment_method_cod" style="display:none;">
                                                <p>Pay with cash upon delivery.</p>
                                            </div>
                                        </li>
                                        <li class="wc_payment_method payment_method_paypal">
                                            <input id="payment_method_paypal" type="radio" class="input-radio" name="pttt" value="3" data-order_button_text="Proceed to PayPal">
                                            <label for="payment_method_paypal">
                                                Thanh toán qua Vnpay <img style="width: 230px; padding-top: 10px;" src="./assets/client/images/vnpay_logo.png" alt="PayPal acceptance mark"></label>
                                            <div class="payment_box payment_method_paypal" style="display:none;">
                                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a
                                                    PayPal account.</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="form-row place-order">
                                        <noscript>
                                            Since your browser does not support JavaScript, or it is disabled, please
                                            ensure you click the <em>Update Totals</em> button before placing your
                                            order. You may be charged more than the amount stated above if you fail to
                                            do so. <br />
                                            <button type="submit" class="button alt" name="akasha_checkout_update_totals" value="Update totals">
                                                Update totals
                                            </button>
                                        </noscript>
                                        <!-- <div class="akasha-terms-and-conditions-wrapper">
                                            <div class="akasha-privacy-policy-text">
                                                <p>Your personal data will be
                                                    used to process your order, support your experience throughout this
                                                    website, and for other purposes described in our <a href="#" class="akasha-privacy-policy-link" target="_blank">privacy
                                                        policy</a>.</p>
                                            </div>
                                        </div> -->
                                        <input type="hidden" name="gia_tien" value="<?= $cart[3] ?>">
                                        <button type="submit" class="button alt" name="dat_hang" id="place_order" data-value="Place order">Đặt hàng
                                        </button>
                                        <input type="hidden" id="akasha-process-checkout-nonce" name="akasha-process-checkout-nonce" value="634590c981"><input type="hidden" name="_wp_http_referer" value="/akasha/?akasha-ajax=update_order_review">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>