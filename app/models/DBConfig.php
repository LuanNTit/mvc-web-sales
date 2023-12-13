<?php
    class Database {
        private $conn = NUll;
        private $result = NULL;
        public function connect() {
            $this->conn = new mysqli("localhost", "root", "", "onlinesellingdb");
            if (!$this->conn) {
                echo "Kết nối thất bại";
                exit();
            } else {
                mysqli_set_charset($this->conn,"utf-8");
            }
        }

        // thuc thi cau truy van
        public function execute($sql) {
            $this->result = $this->conn->query($sql);
            return $this->result;
        }

        // phuong thuc lay du lieu
        public function getData() {
            if ($this->result) {
                $data = $this->result->fetch_assoc();
            }
        }

        // phuong thuc lay toan bo du lieu
        public function getAll() {
            
        }

        // phuong thuc dem so ban ghi

        // phuong thuc them du lieu
        public function insertData() {
        }
    }
?>