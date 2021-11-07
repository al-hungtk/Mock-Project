<?php 
    class Admin {
        public static function getadmin()
        {
            $db = Database::getDB();
            try {
                $query = "SELECT * FROM admin ORDER BY id DESC limit 8";
                $statement = $db->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll();
                return $result;
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                echo "Database error: $error_message";
                // include ('View/error/error_404.php');

                exit();
            }
        }

        public static function checklogin($email, $password){
            $db = Database::getDB();
            try {
                $query = "SELECT * FROM admin where email=:email and password=:password";
                $statement = $db->prepare($query);
                $statement->bindValue(':email', $email);
                $statement->bindValue(':password',$password);
                $statement->execute();
                $result = $statement->fetch();
                return $result;
            } catch ( PDOException $e) {
                $error_message = $e->getMessage();
                echo "Database error: " . $error_message;
                exit();
            }
        }

     
        public static function addadmin($name, $email, $password, $picture)
        {
            $db = Database::getDB();
            try {
                $query = "INSERT INTO admin (name, email, password, picture) 
                            VALUE(:name, :email, :password, :picture)";
                $statement = $db->prepare($query);
                $password = password_hash($password, PASSWORD_BCRYPT);
                $statement->bindValue(':name', $name);
                $statement->bindValue(':email', $email);
                // $statement->bindValue(':password', $password);
                $statement->bindValue("password", $password);
                $statement->bindValue(':picture', $picture);
                $statement->execute();
                $statement->closeCursor();
            } catch ( PDOException $e) {
                $error_message = $e->getMessage();
                echo "Database error: " . $error_message;
                exit();
            }
        }

        public static function editadmin($id){
            $db= Database::getDB();
            try{
                if($_SESSION['auth']->id){
                    $query= "SELECT * FROM admin WHERE id = :id'";
                    $statement = $db->prepare($query);
                    $statement->bindValue(':id',$id);
                    $statement->execute();
                    $result = $statement->fetch();
                    return $result;
                }
            }catch( PDOException $e ){
                $error_message = $e->getMessage();
                echo "Error". $error_message;
                exit();
            }
        }

        public static function update($id, $name, $email, $password, $picture){
            $db =Database::getDB();
            try{
                $query = "UPDATE admin SET(id = :id, name = :name, email = :email, password = :password, picture = :picture)";
                $statement = $db->prepare($query);
                $statement -> bindValue(':id',$id);
                $statement -> bindValue(':name',$name);
                $statement -> bindValue(':email',$email);
                $statement -> bindValue(':password',$password);
                $statement -> bindValue(':picture',$picture);
                $statement->execute();
                $statement->closeCursor();
            }catch(PDOException $e){}
            $error_message = $e->getMessage();
            echo "ERROR update data".$error_message;
            exit();
        }

        // public static function paginate($page){
        //     $conn = mysqli_connect('localhost', 'root', '', 'mvc');
        //     $result = mysqli_query($conn, 'select count(id) as total from news');
        //     $row = mysqli_fetch_assoc($result);
        //     $total_records = $row['total'];

        //     $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        //     $limit = 10;
        //     $total_page = ceil($total_records / $limit);
        //     if ($current_page > $total_page){
        //         $current_page = $total_page;
        //     }
        //     else if ($current_page < 1){
        //         $current_page = 1;
        //     }
             
        //     // Tìm Start
        //     $start = ($current_page - 1) * $limit;
             
        //     // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
        //     // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
        //     $result = mysqli_query($conn, "SELECT * FROM admin LIMIT $start, $limit");

        //     while ($row = mysqli_fetch_assoc($result)){
        //         echo '<li>' . $row['title'] . '</li>';
        //     }
        // }

        // public static function change_password($id){
         
        //     if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

        //         include "Model/Database.php";

        //     if (isset($_POST['op']) && isset($_POST['np'])
        //         && isset($_POST['c_np'])) {

        //         function validate($data){
        //         $data = trim($data);
        //         $data = stripslashes($data);
        //         $data = htmlspecialchars($data);
        //         return $data;
        //         }

        //         $op = validate($_POST['op']);
        //         $np = validate($_POST['np']);
        //         $c_np = validate($_POST['c_np']);
                
        //         if(empty($op)){
        //         header("Location: Model/change-password.php?error=Old Password is required");
        //         exit();
        //         }else if(empty($np)){
        //         header("Location: Model/change-password.php?error=New Password is required");
        //         exit();
        //         }else if($np !== $c_np){
        //         header("Location: Model/change-password.php?error=The confirmation password  does not match");
        //         exit();
        //         }else {
        //             // hashing the password
        //             $op = md5($op);
        //             $np = md5($np);
        //             $id = $_SESSION['id'];

        //             $sql = "SELECT password
        //                     FROM users WHERE 
        //                     id='$id' AND password='$op'";
        //             $result = mysqli_query($conn, $sql);
        //             if(mysqli_num_rows($result) === 1){
                        
        //                 $sql_2 = "UPDATE users
        //                         SET password='$np'
        //                         WHERE id='$id'";
        //                 mysqli_query($conn, $sql_2);
        //                 header("Location: change-password.php?success=Your password has been changed successfully");
        //                 exit();

        //             }else {
        //                 header("Location: change-password.php?error=Incorrect password");
        //                 exit();
        //             }

        //         }

                
        //     }else{
        //         header("Location: change-password.php");
        //         exit();
        //     }

        //     }else{
        //         header("Location: index.php");
        //         exit();
        //     }
        //             }
        }
  
?>