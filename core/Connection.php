<?php
class Connection {
    private static $instance = null, $conn = null;

    private function __construct($config) {
        // ket noi database

        try {
            // Cấu hình dsn
            $dsn = 'mysql:dbname='.$config['db'].';host='.$config['host'];

            // Cấu hình $options
            /**
             * - Cấu hình utf8
             * - Cấu hình ngoại lệ khi truy vấn lỗi
             */
            $options = [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];
            // Cấu lệnh kết nối
            $pass = isset($config['pass']) ? $config['pass'] : '';
            $con = new PDO($dsn, $config['user'], $pass, $options);
            self::$conn = $con;
        } catch (Exception $exception) {
            $mess = $exception->getMessage();
            
            die($mess);
        }
    }

    public static function getInstance($config) {
        if (self::$instance === null) {
            $connection = new Connection($config);
            self::$instance = self::$conn;
        }

        return self::$instance;
    }
}
?>