<?php
    Class Home extends Controller {
        public $model_home;
        public $data = [];
        public function __construct() {
            $this->model_home = $this->model("HomeModel");            
        }
        public function index() {
            // require_once _DIR_ROOT.'/app/view/home.php';s
            $title = "Trang home";
            $dataCategories = $this->model_home->getCategory();
            $dataProductRecommend = $this->model_home->getProductRecommend();
            
            $this->data['sub_content']['categories_list'] = $dataCategories;
            $this->data['sub_content']['products_list'] = $dataProductRecommend;
            
            // echo "<pre>";
            // print_r($this->data['sub_content']['product_list']);
            // echo "</pre>";

            $this->data['page_title'] = $title;
            $this->data['content'] = 'home/home';
            $this->render("layouts/client_layout", $this->data);
        }

        public function search() {
            $keyword = !empty($_GET['keyword'])?$_GET['keyword']:'';
            echo 'Tu khoa can tim: '.$keyword;
        }
    }
?>