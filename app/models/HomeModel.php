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
        //         "url_img" => _WEB_ROOT . "/public/assets/clients/images/category1.png"
        //     ],
        //     [
        //         "name" => "Điện thoại và phụ kiện",
        //         "url_img" => _WEB_ROOT . "/public/assets/clients/images/category2.jpg"
        //     ],
        //     [
        //         "name" => "Thời trang nữ",
        //         "url_img" => _WEB_ROOT . "/public/assets/clients/images/category3.jpg"
        //     ],
        //     [
        //         "name" => "Nhà cửa và đời sống",
        //         "url_img" => _WEB_ROOT . "/public/assets/clients/images/category5.jpg"
        //     ]
        // ];
        $data = $this->db->query("SELECT * FROM $this->_table")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getProductRecommend()
    {
        return [
            [
                "url_img" => _WEB_ROOT . "/public/assets/clients/images/product-suggest1.jpg",
                "promotion" => -23,
                "name" => "Women's Blouse Top",
                "price" => 53,
                "discount" => 68.88
            ],
            [
                "url_img" => _WEB_ROOT . "/public/assets/clients/images/product-suggest2.jpg",
                "name" => "Men's Jacket",
                "price" => 75.55,
                "discount" => 68.88
            ],
            [
                "url_img" => _WEB_ROOT . "/public/assets/clients/images/product-suggest3.jpg",
                "promotion" => -20,
                "name" => "Men's Shirt",
                "price" => 61.11,
                "discount" => 81.11
            ],
            [
                "url_img" => _WEB_ROOT . "/public/assets/clients/images/product-suggest4.jpg",
                "promotion" => -20,
                "name" => "Women's Dress",
                "price" => 61.11,
                "discount" => 81.11
            ]
        ];
    }

    public function getDetail($id)
    {
        $data = [
            'Item 1',
            'Item 2',
            'Item 3'
        ];
        return $data[$id];
    }

    public function getProductSearch($keyword)
    {
        $keywords = ['ao-thung', 'ao-polo', 'ao-hoodie'];
        $data = [
            $keywords[0] => [
                [
                    "url_img" => _WEB_ROOT . "/public/assets/clients/images/ao-thung-1.jpg",
                    "name" => "Áo thung 1",
                    "price" => 53,
                    "root-price" => 100
                ],
                [
                    "url_img" => _WEB_ROOT . "/public/assets/clients/images/ao-thung-2.jpg",
                    "name" => "Áo thung 2",
                    "price" => 75.55,
                    "root-price" => 150
                ],
                [
                    "url_img" => _WEB_ROOT . "/public/assets/clients/images/ao-thung-3.jpg",
                    "name" => "Áo thung 3",
                    "price" => 75.55,
                    "root-price" => 150
                ],
                [
                    "url_img" => _WEB_ROOT . "/public/assets/clients/images/ao-thung-1.jpg",
                    "name" => "Áo thung 4",
                    "price" => 75.55,
                    "root-price" => 150
                ]
            ],
            $keywords[1] => [
                [
                    "url_img" => _WEB_ROOT . "/public/assets/clients/images/sanpham1.png",
                    "name" => "Áo gucci",
                    "price" => 53,
                    "root-price" => 100
                ],
                [
                    "url_img" => _WEB_ROOT . "/public/assets/clients/images/sanpham2.png",
                    "name" => "Áo khoác gió",
                    "price" => 75.55,
                    "root-price" => 150
                ],
                [
                    "url_img" => _WEB_ROOT . "/public/assets/clients/images/sanpham3.png",
                    "name" => "Áo thun rộng",
                    "price" => 75.55,
                    "root-price" => 150
                ],
                [
                    "url_img" => _WEB_ROOT . "/public/assets/clients/images/sanpham4.png",
                    "name" => "áo thung cổ tròn",
                    "price" => 75.55,
                    "root-price" => 150
                ]
            ],
            $keywords[2] => [
                [
                    "url_img" => _WEB_ROOT . "/public/assets/clients/images/sanpham1.png",
                    "name" => "Áo gucci",
                    "price" => 53,
                    "root-price" => 100
                ],
                [
                    "url_img" => _WEB_ROOT . "/public/assets/clients/images/sanpham2.png",
                    "name" => "Áo khoác gió",
                    "price" => 75.55,
                    "root-price" => 150
                ],
                [
                    "url_img" => _WEB_ROOT . "/public/assets/clients/images/sanpham3.png",
                    "name" => "Áo thun rộng",
                    "price" => 75.55,
                    "root-price" => 150
                ],
                [
                    "url_img" => _WEB_ROOT . "/public/assets/clients/images/sanpham4.png",
                    "name" => "áo thung cổ tròn",
                    "price" => 75.55,
                    "root-price" => 150
                ]
            ]
        ];

        if (isset($data[$keyword])) {
            return $data[$keyword];
        } else {
            return [];
        }
    }
}
