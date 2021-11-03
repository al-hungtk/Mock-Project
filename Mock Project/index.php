<?php
@session_start();
include('Route/route.php');
    
$controller = filter_input(INPUT_GET, 'controller');
if (empty($controller)) {
    $controller = 'homecontroller';
}

switch ($controller) {
    case 'admincontroller':
        include('Controller/AdminController.php');
        break;
    case 'homecontroller':
        include('Controller/HomeController.php');
        break;
    case 'postcontroller':
        include('Controller/PostController.php');
        break;
    case 'categorycontroller':
        include('Controller/CategoryController.php');
        break;
    default:
        break;
}
