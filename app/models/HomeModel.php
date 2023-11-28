<?php
/**
 * Ke thua tu class Model
 * 
 */
class HomeModel {
    protected $__table = 'products';

    public function getCategory() {
        $data = [
            [
                "name" => "Thời Trang Nam",
                "url_img" => _WEB_ROOT."/public/assets/clients/images/category1.png"
            ],
            [
                "name" => "Điện thoại và phụ kiện",
                "url_img" => _WEB_ROOT."/public/assets/clients/images/category2.jpg"
            ],
            [
                "name" => "Thời trang nữ",
                "url_img" => _WEB_ROOT."/public/assets/clients/images/category3.jpg"
            ],
            [
                "name" => "Nhà cửa và đời sống",
                "url_img" => _WEB_ROOT."/public/assets/clients/images/category5.jpg"
            ]
        ];
        return $data;
    }

    public function getProductRecommend() {
        return [
            [
                "url_img" => _WEB_ROOT."/public/assets/clients/images/product-suggest1.jpg",
                "promotion" => -23,
                "name" => "Women's Blouse Top",
                "price" => 53,
                "discount" => 68.88
            ],
            [
                "url_img" => _WEB_ROOT."/public/assets/clients/images/product-suggest2.jpg",
                "name" => "Men's Jacket",
                "price" => 75.55,
                "discount" => 68.88
            ],
            [
                "url_img" => _WEB_ROOT."/public/assets/clients/images/product-suggest3.jpg",
                "promotion" => -20,
                "name" => "Men's Shirt",
                "price" => 61.11,
                "discount" => 81.11
            ],
            [
                "url_img" => _WEB_ROOT."/public/assets/clients/images/product-suggest4.jpg",
                "promotion" => -20,
                "name" => "Women's Dress",
                "price" => 61.11,
                "discount" => 81.11
            ]
        ];
    }

    public function getDetail($id) {
        $data = [
            'Item 1',
            'Item 2',
            'Item 3'
        ];
        return $data[$id];
    }
}
?>