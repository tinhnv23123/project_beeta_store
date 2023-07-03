<?php 
if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
    $tenloai = $_POST['tenloai'];
    $id = $_POST['id'];
    update_danhmuc($id, $tenloai);
    // $thongbao = "Cập nhật thành công!";
    echo '<script>alert("Cập nhật danh mục thành công!")</script>';
}
$listdanhmuc = loadall_danhmuc();
include "../../views/admin/danh_muc/v_ds_danh_muc.php";
?>