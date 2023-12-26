<?php
class Account extends Controller
{
    public $data = [];

    public function index()
    {
        $this->login();
    }
    public function login()
    {
        // Kiểm tra xem form đã được submit chưa
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy giá trị từ trường username và password
            $username = isset($_POST['email']) ? $_POST['email'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';

            // Kiểm tra xem username và password có giá trị hay không
            if (!empty($username) && !empty($password)) {
                // Gọi hàm authenticate() hoặc thực hiện xử lý đăng nhập ở đây
                $userModel = $this->model("UserModel");
                $authenticated = $userModel->authenticate($username, $password);

                if ($authenticated) {
                    // Đăng nhập thành công, chuyển hướng hoặc thực hiện các hành động khác
                    $this->data['content'] = 'home/home';
                    header('Location:'._WEB_ROOT.'/');
                    exit();
                } else {
                    // Đăng nhập thất bại
                    $error = "Tài khoản hoặc mật khẩu không đúng";
                    $this->data['content'] = 'accounts/login';
                }
            } else {
                // lỗi nếu username hoặc password trống
                $error = "Vui lòng nhập đầy đủ thông tin";
                $this->data['content'] = 'accounts/login';
            }
            // Hiển thi thông báo lỗi
            $this->data['error'] = $error;
            echo '<script>alert('.$error.');</script>';
        }
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $this->data['error'] = '';
            $this->data['content'] = 'accounts/login';
        }
        $title = 'Login with us';
        $this->data['sub_content']['user_account'] = "chua co du lieu";
        $this->data['page_title'] = $title;
        // render view
        $this->render('layouts/client_layout', $this->data);
    }

    public function signup()
    {
        $title = 'Registration';
        $this->data['sub_content']['user_account'] = "chua co du lieu";
        $this->data['page_title'] = $title;
        $this->data['content'] = 'accounts/signup';
        // render view
        $this->render('layouts/client_layout', $this->data);
    }
}
