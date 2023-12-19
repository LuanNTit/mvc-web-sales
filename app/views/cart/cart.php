<main role="main" class="bg-body-tertiary pb-4">
    <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là content -->
    <div class="container pt-4">
        <div id="thongbao" class="alert alert-danger d-none face" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>

        <h1 class="text-center heading">Giỏ hàng</h1>
        <div class="row">
            <div class="col col-md-12">
                <table class="table table-bordered center">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Ảnh đại diện</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Đơn giá</th>
                            <th>Thành tiền</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody id="datarow">
                        <?php showCart(); 
                        ?>
                    </tbody>
                </table>

                <a href="<?php echo _WEB_ROOT ?>/home" class="btn btn-warning btn-md"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Quay
                    về trang chủ</a>
                    <a href="<?php echo _WEB_ROOT ?>/gio-hang?delcart=1" class="btn btn-warning btn-md"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Xóa Giỏ Hàng</a>
                <a href="<?php echo _WEB_ROOT ?>/checkout" class="btn btn-primary btn-md"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Thanh toán</a>
            </div>
        </div>
    </div>
    <!-- End block content -->
</main>
   