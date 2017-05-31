<?php
/*
 *  sets up the logos database connection
 */
class Database_XML {
    
    private static $db;
    
    private function __construct() {}
    
    public static function getDB() {
        if(!isset(self::$db)) {
            try {
                
                if(!simplexml_load_file('logoBundle/logoEntity/logos.xml')) {
                    throw new Exception();
                } else {
                    self::$db = simplexml_load_file('logoBundle/logoEntity/logos.xml');
                }
                
            } catch (Exception $e) {
                $error_message = $e->getMessage();
                include('logoBundle/logoViews/database_error.php');
                exit();
            }
        }
        return self::$db;
    }
}
?>
