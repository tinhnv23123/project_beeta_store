<?php
if (isset($_SESSION['email'])) {
    if (isset($_POST['add_cart']) && ($_POST['add_cart'])) {
        $id = $_POST['id'];
        $ten_sp = $_POST['ten_sp'];
        $gia_sp = $_POST['gia_sp'];
        $img_sp = $_POST['img_sp'];
        $soluong = $_POST['so_luong'];
        $thanhtien = $soluong * $gia_sp;

        $flag = true;
        if (isset($_SESSION['myCart'])) {
            foreach ($_SESSION['myCart'] as $key => $value) {
                if ($value[0] == $id) {
                    $_SESSION['myCart'][$key][3] += $soluong;
                    $flag = false;
                }
            }
        }
        if ($flag == true) {
            $spadd = [$id, $ten_sp, $gia_sp, $soluong, $thanhtien, $img_sp];
            array_push($_SESSION['myCart'], $spadd);
        }

        echo '<script>alert("Sản phẩm đã được thêm vào giỏ hàng!")</script>';
        include "./views/client/gio_hang/v_gio_hang.php";
        echo header("refresh: 0");
        exit();
    } else {
        include "./views/client/gio_hang/v_gio_hang.php";
    }
} else {
    echo '<script>alert("Vui lòng đăng nhập!")</script>';
    header('Location: ./views/v_login.php');
}
