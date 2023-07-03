<?php 
if (isset($_POST['search']) && ($_POST['search'])) {
    $kyw = $_POST['kyw'];
} else {
    $kyw = "";
}
$listkhachhang = loadall_khachhang($kyw);
include "../../views/admin/khach_hang/v_danh_sach_khach_hang.php";
?>