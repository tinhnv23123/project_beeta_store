<?php 
   if (isset($_GET['id']) && ($_GET['id'] > 0)) {
    $kh = loadone_khachhang($_GET['id']);
}
include "../../views/admin/khach_hang/v_sua_khach_hang.php";
?>