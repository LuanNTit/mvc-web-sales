<?php
    Class Cart extends Controller {
        public $data = [];
        public function __construct() {
                   
        }
        public function index() {
           $this->list_productCart();
        }

        public function list_productCart() {
            $product = $this->model('CartModel');
            $dataProduct = $product->getproductCart();
            
            $title = 'Gio hang';
            $this->data['page_title'] = $title;
            $this->data['sub_content']['productCart_list'] = $dataProduct;
            $this->data['content'] = 'cart/cart';
            // render view
            $this->render('layouts/client_layout', $this->data);
        }

        public function search() {
            $keyword = !empty($_GET['keyword'])?$_GET['keyword']:'';
            echo 'Tu khoa can tim: '.$keyword;
        }
    }
?>