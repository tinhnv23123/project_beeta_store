<?php 
 if (isset($_GET['id']) && ($_GET['id'] > 0)) {
    delete_sanpham($_GET['id']);
}
$listsanpham = loadall_sanpham($kyw);
include "../../views/admin/san_pham/v_danh_sach_san_pham.php";
?>