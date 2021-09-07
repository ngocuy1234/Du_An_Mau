<?php
//echo $_GET["url"];

require_once "./mvc/Bridge.php";

$admin = 'admin';
define('BASE_URL', "/MVC");
define('CONTROLLER_URL', './mvc/controllers');
define('MODEL_URL', './mvc/models');
define('VIEW_URL', './mvc/views');
    //định nghĩa đường dẫn chứa ảnh sử dụng trong upload
define('IMAGE_BE', '.mvc/public/assets/');
    // định nghĩa đường dẫn ảnh hiển thị
define('IMGAE_DISPLAY', BASE_URL.'/public');
define('CSS_URL' , './../../public/css');
    // định nghĩa đường dẫn đến public frontend
define('TOPUBLIC', BASE_URL.'/public/frontend');
define('ACTION_BACKEND' , "./../");
define('ACTION_FRONTEND' , "/MVC");

$myApp = new App();