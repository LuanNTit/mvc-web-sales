<?php

/**
 * Ke thua tu class Model
 * 
 */
class HomeModel extends Model
{
    protected $_table = 'category'; 

    

    public function getCategory()
    {
        // $data = [
        //     [
        //         "name" => "Thời Trang Nam",
        //         "url_img" => "/public/assets/clients/images/category1.png"
        //     ],
        //     [
        //         "name" => "Điện thoại và phụ kiện",
        //         "url_img" => "/public/assets/clients/images/category2.jpg"
        //     ],
        //     [
        //         "name" => "Thời trang nữ",
        //         "url_img" => "/public/assets/clients/images/category3.jpg"
        //     ],
        //     [
        //         "name" => "Nhà cửa và đời sống",
        //         "url_img" => "/public/assets/clients/images/category5.jpg"
        //     ]
        // ];
        $data = $this->db->query("SELECT * FROM $this->_table")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getProductRecommend()
    {
        // return [
        //     [
        //         "url_img" => _WEB_ROOT . "/public/assets/clients/images/product-suggest1.jpg",
        //         "promotion" => -23,
        //         "name" => "Women's Blouse Top",
        //         "price" => 53,
        //         "discount" => 68.88
        //     ],
        //     [
        //         "url_img" => _WEB_ROOT . "/public/assets/clients/images/product-suggest2.jpg",
        //         "name" => "Men's Jacket",
        //         "price" => 75.55,
        //         "discount" => 68.88
        //     ],
        //     [
        //         "url_img" => _WEB_ROOT . "/public/assets/clients/images/product-suggest3.jpg",
        //         "promotion" => -20,
        //         "name" => "Men's Shirt",
        //         "price" => 61.11,
        //         "discount" => 81.11
        //     ],
        //     [
        //         "url_img" => _WEB_ROOT . "/public/assets/clients/images/product-suggest4.jpg",
        //         "promotion" => -20,
        //         "name" => "Women's Dress",
        //         "price" => 61.11,
        //         "discount" => 81.11
        //     ]
        // ];
        $this->_table = 'products';
        $data = $this->db->query("SELECT * FROM $this->_table")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getProductSearch($keyword)
    {
        $data = $this->db->query("SELECT * FROM products WHERE name LIKE '%$keyword%'")->fetchAll(PDO::FETCH_ASSOC);

        if (isset($data)) {
            return $data;
        } else {
            return [];
        }
    }
}
