<?php 
  if (isset($_POST['dangky']) && ($_POST['dangky'])) {
    $name = $_POST['name'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $date = date('Y/m/d');
    insert_taikhoan($name,$user, $pass, $email,$date);
    echo '<script>alert("Đăng ký thành công!")</script>';
    // header('Location: ./views/v_login.php');
    header('Location: ./index.php');
}else{
    header('Location: ./views/v_dang_ky_tai_khoan.php');
}
