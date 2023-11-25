<?php
class ProductModel {
    public function getProductLists() {
        return [
            [
                "url_img" => _WEB_ROOT."/public/assets/clients/images/sanpham1.png",
                "name" => "Women's Blouse Top",
                "price" => 53
            ],
            [
                "url_img" => _WEB_ROOT."/public/assets/clients/images/sanpham2.png",
                "name" => "Men's Jacket",
                "price" => 75.55
            ]
        ];
    }

    public function getDetail($id) {
        $data = [
            'Sản phẩm 1',
            'Sản phẩm 2',
            'Sản phẩm 3'
        ];
        return $data[$id];
    }
}
?>