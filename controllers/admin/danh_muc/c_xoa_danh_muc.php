<?php 
 if (isset($_GET['id']) && ($_GET['id'] > 0)) {
    delete_danhmuc($_GET['id']);
}
$listdanhmuc = loadall_danhmuc();
include "../../views/admin/danh_muc/v_ds_danh_muc.php";
?>