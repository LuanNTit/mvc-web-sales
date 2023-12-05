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
            <?php foreach ($data['categories_list'] as $item) { ?>
            <div class="col-lg-3">
                <img class="img-thumbnail img-category" src="<?php echo _WEB_ROOT . $item['url_img']; ?>" />
                <h2 class="fw-normal fs-5"><?php echo $item['name'] ?></h2>
            </div><!-- /.col-lg-4 -->
            <?php } ?>
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->
        <div class="row bg-white mt-4 text-center mb-2">
            <div class="text-center border-bottom py-2 fs-3 title-color">GỢI Ý SẢN PHẨM</div>
        </div>
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <?php foreach ($data['suggests_list'] as $item) { ?>
            <div class="col-6 col-md-6 col-lg-3 mb-2 img-thumbnail">
                <a href="<?php echo _WEB_ROOT.'/san-pham/'.$item['name'].'-i.'.$item['id'] ?>">
                    <div class="card h-100 border-0">
                        <div class="card-img-top">
                            <img class="img-product-suggest" src="<?php echo _WEB_ROOT.$item['url_img'] ?>" alt="Card image cap">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title"><?php echo $item['name'] ?></h4>
                            <h5 class="card-price small text-warning">
                                <i>
                                    <s>$<?php echo $item['root_price'] ?></s> $<?php echo $item['price'] ?> </i>
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
            <!-- /END THE FEATURETTES -->

        </div>
    </div><!-- /.container -->

</main>