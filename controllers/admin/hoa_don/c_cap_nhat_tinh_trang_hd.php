<?php 
if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
    $id = $_POST['id'];
    $tinh_trang = $_POST['tinh_trang'];
    update_hoadon($id, $tinh_trang);
    // $thongbao = "Cập nhật thành công!";
    echo '<script>alert("Cập nhật thành công!")</script>';
}
$listhoadon = loadall_hoadon($kyw);
include "../../views/admin/hoa_don/v_danh_sach_hoa_don.php";
?>