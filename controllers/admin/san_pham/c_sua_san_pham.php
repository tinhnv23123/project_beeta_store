<?php 
 if (isset($_GET['id']) && ($_GET['id'] > 0)) {
    $id = $_GET['id'];
    $sp = loadone_sanpham($_GET['id']);
    $listhinhanh = loadall_hinhanh($id);
}
$listdanhmuc = loadall_danhmuc();
include "../../views/admin/san_pham/v_sua_san_pham.php";