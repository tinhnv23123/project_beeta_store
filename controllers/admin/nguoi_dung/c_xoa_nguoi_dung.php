<?php 
 if (isset($_GET['id']) && ($_GET['id'] > 0)) {
    delete_taikhoan($_GET['id']);
}
$listnguoidung = loadall_taikhoan($kyw);
include "../../views/admin/nguoi_dung/v_danh_sach_nguoi_dung.php";
?>