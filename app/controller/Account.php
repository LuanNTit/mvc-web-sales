<?php
    class Account extends Controller {
        public $data = [];

        public function index() {
            $this->login();
        }
        public function login() {
            // $product = $this->model('ProductModel');
            // $dataProduct = $product->getProductLists();

            $title = 'Login with us';
            $this->data['sub_content']['user_account'] = "chua co du lieu";
            $this->data['page_title'] = $title;
            $this->data['content'] = 'accounts/login';
            // render view
            $this->render('layouts/client_layout', $this->data);
        }

        public function signup() {
            $title = 'Registration';
            $this->data['sub_content']['user_account'] = "chua co du lieu";
            $this->data['page_title'] = $title;
            $this->data['content'] = 'accounts/signup';
            // render view
            $this->render('layouts/client_layout', $this->data);
        }
    }
?>