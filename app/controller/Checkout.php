<?php
    class Checkout extends Controller {
        public $data = [];

        public function index() {
            $this->payment();
        }
        public function payment() {
            // $product = $this->model('ProductModel');
            // $dataProduct = $product->getProductLists();
            
            $title = 'Danh sach san pham';
            $this->data['page_title'] = $title;
            $this->data['sub_content']['product_list'] = "chua dung model";
            $this->data['content'] = 'checkouts/checkout';
            // render view
            $this->render('layouts/client_layout', $this->data);
        }
    }
?>