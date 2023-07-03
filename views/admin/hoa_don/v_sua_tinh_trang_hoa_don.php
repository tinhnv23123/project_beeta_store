<?php
if (is_array($hd)) {
    extract($hd);
}
?>
<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">

                    <h1 class="page-header-title">Cập nhật tình trạng hóa đơn</h1>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <div class="row">
            <div class="col-lg-8">
                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <!-- Header -->
                    <div class="card-header">
                        <h4 class="card-header-title">Tình trạng</h4>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">


                        <div class="row">
                            <form action="index.php?act=cap_nhat_tinh_trang_hd" method="post">
                                <div style="display: flex;">
                                    <div class="col-sm-6">
                                        <!-- Form Group -->
                                        <div class="form-group">

                                            <select name="tinh_trang" id="">
                                                <option value="1" <?php echo ($hd['tinh_trang'] == 1) ? "selected" : "" ?>>Chưa thanh toán</option>
                                                <option value="0" <?php echo ($hd['tinh_trang'] == 0) ? "selected" : "" ?>>Đã thanh toán</option>
                                                <option value="2" <?php echo ($hd['tinh_trang'] == 2) ? "selected" : "" ?>>Đơn hàng bị hủy</option>
                                            </select>
                                        </div>
                                        <!-- End Form Group -->
                                    </div>
                                </div>

                                <div class="ml-3">
                                    <input type="hidden" name="id" value="<?php if (isset($id_hd) && ($id_hd > 0)) echo $id_hd ?>">
                                    <input type="submit" class="btn btn-success" name="capnhat" value="Cập nhật"></input>
                                    <a href="index.php?act=danh_sach_hoa_don" class="btn btn-primary">Danh sách</a>
                                </div>

                            </form>

                        </div>
                        <!-- End Row -->

                    </div>
                    <!-- Body -->
                </div>
                <!-- End Card -->



            </div>

        </div>
        <!-- End Row -->


    </div>
    <!-- End Content -->

</main>
<!-- ========== END MAIN CONTENT ========== -->