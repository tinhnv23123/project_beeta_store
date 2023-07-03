<?php 
if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
    $id = $_POST['id'];
    $tenkh = $_POST['tenkh'];
    $emailkh = $_POST['emailkh'];
    $gioitinhkh = $_POST['gioitinhkh'];
    $ngaysinhkh = $_POST['ngaysinhkh'];
    $diachikh = $_POST['diachikh'];
    $sdtkh = $_POST['sdtkh'];
    $ghichukh = $_POST['ghichukh'];
    update_khachhang($id, $tenkh, $emailkh, $gioitinhkh, $ngaysinhkh, $diachikh, $sdtkh, $ghichukh);

    echo '<script>alert("Cập nhật khách hàng thành công!")</script>';
}
$listkhachhang = loadall_khachhang($kyw);
include "../../views/admin/khach_hang/v_danh_sach_khach_hang.php";
?>