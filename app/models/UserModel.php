<?php
    class UserModel {
        public function authenticate($username, $password) {
            // Kiểm tra thông tin người dùng trong cơ sở dữ liệu
            return ($username == "user@gmail.com") && ($password == "1234");
            // Trả về true nếu đúng, ngược lại trả về false
        }
    }
?>