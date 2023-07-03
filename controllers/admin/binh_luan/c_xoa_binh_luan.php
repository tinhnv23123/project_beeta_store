<?php 
 if (isset($_GET['id']) && ($_GET['id'] > 0)) {
    delete_binhluan($_GET['id']);
}
$listbinhluan = loadall_binhluan($kyw);
include "../../views/admin/binh_luan/v_danh_sach_binh_luan.php";
?>  