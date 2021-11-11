<?php 

    class CategoryController{
        public static function index() {
            $action = filter_input(INPUT_POST, 'action');
            if(empty($action)){
                $action =filter_input(INPUT_GET,'action');
                if(empty($action)){
                    $action = 'list_category';
                }
            }
            switch($action){
                case 'list_category':
                    if(isset($_SESSION['auth'])){
                        $categories = Category::getcate();
                        include('View/Admin/Categories/index.php');
                        break;
                    }
                    include ('View/Admin/login.php');
                break;
                case 'add':
                    $categories = Category::getcate();
                    include('View/Admin/Categories/add.php');
                break;
                case 'store':
                    $categoryname = filter_input(INPUT_POST,'category_Name');
                    $paren_id = filter_input(INPUT_POST,'paren_id');
                    Category::add( $categoryname, $paren_id);
                    $categories = Category::getcate();
                    header('Location: .?controller=categorycontroller&action=list_category');
                    exit();
                    break;
                case 'edit':
                    $id = filter_input(INPUT_GET,'id');
                    $category = Category::editCategories($id);  
                    $categories = Category::getcate();  
                    include('View/Admin/Categories/edit.php');
                break;
                case 'save':
                    $id = filter_input(INPUT_POST,'id');
                    $categoryname = filter_input(INPUT_POST,'categoryname');
                    $paren_id = filter_input(INPUT_POST,'paren_id');
                    Category::updatecategory($id, $categoryname, $paren_id);
                    $categories = Category::getcate();
                    header('Location: .?controller=categorycontroller&action=list_category');
                    break;
                case 'delete':
                    $id = filter_input(INPUT_GET,'id');
                    Category::deletecategory($id);
                    $categories = Category::getcate();
                    header('Location: .?controller=categorycontroller&action=list_category');
                    break;
                default:
                  //code
                  include ('View/error/error_404.php');
                  exit();
                break;
            }
        }
    }
    CategoryController::index();
?>