<?php
if (is_array($kh)) {
    extract($kh);
}
error_reporting(0);
if (isset($_POST['capnhat'])) {
    // validate email
    $email = $_POST['emailkh'];
    if (empty($email)) {
        $err = "Vui lòng nhập email";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $err = "Vui lòng nhập đúng định dạng ";
    }

}
?>
<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <!-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="ecommerce-customers.html">Customers</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add customers</li>
                </ol>
              </nav> -->

                    <h1 class="page-header-title">Chỉnh Sửa Khách Hàng</h1>
                </div>
            </div>
        </div>
        <!-- End Page Header -->

        <div class="row">
            <!-- <div class="col-lg-4 mb-3 mb-lg-0">
            <h4>Thông tin khách hàng</h4>
          </div> -->

            <div class="col-lg-8">
                <!-- Card -->
                <div class="card">
                    <!-- Body -->
                    <div class="card-body">
                        <form action="index.php?act=cap_nhat_khach_hang " method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label for="firstNameLabel" class="input-label">Tên khách hàng</label>
                                        <input type="text" class="form-control" name="tenkh" id="firstNameLabel" value="<?php if (isset($ten_kh) && ($ten_kh != "")) echo $ten_kh ?>" placeholder="Tên khách hàng..." aria-label="Clarice" required>
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                                <div class="col-sm-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label for="lastNameLabel" class="input-label">Email</label>
                                        <input type="email" class="form-control" name="emailkh" id="lastNameLabel" value="<?php if (isset($email) && ($email != "")) echo $email ?>" placeholder="Email..." aria-label="Boone" required>
                                    </div>
                                    <!-- End Form Group -->
                                </div>
                            </div>
                            <!-- End Row -->
                            <div style="margin-left: 1px;" class="row">
                                <!-- Form Group -->
                                <div class="form-group">
                                    <label for="emailLabel" class="input-label">Giới tính</label>

                                    <!-- Select -->

                                    <select  class="js-select2-custom form-control" size="1" style="border-color: #e7eaf3;" name="gioitinhkh"required data-hs-select2-options='{
                                "minimumResultsForSearch": "Infinity",
                                "dropdownAutoWidth": true,
                                "width": "6rem"
                              }'>
                                        <option <?php if (isset($gioi_tinh) && ($gioi_tinh != "")) echo $gioi_tinh ?> selected="">Giới tính</option>
                                        <option value="0">Nam</option>
                                        <option value="1">Nữ</option>

                                    </select>
                                    <!-- End Select -->


                                </div>
                                <!-- End Form Group -->
                                <!-- Form Group -->
                                <div class="form-group ml-5">
                                    <label for="emailLabel" class="input-label">Ngày sinh</label>
                                    <input type="date" class="form-control" name="ngaysinhkh" id="lastNameLabel" required value="<?php if (isset($ngay_sinh) && ($ngay_sinh != "")) echo $ngay_sinh ?>" placeholder="Ngày sinh..." aria-label="Boone">



                                </div>
                                <!-- End Form Group -->
                            </div>

                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="emailLabel" class="input-label">Địa chỉ</label>
                                <input type="text" class="form-control" name="diachikh" id="emailLabel" value="<?php if (isset($dia_chi) && ($dia_chi != "")) echo $dia_chi ?>" placeholder="Địa chỉ" aria-label="clarice@example.com" required>
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div class="js-add-field form-group" data-hs-add-field-options='{
                        "template": "#addPhoneFieldTemplate",
                        "container": "#addPhoneFieldContainer",
                        "defaultCreated": 0
                      }'>
                                <label for="phoneLabel" class="input-label">Điện thoại</label>

                                <div class="input-group input-group-sm-down-break align-items-center">
                                    <input type="text" class="js-masked-input form-control" name="sdtkh" id="phoneLabel" value="<?php if (isset($sdt) && ($sdt != "")) echo $sdt ?>" placeholder="0xxx-xxx-xxx" pattern="0[9|8|1|7|3|5]([0-9]|\s|-|\.){8,12}" maxlength="10" required  aria-label="+x(xxx)xxx-xx-xx" data-hs-mask-options='{
                             "template": "+0(000)000-00-00"
                           }'>

                                </div>


                            </div>
                            <!-- End Form Group -->
                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="emailLabel" class="input-label">Ghi chú</label>
                                <textarea class="form-control" style="height:170px;" name="ghichukh" value="<?php if (isset($ghi_chu) && ($ghi_chu != "")) echo $ghi_chu ?>" placeholder="Ghi chú" ><?php if (isset($ghi_chu) && ($ghi_chu != "")) echo $ghi_chu?></textarea>
                            </div>
                            <!-- End Form Group -->
                            <div class="d-flex justify-content-end">
                                <input type="hidden" name="id" value="<?php if (isset($id_kh) && ($id_kh > 0)) echo $id_kh ?>">
                                <a href="index.php?act=danh_sach_khach_hang" class="btn btn-white mr-2">Danh sách</a>
                                <input type="submit" class="btn btn-primary" name="capnhat" value="Lưu"></input>
                            </div>
                        </form>
                    </div>
                    <!-- Body -->
                  
                </div>
                <!-- End Card -->
            </div>
        </div>
        <!-- End Row -->

        <!-- <hr class="my-5"> -->

    </div>
    <!-- End Content -->
</main>
<!-- ========== END MAIN CONTENT ========== -->