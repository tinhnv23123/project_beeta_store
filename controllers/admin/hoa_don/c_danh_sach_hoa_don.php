<?php 
if (isset($_POST['search']) && ($_POST['search'])) {
    $kyw = $_POST['kyw'];
} else {
    $kyw = "";
}
$listhoadon = loadall_hoadon($kyw);
include "../../views/admin/hoa_don/v_danh_sach_hoa_don.php";
?>