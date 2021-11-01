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
                    $categories = Category::getcate();
                    include('View/Admin/Categories/index.php');
                break;
                case 'add':
                    include('View/Admin/Categories/add.php');
                break;
                case 'store':
                    $categoryname = filter_input(INPUT_POST,'category_Name');
                    $moreinfo = filter_input(INPUT_POST,'more_Info');
                    Category::add( $categoryname, $moreinfo);
                    $categories = Category::getcate();
                    include('View/Admin/Categories/index.php');
                    break;
                case 'edit':
                    $id = filter_input(INPUT_GET,'id');
                    $categories = Category::editCategories($id);    
                    include('View/Admin/Categories/edit.php');
                break;
                case 'save':
                    $id = filter_input(INPUT_POST,'id');
                    $categoryname = filter_input(INPUT_POST,'categoryname');
                    $moreinfo = filter_input(INPUT_POST,'moreinfo');
                    Category::updatecategory($id, $categoryname, $moreinfo);
                    $categories = Category::getcate();
                    include('View/Admin/Categories/index.php');
                    break;
                case 'delete':
                    $id = filter_input(INPUT_GET,'id');
                    Category::deletecategory($id);
                    $categories = Category::getcate();
                    include('View/Admin/Categories/index.php');
                    break;
                default:
                  //code
                break;
            }
        }
    }
    CategoryController::index();
?>