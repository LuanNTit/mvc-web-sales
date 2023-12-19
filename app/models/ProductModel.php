<?php
class ProductModel extends Model {
    function TableFill()
    {
        return 'products';
    }

    function fieldFill() {
        return '*';
    }
    public function getProductLists() {
        $data = $this->db->query("SELECT * FROM products")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getDetail($id) {
        $data = $this->db->query("SELECT * FROM products WHERE id = $id")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getImgDescriptions() {
        $data = [
            _WEB_ROOT."/public/assets/clients/images/description-1.webp",
            _WEB_ROOT."/public/assets/clients/images/description-2.webp",
            _WEB_ROOT."/public/assets/clients/images/description-3.webp",
            _WEB_ROOT."/public/assets/clients/images/description-4.webp",
            _WEB_ROOT."/public/assets/clients/images/description-5.webp",
            _WEB_ROOT."/public/assets/clients/images/description-6.webp"
        ];
        return $data;
    }

    public function addRating($rating) {
        $sql = "INSERT INTO ratings (rating, user_name, product_id, content) VALUES (:rating, :user_name, :product_id, :content)";
        return $this->db->insert('ratings', array(
            'rating' => $rating['rating'],
            'user_name' => $rating['user_name'],
            'product_id' => $rating['product_id'],
            'content' => $rating['content']
        ));
    }

    public function getRatings($id) {
        $data = $this->db->query("SELECT * FROM ratings WHERE product_id = $id")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}
?>