<?php
    Class Home extends Controller {
        public $model_home;
        public $data = [];
        public function __construct() {
            $this->model_home = $this->model("HomeModel");            
        }
        public function index() {
            // require_once _DIR_ROOT.'/app/view/home.php';
            $title = "Trang home";
            $dataHome = $this->model_home->getList();
            $this->data['sub_content']['product_list'] = $dataHome;
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