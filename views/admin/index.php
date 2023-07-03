<?php
include "../../models/m_pdo.php";
include "../../models/m_danh_muc.php";
include "../../models/m_san_pham.php";
include "../../models/m_khach_hang.php";
include "../../models/m_hoa_don.php";
include "../../models/m_nguoi_dung.php";
include "../../models/m_binh_luan.php";
include "../admin/layout/header.php";
include "../admin/layout/box_left.php";

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
            // Điều hướng danh mục
        case 'them_danh_muc':
            include "../../controllers/admin/danh_muc/c_them_danh_muc.php";
            break;
        case 'danh_sach_danh_muc':
            include "../../controllers/admin/danh_muc/c_danh_sach_danh_muc.php";
            break;
        case 'xoadm':
            include "../../controllers/admin/danh_muc/c_xoa_danh_muc.php";
            break;
        case 'suadm':
            include "../../controllers/admin/danh_muc/c_sua_danh_muc.php";
            break;
        case 'cap_nhat_danh_muc':
            include "../../controllers/admin/danh_muc/c_cap_nhat_danh_muc.php";
            break;
            // Điều hướng sản phẩm
        case 'them_san_pham':
            include "../../controllers/admin/san_pham/c_them_san_pham.php";
            break;
        case 'danh_sach_san_pham':
            include "../../controllers/admin/san_pham/c_danh_sach_san_pham.php";
            break;
        case 'xoasp':
            include "../../controllers/admin/san_pham/c_xoa_san_pham.php";
            break;
        case 'suasp':
            include "../../controllers/admin/san_pham/c_sua_san_pham.php";
            break;
        case 'cap_nhat_san_pham':
            include "../../controllers/admin/san_pham/c_cap_nhat_san_pham.php";
            break;
            // Điều hướng khách hàng
        case 'danh_sach_khach_hang':
            include "../../controllers/admin/khach_hang/c_danh_sach_khach_hang.php";
            break;
        case 'xoakh':
            include "../../controllers/admin/khach_hang/c_xoa_khach_hang.php";
            break;
        case 'suakh':
            include "../../controllers/admin/khach_hang/c_sua_khach_hang.php";
            break;
        case 'cap_nhat_khach_hang':
            include "../../controllers/admin/khach_hang/c_cap_nhat_khach_hang.php";
            break;
            // Điều hướng hóa đơn
        case 'danh_sach_hoa_don':
            include "../../controllers/admin/hoa_don/c_danh_sach_hoa_don.php";
            break;
        case 'sua_tt':
            include "../../controllers/admin/hoa_don/c_sua_tinh_trang_hoa_don.php";
            break;
        case 'xem_ct_hoa_don':
            include "../../controllers/admin/hoa_don/c_chi_tiet_hoa_don.php";
            break;
        case 'cap_nhat_tinh_trang_hd':
            include "../../controllers/admin/hoa_don/c_cap_nhat_tinh_trang_hd.php";
            break;
            // Điều hướng tài khoản
        case 'danh_sach_nguoi_dung':
            include "../../controllers/admin/nguoi_dung/c_danh_sach_nguoi_dung.php";
            break;
        case 'xoa_nd':
            include "../../controllers/admin/nguoi_dung/c_xoa_nguoi_dung.php";
            break;
        case 'sua_nd':
            include "../../controllers/admin/nguoi_dung/c_sua_nguoi_dung.php";
            break;
        case 'cap_nhat_nguoi_dung':
            include "../../controllers/admin/nguoi_dung/c_cap_nhat_nguoi_dung.php";
            break;
            // Bình luận
        case 'binh_luan':
            include "../../controllers/admin/binh_luan/c_danh_sach_binh_luan.php";
            break;
        case 'xoa_bl':
            include "../../controllers/admin/binh_luan/c_xoa_binh_luan.php";
            break;
            // Thống kê
        case 'thong_ke':
            include "../../controllers/admin/thong_ke/c_thong_ke_doanh_thu.php";
            break;
        case 'logout':
            session_unset();
            break;
        default:
            include "../admin/layout/home.php";
            break;
    }
} else {
    include "../admin/layout/home.php";
}
include "../admin/layout/footer.php";
