<?php
/*
 *  sets up the logos database connection
 */
class Database {
    private static $dsn = 'mysql:host=localhost;dbname=logos_db';
    private static $username = 'logos_user';
    private static $password = 'pa55word';
    private static $db;
    
    private function __construct() {}
    
    public static function getDB() {
        if(!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn, 
                                    self::$username, 
                                    self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('../logoBundle/logoViews/database_error.php');
                exit();
            }
        }
        return self::$db;
    }
}
?>
