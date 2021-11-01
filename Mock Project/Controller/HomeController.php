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
                    $post = Post::getpost();
                    include('View/Home/home.php');
                    break;
                default:
                    break;
            }

         
        }
    }
    HomeController::home();
?>