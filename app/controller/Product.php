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

        public function detail($id=1) {
            $product = $this->model('ProductModel');
            if (isset($_POST['form_type']) && $_POST['form_type'] == 'rating') {
                $rating_post = array(
                    'rating' => $_POST['rating'],
                    'user_name' => $_POST['name'],
                    'content' => $_POST['content'],
                    'product_id' => $id
                );
                $product->addRating($rating_post);
            }
            $this->data['sub_content']['info'] = $product->getDetail($id);
            $this->data['sub_content']['ratings'] = $product->getRatings($id);
            $this->data['page_title'] = 'Chi tiet san pham';
            $this->data['sub_content']['img-descriptions'] = $product->getImgDescriptions();
            $this->data['content'] = 'products/detail';
            $this->render('layouts/client_layout', $this->data);
        }

        // public function rating($id=1) {
            

        //     $product = $this->model('ProductModel');
        //     $this->data['sub_content']['info'] = $product->getDetail($id);
        //     $this->data['page_title'] = 'Chi tiet san pham';
        //     $this->data['sub_content']['img-descriptions'] = $product->getImgDescriptions();
        //     $this->data['content'] = 'products/detail';
        //     $this->render('layouts/client_layout', $this->data);
        // }
    }
?>