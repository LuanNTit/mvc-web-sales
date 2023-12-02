<?php
    class Product extends Controller {
        public $data = [];
        public function index() {
            $this->list_product();
        }

        public function list_product() {
            $product = $this->model('ProductModel');
            $dataProduct = $product->getProductLists();
            
            $title = 'Danh sach san pham';
            $this->data['page_title'] = $title;
            $this->data['sub_content']['products_list'] = $dataProduct;
            $this->data['content'] = 'products/list';
            // render view
            $this->render('layouts/client_layout', $this->data);
        }

        public function detail($id=0) {
            $product = $this->model('ProductModel');
            $this->data['sub_content']['info'] = $product->getDetail($id);
            $this->data['sub_content']['title'] = 'Chi tiet san pham';
            $this->data['page_title'] = 'Chi tiet san pham';
            $this->data['sub_content']['img-descriptions'] = $product->getImgDescriptions();
            $this->data['content'] = 'products/detail';
            $this->render('layouts/client_layout', $this->data);
        }
    }
?>