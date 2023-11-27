<?php
/**
 * Ke thua tu class Model
 * 
 */
class HomeModel {
    protected $__table = 'products';

    public function getList() {
        $data = [
            [
                "name" => "Thời Trang Nam",
                "url_img" => _WEB_ROOT."/public/assets/clients/images/category1.png"
            ],
            [
                "name" => "Thời Trang Nữ",
                "url_img" => _WEB_ROOT."/public/assets/clients/images/category2.jpg"
            ]
        ];
        return $data;
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