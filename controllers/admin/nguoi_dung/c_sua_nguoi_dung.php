<?php 
 if (isset($_GET['id']) && ($_GET['id'] > 0)) {
    $nd = loadone_taikhoan($_GET['id']);
}
$listvaitro = loadall_vaitro($kyw);
include "../../views/admin/nguoi_dung/v_sua_nguoi_dung.php";