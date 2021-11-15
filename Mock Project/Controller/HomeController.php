<?php 
include('Model/HomeModel.php');
    class HomeController {
        public static function home(){
            $action = filter_input(INPUT_POST, 'action');
            if(empty($action)){
                $action = filter_input(INPUT_GET, 'action');
                if(empty($action)){
                    $action = 'home';
                }
            }
            switch($action){
                case 'home':
                    if($_SESSION['auth']['id']){
                        
                    }
                    $children = [];
                    $categories = Category::getcate();
                    foreach($categories as $category) {
                        $categoryChildren = Category::getChildren($category['id']);
                        $children[$category['id']] = $categoryChildren;
                    }
                    $post = Post::getpost_view();
                    $featured_news = Post::featured_news();
                    $comment = Home::getcomment();
                    $technology = Post::technology();
                    $tech = Post::tech();
                    include('View/Home/home.php');
                    break;
                case 'detail-post':
                    $id = filter_input(INPUT_GET, 'id');
                    $categories = Category::getcate();
                    $post = Post::detail($id);
                    // var_dump($post);
                    include('View/Home/detail_post.php');
                    break;
                case 'list_post':
                    $categoryId = filter_input(INPUT_GET, 'category_id');
                    $children = [];
                    $categories = Category::getcate();
                    $post = Post::getPostByCategoryId($categoryId);
                    foreach($categories as $category) {
                        $categoryChildren = Category::getChildren($category['id']);
                        $children[$category['id']] = $categoryChildren;
                    }
                    include ('View/Home/list_post.php');
                    break;
                case 'all-post':
                    $categoryId = filter_input(INPUT_GET, 'category_id');
                    $children = [];
                    $categories = Category::getcate();
                    $post = Post::getpost();
                    foreach($categories as $category) {
                        $categoryChildren = Category::getChildren($category['id']);
                        $children[$category['id']] = $categoryChildren;
                    }
                    include ('View/Home/all_post.php');
                    break;
                default:
                    include ('View/error/error_404.php');
                    exit();
                    break;
            }
        }
    }
    HomeController::home();
?>