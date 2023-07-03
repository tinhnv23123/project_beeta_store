<?php
if (isset($_POST['search']) && ($_POST['search'])) {
    $kyw = $_POST['kyw'];
} else {
    $kyw = "";
}
$listsanpham = loadall_sanpham($kyw);
include "../../views/admin/san_pham/v_danh_sach_san_pham.php";
