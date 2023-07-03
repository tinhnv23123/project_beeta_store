<?php
     function insert_danhmuc($tenloai){
        $sql = "insert into danh_muc(ten_dm) values('$tenloai')";
        pdo_execute($sql);
    }

    function loadall_danhmuc()
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
        $sql = "select * from danh_muc order by id_dm desc limit $begin,5";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }
    function phantrang_dm()
    {
        $sql = "select * from danh_muc order by id_dm desc";
        $phantrang_dm = pdo_query($sql);
        return $phantrang_dm;
    }
    function delete_danhmuc($id){
        $sql = "delete from danh_muc where id_dm=" . $id;
        pdo_execute($sql);
    }

    function loadone_danhmuc($id){
        $sql = "select * from danh_muc where id_dm=" . $id;
         $dm = pdo_query_one($sql);
         return $dm;
    }

    function update_danhmuc($id,$tenloai){
        $sql = "update danh_muc set ten_dm='" . $tenloai . "'where id_dm=" . $id;
        pdo_execute($sql);
    }
?>