<?php 
 if (isset($_GET['id']) && ($_GET['id'] > 0)) {
    $ct_hoadon = load_ct_hoadon($_GET['id']);
}
$listdanhmuc = loadall_danhmuc();
$listsanpham = loadall_sanpham($kyw);
include "../../views/admin/hoa_don/v_chi_tiet_hoa_don.php";