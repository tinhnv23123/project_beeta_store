<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center mb-3">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Danh sách bình luận</h1>

                </div>


            </div>
            <!-- End Row -->

            <!-- Nav Scroller -->
            <div class="js-nav-scroller hs-nav-scroller-horizontal">
                <span class="hs-nav-scroller-arrow-prev" style="display: none;">
                    <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                        <i class="tio-chevron-left"></i>
                    </a>
                </span>

                <span class="hs-nav-scroller-arrow-next" style="display: none;">
                    <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                        <i class="tio-chevron-right"></i>
                    </a>
                </span>

                <!-- Nav -->
                <ul class="nav nav-tabs page-header-tabs" id="pageHeaderTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Tất cả bình luận</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Archived</a>
                    </li> -->
                </ul>
                <!-- End Nav -->
            </div>
            <!-- End Nav Scroller -->
        </div>
        <!-- End Page Header -->



        <!-- Card -->
        <div class="card">
            <!-- Header -->
            <div class="card-header">
                <div class="row justify-content-between align-items-center flex-grow-1">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <form action="#" method="POST">
                            <!-- Search -->
                            <div class="input-group input-group-merge input-group-flush">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="tio-search"></i>
                                    </div>
                                </div>
                                <input id="datatableSearch" type="search" class="form-control" placeholder="Tìm kiếm bình luận" aria-label="Search users" name="kyw">
                                <input style="display: none;" type="submit" class="btn btn-primary"  aria-label="Search users" value="Tìm kiếm" name="search">
                            </div>
                            <!-- End Search -->
                        </form>
                    </div>


                </div>
                <!-- End Row -->
            </div>
            <!-- End Header -->

            <!-- Table -->
            <div class="table-responsive datatable-custom">
                <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0, 4, 9],
                        "width": "5%",
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
                        <tr>

                            <th>Id</th>
                            <th>NỘI DUNG BÌNH LUẬN</th>
                            <th>TÊN KHÁCH HÀNG</th>
                            <th>TÊN SP</th>
                            <th>NGÀY BÌNH LUẬN</th>
                            <th style="padding-left:48px;">Điều khiển</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($listbinhluan as $binhluan) {
                            extract($binhluan);
                            $xoabl = "index.php?act=xoa_bl&id=" . $id_bl;
                        ?>

                            <tr>
                                <td><?= $id_bl ?></td>
                                <td><?= $binhluan['noi_dung'] ?></td>
                                <th><?= $binhluan['ho_ten']  ?></th>
                                <th><?= $binhluan['ten_sp']  ?></th>
                                <th><?= $binhluan['ngay_bl']  ?></th>
                                <td>
                                    <div class="btn-group" role="group">


                                        <!-- Unfold -->
                                        <div class="hs-unfold btn-group">


                                            <div style="display: flex">
                                                <a style="padding-left:10px; padding-right:10px" class="dropdown-item" onclick="return confirm('Bạn muốn xóa bình luận?');" href="<?= $xoabl ?>">
                                                    <i class="fa-solid fa-trash dropdown-item-icon"></i>Xóa
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Unfold -->
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
            <!-- End Table -->
            <?php
            $phantrang_bl = phantrang_bl();
            $row_count = count($phantrang_bl);
            $trang = ceil($row_count / 5);
            // echo $row_count;
            // echo $trang;

            ?>
            <div class="card-footer">
                <!-- Pagination -->
                <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
                    <div class="col-sm mb-2 mb-sm-0">
                        <div class="d-flex justify-content-center justify-content-sm-start align-items-center">

                        </div>

                        <div class="col-sm-auto">
                            <div class="d-flex justify-content-center justify-content-sm-end">
                                <!-- Pagination -->
                                <nav id="datatablePagination" aria-label="Activity pagination">
                                    <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                                        <ul id="datatable_pagination" class="pagination datatable-custom-pagination">
                                            <li class="paginate_item page-item disabled"><a class="paginate_button previous page-link" aria-controls="datatable" data-dt-idx="0" tabindex="0" id="datatable_previous"><span aria-hidden="true">Prev</span></a></li>
                                            <?php
                                            for ($i = 1; $i <= $trang; $i++) {
                                            ?>
                                                <li><a class="paginate_button page-link" aria-controls="datatable" name="trang" data-dt-idx="<?= $i ?>" tabindex="0" href="index.php?act=binh_luan&trang=<?php echo $i ?>"><?php echo $i ?></a></li>
                                            <?php
                                            }
                                            ?>
                                            <li class="paginate_item page-item"><a class="paginate_button next page-link" aria-controls="datatable" data-dt-idx="4" tabindex="0" id="datatable_next"><span aria-hidden="true">Next</span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Content -->


</main>
<!-- ========== END MAIN CONTENT ========== -->