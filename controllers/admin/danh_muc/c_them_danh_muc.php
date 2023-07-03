<?php 
     if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
        $tenloai = $_POST['tenloai'];
        insert_danhmuc($tenloai);
        // $thongbao = "Thêm thành công!";
        echo '<script>alert("Thêm danh mục thành công!")</script>';
    }
    include "../../views/admin/danh_muc/v_them_danh_muc.php";
?>