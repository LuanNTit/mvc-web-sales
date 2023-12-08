<?php 
    class CartModel {
        public function getproductCart() {
            $data = [
                [
                    "id" => "1",                                                          
                    "url_img" => _WEB_ROOT."/public/assets/clients/images/sanpham1.png",
                    "name" => "Áo len nam cao cấp",
                    "quantity" => "1",
                    "unitprice" => "400.000đ",
                    "countprice" => "400.000đ"
                    ],
                    [
                    "id" => "2",                                                          
                    "url_img" => _WEB_ROOT."/public/assets/clients/images/sanpham2.png",
                    "name" => "Áo khoác nam",
                    "quantity" => "1",
                    "unitprice" => "500.000đ",
                    "countprice" => "500.000đ"
                ],
                [
                    "id" => "3",                                                          
                    "url_img" => _WEB_ROOT."/public/assets/clients/images/sanpham3.png",
                    "name" => "Ao thun nam",
                    "quantity" => "1",
                    "unitprice" => "200.000đ",
                    "countprice" => "200.000đ"
                ],
            ];
            return $data;
        }
    }
?>  