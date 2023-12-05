<main class="bg-body-tertiary pb-4">
    <div class="container-fluid py-4 bg-white">
        <div id="myCarousel" class="container carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="<?php echo _WEB_ROOT ?>/public/assets/clients/images/banner1.jpg" />
                </div>
                <div class="carousel-item">
                    <img src="<?php echo _WEB_ROOT ?>/public/assets/clients/images/banner2.jpg" />
                </div>
                <div class="carousel-item active">
                    <img src="<?php echo _WEB_ROOT ?>/public/assets/clients/images/banner3.png" />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing pt-4">
        <div class="row bg-white">
            <div class="text-center border-bottom py-2 fs-3 title-color">DANH MỤC</div>
        </div>
        <!-- Three columns of text below the carousel -->
        <div class="row bg-white py-4 text-center">
            <div class="col-lg-3">
                <img class="img-thumbnail img-category" src="<?php echo _WEB_ROOT.$data['categories_list'][0]['url_img']; ?>" />
                <h2 class="fw-normal fs-5"><?php print_r($data['categories_list'][0]['name']) ?></h2>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <img class="img-thumbnail img-category" src="<?php echo _WEB_ROOT.$data['categories_list'][1]['url_img'] ?>" />
                <h2 class="fw-normal fs-5"><?php print_r($data['categories_list'][1]['name']) ?></h2>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <img class="img-thumbnail img-category" src="<?php echo _WEB_ROOT.$data['categories_list'][2]['url_img'] ?>" />
                <h2 class="fw-normal fs-5"><?php print_r($data['categories_list'][2]['name']) ?></h2>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <img class="img-thumbnail img-category" src="<?php echo _WEB_ROOT.$data['categories_list'][3]['url_img'] ?>" />
                <h2 class="fw-normal fs-5"><?php print_r($data['categories_list'][3]['name']) ?></h2>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->
        <div class="row bg-white mt-4 text-center">
            <div class="text-center border-bottom py-2 fs-3 title-color">GỢI Ý SẢN PHẨM</div>
        </div>
        <!-- Three columns of text below the carousel -->
        <div class="row bg-white py-4 text-center">
            <div class="col-lg-2">
                <img class="img-thumbnail img-product-suggest" src="<?php print_r($data['suggests_list'][0]['url_img']) ?>" />
                <h2 class="fw-normal fs-5"><?php print_r($data['suggests_list'][0]['name']) ?></h2>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-2">
                <img class="img-thumbnail img-product-suggest" src="<?php print_r($data['suggests_list'][1]['url_img']) ?>" />
                <h2 class="fw-normal fs-5"><?php print_r($data['suggests_list'][1]['name']) ?></h2>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-2">
                <img class="img-thumbnail img-product-suggest" src="<?php print_r($data['suggests_list'][2]['url_img']) ?>" />
                <h2 class="fw-normal fs-5"><?php print_r($data['suggests_list'][2]['name']) ?></h2>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-2">
                <img class="img-thumbnail img-product-suggest" src="<?php print_r($data['suggests_list'][3]['url_img']) ?>" />
                <h2 class="fw-normal fs-5"><?php print_r($data['suggests_list'][2]['name']) ?></h2>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-2">
                <img class="img-thumbnail img-product-suggest" src="<?php print_r($data['suggests_list'][3]['url_img']) ?>" />
                <h2 class="fw-normal fs-5"><?php print_r($data['suggests_list'][2]['name']) ?></h2>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-2">
                <img class="img-thumbnail img-product-suggest" src="<?php print_r($data['suggests_list'][3]['url_img']) ?>" />
                <h2 class="fw-normal fs-5"><?php print_r($data['suggests_list'][2]['name']) ?></h2>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-2">
                <img class="img-thumbnail img-product-suggest" src="<?php print_r($data['suggests_list'][3]['url_img']) ?>" />
                <h2 class="fw-normal fs-5"><?php print_r($data['suggests_list'][2]['name']) ?></h2>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        
        
        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->

</main>