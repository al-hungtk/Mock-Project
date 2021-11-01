<?php 
	class Database{
		private static $dsn = 'mysql:host=localhost;dbname=mvc';
		private static $username = 'root';
		private static $pass='';
		private static $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		private static $db;
		private function __construct(){			
		}		
		public static function getDB(){
			if(!isset(self::$db)){
				try {
					self::$db = new PDO(self::$dsn,
										self::$username,
										self::$pass,
										self::$options);
					// echo "connected to Database";
				} catch (PDOException $e) {
					$error_message = $e->getMessage();
					echo "Error Connecting to databasse: ".$error_message;			
				}
			}
			return self::$db;
		}
	}
 ?>