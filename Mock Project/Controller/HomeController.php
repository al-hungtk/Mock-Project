<?php 
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
                    $categories = Category::getcate();
                    $post = Post::getpost_view();
                    $featured_news = Post::featured_news();
                    include('View/Home/home.php');
                    break;
                case 'detail-post':
                    $id = filter_input(INPUT_GET, 'id');
                    $categories = Category::getcate();
                    $post = Post::detail($id);
                    // var_dump($post);
                    include('View/Home/detail_post.php');
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