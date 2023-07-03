<?php
if (isset($_POST['search']) && ($_POST['search'])) {
    $kyw = $_POST['kyw'];
} else {
    $kyw = "";
}
$listbinhluan = loadall_binhluan($kyw);
include "../../views/admin/binh_luan/v_danh_sach_binh_luan.php";
?>