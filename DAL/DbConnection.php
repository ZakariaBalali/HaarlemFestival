<?php
define ('DB_HOST', 'localhost');
define ('DB_USER', 'root');
define ('DB_PASSWORD', '');
define ('DB_DB', 'HaarlemFestival_db');

class DbConnection {
    private $connection;
    private static $instance; //The single instance

    /*
    Get an instance of the Database
    @return Instance
    */
    public static function getInstance() {
        if(!self::$instance) {
            self::$instance = new DbConnection();
        }
        return self::$instance;
    }

    // Constructor
    private function __construct() {
        $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD)
        or die ("<br/>Could not connect to MySQL server");

        mysqli_select_db($this->connection, DB_DB)
        or die ("<br/>Could not select the indicated database");
    }

    //Get mySqli connection
    public function getConnection() {
        return $this->connection;
    }

}
?>
