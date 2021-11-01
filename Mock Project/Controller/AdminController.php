<?php 

    class AdminController {
        public static function index() {
            $action = filter_input(INPUT_POST,'action');
            if(empty($action)){
                $action =filter_input(INPUT_GET,'action');
                if(empty($action)){
                    $action = 'index';
                }
            }
            switch($action){
                case 'index':
                    if(isset($_SESSION['auth'])){
                        $admin = Admin::getadmin();
                        $categories = Category::getcate();
                        $post = Post::getpost();
                        include ('View/Admin/all.php');
                        break;
                    }
                    include ('View/Admin/login.php');
                    break;
                case 'login':
                    include ('View/Admin/login.php');
                    break;
                case 'submit':
                    $email = filter_input(INPUT_POST, 'email');
                    $password = filter_input(INPUT_POST, 'password');
                    $logIn = Admin::checklogin($email, $password);
                    if (!empty($logIn)) {
                        $_SESSION['auth'] = [
                            'email' => $email,
                            'password' => $password
                        ];
                        $admin = Admin::getadmin();
                        include ('View/Admin/all.php');
                    break;
                    }
                    else {
                        echo('Tai khoan hoac mat khau bi sai');
                    }
                    include ('View/Admin/login.php');
                    break;
                case 'logout':
                    session_destroy();
                    include('View/Admin/Login.php');
		            exit;
                    break;
                default:
                    break;
            }
         
        }
    }
AdminController::index();

?>