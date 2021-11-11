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

                        $image_dir_path = getcwd().'/public/images/post/image_detail';
                        if(isset($_FILES['image_detail'])){
                            $filename = $_FILES['image_detail']['name'];
                            if(!empty($filename)){
                                $source	 = 	$_FILES['image_detail']['tmp_name'];
                                $target	 = 	$image_dir_path.'/'.$filename;
                                $success = 	move_uploaded_file($source, $target);	
                                $image_detail = $filename;
                            }
                        }
                        else{				
                            $image_detail="";
                            echo "image null";
                        }
                        Post::add( $image_detail, $title, $author, $category_id, $maxdate, $information, $summary, $picture);
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
                        $category_id = filter_input(INPUT_POST, 'category_id');
                        $author = filter_input(INPUT_POST, 'author');
                        $title = filter_input(INPUT_POST, 'title');
                        $maxdate = filter_input(INPUT_POST, 'maxdate');
                        $information = filter_input(INPUT_POST, 'information');
                        $summary = filter_input(INPUT_POST, 'summary');

                        $image_dir_path = getcwd().'/public/images/post';
                        if(empty($_FILES['picture'])){
                            $picture = filter_input(INPUT_POST, 'old_picture');
                        } else {
                            $filename = $_FILES['picture']['name'];
                            $source = $_FILES['picture']['tmp_name'];
                            $target = $image_dir_path.'/'.$filename;
                            $success=move_uploaded_file($source, $target);	
                            $picture = $filename;
                        }

                        $image_dir_path = getcwd().'/public/images/post/image_detail';
                        if(empty($_FILES['image_detail'])){
                            $image_detail = filter_input(INPUT_POST, 'image_detail');
                        } else {
                            $filename = $_FILES['image_detail']['name'];
                            $source = $_FILES['image_detail']['tmp_name'];
                            $target = $image_dir_path.'/'.$filename;
                            $success=move_uploaded_file($source, $target);	
                            $image_detail = $filename;
                        }
                        Post::updatepost($id, $title, $author, $category_id, $maxdate, $information, $summary, $picture,$image_detail);
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
                        include ('View/error/error_404.php');
                        exit();
                        break;
                }
        }
    }
    PostController::index();
?>