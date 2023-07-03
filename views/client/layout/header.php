<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ledthanhdat.vn/html/akasha/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Nov 2022 16:01:16 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="./assets/client/images/logoicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./assets/client/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="./assets/client/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="./assets/client/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="./assets/client/css/chosen.min.css" />
    <link rel="stylesheet" type="text/css" href="./assets/client/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="./assets/client/css/jquery.scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="./assets/client/css/lightbox.min.css" />
    <link rel="stylesheet" type="text/css" href="./assets/client/css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="./assets/client/css/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="./assets/client/fonts/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="./assets/client/css/megamenu.css" />
    <link rel="stylesheet" type="text/css" href="./assets/client/css/dreaming-attribute.css" />
    <link rel="stylesheet" type="text/css" href="./assets/client/css/style.css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <title>Beeta Store</title>
    <style>
        .b:hover {
            color: #fa8f47 !important;
        }
    </style>
</head>

<body>
    <header id="header" class="header style-02 header-dark header-transparent header-sticky">
        <div class="header-wrap-stick">
            <div class="header-position">
                <div class="header-middle">
                    <div class="akasha-menu-wapper"></div>
                    <div class="header-middle-inner">
                        <div class="header-search-menu">
                            <div class="block-menu-bar">
                                <a class="menu-bar menu-toggle" href="#">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                        <div class="header-logo-nav">
                            <div class="header-logo col-lg-2">
                                <a href="./index.php"><img alt="Beeta" src="./assets/client/images/logo.png" class="logo"></a>
                            </div>
                            <div class="box-header-nav menu-nocenter">
                                <ul id="menu-primary-menu" class="clone-main-menu akasha-clone-mobile-menu akasha-nav main-menu">
                                    <li id="menu-item-230" class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-230 parent parent-megamenu item-megamenu menu-item-has-children">
                                        <a class="akasha-menu-item-title" href="./index.php">Trang chủ</a>
                                        <span class="toggle-submenu"></span>

                                    </li>
                                    <li id="menu-item-237" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-237 parent">
                                        <a class="akasha-menu-item-title" title="Danh mục" href="#">Danh mục</a>
                                        <span class="toggle-submenu"></span>
                                        <ul role="menu" class="submenu">
                                            <?php
                                            foreach ($list_dm as $dm) {
                                                extract($dm);
                                            ?>
                                                <li id="menu-item-987" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-987">
                                                    <a class="akasha-menu-item-title" title="<?= $ten_dm ?>" href="index.php?act=home&iddm=<?= $id_dm ?>"><?= $ten_dm ?></a>
                                                </li>
                                            <?php
                                            }
                                            ?>

                                        </ul>
                                    </li>

                                    <li id="menu-item-228" class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-228 parent parent-megamenu item-megamenu menu-item-has-children">
                                        <a class="akasha-menu-item-title" title="Shop" href="index.php?act=shop">Cửa hàng</a>
                                        <span class="toggle-submenu"></span>

                                    </li>
                                    <li id="menu-item-996" class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-996 parent parent-megamenu item-megamenu menu-item-has-children">
                                        <a class="akasha-menu-item-title" title="Blog" href="index.php?act=blog">Bài viết</a>
                                        <span class="toggle-submenu"></span>

                                    </li>
                                    <li id="menu-item-237" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-237 parent">
                                        <a class="akasha-menu-item-title" title="Contact" href="index.php?act=contact">Liên hệ</a>
                                        <span class="toggle-submenu"></span>

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-control">
                            <div class="header-control-inner">
                                <div class="meta-dreaming">
                                    <ul class="wpml-menu">
                                        <li class="menu-item akasha-dropdown block-language">
                                            <a href="#">
                                                <img src="./assets/client/images/vn.png" alt="it" width="18" height="12">
                                                VietNam
                                            </a>
                                            <span class="toggle-submenu"></span>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="#" data-akasha="akasha-dropdown">
                                                        <img src="./assets/client/images/en.png" alt="en" width="18" height="12">
                                                        English
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="#">
                                                        <img src="./assets/client/images/it.png" alt="it" width="18" height="12">
                                                        Italiano
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="header-search akasha-dropdown">
                                        <div class="header-search-inner" data-akasha="akasha-dropdown">
                                            <a href="#" class="link-dropdown block-link">
                                                <span class="flaticon-magnifying-glass-1"></span>
                                            </a>
                                        </div>
                                        <div class="block-search">
                                            <form role="search" action="index.php?act=home" method="POST" class="form-search block-search-form akasha-live-search-form">
                                                <div class="form-content search-box results-search">
                                                    <div class="inner">
                                                        <input autocomplete="off" class="searchfield txt-livesearch input" name="kyw" placeholder="Tìm kiếm sản phẩm..." type="text">
                                                    </div>
                                                </div>
                                                <input name="post_type" value="product" type="hidden">
                                                <input name="taxonomy" value="product_cat" type="hidden">
                                                <div class="category">
                                                    <select title="product_cat" name="iddm" id="64788262" class="category-search-option" tabindex="-1" style="display: none;">
                                                        <option value="0">Tất cả danh mục</option>
                                                        <?php
                                                        foreach ($list_dm as $dm) {
                                                            extract($dm);
                                                        ?>
                                                            <option class="level-0" value="<?= $id_dm ?>"><?= $ten_dm ?></option>
                                                        <?php
                                                        }
                                                        ?>

                                                    </select>
                                                </div>
                                                <input type="submit" name="btn" value="Tìm kiếm" class="btn-submit">
                                                <!-- <span class="flaticon-magnifying-glass-1"></span> -->
                                                </input>
                                            </form><!-- block search -->
                                        </div>
                                    </div>
                                    <div class="akasha-dropdown-close">x</div>
                                    <div class="menu-item block-user block-dreaming akasha-dropdown">
                                        <a class="block-link" href="#">
                                            <span class="flaticon-profile"></span>
                                        </a>
                                        <ul class="sub-menu">
                                            <?php
                                            if (isset($_SESSION['email'])) {
                                                extract($_SESSION['email']);
                                                $_SESSION['showuser'] = $_SESSION['email']['ten_dang_nhap'];
                                                $_SESSION['showten'] = $_SESSION['email']['ho_ten'];
                                                $_SESSION['showemail'] = $_SESSION['email']['email'];
                                            ?>
                                                <?php
                                                if ($_SESSION['email']['id_vai_tro'] == 0) {
                                                    echo ' <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--orders">
                                                    <a href="index.php?act=my_bill">Đơn hàng của tôi</a>
                                                </li>
                                                    <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--orders">
                                                    <a href="#">Sửa tài khoản</a>
                                                </li>
                                                <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--customer-logout">
                                                    <a href="index.php?act=logout">Đăng xuất</a>
                                                </li>';
                                                } else if ($_SESSION['email']['id_vai_tro'] == 1) {
                                                    echo ' <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--orders">
                                                    <a href="./views/admin/index.php">Quản trị</a>
                                                </li>
                                                <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--orders">
                                                    <a href="index.php?act=my_bill">Đơn hàng của tôi</a>
                                                </li>
                                                <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--customer-logout">
                                                    <a href="index.php?act=logout">Đăng xuất</a>
                                                </li>';
                                                }
                                                ?>
                                            <?php
                                            } else {
                                            ?>
                                                <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--dashboard is-active">
                                                    <a href="index.php?act=dangnhap">Đăng nhập</a>
                                                </li>
                                                <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--orders">
                                                    <a href="index.php?act=dangky">Đăng ký</a>
                                                </li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                    <?php
                                    $count = 0;
                                    foreach ($_SESSION['myCart'] as $key => $cart) {
                                        $count += 1;
                                    }
                                    ?>
                                    <div class="block-minicart block-dreaming akasha-mini-cart akasha-dropdown">
                                        <div class="shopcart-dropdown block-cart-link" data-akasha="akasha-dropdown">
                                            <a class="block-link link-dropdown" href="cart.html">
                                                <span class="flaticon-bag"></span>
                                                <span class="count"><?= $count ?></span>
                                            </a>
                                        </div>

                                        <div class="widget akasha widget_shopping_cart">
                                            <div class="widget_shopping_cart_content">
                                                <h3 class="minicart-title">Giỏ hàng<span class="minicart-number-items"><?= $count ?></span></h3>
                                                <ul class="akasha-mini-cart cart_list product_list_widget">

                                                    <?php
                                                    $tong = 0;
                                                    $i = 0;

                                                    foreach ($_SESSION['myCart'] as $key => $cart) {
                                                        $ttien = $cart[2] * $cart[3];
                                                        $tong += $ttien;
                                                    ?>

                                                        <li class="akasha-mini-cart-item mini_cart_item">
                                                            <a href="index.php?act=del_cart&idcart=<?= $i ?>" class="remove remove_from_cart_button">×</a>
                                                            <a href="index.php?act=sanphamct&idsp=<?= $cart[0] ?>">
                                                                <img style="height: 90px;" src="./assets/uploads/<?= $cart[5] ?>" class="attachment-akasha_thumbnail size-akasha_thumbnail" alt="img" width="600" height="778"><?= $cart[1] ?>&nbsp;
                                                            </a>
                                                            <span class="quantity"><?= $cart[3] ?> × <span class="akasha-Price-amount amount"><?= number_format($cart[2]) ?> VNĐ</span></span>
                                                        </li>
                                                    <?php
                                                        $i++;
                                                    }
                                                    ?>
                                                    <!-- <li class="akasha-mini-cart-item mini_cart_item">
                                                        <a href="#" class="remove remove_from_cart_button">×</a>
                                                        <a href="#">
                                                            <img src="./assets/client/images/apro1113-600x778.jpg" class="attachment-akasha_thumbnail size-akasha_thumbnail" alt="img" width="600" height="778">Abstract Sweatshirt&nbsp;
                                                        </a>
                                                        <span class="quantity">1 × <span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>129.00</span></span>
                                                    </li>
                                                    <li class="akasha-mini-cart-item mini_cart_item">
                                                        <a href="#" class="remove remove_from_cart_button">×</a>
                                                        <a href="#">
                                                            <img src="./assets/client/images/apro201-1-600x778.jpg" class="attachment-akasha_thumbnail size-akasha_thumbnail" alt="img" width="600" height="778">Mini Dress&nbsp;
                                                        </a>
                                                        <span class="quantity">1 × <span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>139.00</span></span>
                                                    </li> -->
                                                </ul>
                                                <p class="akasha-mini-cart__total total"><strong>Tổng tiền:</strong>
                                                    <span class="akasha-Price-amount amount"><?= number_format($tong) ?> VNĐ</span>
                                                </p>
                                                <p class="akasha-mini-cart__buttons buttons">
                                                    <a href="index.php?act=view_cart" class="button akasha-forward">Xem chi tiết</a>
                                                    <a href="index.php?act=hoa_don" class="button checkout akasha-forward">Đặt hàng</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-mobile">
            <div class="header-mobile-left">
                <div class="block-menu-bar">
                    <a class="menu-bar menu-toggle" href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <div class="header-search akasha-dropdown">
                    <div class="header-search-inner" data-akasha="akasha-dropdown">
                        <a href="#" class="link-dropdown block-link">
                            <span class="flaticon-magnifying-glass-1"></span>
                        </a>
                    </div>
                    <div class="block-search">
                        <form role="search" method="get" class="form-search block-search-form akasha-live-search-form">
                            <div class="form-content search-box results-search">
                                <div class="inner">
                                    <input autocomplete="off" class="searchfield txt-livesearch input" name="s" value="" placeholder="Search here..." type="text">
                                </div>
                            </div>
                            <input name="post_type" value="product" type="hidden">
                            <input name="taxonomy" value="product_cat" type="hidden">
                            <div class="category">
                                <select title="product_cat" name="product_cat" class="category-search-option" tabindex="-1">
                                    <option value="0">All Categories</option>
                                    <option class="level-0" value="light">Shoes</option>
                                    <option class="level-0" value="chair">Accessories</option>
                                    <option class="level-0" value="table">Bags</option>
                                    <option class="level-0" value="bed">Life style</option>
                                    <option class="level-0" value="new-arrivals">New arrivals</option>
                                    <option class="level-0" value="lamp">Summer Sale</option>
                                    <option class="level-0" value="specials">Specials</option>
                                    <option class="level-0" value="sofas">Women</option>
                                </select>
                            </div>
                            <button type="submit" class="btn-submit">
                                <span class="flaticon-magnifying-glass-1"></span>
                            </button>
                        </form><!-- block search -->
                    </div>
                </div>
                <ul class="wpml-menu">
                    <li class="menu-item akasha-dropdown block-language">
                        <a href="#" data-akasha="akasha-dropdown">
                            <img src="./assets/client/images/en.png" alt="en" width="18" height="12">
                            English
                        </a>
                        <span class="toggle-submenu"></span>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="#">
                                    <img src="./assets/client/images/it.png" alt="it" width="18" height="12">
                                    Italiano
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
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
                    </li>
                </ul>
            </div>
            <div class="header-mobile-mid">
                <div class="header-logo">
                    <a href="index.html"><img alt="Akasha" src="./assets/client/images/logo.png" class="logo"></a>
                </div>
            </div>
            <div class="header-mobile-right">
                <div class="header-control-inner">
                    <div class="meta-dreaming">
                        <div class="menu-item block-user block-dreaming akasha-dropdown">
                            <a class="block-link" href="my-account.html">
                                <span class="flaticon-profile"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--dashboard is-active">
                                    <a href="#">Dashboard</a>
                                </li>
                                <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--orders">
                                    <a href="#">Orders</a>
                                </li>
                                <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--downloads">
                                    <a href="#">Downloads</a>
                                </li>
                                <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--edit-adchair">
                                    <a href="#">Addresses</a>
                                </li>
                                <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--edit-account">
                                    <a href="#">Account details</a>
                                </li>
                                <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--customer-logout">
                                    <a href="#">Logout</a>
                                </li>
                            </ul>
                        </div>
                        <?php
                        $count = 0;
                        foreach ($_SESSION['myCart'] as $key => $cart) {
                            $count += 1;
                        }
                        ?>
                        <div class="block-minicart block-dreaming akasha-mini-cart akasha-dropdown">
                            <div class="shopcart-dropdown block-cart-link" data-akasha="akasha-dropdown">
                                <a class="block-link link-dropdown" href="cart.html">
                                    <span class="flaticon-bag"></span>
                                    <span class="count"><?= $count ?></span>
                                </a>
                            </div>
                            <div class="widget akasha widget_shopping_cart">
                                <div class="widget_shopping_cart_content">
                                    <h3 class="minicart-title">Your Cart<span class="minicart-number-items"><?= $count ?></span></h3>
                                    <ul class="akasha-mini-cart cart_list product_list_widget">
                                        <li class="akasha-mini-cart-item mini_cart_item">
                                            <a href="#" class="remove remove_from_cart_button">×</a>
                                            <a href="#">
                                                <img src="./assets/client/images/apro134-1-600x778.jpg" class="attachment-akasha_thumbnail size-akasha_thumbnail" alt="img" width="600" height="778">T-shirt with skirt – Pink&nbsp;
                                            </a>
                                            <span class="quantity">1 × <span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>150.00</span></span>
                                        </li>
                                        <li class="akasha-mini-cart-item mini_cart_item">
                                            <a href="#" class="remove remove_from_cart_button">×</a>
                                            <a href="#">
                                                <img src="./assets/client/images/apro1113-600x778.jpg" class="attachment-akasha_thumbnail size-akasha_thumbnail" alt="img" width="600" height="778">Abstract Sweatshirt&nbsp;
                                            </a>
                                            <span class="quantity">1 × <span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>129.00</span></span>
                                        </li>
                                        <li class="akasha-mini-cart-item mini_cart_item">
                                            <a href="#" class="remove remove_from_cart_button">×</a>
                                            <a href="#">
                                                <img src="./assets/client/images/apro201-1-600x778.jpg" class="attachment-akasha_thumbnail size-akasha_thumbnail" alt="img" width="600" height="778">Mini Dress&nbsp;
                                            </a>
                                            <span class="quantity">1 × <span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>139.00</span></span>
                                        </li>
                                    </ul>
                                    <p class="akasha-mini-cart__total total"><strong>Subtotal:</strong>
                                        <span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>418.00</span>
                                    </p>
                                    <p class="akasha-mini-cart__buttons buttons">
                                        <a href="index.php?act=view_cart" class="button akasha-forward">Viewcart</a>
                                        <a href="checkout.html" class="button checkout akasha-forward">Checkout</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>