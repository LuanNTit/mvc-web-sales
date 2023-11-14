<?php
    Class Cart extends Controller {
        public $data = [];
        public function __construct() {
                   
        }
        public function index() {
            // require_once _DIR_ROOT.'/app/view/home.php';
            $title = "Trang cart";
            $this->data['sub_content']['product_list'] = 'chua dung model';
            $this->data['page_title'] = $title;
            $this->data['content'] = 'cart/cart';
            $this->render("layouts/client_layout", $this->data);
        }

        public function search() {
            $keyword = !empty($_GET['keyword'])?$_GET['keyword']:'';
            echo 'Tu khoa can tim: '.$keyword;
        }
    }
?>