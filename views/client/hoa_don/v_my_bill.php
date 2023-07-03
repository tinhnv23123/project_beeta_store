<div class="banner-wrapper has_background">
    <img src="./assets/client/images/banner-for-all2.jpg" class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title">Đơn hàng của tôi</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="#"><span>Giỏ hàng</span></a></li>
                <li class="trail-item trail-end active"><span>Đơn hàng của tôi</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main style="margin-left: 10%; margin-right: 10%; margin-bottom: 20px;" id="content" role="main" class="main">
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
            <div class="col-lg-12 mb-1 mb-lg-0">
                <!-- Card -->
                <div class="mb-3 mb-lg-5">

                    <!-- Body -->

                    <table id="datatable" class="table table-hover table-borderless table-thead-bordered table-nowrap table-align-middle card-table" style="width: 100%" data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0],
                        "orderable": false
                      }],
                     "order": [],
                     "info": {
                       "totalQty": "#datatableWithPaginationInfoTotalQty"
                     },
                     "search": "#datatableSearch",
                     "entries": "#datatableEntries",
                     "pageLength": 12,
                     "isResponsive": false,
                     "isShowPaging": false,
                     "pagination": "datatablePagination"
                   }'>
                        <thead class="thead-light">
                            <tr style="font-size: 15px;">

                                <th class="table-column-pl-0">Mã đơn hàng</th>
                                <th>Ngày đặt</th>
                                <th>Số lượng</th>
                                <th class="pl-3">Tổng giá trị</th>
                                <th style="padding-left: 30px;">Tình trạng</th>


                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            if (is_array($listbill)) {
                                foreach ($listbill as $bill) {
                                    extract($bill);
                                    $ttdh = get_ttdh($bill['tinh_trang']);
                                    $countsp = loadall_cart_count($bill['id_hd']);

                            ?>
                                    <tr>
                                        <td class="table-column-pl-0">
                                            <span style="font-size: 14px; margin-left: 35px;"><?= $bill['id_hd'] ?></span>
                                        </td>
                                        <td>
                                            <span style="font-size: 14px;"><?= $bill['ngay_hd'] ?></span>
                                        </td>
                                        <td>
                                            <span style="font-size: 14px; padding-left: 4px;" class="text-body ml-4"><?= $countsp ?></span>
                                        </td>
                                        <td>
                                            <span style="font-size: 13px;" class="badge badge-soft-success">
                                                <span class="legend-indicator bg-success"></span><?= number_format($bill['gia_tien']) ?> VNĐ
                                            </span>
                                        </td>
                                        <td style="width: 190px;">
                                            <span style="font-size: 13px;" class="badge badge-soft-info">
                                                <span class="legend-indicator bg-info"></span><?= $ttdh ?>
                                            </span>
                                        </td>


                                    </tr>

                            <?php
                                }
                            }
                            ?>


                            <!-- <tr>

                                <td class="table-column-pl-0">
                                    <a href="ecommerce-order-details.html">#23513</a>
                                </td>
                                <td>Aug 17, 2020, 2:01 (ET)</td>
                                <td>
                                    <a class="text-body" href="ecommerce-customer-details.html">Mathew Gustaffson</a>
                                </td>
                                <td>
                                    <span class="badge badge-soft-success">
                                        <span class="legend-indicator bg-success"></span>Paid
                                    </span>
                                </td>
                                <td>
                                    <span class="badge badge-soft-dark">
                                        <span class="legend-indicator bg-dark"></span>Unfulfilled
                                    </span>
                                </td>


                            </tr> -->



                        </tbody>
                    </table>

                    <!-- End Body -->
                </div>
                <!-- End Card -->
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- End Content -->


</main>