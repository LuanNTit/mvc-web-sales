<?php
    $routes['default_controller'] = 'home';
    /**
     * Đường dẫn ảo => Đường dẫn thật
     * 
    */
    
    $routes['san-pham'] = 'product/index';
    $routes['trang-chu'] = 'home';
    $routes['dang-nhap'] = 'account/login';
    $routes['dang-ky'] = 'account/signup';
    $routes['gio-hang'] = 'cart';
    $routes['trang-chu/tim-kiem'] = 'home/search';
    $routes['thanh-toan/.+-(\d+)'] = 'checkout/index/$1';
    $routes['san-pham/.+-(\d+)'] = 'product/detail/$1';
    // $routes['don-hang'] = 'order';
?>