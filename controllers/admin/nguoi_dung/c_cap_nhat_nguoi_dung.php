<?php 
if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
    $id = $_POST['id'];
    $vai_tro = $_POST['vai_tro'];
    $ho_ten = $_POST['ho_ten'];
    $ten_dang_nhap = $_POST['ten_dang_nhap'];
    $mat_khau = $_POST['mat_khau'];
    $email = $_POST['email'];
    update_taikhoan($id,$vai_tro, $ho_ten, $ten_dang_nhap, $mat_khau, $email);

    echo '<script>alert("Cập nhật khách hàng thành công!")</script>';
}
$listnguoidung = loadall_taikhoan($kyw);
$listvaitro = loadall_vaitro();
include "../../views/admin/nguoi_dung/v_danh_sach_nguoi_dung.php";
?>