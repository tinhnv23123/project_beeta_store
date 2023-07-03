<?php
if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
    $id = $_POST['id'];
    $iddm = $_POST['id_dm'];
    $tensp = $_POST['tensp'];
    $giasp = $_POST['giasp'];
    $motasp = $_POST['motasp'];

    $hinh = $_FILES['anhsp']['name'];
    $target_dir = "../../assets/uploads/";
    $target_file = $target_dir . basename($_FILES['anhsp']['name']);
    move_uploaded_file($_FILES["anhsp"]["tmp_name"], $target_file);
    update_sanpham($id, $tensp, $giasp, $motasp, $hinh, $iddm);

    $hinhmota = $_FILES['hinhmota']['name'];
    if (isset($_FILES['hinhmota'])) {
        // $target_dir = "../../assets/uploadhinhmt/" .$value;
        // $target_files = $target_dir . basename($_FILES['hinhmota']['name']);
        // echo $target_dir;
        $files = $_FILES['hinhmota'];
        $file_names = $files['name'];
        if (!empty($file_names[0])) {
            $sql = "delete from hinh_mo_ta where id_sp=" . $id;
            pdo_execute($sql);
            foreach ($hinhmota as $key => $value) {
                move_uploaded_file($files['tmp_name'][$key], '../../assets/uploadhinhmt/' . $value);
                $sql = "insert into hinh_mo_ta(id_sp,hinh_mo_ta) values('$id','$value')";
                pdo_execute($sql);
            }
        }
    }
    echo '<script>alert("Cập nhật sản phẩm thành công!")</script>';
}
$listdanhmuc = loadall_danhmuc();
$listsanpham = loadall_sanpham($kyw);
include "../../views/admin/san_pham/v_danh_sach_san_pham.php";
