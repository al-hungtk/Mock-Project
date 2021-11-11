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

        public static function add($categoryname, $paren_id = 0){
            $db = Database::getDB();
            try{
                $query = "INSERT INTO categories(categoryname,paren_id)
    
                        VALUES (:category_Name, :paren_id)";
                $statement = $db ->prepare($query);
                $statement -> bindValue(':category_Name',$categoryname);
                $statement -> bindValue(':paren_id',$paren_id);
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
                    $query = "SELECT *  
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

        public static function getChildren($paren_id){
            $db = Database::getDB();
            try{
                    $query = "SELECT *  
                    FROM categories
                    WHERE paren_id = " . $paren_id;
                    $statement = $db->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    return $result;
                } catch (PDOException $e) {
                    $error_message = $e->getMessage();
                    echo "Data error: $error_message" ;
                    exit();
                }
        }

        public static function updatecategory($id,$categoryname,$paren_id){
            $db = Database::getDB();
            try{
                $query = "UPDATE categories
                    SET categoryname = :categoryname , paren_id = :paren_id
                    WHERE id = :id";
                $statement = $db ->prepare($query);
                $statement -> bindValue(':id', $id);
                $statement -> bindValue(':categoryname',$categoryname);
                $statement -> bindValue(':paren_id',$paren_id);
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