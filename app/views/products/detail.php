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
    <div class="container mt-4 pb-4 bg-white">
        <div class="row border-bottom">
            <div class="py-2 title-color"><h3>Đánh giá sản phẩm</h3></div>
        </div>
        <div class="row">
            <form method="post" class="needs-validation" novalidate>
                <input type="hidden" id="form_type" name="form_type" value="rating">
                <div class="mb-3">
                    <label for="formControlInputName" class="form-label">Họ tên</label>
                    <input type="text" class="form-control" id="formControlInputName" name="name" placeholder="Họ tên của bạn" required>
                    <div class="invalid-feedback">
                    Hãy nhập họ tên
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextareaContent" class="form-label">Nội dung đánh giá</label>
                    <textarea class="form-control" id="exampleFormControlTextareaContent" rows="3" name="content" required></textarea>
                    <div class="invalid-feedback">
                    Hãy nhập đánh giá
                    </div>
                </div>
                <div class="mb-3 rating">
                    <input type="radio" id="star5" name="rating" value="5" />
                    <label class = "full" for="star5" title="Awesome - 5 stars"></label>
                
                    <input type="radio" id="star4" name="rating" value="4" />
                    <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                
                    <input type="radio" id="star3" name="rating" value="3" />
                    <label class = "full" for="star3" title="Meh - 3 stars"></label>
                
                    <input type="radio" id="star2" name="rating" value="2" />
                    <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                
                    <input type="radio" id="star1" name="rating" value="1" />
                    <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                </div>
                <br />
                <div class="mt-5">
                    <button type="submit" class="btn btn-primary mb-3">Gửi đánh giá</button>
                </div>
            </form>
            
        </div>
        <div class="row">

        </div>
        <?php
        foreach ($data['ratings'] as $key => $value) {
            ?>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $value['user_name'] ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        <div class="mb-3 rating">
                            <input type="radio" id="star5" name="rating<?php echo $value['id']?>" value="5" <?php if($value['rating'] == 5) echo 'checked' ?>/>
                            <label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        
                            <input type="radio" id="star4" name="rating<?php echo $value['id']?>" value="4" <?php if($value['rating'] == 4) echo 'checked' ?>/>
                            <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        
                            <input type="radio" id="star3" name="rating<?php echo $value['id']?>" value="3" <?php if($value['rating'] == 3) echo 'checked' ?>/>
                            <label class = "full" for="star3" title="Meh - 3 stars"></label>
                        
                            <input type="radio" id="star2" name="rating<?php echo $value['id']?>" value="2" <?php if($value['rating'] == 2) echo 'checked' ?>/>
                            <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        
                            <input type="radio" id="star1" name="rating<?php echo $value['id']?>" value="1" <?php if($value['rating'] == 1) echo 'checked' ?>/>
                            <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                        </div>
                    </h6>
                    <br />
                    <p class="card-text rating-contents"><?php echo $value['content'] ?></p>
                </div>
            </div>
            <?php
        }

        ?>
    </div>
</main>
<script src="<?php echo _WEB_ROOT ?>/public/assets/clients/js/slide-show.js"></script>
<script>
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
            })
    })();
    
    function calcRate(r) {
        const f = ~~r,
        id = 'star' + f + (r % f ? 'half' : '')
        id && (document.getElementById(id).checked = !0)
    }
</script>