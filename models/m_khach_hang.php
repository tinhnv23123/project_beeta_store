<?php
function loadall_khachhang($kyw)
{
    if(isset($_GET['trang'])){
        $page = $_GET['trang'];
    }else{
        $page ="";
    }
    if($page =="" || $page == 1){
        $begin = 0;
    }else{
        $begin = ($page*5)-5;
    }
    $sql = "select * from khach_hang where 1";     
    if($kyw!=""){
        $sql.=" and email like '%".$kyw."%'";
    }
    $sql.=" order by id_kh desc limit $begin,5";
    $listkhachhang = pdo_query($sql);
    return $listkhachhang;
}
function phantrang_kh()
{
    $sql = "select * from khach_hang order by id_kh desc";
    $phantrang_kh = pdo_query($sql);
    return $phantrang_kh;
}

     function delete_khachhang($id){
        $sql = "delete from khach_hang where id_kh=" . $id;
        pdo_execute($sql);
    }

    function loadone_khachhang($id){
        $sql = "select * from khach_hang where id_kh=" . $id;
         $kh = pdo_query_one($sql);
         return $kh;
    }

    function update_khachhang($id, $tenkh, $emailkh, $gioitinhkh, $ngaysinhkh, $diachikh, $sdtkh, $ghichukh){
        $sql = "update khach_hang set ten_kh='" . $tenkh . "',gioi_tinh='" . $gioitinhkh . "',ngay_sinh='" . $ngaysinhkh . "',dia_chi='" . $diachikh . "',sdt='" . $sdtkh . "',ghi_chu='" . $ghichukh . "',email='" . $emailkh . "' where id_kh=" . $id;
        pdo_execute($sql);
    }
?>