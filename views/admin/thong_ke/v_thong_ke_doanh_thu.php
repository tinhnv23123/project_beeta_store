<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>


<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center mb-3">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Thống kê doanh thu</h1>

                </div>
            </div>
            <!-- End Row -->

            <!-- Nav Scroller -->
            <div class="js-nav-scroller hs-nav-scroller-horizontal">
                <span class="hs-nav-scroller-arrow-prev" style="display: none;">
                    <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                        <i class="tio-chevron-left"></i>
                    </a>
                </span>

                <span class="hs-nav-scroller-arrow-next" style="display: none;">
                    <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                        <i class="tio-chevron-right"></i>
                    </a>
                </span>

                <!-- Nav -->
                <ul class="nav nav-tabs page-header-tabs" id="pageHeaderTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Biểu đồ thống kê</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Archived</a>
                    </li> -->
                </ul>
                <!-- End Nav -->
            </div>
            <!-- End Nav Scroller -->
        </div>
        <!-- End Page Header -->
        <!-- Card -->
        <div class="card">
            <h4 class="mt-3 ml-3 mb-5">Thống kê doanh thu <span id="text-date"></span></h4>
            <div id="chart" style="height: 450px; width: 1200px;"></style></div>
            <?php
            $thongke = thong_ke_hoa_don();
            $thang = array();
            $tong = array();
            foreach ($thongke as $tk) {
                extract($tk);
                $data_chart[] = array(
                    'date' => $thang,
                    'doanh_thu' => $tong
                );
            }
            ?>
            <script type="text/javascript">
                
                $(document).ready(function() {

                    thongke()
                    var chart = new Morris.Area({
                        parseTime: false,
                        hideHover: 'auto',

                        // ID of the element in which to draw the chart.
                        element: 'chart',
                        lineColors: ['orange'],
                        fillOpacity: 0.3,
                        pointFillColors: ['#fff'],
                        pointStrokeColors: ['#ff5a00'],
                        // Chart data records -- each entry in this array corresponds to a point on
                        // the chart.
                        data: <?php echo $data = json_encode($data_chart); ?>,

                        xkey: 'date',
                        ykeys: ['doanh_thu'],
                        labels: ['Doanh thu']

                    });

                    function thongke() {
                        $.ajax({
                            url: "../../controllers/admin/thong_ke/c_thong_ke_doanh_thu.php",
                            method: "POST",
                            dataType: "JSON",
                            success: function(data) {
                                char.setData(data);
                            }

                        })
                    }
                });
            </script>
        </div>

        <!-- End Card -->
    </div>
    <!-- End Content -->


</main>
<!-- ========== END MAIN CONTENT ========== -->