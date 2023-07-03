<?php 
 $listbill = loadall_bill($_SESSION['email']['id_nd']);
include "./views/client/hoa_don/v_my_bill.php";
?>