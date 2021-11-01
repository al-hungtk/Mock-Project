<?php 
    class Admin {
        public static function getadmin()
        {
            $db = Database::getDB();
            try {
                $query = "SELECT * FROM admin";
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

        public static function register() {
            $db= Database::getDB();
            $PASSWORD=A;
            try{
            }catch (PDOException $e){

            }
        }
        public static function add($name, $email, $password)
        {
            $db = Database::getDB();
            try {
                $query = "INSERT INTO admin (name, email, password) 
                            VALUES (:user_name, :email, :password)";
    
                $statement = $db->prepare($query);
                $statement->bindValue(':name', $name);
                $statement->bindValue(':email', $email);
                $statement->bindValue(':password', $password);
                $statement->execute();
                $statement->closeCursor();
            } catch ( PDOException $e) {
                $error_message = $e->getMessage();
                echo "Database error: " . $error_message;
                exit();
            }
        }
    

    }
?>