<?php 
    class Category {
        public static function getcate() {
            $db = Database::getDB();
            try{
                $query = "SELECT * FROM categories";
                $statement = $db->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll();
                return $result;
            }catch ( PDOException $e) {
                $error_message = $e->getMessage();
                echo "Database error: $error_message";
                exit();
            }
        }

        public static function add($categoryname, $moreinfo){
            $db = Database::getDB();
            try{
                $query = "INSERT INTO categories(categoryname,moreinfo)
    
                        VALUES (:category_Name, :more_Info)";
                $statement = $db ->prepare($query);
                $statement -> bindValue(':category_Name',$categoryname);
                $statement -> bindValue(':more_Info',$moreinfo);
                $statement -> execute();
                $statement -> closeCursor();
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                echo "Data error  ";
                exit();
            }
        }
    
        public static function editCategories($id){
            $db = Database::getDB();
            try{
                    $query = "SELECT *  /*categoryname, moreinfo*/
                    FROM categories
                    WHERE id = :id ";
                    $statement = $db->prepare($query);
                    $statement -> bindValue(':id',$id);
                    $statement->execute();
                    $result = $statement->fetch();
                    return $result;
                } catch (PDOException $e) {
                    $error_message = $e->getMessage();
                    echo "Data error: $error_message" ;
                    exit();
                }
        }
        public static function updatecategory($id,$categoryname,$moreinfo){
            $db = Database::getDB();
            try{
                $query = "UPDATE categories
                    SET categoryname = :categoryname , moreinfo = :moreinfo
                    WHERE id = :id";
                $statement = $db ->prepare($query);
                $statement -> bindValue(':id', $id);
                $statement -> bindValue(':categoryname',$categoryname);
                $statement -> bindValue(':moreinfo',$moreinfo);
                $statement -> execute();
                $statement -> closeCursor();
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                echo "Data error update database: " . $error_message;
                exit();
            }
        }
    
    
        public static function deletecategory($id){
            $db = Database::getDB();
            try{
                $query = " DELETE FROM  categories
                        WHERE id = :id ";
                $statement = $db ->prepare($query);
                $statement -> bindValue(':id',$id);
                $statement -> execute();
                $statement -> closeCursor();
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                echo "Data error ";
                exit();
            }
        }
        
    }
?>