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
            $this->data['sub_content']['suggests_list'] = $dataProductRecommend;
            
            // echo "<pre>";
            // print_r($this->data);
            // echo "</pre>";

            // header('Content-Type:application/json');
            // echo json_encode($this->data);

            $this->data['page_title'] = $title;
            $this->data['content'] = 'home/home';
            $this->render("layouts/client_layout", $this->data);
        }

        public function search() {
            $keyword = !empty($_GET['keyword'])?$_GET['keyword']:'';
            // echo 'Tu khoa can tim: '.$keyword;

            $dataProduct = $this->model_home->getProductSearch($keyword);            
            $title = 'Trang home';
            $this->data['sub_content']['keyword'] = $keyword;
            $this->data['page_title'] = $title;
            $this->data['sub_content']['products_list'] = $dataProduct;
            $this->data['content'] = 'products/list';
            // render view
            $this->render('layouts/client_layout', $this->data);
        }
    }
?>