<?php 
    class Post{
        public static function getpost(){
            $db = Database::getDB();
            try{
                $query = "SELECT * FROM post";
                $statement = $db->prepare($query);
                $statement -> execute();
                $result = $statement->fetchAll();
                return $result;
            }catch ( PDOException $e) {
                $error_message = $e->getMessage();
                echo "Lỗi không tìm thấy data" . $error_message;
                exit();
            }
        }

        public static function add($name, $publisher, $author, $category_id, $maxdate, $num, $summary, $picture){
            $db= Database::getDB();
            try{
                $query = "INSERT INTO post(name, publisher, author, category_id, maxdate, num, summary, picture)
                VALUE(:name, :publisher, :author, :category_id, :maxdate, :num, :summary, :picture)";
                $statement = $db->prepare($query);
                $statement->bindValue(':name', $name);
                $statement->bindValue(':publisher', $publisher);
                $statement->bindValue(':author', $author);
                $statement->bindValue(':category_id', $category_id);
                $statement->bindValue(':maxdate', $maxdate);
                $statement->bindValue(':num', $num);
                $statement->bindValue(':summary', $summary);
                $statement->bindValue(':picture', $picture);
                $statement->execute();
                $statement->closeCursor();
            }catch (PDOException $e){
                $error_message = $e->getMessage();
				echo "Database error: $error_message";
				exit();            
            }
        }
        public static function editpost($id){
            $db = Database::getDB();
            try{
                $query = " SELECT * FROM post WHERE id = :id";
                $statement = $db->prepare($query);
                $statement->bindValue(':id', $id);
                $statement->execute();
                $result = $statement->fetch();
                return $result;
            }catch ( PDOException $e) {
                $error_message = $e->getMessage();
                echo "Lỗi không tìm thấy id ".$error_message;
            }
        }
        public static function updatepost($id,$name, $publisher, $author, $category_id, $maxdate, $num, $summary, $picture){
            $db = Database::getDB();
            try {
                $query = "UPDATE post SET name = :name, publisher = :publisher, author = :author,
                category_id = :category_id, maxdate = :maxdate, num = :num, summary = :summary, 
                picture = :picture
                WHERE id = :id";
                $statement = $db->prepare($query);
                $statement -> bindValue(':id',$id);
                $statement -> bindValue(':name',$name);
                $statement ->bindValue(':publisher',$publisher);
                $statement -> bindValue(':author', $author);
                $statement->bindValue(':category_id', $category_id);
                $statement->bindValue(':maxdate', $maxdate);
                $statement->bindValue(':num', $num);
                $statement->bindValue(':summary', $summary);
                $statement->bindValue(':picture', $picture);
                $statement -> execute();
                $statement -> closeCursor();
            } catch ( PDOException $e ) {
                $error_message = $e->getMessage();
                echo "Lỗi không thể câp nhâp dữ liệu". $error_message;
            }
        }
        public static function delete($id){
            $db = Database::getDB();
            try{
                $query = "DELETE FROM  post
                WHERE id = :id ";
                $statement = $db->prepare($query);
                $statement->bindValue(':id',$id);
                $statement->execute();
                $statement->closeCursor();                
            }catch ( PDOException $e) {
                $error_message = $e->getMessage();
                echo "Error deleting post". $error_message;
                exit();
            }
        }
    }
?>