<?php
if (is_array($ct_hoadon)) {
  extract($ct_hoadon);
}

?>
<main id="content" style="padding-top: 0px;" role="main" class="main">
  <!-- Content -->
  <div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header d-print-none">
      <div class="row align-items-center">
        <div class="col-sm mb-2 mb-sm-0">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-no-gutter">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="#">Hóa đơn</a></li>
              <li class="breadcrumb-item active" aria-current="page">Chi tiết hóa đơn</li>
            </ol>
          </nav>

          <div class="d-sm-flex align-items-sm-center">
            <h1 class="page-header-title">Hóa đơn</h1>
            <span class="badge badge-soft-success ml-sm-3">
              <span class="legend-indicator bg-success"></span>Paid
            </span>
            <span class="badge badge-soft-info ml-2 ml-sm-3">
              <span class="legend-indicator bg-info"></span>Fulfilled
            </span>
            <span class="ml-2 ml-sm-3">
              <i class="tio-date-range"></i>
            </span>
          </div>

          <div class="mt-2">
            <a class="text-body mr-3" href="javascript:;" onclick="window.print(); return false;">
              <i class="tio-print mr-1"></i> In hóa đơn
            </a>


          </div>
        </div>

        <!-- <div class="col-sm-auto">
              <a class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle mr-1" href="#" data-toggle="tooltip" data-placement="top" title="Previous order">
                <i class="tio-arrow-backward"></i>
              </a>
              <a class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="#" data-toggle="tooltip" data-placement="top" title="Next order">
                <i class="tio-arrow-forward"></i>
              </a>
            </div> -->
      </div>
    </div>
    <!-- End Page Header -->

    <div class="row">
      <div class="col-lg-8 mb-3 mb-lg-0">
        <!-- Card -->
        <div class="card mb-3 mb-lg-5">
          <!-- Header -->
          <div class="card-header">
            <h4 class="card-header-title">Chi tiết hóa đơn</h4>
            <!-- <a class="link" href="javascript:;">Edit</a> -->
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="card-body">
            <!-- Media -->
            <?php
            foreach ($ct_hoadon as $hd) {
            ?>
              <div class="media">
                <div class="avatar avatar-xl mr-6">
                  <img src="../../assets/uploads/<?= $hd['hinh'] ?>" alt="Image Description" width="90px" height="115px">
                </div>

                <div class="media-body">
                  <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0" name="ten_sp">
                      <a class="h5 d-block" href="#"><?= $hd['ten_sp'] ?></a>
                    </div>

                    <div class="col col-md-2 align-self-center">
                      <h5><?= number_format($hd['don_gia']) ?> VNĐ</h5>
                    </div>

                    <div class="col col-md-2 align-self-center">
                      <h5><?= $hd['so_luong'] ?></h5>
                    </div>

                    <div class="col col-md-2 align-self-center text-right">
                      <h5><?= number_format($hd['so_luong'] * $hd['don_gia']) ?> VNĐ</h5>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <br>
              <hr>
            <?php
            }
            ?>
            <!-- End Media -->
            <br>
            <hr>

            <!-- Media -->

            <!-- End Media -->
            <form action="" method="POST">
              <div class="row justify-content-md-end mb-3">
                <div class="col-md-8 col-lg-7">
                  <dl class="row text-sm-right">
                    <dt class="col-sm-6">Tổng tiền:</dt>
                    <dd class="col-sm-6"><?= number_format($hd['gia_tien']) ?> VNĐ</dd>
                    <dt class="col-sm-6">Thanh toán:</dt>
                    <dd class="col-sm-6"><?= number_format($hd['gia_tien']) ?> VNĐ</dd>
                    <dt class="col-sm-6">Tình trạng thanh toán:</dt>
                    <dd class="col-sm-6">
                      <?php
                      if ($hd['tinh_trang'] == 0) {
                        $tt = "Đã thanh toán";
                      } else if ($hd['tinh_trang'] == 1) {
                        $tt = "Chưa thanh toán";
                      } else if ($hd['tinh_trang'] == 2) {
                        $tt = "Đơn hàng bị hủy";
                      }
                      echo $tt ?>
                    </dd>
                    <!-- End Row -->
                </div>
              </div>
            </form>
            <!-- End Row -->
          </div>

          <!-- End Body -->
        </div>

      </div>

      <div class="col-lg-4">
        <!-- Card -->
        <div class="card">
          <!-- Header -->
          <div class="card-header">
            <h4 class="card-header-title">Khách hàng</h4>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="card-body">
            <a class="media align-items-center" href="#">
              <div class="avatar avatar-circle mr-3">
                <img class="avatar-img" src="..\..\assets\admin\img\160x160\img1.jpg" alt="Image Description">
              </div>
              <div class="media-body">
                <span class="text-body text-hover-primary"><?= $hd['ten_kh'] ?></span>
              </div>
              <!-- <div class="media-body text-right">
                <i class="tio-chevron-right text-body"></i>
              </div> -->
            </a>

            <hr>

            <div class="d-flex justify-content-between align-items-center">
              <h5>Thông tin liên lạc</h5>
              <!-- <a class="link" href="javascript:;">Edit</a> -->
            </div>

            <ul class="list-unstyled list-unstyled-py-2">
              <li>
                <i class="tio-online mr-2"></i>
                <?= $hd['email'] ?>
              </li>
              <li>
                <i class="tio-android-phone-vs mr-2"></i>
                <?= $hd['sdt'] ?>
              </li>
            </ul>
            <hr>

            <div class="d-flex justify-content-between align-items-center">
              <h5>Địa chỉ</h5>
              <!-- <a class="link" href="javascript:;">Edit</a> -->
            </div>

            <span class="d-block">
              <?= $hd['dia_chi'] ?><br>
              <img class="avatar avatar-xss avatar-circle ml-1" src="..\..\assets\admin\img\vn.png" alt="Great Britain Flag">
            </span>

            <!-- <div class="mt-3">
              <h5 class="mb-0">Mastercard</h5>
              <span class="d-block">Card Number: ************4291</span>
            </div> -->
          </div>
          <!-- End Body -->
        </div>
        <!-- End Card -->
      </div>
    </div>
    <?php
    if (isset($_POST['tinh_trang'])) {
      $tinh_trang = $_POST['tinh_trang'];
      update_hoadon($hd, $tinh_trang);
    }
    ?>
    <!-- End Row -->
  </div>