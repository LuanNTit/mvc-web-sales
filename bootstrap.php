<?php
    define("_DIR_ROOT", str_replace('\\', '/', __DIR__));

    // xu ly http root
    if (!empty($_SERVER["HTTPS"]) && $_SERVER['HTTPS'] == 'on') {
        $web_root = 'https://'.$_SERVER['HTTP_HOST'];
    } else {
        $web_root = 'http://'.$_SERVER['HTTP_HOST'];
    }
    
    $folder = str_replace(strtolower($_SERVER['DOCUMENT_ROOT']), '', strtolower(_DIR_ROOT));
    
    $web_root = $web_root.$folder;

    define("_WEB_ROOT", $web_root);

    /**
     * Tự động load configs
     */
    $configs_dir = scandir('configs');
    if (!empty($configs_dir)) {
        foreach ($configs_dir as $item) {
            if ($item != '.'&& $item != '..' && file_exists('configs/'.$item)) {
                require_once 'configs/'.$item;
            }
        }
    }

    require_once('core/Route.php'); // load route class
    require_once("app/app.php"); // load app

    // Kiểm tra config va load Database
    if (!empty($config['database'])) {
        $db_config = array_filter($config['database']);
        
        if (!empty($db_config)) {
            require_once 'core/Connection.php';
            require_once 'core/Database.php';
        }
    }
    
    require_once("core/Model.php"); // load Base Model
    
    require_once('core/Controller.php'); // load base controller
?>