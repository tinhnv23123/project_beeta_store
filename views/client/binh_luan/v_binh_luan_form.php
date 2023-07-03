<?php
session_start();
include "../../../models/m_pdo.php";
include "../../../models/m_binh_luan.php";
$id_sp = $_REQUEST['id_sp'];
$dsbl = loadall_binhluan_client($id_sp);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/client/images/logoicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../assets/client/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../../../assets/client/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="../../../assets/client/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../../../assets/client/css/chosen.min.css" />
    <link rel="stylesheet" type="text/css" href="../../../assets/client/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="../../../assets/client/css/jquery.scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="../../../assets/client/css/lightbox.min.css" />
    <link rel="stylesheet" type="text/css" href="../../../assets/client/css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="../../../assets/client/css/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="../../../assets/client/fonts/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="../../../assets/client/css/megamenu.css" />
    <link rel="stylesheet" type="text/css" href="../../../assets/client/css/dreaming-attribute.css" />
    <link rel="stylesheet" type="text/css" href="../../../assets/client/css/style.css" />
    <title>Bình luận</title>
</head>

<body>
    <div class="akasha-tabs akasha-tabs-wrapper">
        <ul class="tabs dreaming-tabs mb-4" role="tablist">

            <li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                <span style="font-size: 22px; font-weight: 600;">Bình luận</span>
            </li>
        </ul>

        <div class="akasha-Tabs-panel akasha-Tabs-panel--reviews panel entry-content akasha-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
            <?php
            if (isset($_POST['gui_bl']) && ($_POST['gui_bl'])) {
                $noi_dung = $_POST['noi_dung'];
                $id_sp = $_POST['id_sp'];
                $id_nd = $_SESSION['email']['id_nd'];
                $ngay_bl = date('d/m/Y');
                insert_binhluan($noi_dung, $id_nd, $id_sp, $ngay_bl);
                header("Location:  " . $_SERVER['HTTP_REFERER']);
            }
            ?>
            <div class="row">
                <div class="col-lg-12 mb-1 mb-lg-0">
                    <!-- Card -->
                    <div class="mb-3 mb-lg-5">

                        <!-- Body -->

                        <table id="datatable" class="table table-hover table-borderless table-thead-bordered table-nowrap table-align-middle card-table" style="width: 100%" data-hs-datatables-options='{
                    "columnDefs": [{
                       "targets": [0],
                       "orderable": false
                     }],
                    "order": [],
                    "info": {
                      "totalQty": "#datatableWithPaginationInfoTotalQty"
                    },
                    "search": "#datatableSearch",
                    "entries": "#datatableEntries",
                    "pageLength": 12,
                    "isResponsive": false,
                    "isShowPaging": false,
                    "pagination": "datatablePagination"
                }'>
                            <thead class="thead-light">
                                <?php
                                $count = 0;
                                foreach ($dsbl as $bl) {
                                    $count += 1;
                                }
                                if ($count >= 1) {
                                ?>
                                    <tr style="font-size: 15px;">
                                        <th style="width: 300px; padding-left:45px ;" class="table-column-pl-0">Tên người dùng</th>
                                        <th style="width: 250px;">Thời gian</th>
                                        <th style="padding-left: 230px;">Nội dung</th>
                                    </tr>
                                <?php
                                } else if (isset($_SESSION['email'])) {
                                ?>
                                    <span style="font-size: 15px;">Hãy là người bình luận đầu tiên!</span>
                                <?php

                                }
                                ?>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($dsbl as $bl) {
                                    extract($bl);
                                ?>
                                    <tr>
                                        <td class="table-column-pl-0">
                                            <span style="font-size: 14px; margin-left: 35px;"><?= $ho_ten ?></span>
                                        </td>
                                        <td>
                                            <span style="font-size: 14px;"><?= $ngay_bl ?></span>
                                        </td>
                                        <td>
                                            <span style="font-size: 14px; padding-left: 4px;" class="text-body ml-4"><?= $noi_dung ?></span>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                        <!-- End Body -->
                    </div>
                    <!-- End Card -->
                </div>
            </div>
            <!-- End Row -->
            <?php
            if (isset($_SESSION['email'])) {
                extract($_SESSION['email']);
            ?>

                <div id="reviews" class="akasha-Reviews">
                    <div id="comments">
                        <h2 class="akasha-Reviews-title">Reviews</h2>
                        <!-- <p class="akasha-noreviews">There are no reviews yet.</p> -->
                    </div>
                    <div id="review_form_wrapper">
                        <div id="review_form">
                            <div id="respond" class="comment-respond">
                                <!-- <span id="reply-title" class="comment-reply-title">Be the first to review “T-shirt with skirt”</span> -->
                                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" id="commentform" class="comment-form">

                                    <input type="hidden" name="id_sp" value="<?= $id_sp ?>">
                                    <p class="comment-form-comment"><label for="comment">Bình luận của bạn&nbsp;<span class="required">*</span></label><textarea id="comment" name="noi_dung" cols="45" rows="8" required=""></textarea></p><input name="wpml_language_code" value="en" type="hidden">
                                    <p class="form-submit"><input type="submit" name="gui_bl" id="submit" class="submit" value="Gửi bình luận" type="submit"> <input name="comment_post_ID" value="27" id="comment_post_ID" type="hidden">
                                        <input name="comment_parent" id="comment_parent" value="0" type="hidden">
                                    </p>
                                </form>

                            </div><!-- #respond -->
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            <?php
            } else {
            ?>
                <div style="text-align: center; font-weight: 500; font-size: 18px;"><span id="reply-title" class="comment-reply-title">Bạn phải đăng nhập để bình luận!</span></div>
            <?php
            }
            ?>
        </div>
    </div>

</body>

</html>