<?php 
    class AdminController {
        public static function index() {
            $action = filter_input(INPUT_POST,'action');
            if(empty($action)){
                $action = filter_input(INPUT_GET,'action');
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
                case 'list_admin':
                    if(isset($_SESSION['auth'])){
                        $admin = Admin::getadmin();
                        include ('View/Admin/list_user_admin.php');
                    }
                    break;
                case 'login':
                    if(isset($_SESSION['auth'])){
                        $admin = Admin::getadmin();
                        $categories = Category::getcate();
                        $post = Post::getpost();
                        include ('View/Admin/all.php');
                    }else{
                        include ('View/Admin/login.php');
                    }
                    break;
                case 'submit':
                    $email = filter_input(INPUT_POST,'email');
                    $password = filter_input(INPUT_POST , 'password');
                    $logIn = Admin::checklogin($email, $password);
                    if (!empty($logIn)) {
                        $_SESSION['auth'] = [
                            'id' => $logIn['id'],
                            'email' => $email,
                            'password' => $password
                        ];
                        $admin = Admin::getadmin();
                        include ('View/Admin/all.php');
                        break;
                    }else{
                        echo '<script language="javascript">';
                        echo 'alert("ERROR EMAIL OR PASSWORD")';
                        echo '</script>';      
                    }
                    include ('View/Admin/login.php');
                    break;
                case 'register':
                    include ('View/Admin/register.php');
                    break;
                case 'add':
                    $name = filter_input(INPUT_POST, 'name');
                    $email = filter_input(INPUT_POST,'email');
                    $password = filter_input(INPUT_POST,'password');

                    //Xử lý lưu ảnh lên server
                    $image_dir_path = getcwd().'/public/images/admin';
                    if(isset($_FILES['picture'])){
                        $filename = $_FILES['picture']['name'];
                        if(!empty($filename)){
                            $source	 = 	$_FILES['picture']['tmp_name'];
                            $target	 = 	$image_dir_path.'/'.$filename;
                            $success = 	move_uploaded_file($source, $target);	
                            $picture = $filename;
                        }
                    }
                    else{				
                        echo '<script language="javascript">';
                        echo 'alert("ERROR Image Null")';
                        echo '</script>';    
                    }
                    Admin::addadmin($name, $email, $password, $picture);
                    $admin = Admin::getadmin();
                    header('Location: .?controller=admincontroller&action=login');
                    break;
                case 'logout':
                    session_destroy();
                    include('View/Admin/Login.php');
		            exit;
                    break;
                case 'change-password':
                    if($_SESSION['auth']['id']){
                        $id = filter_input(INPUT_GET, 'id');
                        $admin= Admin::getAdminById($id);
                        include('View/Admin/change_password.php');
                    }
                    break;
                case 'post-change-password':
                    $id = filter_input(INPUT_GET, 'id');
                    if(!empty($id)){
                        $id = filter_input(INPUT_POST, 'id');
                        $currentPassword = filter_input(INPUT_POST, 'current_password');
                        $new_password = filter_input(INPUT_POST, 'new_password');
                        $cfPassword = filter_input(INPUT_POST, 'cf_password');
                        $admin = Admin::getAdminById($id);
                        // $a = [$currentPassword,$newPassword, $cfPassword];
                        // var_dump($a);
                        // exit();
                        Admin::updatePassword($id, $new_password);
                        if ($admin['password'] != $currentPassword) {
                            return false;
                            return 'sai';
                            exit();
                        }
                        header('Location: .?controller=admincontroller&action=index');
                    }
		            exit;
                    break;
                default:
                    include ('View/error/error_404.php');
                    exit();
                    break;
            }
        }
    }
    AdminController::index();

?>