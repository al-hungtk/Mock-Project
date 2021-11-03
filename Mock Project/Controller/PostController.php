<?php 
    class PostController{
        public static function index(){
            $action = filter_input(INPUT_POST, 'action');
                if(empty($action)){
                    $action = filter_input(INPUT_GET, 'action');
                    if(empty($action)){
                        $action = 'index';
                        
                    }
                } 
                // include ('View/error/error_404.php');
                
                switch($action){
                    case 'index':
                        if(isset($_SESSION['auth'])){
                            $post = Post::getpost();
                            include ('View/Admin/Post/index.php');
                            break;  
                        }
                        include ('View/Admin/login.php');
                        break;
                    case 'create':
                        $categories = Category::getcate();
                        $post = Post::getpost();
                        include ('View/Admin/Post/create.php');
                        break;
                    case 'store':
                        $name = filter_input(INPUT_POST, 'name');
                        $title = filter_input(INPUT_POST, 'title');
                        $author = filter_input(INPUT_POST, 'author');
                        $category_id = filter_input(INPUT_POST, 'category_id');
                        $maxdate = filter_input(INPUT_POST, 'maxdate');
                        $information = filter_input(INPUT_POST, 'information');
                        $summary = filter_input(INPUT_POST, 'summary');
                        //Xử lý lưu ảnh lên server
                        $image_dir_path = getcwd().'/public/images/post';
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
                            $picture="";
                            echo "image null";
                        }
                        Post::add( $name, $title, $author, $category_id, $maxdate, $information, $summary, $picture);
                        $post = Post::getpost();
                        header('Location: .?controller=postcontroller&action=index');
                        break;
                            break;
                    case 'edit':
                        $id = filter_input(INPUT_GET, 'id');
                        $categories = Category::getcate();
                        $post =  Post::editpost($id);
                        include ('View/Admin/Post/edit.php');
                        break;
                    case  'update':
                        $id = filter_input(INPUT_POST, 'id');
                        $name = filter_input(INPUT_POST, 'name');
                        $category_id = filter_input(INPUT_POST, 'category_id');
                        $author = filter_input(INPUT_POST, 'author');
                        $title = filter_input(INPUT_POST, 'title');
                        $maxdate = filter_input(INPUT_POST, 'maxdate');
                        $information = filter_input(INPUT_POST, 'information');
                        $summary = filter_input(INPUT_POST, 'summary');
                      
                        //xử lý hình ảnh 
                        $image_dir_path = getcwd().'/public/images/post';
                        if(isset($_FILES['picture'])){
                            $filename = $_FILES['picture']['name'];
                            if(!empty($filename)){
                                $source = $_FILES['picture']['tmp_name'];
                                $target = $image_dir_path.'/'.$filename;
                                $success=move_uploaded_file($source, $target);	
                                $picture = $filename;
                            }
                        }
                        else{				
                            $picture="";
                        }
                        // $a = [$id, $name, $title, $author, $category_id, $maxdate, $information, $summary, $picture];
                        // var_dump($a);
                        if (empty($picture)) {
                            $picture = filter_input(INPUT_POST, 'old_picture');
                        }
                        Post::updatepost($id, $name, $title, $author, $category_id, $maxdate, $information, $summary, $picture);
                        $post = Post::getpost();
                        header('Location: .?controller=postcontroller&action=index');
                        break;
                    case 'delete':
                        $id = filter_input(INPUT_GET, 'id');
                        Post::delete($id);
                        $post = Post::getpost();
                        include ('View/Admin/Post/index.php');
                        break;
                    default:
                        break;
                }
        }
    }
    PostController::index();
?>