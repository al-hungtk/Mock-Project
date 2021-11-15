<?php
@session_start();
include('./Route/route.php');
    
$controller = filter_input(INPUT_GET, 'controller');
if (empty($controller)) {
    $controller = 'home';
}

switch ($controller) {
    case 'admin':
        include('Controller/AdminController.php');
        break;
    case 'home':
        include('Controller/HomeController.php');
        break;
    case 'post':
        include('Controller/PostController.php');
        break;
    case 'category':
        include('Controller/CategoryController.php');
        break;
    default:
        include ('View/error/error_404.php');
        exit();
        break;
}
