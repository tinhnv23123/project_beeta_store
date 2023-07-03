<?php
if (isset($_POST['btn']) && ($_POST['btn'])) {
    $id_dm = $_POST['iddm'];
    $kyw = $_POST['kyw'];
} else {

    if (isset($_GET['kyw']) && ($_GET['kyw'] != "")) {
        $kyw = $_GET['kyw'];
    } else {
        $kyw = "";
    }
    if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
        $id_dm = $_GET['iddm'];
    } else {
        $id_dm = 0;
    }
}
$listsp_dm = loadall_sanpham_dm_home($kyw, $id_dm);
include "./views/client/layout/home.php";
