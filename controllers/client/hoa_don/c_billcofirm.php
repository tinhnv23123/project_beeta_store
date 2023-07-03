<?php
require('./email/sendmail.php');
require_once('c_config_vnpay.php');
if (isset($_POST['dat_hang'])) {
    if (isset($_SESSION['email'])) $id_nd = $_SESSION['email']['id_nd'];
    else $id_nd = 0;

    $ho_ten = $_POST['ho_ten'];
    $gioi_tinh = $_POST['gioi_tinh'];
    $ngay_sinh = $_POST['ngay_sinh'];
    $dia_chi = $_POST['dia_chi'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];
    $ghi_chu = $_POST['ghi_chu'];
    $pttt = $_POST['pttt'];
    $ngaydathang = date('Y/m/d');
    $gia_tien = $_POST['gia_tien'];
    $tongtien = tongtien();
    $tinh_trang = 1;

    if ($pttt == 1 || $pttt == 2) {
        $id_khachhang = insert_khachhang($ho_ten, $gioi_tinh, $ngay_sinh, $dia_chi, $sdt, $email, $ghi_chu);

        $id_hoadon = insert_hoadon($ngaydathang, $id_khachhang, $tongtien, $pttt, $tinh_trang, $id_nd);

        foreach ($_SESSION['myCart'] as $cart) {
            $id_ct_hoadon = insert_ct_hoadon($id_hoadon, $cart[0], $cart[3], $cart[2]);
        }
    } else if ($pttt == 3) {
        // vnpay
        $tinh_trang = 0;
        $id_khachhang = insert_khachhang($ho_ten, $gioi_tinh, $ngay_sinh, $dia_chi, $sdt, $email, $ghi_chu);

        $id_hoadon = insert_hoadon($ngaydathang, $id_khachhang, $tongtien, $pttt, $tinh_trang, $id_nd);

        foreach ($_SESSION['myCart'] as $cart) {
            $id_ct_hoadon = insert_ct_hoadon($id_hoadon, $cart[0], $cart[3], $cart[2]);
        }
        $_SESSION['id_hoa_don'] = $id_hoadon;

        $vnp_TxnRef = $id_hoadon; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = 'Thanh toán đơn hàng';
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $tongtien * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        $vnp_ExpireDate = $expire;

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
            "vnp_ExpireDate" => $vnp_ExpireDate
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00', 'message' => 'success', 'data' => $vnp_Url
        );
        if (isset($_POST['dat_hang'])) {
            header('Location: ' . $vnp_Url);
            // die();
        } else {
            echo json_encode($returnData);
        }
    }

    //confirm đơn hàng về email
    if (isset($id_hoadon)) {
        $email = new Mailer();
        $tieu_de = "Xác nhận đơn hàng!";
        $noi_dung = "<div><h4 style='font-size: 14px;'>Xin chào: $ho_ten</h4></div>";
        $noi_dung .= "<div><h4 style='font-size: 14px;'>Cảm ơn bạn vì đã mua hàng của chúng tôi.</h4></div>";
        $noi_dung .= "<div><p style='font-size: 13px;'>Mã đơn hàng: $id_hoadon | Ngày đặt hàng: $ngaydathang</p></div>";
        $noi_dung .= "<div><p style='font-size: 13px;'>Tổng thanh toán: " . number_format($tongtien) . " VNĐ</p></div>";
        if ($pttt == 2) {
            $noi_dung .= "<div><p style='font-size: 13px;'>Thanh toán qua stk: 2803200355555</p></div>";
            $noi_dung .= "<div><p style='font-size: 13px;'>Ngân hàng: MB Bank</p></div>";
        }
        $noi_dung .= "<div><p style='font-size: 13px;'>Đơn hàng của bạn đã được gửi đến: $dia_chi</p></div>";
        $noi_dung .= "<div><p style='font-size: 13px;'>Chào mừng đến với <a href='http://localhost/project-beeta-store'>Beeta-Store</a></p></div>";
        $mail_dat_hang = $_POST['email'];
        $email->dat_hang($tieu_de, $noi_dung, $mail_dat_hang);

        // unset($_SESSION['myCart']);
    }
    if ($pttt == 3) {
        die();
    }

    $hd = loadone_hoadon($id_hoadon);
    $listhd = load_ct_hoadon($id_hoadon);
    include "./views/client/hoa_don/v_bill_cofirm.php";
    echo '<script>alert("Bạn đã đặt hàng thành công!")</script>';
} else {
    $hd = loadone_hoadon($_SESSION['id_hoa_don']);
    $listhd = load_ct_hoadon($_SESSION['id_hoa_don']);
    include "./views/client/hoa_don/v_bill_cofirm.php";
    echo '<script>alert("Bạn đã thanh toán thành công!")</script>';
}
