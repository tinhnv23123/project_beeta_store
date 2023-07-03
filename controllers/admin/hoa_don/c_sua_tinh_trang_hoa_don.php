<?php 
   if (isset($_GET['id']) && ($_GET['id'] > 0)) {
    $hd = loadone_hoadon($_GET['id']);
}
include "../../views/admin/hoa_don/v_sua_tinh_trang_hoa_don.php";
?>