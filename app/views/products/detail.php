<link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/public/assets/clients/css/slide-show.css">
<main class="bg-body-tertiary py-4">
    <div class="container py-4 bg-white">
        <div class="row">
            <div class="col-lg-6">
                <div>
                    <div class="main">
                        <img src="<?php echo _WEB_ROOT.$data['info'][0]['url_img'] ?>" alt="" class="img-feature img-detail-list">
                        <div class="control prev">
                            <i class="fa-solid fa-chevron-left"></i>
                        </div>
                        <div class="control next">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </div>
                    <div class="list-image">
                        <div><img src="<?php echo _WEB_ROOT.$data['info'][0]['url_img'] ?>" alt=""></div>
                        <div><img src="<?php echo $data['img-descriptions'][1] ?>" alt=""></div>
                        <div><img src="<?php echo $data['img-descriptions'][2] ?>" alt=""></div>
                        <div><img src="<?php echo $data['img-descriptions'][3] ?>" alt=""></div>
                        <div><img src="<?php echo $data['img-descriptions'][4] ?>" alt=""></div>
                        <div><img src="<?php echo $data['img-descriptions'][5] ?>" alt=""></div>
                        <!-- <div><img src="https://images.unsplash.com/photo-1545889240-1e3233044147?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" alt=""></div> -->
                        <!-- <div><img src="https://images.unsplash.com/photo-1516298773066-c48f8e9bd92b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt=""></div>
                        <div><img src="https://images.unsplash.com/photo-1545832063-74f2d924b61a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt=""></div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div>
                        <h3><?php echo $data['info'][0]['name'] ?></h3>
                        <div class="row mb-4">
                            <div class="col-2">Đánh Giá</div>
                            <div class="col-auto"><span>|</span><span>37 Đã Bán</span></div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-2">Price: </div>
                            <div class="col-auto"><san>₫<?php echo $data['info'][0]['root_price'] ?>đ</span><span> - </span><span>₫<?php echo $data['info'][0]['price'] ?>đ</span> <span>41% GIẢM</span></div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-2">Mã Giảm Giá Của Shop</div>
                            <div class="col-auto"><span>Giảm ₫15,08k</span> <span>Giảm ₫15,02k</span> <span>Giảm ₫14,67k</span></div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-2">Vận Chuyển</div>
                            <div class="col-auto">
                                <div>Vận chuyển tới: <span><?php echo $data['info'][0]['transport_to'] ?></span></div>
                                <div>Phí vận chuyển: <span><?php echo $data['info'][0]['transport_fee'] ?></span></div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-2">Màu Sắc</div>
                            <div class="col-auto"><span>Tím</span> <span>Đen</span> <span>Trắng</span> <span>Vàng gold</span></div>
                        </div>
                        
                        <!-- <div>
                            <button class="btn-second">Thêm Vào Giỏ Hàng</button>
                            <button class="btn-main text-white">Mua Ngay</button>
                        </div> -->
                        <form action="<?php echo _WEB_ROOT ?>/gio-hang" method="post">
                            <input type="hidden" name="anhsp" value="<?php echo _WEB_ROOT.$data['info'][0]['url_img'] ?>">
                            <input type="hidden" name="tensp" value="<?php echo $data['info'][0]['name'] ?>">
                            <input type="hidden" name="dongia" value="<?php echo $data['info'][0]['root_price'] ?>">
                            <div class="row mb-4">
                            <div class="col-2">Số Lượng: </div>
                            <div class="col-auto"> <input class="input-quantity" type="number" min=0  name="soluong" value="0"> <span><?php echo $data['info'][0]['quantity'] ?> sản phẩm có sẵn</span></div>
                            </div>
                            <input type="submit" name="btn-second" value="Thêm vào giỏ hàng" class="btn-second">
                            <input type="submit" name="btn-second" value="Mua Ngay" class="btn-main text-white">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4 pb-4 bg-white">
        <div class="row border-bottom">
            <div class="py-2 title-color"><h3>Mô tả sản phẩm</h3></div>
        </div>
        <div class="row">
            <div>
                <p class="p-multiple-lines">
                Hàng tuyển chọn kỹ, chạy mượt, full chức năng, full phụ kiện
                Bao gồm: điện thoai, dây cáp sạc, ốp, kính cường lực, thẻ bảo hành điện tử
                Dung lượng: 256gb
                ram: 6gb
                Bản: mỹ 
                Mã: LL/A
                Hàng có tem mác nguyên hộp
                Bảo hành 12 tháng, lỗi 1 đổi 1 trong 7 ngày
                Lưu ý: Nếu sau khi nhận hàng về dùng trong vòng 7 ngày nếu máy có vấn đề khách hàng lên shopee ấn đổi trả/hoàn trả hàng
                Bên shop cam kết hàng đúng mô tả, chạy mượt, đúng chính/hãng
                </p>
            </div>
        </div>
    </div>
</main>
<script src="<?php echo _WEB_ROOT ?>/public/assets/clients/js/slide-show.js"></script>