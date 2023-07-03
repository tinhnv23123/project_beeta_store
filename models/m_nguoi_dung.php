<?php
function loadone_taikhoan($id)
{
    $sql = "select * from nguoi_dung where id_nd=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}

function loadall_taikhoan($kyw)
{
    if (isset($_GET['trang'])) {
        $page = $_GET['trang'];
    } else {
        $page = "";
    }
    if ($page == "" || $page == 1) {
        $begin = 0;
    } else {
        $begin = ($page * 5) - 5;
    }
    $sql = "select * from nguoi_dung where 1";     
    if($kyw!=""){
        $sql.=" and email like '%".$kyw."%'";
    }
    $sql.=" order by id_nd desc limit $begin,5";
    $listnguoidung = pdo_query($sql);
    return $listnguoidung;
}
function phantrang_tk()
{
    $sql = "select * from nguoi_dung order by id_nd desc";
    $phantrang_tk = pdo_query($sql);
    return $phantrang_tk;
}


function insert_taikhoan($name, $user, $pass, $email, $date)
{
    $sql = "insert into nguoi_dung(ho_ten,ten_dang_nhap,mat_khau,email,ngay_dang_ky) values('$name','$user','$pass','$email','$date')";
    pdo_execute($sql);
}

function delete_taikhoan($id)
{
    $sql = "delete from nguoi_dung where id_nd=" . $id;
    pdo_execute($sql);
}

function check_email($email)
{
    $sql = "select * from taikhoan where email='" . $email . "'";
    $kq = pdo_query_one($sql);
    return $kq;
}

function checkuser($user, $pass)
{
    $sql = "select * from nguoi_dung where (email='" . $user . "') AND mat_khau='" . $pass . "' OR (ten_dang_nhap='" . $user . "') AND mat_khau='" . $pass . "'";
    $kq = pdo_query_one($sql);
    return $kq;
}

function update_taikhoan($id, $vai_tro, $ho_ten, $ten_dang_nhap, $mat_khau, $email)
{
    $sql = "update nguoi_dung set id_vai_tro='" . $vai_tro . "', ho_ten='" . $ho_ten . "', ten_dang_nhap='" . $ten_dang_nhap . "',mat_khau='" . $mat_khau . "',email='" . $email . "' where id_nd=" . $id;
    pdo_execute($sql);
}

// Vai trò
function loadall_vaitro()
{
    $sql = "select * from vai_tro order by id_vai_tro desc";
    $listvaitro = pdo_query($sql);
    return $listvaitro;
}
