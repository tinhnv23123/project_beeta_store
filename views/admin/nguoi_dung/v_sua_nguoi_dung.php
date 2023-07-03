<?php
if (is_array($nd)) {
    extract($nd);
}
error_reporting(0);
if (isset($_POST['capnhat'])) {
    // validate email
    $email = $_POST['email'];
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

                    <h1 class="page-header-title">Chỉnh Sửa Tài Khoản</h1>
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
                        <form action="index.php?act=cap_nhat_nguoi_dung " method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label for="firstNameLabel" class="input-label">Họ tên</label>
                                        <input type="text" class="form-control" name="ho_ten" id="firstNameLabel" value="<?php if (isset($ho_ten) && ($ho_ten != "")) echo $ho_ten ?>" placeholder="Tên khách hàng..." aria-label="Clarice">
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                                <div class="col-sm-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label for="lastNameLabel" class="input-label">Email</label>
                                        <input type="email" class="form-control" name="email" id="lastNameLabel" value="<?php if (isset($email) && ($email != "")) echo $email ?>" placeholder="Email..." aria-label="Boone">
                                    </div>
                                    <!-- End Form Group -->
                                </div>
                            </div>
                            <!-- End Row -->
                            <div style="margin-left: 1px;" class="row">
                                <!-- Form Group -->
                                <div class="form-group">
                                    <label for="emailLabel" class="input-label">Vai trò</label>

                                    <!-- Select -->

                                    <select class="js-select2-custom form-control" size="1" style="border-color: #e7eaf3;" name="vai_tro" data-hs-select2-options='{
                                "minimumResultsForSearch": "Infinity",
                                "dropdownAutoWidth": true,
                                "width": "6rem"
                              }'>
                                        <?php
                                        if ($id_vai_tro == 1) {
                                            $vaitro = "Admin";
                                        } else if ($id_vai_tro == 0) {
                                            $vaitro = "Khách hàng";
                                        } ?>
                                        <option selected value="<?= $id_vai_tro ?>"><?= $vaitro ?></option>
                                        <?php
                                        foreach ($listvaitro as $vaitro) {
                                            extract($vaitro);
                                            echo '<option value="' . $id_vai_tro . '" >' . $vai_tro . '</option>';
                                        }
                                        ?>

                                    </select>
                                    <!-- End Select -->


                                </div>
                                <!-- End Form Group -->
                            </div>

                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="emailLabel" class="input-label">Tên đăng nhập</label>
                                <input type="text" class="form-control" name="ten_dang_nhap" id="ten_dang_nhap" required value="<?php if (isset($ten_dang_nhap) && ($ten_dang_nhap != "")) echo $ten_dang_nhap ?>" placeholder="Tên đăng nhập" aria-label="Tên đăng nhập">
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div class="js-add-field form-group" data-hs-add-field-options='{
                        "template": "#addPhoneFieldTemplate",
                        "container": "#addPhoneFieldContainer",
                        "defaultCreated": 0
                      }'>
                                <label for="phoneLabel" class="input-label">Mật khẩu</label>

                                <div class="input-group input-group-sm-down-break align-items-center">
                                    <input type="text" class="js-masked-input form-control" name="mat_khau" id="phoneLabel" required value="<?php if (isset($mat_khau) && ($mat_khau != "")) echo $mat_khau ?>" placeholder="password" aria-label="password" data-hs-mask-options='{
                             "template": "+0(000)000-00-00"
                           }'>

                                </div>


                            </div>
                            <!-- End Form Group -->
                            <!-- Form Group -->
                            <!-- End Form Group -->
                            <div class="d-flex justify-content-end">
                                <input type="hidden" name="id" value="<?php if (isset($id_nd) && ($id_nd > 0)) echo $id_nd ?>">
                                <a href="index.php?act=danh_sach_nguoi_dung" class="btn btn-white mr-2">Danh sách</a>
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