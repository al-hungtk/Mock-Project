<?php 
    class Post{

        public static function getpost_view(){
            $db = Database::getDB();
            try{
                $query = "SELECT * FROM post ORDER BY created_at DESC LIMIT 5";
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

        public static function add($name, $title, $author, $category_id, $maxdate, $information, $summary, $picture){
            $db= Database::getDB();
            try{
                $query = "INSERT INTO post(name, title, author, category_id, maxdate, information, summary, picture)
                VALUE(:name, :title, :author, :category_id, :maxdate, :information, :summary, :picture)";
                $statement = $db->prepare($query);
                $statement->bindValue(':name', $name);
                $statement->bindValue(':title', $title);
                $statement->bindValue(':author', $author);
                $statement->bindValue(':category_id', $category_id);
                $statement->bindValue(':maxdate', $maxdate);
                $statement->bindValue(':information', $information);
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
        public static function updatepost($id,$name, $title, $author, $category_id, $maxdate, $information, $summary, $picture){
            $db = Database::getDB();
            try {
                $query = "UPDATE post SET name = :name, title = :title, author = :author,
                category_id = :category_id, maxdate = :maxdate, information = :information, summary = :summary, 
                picture = :picture
                WHERE id = :id";
                $statement = $db->prepare($query);
                $statement -> bindValue(':id',$id);
                $statement -> bindValue(':name',$name);
                $statement ->bindValue(':title',$title);
                $statement -> bindValue(':author', $author);
                $statement->bindValue(':category_id', $category_id);
                $statement->bindValue(':maxdate', $maxdate);
                $statement->bindValue(':information', $information);
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
                $query = "DELETE FROM post
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