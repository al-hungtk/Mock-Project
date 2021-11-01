<?php
@session_start();
    include ('Model/Database.php');
    include ('Model/PostModel.php');
    include ('Model/CategoryModel.php');
    include ('Model/AdminModel.php');

    
$controller = filter_input(INPUT_GET, 'controller');
if (empty($controller)) {
    $controller = 'admincontroller';
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
