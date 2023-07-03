<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">

                    <h1 class="page-header-title">Thêm danh mục</h1>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <div class="row">
            <div class="col-lg-8">
                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <!-- Header -->
                    <div class="card-header">
                        <h4 class="card-header-title">Thông Tin Danh Mục</h4>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">


                        <div class="row">
                            <form action="index.php?act=them_danh_muc" method="post">
                                <div style="display: flex;">
                                    <div class="col-sm-6">
                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <label for="SKULabel" class="input-label">Id danh mục</label>

                                            <input type="text" class="form-control" name="SKU" id="SKULabel" placeholder="Id danh mục" disabled aria-label="eg. 348121032">
                                        </div>
                                        <!-- End Form Group -->
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <label for="SKULabel" class="input-label">Tên danh mục</label>

                                            <input type="text" class="form-control" name="tenloai" id="SKULabel" placeholder="Nhập tên danh mục" aria-label="eg. 348121032" required>
                                        </div>
                                        <!-- End Form Group -->
                                    </div>
                                </div>

                                <div class="ml-3">
                                    <input type="submit" class="btn btn-success" name="themmoi" value="Thêm mới"></input>
                                    <a href="index.php?act=danh_sach_danh_muc" class="btn btn-primary">Danh sách</a>
                                </div>

                            </form>

                        </div>
                        <!-- End Row -->
                       
                    </div>
                    <!-- Body -->
                </div>
                <!-- End Card -->



            </div>

        </div>
        <!-- End Row -->


    </div>
    <!-- End Content -->

</main>
<!-- ========== END MAIN CONTENT ========== -->