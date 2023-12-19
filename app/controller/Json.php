<?php
class Json extends Controller {
    private $models;
    private $data;
    
    function showJson() {
        // $this->models[0] = $this->model("AccountModel");
        // $this->models[] = $this->model("CartModel");
        $this->models[] = $this->model("HomeModel");
        $this->models[] = $this->model("ProductModel");

        foreach($this->models as $key => $item) {
            $this->data[$key] = $item->get();
        }

        header('Content-Type:application/json');
            echo json_encode($this->data);
    }

}
?>