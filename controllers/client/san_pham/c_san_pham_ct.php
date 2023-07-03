<?php
if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
    $id = $_GET['idsp'];
    $onesp = loadone_sanpham($id);
    extract($onesp);
    $sp_cung_loai = load_sanpham_cungloai($id_sp, $id_dm);
    $listhinhanh = loadall_hinhanh($id);
    include "./views/client/san_pham/v_san_pham_ct.php";
} else {
    include "./views/client/layout/banner.php";
    include "./views/client/layout/home.php";
}
