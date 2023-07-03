<?php
if (is_array($sp)) {
    extract($sp);
}
$hinhpath = "../../assets/uploads/" . $hinh;
if (is_file($hinhpath)) {
    $anh = "<img style='height: 100%;' class='avatar avatar-xxl avatar-4by3 mb-3' alt='Image Description' src='" . $hinhpath . "' height='120px'>";
} else {
    $anh = "No photo";
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
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="ecommerce-products.html">Products</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add product</li>
                </ol>
              </nav> -->

                    <h1 class="page-header-title">Sửa Sản Phẩm</h1>

                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <div class="row">
            <div class="col-lg-12">
                <form action="index.php?act=cap_nhat_san_pham" method="POST" enctype="multipart/form-data">


                    <!-- Card -->
                    <div class="card mb-3 mb-lg-5">
                        <!-- Header -->
                        <div class="card-header">
                            <h4 class="card-header-title">Thông tin sản phẩm</h4>
                        </div>
                        <!-- End Header -->

                        <!-- Body -->
                        <div class="card-body">
                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="productNameLabel" class="input-label">Danh mục sản phẩm <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Products are the goods or services you sell."></i></label>
                                <div class="col-2 pl-0">
                                    <div class="input-group-prepend">
                                        <!-- Select -->

                                        <select name="id_dm" class="js-select2-custom custom-select" size="1" data-hs-select2-options='{
                                    "minimumResultsForSearch": "Infinity"
                                  }'>
                                            <option value="<?php echo $sp['id_dm']; ?>" selected><?php echo $ten_dm ?></option>
                                            <?php
                                            foreach ($listdanhmuc as $danhmuc) {
                                                extract($danhmuc);
                                                echo '<option value="' . $id_dm . '">' . $ten_dm . '</option>';
                                            }
                                            ?>
                                        </select>
                                        <!-- End Select -->
                                    </div>
                                </div>

                            </div>
                            <!-- End Form Group -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- Form Group -->
                                    <div class="form-group">

                                        <label for="SKULabel" class="input-label">Tên sản phẩm</label>

                                        <input type="text" class="form-control" name="tensp" value="<?= $ten_sp ?>" id="SKULabel" placeholder="Tên sản phẩm..." aria-label="eg. 348121032" required>

                                    </div>
                                    <!-- End Form Group -->
                                </div>

                                <div class="col-sm-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label for="weightLabel" class="input-label">Đơn giá</label>



                                        <input type="text" class="form-control" name="giasp" value="<?= $don_gia ?>" id="weightLabel" placeholder="Đơn giá..." aria-label="0.0" pattern="[0-9]{1,20}"required>



                                    </div>
                                    <!-- End Form Group -->
                                </div>
                            </div>
                            <!-- End Row -->



                            <!-- Quill -->
                            <!-- <div class="quill-custom">
                                <label class="input-label">Mô tả ngắn</label>
                                <textarea name="motangansp" class="form-control" style="height:120px;" placeholder="Mô tả ngắn..."></textarea>

                            </div> -->
                            <!-- End Quill -->
                            <div class="quill-custom mt-4">
                                <label class="input-label">Mô tả</label>

                                <textarea name="motasp" class="form-control" style="height:220px;" placeholder="Mô tả..."><?= $mo_ta ?></textarea>

                            </div>
                        </div>
                        <!-- Body -->
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card mb-3 mb-lg-5">
                        <!-- Header -->
                        <div class="card-header">
                            <h4 class="card-header-title">Hình ảnh</h4>
                        </div>
                        <!-- End Header -->

                        <!-- Body -->
                        <div class="card-body">
                            <!-- Dropzone -->
                            <div id="attachFilesNewProjectLabel" class="js-dropzone dropzone-custom custom-file-boxed">
                                <div class="dz-message custom-file-boxed-label">

                                    <?= $anh ?>
                                    <h5 class="mb-1">Choose files to upload</h5>
                                    <p class="mb-2">or</p>
                                    <input type="file" name="anhsp" style="max-width:200px;" class="btn btn-sm btn-primary" >
                                </div>


                            </div>
                            <!-- End Dropzone -->
                        </div>
                        <div class="card-header">
                            <h4 class="card-header-title">Hình ảnh mô tả</h4>
                        </div>
                        <!-- End Header -->

                        <!-- Body -->
                        <div class="card-body">
                            <!-- Dropzone -->
                            <div id="attachFilesNewProjectLabel" class="js-dropzone dropzone-custom custom-file-boxed">
                                <div class="dz-message custom-file-boxed-label">

                                    <?php
                                    foreach ($listhinhanh as $ha) {
                                        $linkmota = "../../assets/uploadhinhmt/" . $ha['hinh_mo_ta'];
                                    ?>
                                        <img style='height: 100%;' class='avatar avatar-xxl avatar-4by3 mb-3' alt='Image Description' src='<?=$linkmota?>' height='120px'>
                                    <?php
                                    }
                                    ?>
                                    <h5 class="mb-1">Choose files to upload</h5>
                                    <p class="mb-2">or</p>
                                    <input type="file" name="hinhmota[]" style="max-width:200px;" class="btn btn-sm btn-primary" multiple="multiple">

                                </div>


                            </div>
                            <!-- End Dropzone -->
                        </div>

                        <div class="ml-4 mb-4">

                            <input type="hidden" name="id" value="<?= $id_sp ?>">
                            <input type="submit" class="btn btn-success" name="capnhat" value="Cập Nhật"></input>

                            <a href="index.php?act=danh_sach_san_pham" class="btn btn-primary">Danh sách</a>
                        </div>
                        <!-- Body -->
                    </div>
                    <!-- End Card -->
                </form>
            </div>

        </div>
        <!-- End Row -->


    </div>
    <!-- End Content -->
</main>

<!-- ========== END MAIN CONTENT ========== -->