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

        public static function getAdminById($id){
            $db= Database::getDB();
            try{
                $query= "SELECT * FROM admin WHERE id = :id";
                $statement = $db->prepare($query);
                $statement->bindValue(':id',$id);
                $statement->execute();
                $result = $statement->fetch();
                return $result;
            }catch( PDOException $e ){
                $error_message = $e->getMessage();
                echo "Error". $error_message;
                exit();
            }
        }
        /**
         * updatePassword
         *
         * @param  mixed $id
         * @param  mixed $newPassword
         * @return void
         */
        public static function updatePassword($id, $newPassword ){
            $db =Database::getDB();
            try{
                $query = "UPDATE admin SET(id = :id, password = :newPassword)";
                $statement = $db->prepare($query);
                $statement -> bindValue(':id',$id);
                $newPassword = password_hash($newPassword, PASSWORD_BCRYPT);
                $statement -> bindValue(':newPassword',$newPassword);
                // $a =[$id, $newPassword];
                // var_dump($query);
                // exit();
                $statement->execute();
                $statement->closeCursor();
            }catch(PDOException $e){}
            $error_message = $e->getMessage();
            echo "ERROR Update Data".$error_message;
            exit();
        }
     
    }

?>