<?php 
if (isset($_POST['search']) && ($_POST['search'])) {
    $kyw = $_POST['kyw'];
} else {
    $kyw = "";
}
$listnguoidung = loadall_taikhoan($kyw);
include "../../views/admin/nguoi_dung/v_danh_sach_nguoi_dung.php";
?>