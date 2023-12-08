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
                        <tr>
                            <td><?php print_r($data['productCart_list'][0]['id']) ?></td>
                            <td>
                                <div class="box-cart">
                                    <img class="img-cart" src="<?php print_r($data['productCart_list'][0]['url_img']) ?>"  
                                    class="hinhdaidien">
                                </div>
                            </td>
                            <td><?php print_r($data['productCart_list'][0]['name']) ?></td>
                            <td class="text-right">
                                <span class="minus">-</span>
                                <span class="num"><?php print_r($data['productCart_list'][0]['quantity']) ?></span>
                                <span class="plus">+</span>
                            </td>
                            <td class="text-right"><?php print_r($data['productCart_list'][0]['unitprice']) ?></td>
                            <td class="text-right"><?php print_r($data['productCart_list'][0]['countprice']) ?></td>
                            <td>
                                <!-- Nút xóa, bấm vào sẽ xóa thông tin dựa vào khóa chính sp_ma -->
                                <a id="delete_1" data-sp-ma="2" class="btn btn-danger btn-delete-sanpham">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Xóa
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><?php print_r($data['productCart_list'][1]['id']) ?></td>
                            <td>
                                <div class="box-cart">
                                    <img class="img-cart" src="<?php print_r($data['productCart_list'][1]['url_img']) ?>"  
                                    class="hinhdaidien">
                                </div>
                            </td>
                            <td><?php print_r($data['productCart_list'][1]['name']) ?></td>
                            <td class="text-right">
                                <span class="minus">-</span>
                                <span class="num"><?php print_r($data['productCart_list'][1]['quantity']) ?></span>
                                <span class="plus">+</span>
                            </td>
                            <td class="text-right"><?php print_r($data['productCart_list'][1]['unitprice']) ?></td>
                            <td class="text-right"><?php print_r($data['productCart_list'][1]['countprice']) ?></td>
                            <td>
                                <!-- Nút xóa, bấm vào sẽ xóa thông tin dựa vào khóa chính sp_ma -->
                                <a id="delete_1" data-sp-ma="2" class="btn btn-danger btn-delete-sanpham">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Xóa
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><?php print_r($data['productCart_list'][2]['id']) ?></td>
                            <td>
                                <div class="box-cart">
                                    <img class="img-cart" src="<?php print_r($data['productCart_list'][2]['url_img']) ?>"  
                                    class="hinhdaidien">
                                </div>
                            </td>
                            <td><?php print_r($data['productCart_list'][2]['name']) ?></td>
                            <td class="text-right">
                                <span class="minus">-</span>
                                <span class="num"><?php print_r($data['productCart_list'][2]['quantity']) ?></span>
                                <span class="plus">+</span>
                            </td>
                            <td class="text-right"><?php print_r($data['productCart_list'][2]['unitprice']) ?></td>
                            <td class="text-right"><?php print_r($data['productCart_list'][2]['countprice']) ?></td>
                            <td>
                                <!-- Nút xóa, bấm vào sẽ xóa thông tin dựa vào khóa chính sp_ma -->
                                <a id="delete_1" data-sp-ma="2" class="btn btn-danger btn-delete-sanpham">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Xóa
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <a href="<?php echo _WEB_ROOT ?>/home" class="btn btn-warning btn-md"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Quay
                    về trang chủ</a>
                <a href="<?php echo _WEB_ROOT ?>/checkout" class="btn btn-primary btn-md"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Thanh toán</a>
            </div>
        </div>
    </div>
    <!-- End block content -->
</main>
   