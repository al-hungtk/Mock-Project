<?php 
    class Home  {
        public static function getcomment(){
            $db= Database::getDB();
            try{
                $query = "SELECT * FROM post ORDER BY comment DESC LIMIT 3";
                $statement = $db->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll();
                return $result;
            }catch(PDOException $e){
                $error_message = $e->getMessage();
                echo "Error: " . $error_message;
                exit();
            }   
        }
        // public static function last_news(){
        //     $db= Database::getDB();
        //     try{
        //         $query = "SELECT * FROM post ORDER BY created_at DESC LIMIT 8";
        //         $statement = $db->prepare($query);
        //         $statement->execute();
        //         $result = $statement->fetchAll();
        //         return $result;
        //     }catch(PDOException $e){
        //         $error_message = $e->getMessage();
        //         echo "Error: " . $error_message;
        //         exit();
        //     }   
        // }
    }
?>