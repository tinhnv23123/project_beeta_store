<?php
$kyw = "";
$id_dm = 0;
if (isset($_POST['btn1']) && ($_POST['btn1'])) {
    $kyw = $_POST['kyw'];
} else if (isset($_POST['btn']) && ($_POST['btn'])) {
    $id_dm = $_POST['iddm'];
}
if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
    $id_dm = $_GET['iddm'];
} else {
    $id_dm = 0;
}
$listsp_dm = loadall_sanpham_dm($kyw, $id_dm);
include "./views/client/san_pham/v_san_pham_list.php";
