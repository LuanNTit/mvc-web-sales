<?php
    session_start();
    if(!isset($_SESSION['<?php echo _WEB_ROOT ?>/gio-hang'])) $_SESSION['<?php echo _WEB_ROOT ?>/gio-hang']=[];
    // Xóa rỗng cart
    if(isset($_GET['delcart'])&&($_GET['delcart']==1)) unset($_SESSION['<?php echo _WEB_ROOT ?>/gio-hang']);
    // Xóa sp theo id cart
    if(isset($_GET['delproductId'])&&($_GET['delproductId'] >= 0)) {
        array_splice($_SESSION['<?php echo _WEB_ROOT ?>/gio-hang'],$_GET['delproductId'],1);
    }
    // Lấy dữ liệu từ form
    if(isset($_POST['btn-second']) && ($_POST['btn-second'])) {
    $anhsp=$_POST['anhsp'];
    $tensp=$_POST['tensp'];
    $soluong=$_POST['soluong'];
    $dongia=$_POST['dongia'];
    //Kiểm tra sp có trong giỏ hay không ?
    $find = 0; // Kiểm tra sản phẩm có trùng trong giỏ hàng không
    for($i=0; $i < sizeof($_SESSION['<?php echo _WEB_ROOT ?>/gio-hang']); $i++) {
        if($_SESSION['<?php echo _WEB_ROOT ?>/gio-hang'][$i][1]==$tensp) {
            $find = 1;
            $soluongnew = $soluong + $_SESSION['<?php echo _WEB_ROOT ?>/gio-hang'][$i][2];
            $_SESSION['<?php echo _WEB_ROOT ?>/gio-hang'][$i][2]=$soluongnew;
            break;
        }
    }

    //Thêm sp mới vào giỏ hàng
    if($find==0) {
        $sp=[$anhsp,$tensp,$soluong,$dongia];
        $_SESSION['<?php echo _WEB_ROOT ?>/gio-hang'][]=$sp;
    }
    }

    if(isset($_POST['update_quantity'])) {
        $productIndex = $_POST['product_index'];
        $newQuantity = $_POST['soluong'];
        
        // Kiểm tra xem sản phẩm có tồn tại trong giỏ hàng không
        if(isset($_SESSION['<?php echo _WEB_ROOT ?>/gio-hang'][$productIndex])) {
            $_SESSION['<?php echo _WEB_ROOT ?>/gio-hang'][$productIndex][2] = $newQuantity;
        }
    }

    function showCart() {
        if(isset($_SESSION['<?php echo _WEB_ROOT ?>/gio-hang'])&&(is_array($_SESSION['<?php echo _WEB_ROOT ?>/gio-hang']))){
            for ($i=0; $i < sizeof($_SESSION['<?php echo _WEB_ROOT ?>/gio-hang']); $i++) {
                $tt=$_SESSION['<?php echo _WEB_ROOT ?>/gio-hang'][$i][2] * $_SESSION['<?php echo _WEB_ROOT ?>/gio-hang'][$i][3];
                echo '<tr>
                <td class="text-right">'.($i+1).'</td>
                <td class="text-right">
                    <div class="box-cart">
                        <img class="img-cart" src="'.$_SESSION['<?php echo _WEB_ROOT ?>/gio-hang'][$i][0].'"  
                        class="hinhdaidien">
                    </div>
                </td>
                <td class="text-right">'.$_SESSION['<?php echo _WEB_ROOT ?>/gio-hang'][$i][1].'</td>
                <td class="text-center">
                <form action="" method="POST">
                    <input type="hidden" name="product_index" value="'.$i.'">
                    <input class="ip-quantity" type="number" name="soluong" value="'.$_SESSION['<?php echo _WEB_ROOT ?>/gio-hang'][$i][2].'" min="1">
                    <button class="btn-update" type="submit" name="update_quantity">Cập nhật</button>
                </form>
                </td>
                <td class="text-right">'.$_SESSION['<?php echo _WEB_ROOT ?>/gio-hang'][$i][3].' VNĐ</td>
                <td class="text-right">'.$tt.' VNĐ</td>
                <td class="text-right">
                    <a href="gio-hang?delproductId='.$i.'">
                        <i class="fa fa-trash" aria-hidden="true"></i> Xóa
                    </a>
                </td>
            </tr>';
            }
        }
    }
    Class Cart extends Controller {
        public $data = [];
        public function __construct() {
                   
        }
        public function index() {
           $this->list_productCart();
           
        }
        public function addproductCart() {
            
        }

        public function list_productCart() {
            // $product = $this->model('CartModel');
            // $dataProduct = $product->getproductCart();
            
            $title = 'Gio hang';
            $this->data['page_title'] = $title;
            $this->data['sub_content']['productCart_list'] = "chua co du lieu";
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