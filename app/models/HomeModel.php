<?php

/**
 * Ke thua tu class Model
 * 
 */
class HomeModel extends Model
{
    protected $_table = 'category'; 

    function tableFill() {
        return 'category';
    }

    function fieldFill() {
        return '*';
    }

    public function getCategory()
    {
        $data = $this->db->query("SELECT * FROM $this->_table")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getProductRecommend()
    {
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
