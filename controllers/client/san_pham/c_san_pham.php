<?php
$kyw = "";
$id_dm = 0;
if (isset($_POST['btn1']) && ($_POST['btn1'])) {
    $kyw = $_POST['kyw'];
} else if (isset($_POST['btn']) && ($_POST['btn'])) {
    $id_dm = $_POST['iddm'];
}
$listsp_dm = loadall_sanpham_dm($kyw, $id_dm);
include "./views/client/san_pham/v_san_pham.php";
