<?php
session_start();
$url = $_SESSION['url'];
$_SESSION['tb'] = "";
if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $check_user = checkuser($email, $pass);
    if (is_array($check_user)) {
        $_SESSION['email'] = $check_user;
        header("Location: $url");
    } else {
        $_SESSION['tb'] = "Sai tài khoản hoặc mật khẩu! Vui lòng thử lại!";
        header('Location: ./views/v_login.php');
    }
} else {
    header('Location: ./views/v_login.php');
}
