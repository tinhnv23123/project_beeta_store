<?php
// kiểm tra người dùng ấn vào add hay không
if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
  $iddm = $_POST['id_dm'];
  $tensp = $_POST['tensp'];
  $giasp = $_POST['giasp'];
  $motasp = $_POST['motasp'];
  $hinh = $_FILES['anhsp']['name'];
  $ngaytaosp = date('Y/m/d');


  $target_dir = "../../assets/uploads/";
  $target_file = $target_dir . basename($_FILES['anhsp']['name']);
  move_uploaded_file($_FILES["anhsp"]["tmp_name"], $target_file);
  try {
    $conn = new PDO("mysql:host=localhost;dbname=project-beeta-store", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "insert into san_pham(ten_sp,mo_ta,don_gia,hinh,ngay_tao,id_dm) values('$tensp','$motasp','$giasp','$hinh','$ngaytaosp','$iddm')";
    $conn->exec($sql);
     
    $last_id = $conn->lastInsertId();
} 
catch (PDOException $e) {
    echo $e->getMessage();
}
  
// Ngắt kết nối
$conn = null;

  if (isset($_FILES['hinhmota'])) {
    $hinhmota = $_FILES['hinhmota']['name'];
    // $target_dir = "../../assets/uploadhinhmt/" .$value;
    // $target_files = $target_dir . basename($_FILES['hinhmota']['name']);

    $files = $_FILES['hinhmota'];
    $file_names = $files['name'];
    // var_dump($hinhmota); die();
    foreach ($hinhmota as $key => $value) {
      move_uploaded_file($files['tmp_name'][$key],'../../assets/uploadhinhmt/'.$value);
      $sql = "insert into hinh_mo_ta(id_sp,hinh_mo_ta) values('$last_id','$value')";
      pdo_execute($sql);
    }
  }


  echo '<script>alert("Thêm sản phẩm thành công!")</script>';
}
$listdanhmuc = loadall_danhmuc();
include "../../views/admin/san_pham/v_them_san_pham.php";
