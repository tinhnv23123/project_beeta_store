<div class="banner-wrapper has_background">
    <img src="./assets/client/images/banner-for-all2.jpg" class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title">Xác nhận hóa đơn</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="#"><span>Giỏ hàng</span></a></li>
                <li class="trail-item trail-end active"><span>Xác nhận hóa đơn</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main style="margin-left: 10%; margin-right: 10%; margin-bottom: 40px;" id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header d-print-none">
            <div class="row align-items-center">


                <div class="col-sm-auto">
                    <a class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle mr-1" href="#" data-toggle="tooltip" data-placement="top" title="Previous order">
                        <i class="tio-arrow-backward"></i>
                    </a>
                    <a class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="#" data-toggle="tooltip" data-placement="top" title="Next order">
                        <i class="tio-arrow-forward"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Page Header -->

        <div class="row">
            <div class="col-lg-8 mb-3 mb-lg-0">
                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <!-- Header -->
                    <div class="card-header">
                        <h4 class="card-header-title">
                            Thông tin đơn hàng

                        </h4>

                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">
                        <!-- Media -->
                        <div class="media">
                            <div class="avatar avatar-xl mr-3">
                                <h2 style="font-size:15px;" class="h5 d-block ml-2">Ảnh</h2>
                            </div>

                            <div class="media-body ml-4">
                                <div class="row">
                                    <div class="col-md-5 mb-3 mb-md-0">
                                        <h2 style="font-size:15px;" class="h5 d-block ml-4">Tên</h2>

                                    </div>

                                    <div class="col col-md-3 align-self-center">
                                        <h5 style="font-size:15px;" class="h5 d-block ml-3">Giá</h5>
                                    </div>

                                    <div class="col col-md-1 align-self-center">
                                        <h5 style="font-size:15px;" class="h5 d-block">SL</h5>
                                    </div>

                                    <div class="col col-md-3 align-self-center text-right">
                                        <h5 style="font-size:15px;" class="h5 d-block mr-2">Tổng</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Media -->

                        <hr />
                        <?php
                        $i = 0;
                        foreach ($listhd as $hd) {
                            $ttien = $hd['so_luong'] * $hd['don_gia'];
                        ?>
                            <!-- Media -->
                            <div class="media">
                                <div class="avatar avatar-xl mr-3">
                                    <img style="width: 75px;" class="img-fluid" src="./assets/uploads/<?= $hd['hinh'] ?>" alt="Image" />
                                </div>

                                <div class="media-body ml-4">
                                    <div class="row">
                                        <div class="col-md-5 mb-3 mb-md-0">
                                            <h2 style="font-size:15px;" class="h5 d-block"><?= $hd['ten_sp'] ?></h2>

                                        </div>

                                        <div class="col col-md-3 align-self-center">
                                            <h5 style="font-size:15px;"><?= number_format($hd['don_gia']) ?> VNĐ</h5>
                                        </div>

                                        <div class="col col-md-1 align-self-center">
                                            <h5 style="font-size:15px;"><?= $hd['so_luong'] ?></h5>
                                        </div>

                                        <div class="col col-md-3 align-self-center text-right">
                                            <h5 style="font-size:15px;"><?= number_format($ttien) ?> VNĐ</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Media -->

                            <hr />
                        <?php
                        }
                        ?>




                        <?php
                        if (isset($hd) && (is_array($hd))) {
                            extract($hd);
                            $bill_pttt =  get_pttt($hd['thanh_toan']);
                        }
                        ?>
                        <div class="row justify-content-md-end mb-3">
                            <div class="col-md-8 col-lg-7">
                                <dl class="row text-sm-right">
                                    <dt class="col-sm-6">Mã đơn hàng:</dt>
                                    <dd class="col-sm-6"><?= $hd['id_hd'] ?></dd>
                                    <dt class="col-sm-6">Ngày đặt hàng:</dt>
                                    <dd class="col-sm-6"><?= $hd['ngay_hd'] ?></dd>
                                    <dt class="col-sm-6">Tổng tiền thanh toán:</dt>
                                    <dd style="color: red; font-weight: 600;" class="col-sm-6"><?= number_format($hd['gia_tien']) ?> VNĐ</dd>
                                    <dt class="col-sm-6">Phương thức thanh toán:</dt>
                                    <dd class="col-sm-6"><?= $bill_pttt ?></dd>

                                </dl>
                                <!-- End Row -->
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Body -->
                </div>
                <!-- End Card -->


            </div>

            <div class="col-lg-4">
                <!-- Card -->
                <div class="card">
                    <!-- Header -->
                    <div class="card-header">
                        <h4 class="card-header-title">Thông tin khách hàng</h4>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">
                        <a class="media align-items-center" href="ecommerce-customer-details.html">
                            <div class="avatar avatar-circle mr-2">
                                <span style="font-size: 14px; font-weight:500;" class="text-body text-hover-primary">Họ Tên:</span>
                            </div>
                            <div class="media-body">
                                <span style="font-size: 15px; font-weight:600;" class="text-body text-hover-primary"><?= $hd['ten_kh'] ?></span>
                            </div>
                            <div class="media-body text-right">
                                <i class="tio-chevron-right text-body"></i>
                            </div>
                        </a>
                        <!-- 
                        <hr />

                        <a class="media align-items-center" href="ecommerce-customer-details.html">
                            <div class="icon icon-soft-info icon-circle mr-3">
                                <i class="tio-shopping-basket-outlined"></i>
                            </div>
                            <div class="media-body">
                                <span class="text-body text-hover-primary">7 orders</span>
                            </div>
                            <div class="media-body text-right">
                                <i class="tio-chevron-right text-body"></i>
                            </div>
                        </a> -->

                        <hr />

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="font-size: 16px; font-weight: 500;">Thông tin liên lạc</h5>
                            <!-- <a class="link" href="javascript:;">Edit</a> -->
                        </div>

                        <ul class="list-unstyled list-unstyled-py-2">
                            <li style="font-size: 14px;">
                                <i class="tio-online mr-2"></i>
                                <?= $hd['email'] ?>
                            </li>
                            <li style="font-size: 14px;">
                                <i class="tio-android-phone-vs mr-2"></i>
                                <?= $hd["sdt"] ?>
                            </li>
                        </ul>

                        <hr />

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="font-size: 16px; font-weight: 500;">Địa chỉ giao hàng</h5>

                        </div>

                        <span style="font-size: 14px;" class="d-block">
                            <?= $hd["dia_chi"] ?>
                        </span>

                        <hr />

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="font-size: 16px; font-weight: 500;">Ghi chú</h5>

                        </div>

                        <span style="font-size: 14px;" class="d-block">
                            <?= $hd["ghi_chu"] ?>
                        </span>


                    </div>
                    <!-- End Body -->
                </div>
                <!-- End Card -->
            </div>
        </div>
        <!-- End Row -->
        <?php
        ?>
    </div>
    <!-- End Content -->


</main>